<?PHP
include "../core/Clients.php";
session_start ();



?>


<html>
<head>
    <meta charset="utf-8">
    <title>Change your profile picture</title>
    <link href="./css/style_img.css" rel="stylesheet">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script>
        $(document).on('change', '#image_upload_file', function () {
            var progressBar = $('.progressBar'), bar = $('.progressBar .bar'), percent = $('.progressBar .percent');

            $('#image_upload_form').ajaxForm({
                beforeSend: function() {
                    progressBar.fadeIn();
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                success: function(html, statusText, xhr, $form) {
                    obj = $.parseJSON(html);
                    if(obj.status){
                        var percentVal = '100%';
                        bar.width(percentVal)
                        percent.html(percentVal);
                        $("#imgArea>img").prop('src',obj.image_medium);
                    }else{
                        alert(obj.error);
                    }
                },
                complete: function(xhr) {
                    progressBar.fadeOut();
                }
            }).submit();

        });
    </script>
</head>

<body onunload="window.opener.location.reload();">



<br>


<div id="imgContainer">
    <form enctype="multipart/form-data" action="image_demo.php" method="post" name="image_upload_form" id="image_upload_form">

        <div id="imgArea"> <img src="uploades/medium/profil.png">

            <div class="progressBar">
                <div class="bar"></div>
                <div class="percent">0%</div>
            </div>
            <div id="imgChange"><span>Change Photo</span>
                <input type="file" accept="image/*" name="image_upload_file" id="image_upload_file">
            </div>
        </div>

    </form>
</div>
</body>
</html>
