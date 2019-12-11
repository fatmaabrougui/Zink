<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600%7CNunito:400,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/icon-fonts.css">
<link rel="stylesheet" type="text/css" href="css/plugins.css">
<link rel="stylesheet" type="text/css" href="style.css">
<header id="header">
    <!-- <div class="header-area container">
        <div class="row"> -->
           
            
            <div class="col-xs-12 col-sm-6 hidden-xs">
                <div class="social-list">
                   
                    <ul class="list-unstyled account-cart">
                        <?php
                        if(!isset($_SESSION['l']))

                        {

                        ?><br><br><br><br>
                        <li><span class="glyphicon glyphicon-bookmark" href="signup.php" style="color:white;"></span><a href="signup.php"><p style="color:white;">s'inscrire</p></a></li>
                        <li><span class="glyphicon glyphicon-log-in" href="login.php" style="color:white;"></span><a href="Login.php"><p style="color:white;">se connecter</p></a></li>
                        <?php

                            }

                        else {?>
                        <li><a href="account.php"><i class="icon-user"href="account.php"style="color:white;"></i><span class="hidden-xs"><p style="color:white;">Account</p></span></a></li>
                        <li>   <span class="glyphicon glyphicon-log-out" href="logout.php"style="color:white;"></span><a href="Logout.php"><p style="color:white;">se déconnecter</a></li>
                        <?php } ?>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
  
</header>