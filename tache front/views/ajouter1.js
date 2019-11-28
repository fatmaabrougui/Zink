
	function valider()
	{
		var valid = true;
		
		
		if ( form.nom.value.length < 3 ) 
		{
			valid = false;
			alert('le nom doit contenir au moins 3 caractères');
 		}
		else if ( form.prenom.value.length < 3 ) 
		{
			valid = false;
			alert('le prenom doit contenir au moins 3 caractères');
 		}
		else if ( form.mdp.value.length < 6 ) 
		{
			valid = false;
			alert('le mot de passe doit contenir au moins 6 caractères');
 		}
		else if(form.mdp.value != form.map.value)
		{
			valid = false;
			alert("Les deux mots de passe que vous venez de saisir sont différentes ! ");
		}
 		else if (form.tel.value.length<8) 
 		{
 			valid = false;
					alert('le numero de telephone doit contenir 8 chiffres');
 		}
		if(valid){return true} 
			else 
				 {return false} ;
	}
	