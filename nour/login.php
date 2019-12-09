<?php
session_start();
include_once "../../core/adminC.php";
include_once "../../entities/Admin.php";
$error='';
if (isset($_POST['cnx'])){

    if (isset($_POST['username']) && isset($_POST['password'])) {  // verif si les champs email et password sont rempli
        $username= htmlentities($_POST['username']); //htmlentities — Convertit tous les caractères éligibles en entités HTML
        $Pwd = hash('sha1', htmlentities($_POST['password']));   //La fonction password_hash() crée un nouveau hachage en utilisant un algorithme de hachage fort et irréversible.



        $user = new Admin(null,$username, $Pwd);
        $userC=new adminC();
        $exist = $userC->exist($user);
//        var_dump($exist); exit();
        if (!$exist) {
            // si email ou mot de passe erroné on revient vers la page d'acceuil

          $error=' 

            <div class="alert alert-danger" role="alert">
                Login ou mot de passe érroné!

            </div>';
        }  else {


            $_SESSION['Id'] = $exist[0]['id_admin'];
            $_SESSION['username'] = $exist[0]['user_name_admin'];
            $_SESSION['role'] = $exist[0]['admin'];


            if (isset($_POST['remember'])) {
                $expire = (int)time() + 60 * 60 * 24 * 365;
                $userSession = array($_SESSION['Id'], $_SESSION['username'], $_SESSION['role']);
                setcookie('Remember', serialize($userSession), $expire);
            }

        }
        header('Location: afficherProduit.php');
    } else{  $error=' 
        <div class="alert alert-danger" role="alert">
            Login ou mot de passe vide!

            </div>';

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Majestic Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="auth-form-transparent text-left p-3">
                        <div class="brand-logo">
                            <img src="images/logo.svg" alt="logo">
                        </div>
                        <h4>Welcome back!</h4>
                        <h6 class="font-weight-light">Happy to see you again!</h6>
                        <?php
                        echo $error;
                        ?>
                        <form class="pt-3" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail">Nom d'utilisateur</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                                    </div>
                                    <input type="text" name="username" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword">Mot de passe</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                                    </div>
                                    <input type="password" name="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" name="remember" class="form-check-input">
                                        Keep me signed in
                                    </label>
                                </div>
                                <a href="#" class="auth-link text-black">Forgot password?</a>
                            </div>
                            <div class="my-3">
                                <input type="submit" name="cnx" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Connexion">
                            </div>

                            <div class="text-center mt-4 font-weight-light">
                                Don't have an account? <a href="register-2.html" class="text-primary">Create</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 login-half-bg d-flex flex-row">
                    <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<!-- endinject -->
</body>

</html>
