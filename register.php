<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>DigiBudget - Inscription</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.php">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                        <?php
                        require('config.php');
                        if (isset($_REQUEST['username'], $_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['telephone'], $_REQUEST['email'], $_REQUEST['password'])){
                        // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
                        $username = stripslashes($_POST['username']);
                        $username = mysqli_real_escape_string($conn, $username); 

                        $nom = stripslashes($_REQUEST['nom']);
                        $nom = mysqli_real_escape_string($conn, $nom); 

                        $prenom = stripslashes($_REQUEST['prenom']);
                        $prenom = mysqli_real_escape_string($conn, $prenom); 
                        
                        $date_inscription = date("d/m/Y");

                        $telephone = stripslashes($_REQUEST['telephone']);
                        $telephone = mysqli_real_escape_string($conn, $telephone); 
                        // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
                        $email = stripslashes($_REQUEST['email']);
                        $email = mysqli_real_escape_string($conn, $email);
                        // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
                        $password = stripslashes($_REQUEST['password']);
                        $password = mysqli_real_escape_string($conn, $password);
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        $code = getName($n);
                        //requéte SQL + mot de passe crypté
                        $query = "INSERT INTO `user`(`code`, `email`, `username`, `password`, `nom`, `prenom`, `date_inscription`, `telephone`, `solde`) VALUES ('$code', '$email','$username','$password','$nom','$prenom', '$date_inscription', '$telephone', '0')";
                        $query2 = "INSERT INTO `gestion`(`code`) VALUES ('$code')";
                        // Exécuter la requête sur la base de données
                            $res = mysqli_query($conn, $query);
                            $res2 = mysqli_query($conn, $query2);
                            if($res){
                            echo "<div class='sucess'>
                                    <h3>Vous êtes inscrit avec succès.</h3>
                                    <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
                            </div>";
                            }
                        }else{
                        ?>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" id="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input class="au-input au-input--full" type="text" name="nom" id="nom" placeholder="Nom">
                                </div>
                                <div class="form-group">
                                    <label>Prénom</label>
                                    <input class="au-input au-input--full" type="text" name="prenom" id="prenom" placeholder="Prénom">
                                </div>
                                <div class="form-group">
                                    <label>Téléphone</label>
                                    <input class="au-input au-input--full" type="text" name="telephone" id="telephone" placeholder="Téléphone">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree" required>Agree the terms and policy
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>