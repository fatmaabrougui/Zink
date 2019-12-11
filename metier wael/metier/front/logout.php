<?php session_start(); ?>
<?php


session_destroy();
echo "<script type='text/javascript'>;

                window.location.replace('login.php');

        </script>";


?>
