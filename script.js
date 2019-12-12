// On définit les différentes variables
var nativePicker = document.querySelector('.nativeDatePicker');
var fallbackPicker = document.querySelector('.fallbackDatePicker');
var fallbackLabel = document.querySelector('.fallbackLabel');

var yearSelect = document.querySelector('#year');
var monthSelect = document.querySelector('#month');
var daySelect = document.querySelector('#day');

// Initialement, on masque le sélecteur non-natif
fallbackPicker.style.display = 'none';
fallbackLabel.style.display = 'none';

// On teste si l'élément <input type="date">
// se transforme en <input type="text">
var test = document.createElement('input');
test.type = 'date';
// Si c'est le cas, cela signifie que l'élément 
// n'est pas pris en charge et
if(test.type === 'text') {
  // On masque le sélecteur natif et on affiche
  // le sélecteur avec les <select>
  nativePicker.style.display = 'none';
  fallbackPicker.style.display = 'block';
  fallbackLabel.style.display = 'block';

  // On affiche les jours et les années
  // de façon dynamique
  populateDays(monthSelect.value);
  populateYears();
}

function populateDays(month) {
  // On supprime les éléments <option> pour l'élément
  // <select> des jours afin de pouvoir ajouter les prochains
  while(daySelect.firstChild){
    daySelect.removeChild(daySelect.firstChild);
  }

  // On crée une variable afin de contenir le nombre
  // de jours à afficher
  var dayNum;

  // 31 ou 30 jours ?
  if(month === 'Janvier' || month === 'Mars' || month === 'Mai' || month === 'Juillet' || month === 'Août' || month === 'Octobre' || month === 'Décembre') {
    dayNum = 31;
  } else if(month === 'Avril' || month === 'Juin' || month === 'Septembre' || month === 'Novembre') {
    dayNum = 30;
  } else {
  // Si le mois est février, on calcule si l'année est bissextile
    var year = yearSelect.value;
    var leap = new Date(year, 1, 29).getMonth() == 1;
    dayNum = leap ? 29 : 28;
  }

  // on ajoute le bon nombre de jours dans autant
  // d'éléments <option> pour l'élément <select>
  // pour la journée
  for(i = 1; i <= dayNum; i++) {
    var option = document.createElement('option');
    option.textContent = i;
    daySelect.appendChild(option);
  }

  // Si le jour précédent a déjà été défini on utilise
  // la valeur de ce jour pour daySelect afin d'éviter de
  // réinitialiser le jour lorsqu'on change l'année
  if(previousDay) {
    daySelect.value = previousDay;

    // Si le jour précédent correspond au dernier jour d'un mois
    // et que le mois sélectionné possède moins de jours (par 
    // exemple en février)
    if(daySelect.value === "") {
      daySelect.value = previousDay - 1;
    }

    if(daySelect.value === "") {
      daySelect.value = previousDay - 2;
    }

    if(daySelect.value === "") {
      daySelect.value = previousDay - 3;
    }
  }
}

function populateYears() {
  // On obtient l'année courante
  var date = new Date();
  var year = date.getFullYear();

  // On affiche l'année courante et les 100 années
  // précédentes pour l'élément <select> destiné à
  // stocker l'année
  for(var i = 0; i <= 100; i++) {
    var option = document.createElement('option');
    option.textContent = year-i;
    yearSelect.appendChild(option);
  }
}

// Lorsque la valeur du mois ou de l'année est modifiée
// on relance populateDays()
yearSelect.onchange = function() {
  populateDays(monthSelect.value);
}

monthSelect.onchange = function() {
  populateDays(monthSelect.value);
}

// On conserve le jour sélectionné
var previousDay;

// On met à jour la journée utilisé précédemment
// (voir la fin de populateDays() pour voir où
// est utilisée cette valeur)
daySelect.onchange = function() {
  previousDay = daySelect.value;
}// define variables
var nativePicker = document.querySelector('.nativeTimePicker');
var fallbackPicker = document.querySelector('.fallbackTimePicker');
var fallbackLabel = document.querySelector('.fallbackLabel');

var hourSelect = document.querySelector('#hour');
var minuteSelect = document.querySelector('#minute');

// hide fallback initially
fallbackPicker.style.display = 'none';
fallbackLabel.style.display = 'none';

// test whether a new date input falls back to a text input or not
var test = document.createElement('input');

try {
  test.type = 'time';
} catch (e) {
  console.log(e.description);
}

// if it does, run the code inside the if() {} block
if(test.type === 'text') {
  // hide the native picker and show the fallback
  nativePicker.style.display = 'none';
  fallbackPicker.style.display = 'block';
  fallbackLabel.style.display = 'block';

  // populate the hours and minutes dynamically
  populateHours();
  populateMinutes();
}

function populateHours() {
  // populate the hours <select> with the 6 open hours of the day
  for(var i = 12; i <= 23; i++) {
    var option = document.createElement('option');
    option.textContent = i;
    hourSelect.appendChild(option);
  }
}

function populateMinutes() {
  // populate the minutes <select> with the 60 hours of each minute
  for(var i = 0; i <= 59; i++) {
    var option = document.createElement('option');
    option.textContent = (i < 10) ? ("0" + i) : i;
    minuteSelect.appendChild(option);
  }
}

// make it so that if the hour is 18, the minutes value is set to 00
// — you can't select times past 18:00
 function setMinutesToZero() {
   if(hourSelect.value === '23') {
     minuteSelect.value = '00';
   }
 }

 hourSelect.onchange = setMinutesToZero;
 minuteSelect.onchange = setMinutesToZero;


 //trie par date 
