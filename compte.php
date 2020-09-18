<?php
$title = "Compte";
require ('header.php');
?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Coordonnées :</h3>
                                        <div class="col-lg-6" style="    margin-top: 6%;padding: 6px;">
                                        <?php
                                        echo "<h4><br>Pseudo : </h4>";
                                        echo "<h5>".$data['username']."</h5>";

                                        echo "<h4><br>Email : </h4>";
                                        echo "<h5>".$data['email']."</h5>";

                                        echo "<h4><br>Date d'inscription : </h4>";
                                        echo "<h5>".$data['date_inscription']."</h5>";

                                        echo "<h4><br>Solde : </h4>";
                                        echo "<h5>".$data['solde']."€</h5>";
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="au-card recent-report">
                            <?php 
                            
                            $id = $data['id'];
                            if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))

                            {
                                $tailleMax = 2097152;
                                $extensionsValides = array('jpg', 'jpeg', 'png');
                                if($_FILES['avatar']['size'] <= $tailleMax)
                                {
                                    $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
                                    if(in_array($extensionUpload, $extensionsValides))
                                    {
                                        $chemin = "membres/avatars/".$_SESSION['username'].".".$extensionUpload;
                                        $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
                                        if($resultat)
                                        {
                                            $updateavatar = $bdd->prepare('UPDATE user SET avatar = :avatar WHERE username = :username');
                                            $updateavatar->execute(array(
                                                'avatar' => $_SESSION['username'].".".$extensionUpload,
                                                'username' => $_SESSION['username']
                                                ));
                                                //echo "<meta http-equiv='refresh' content='0.2'>";
                                        }
                                        else
                                        {
                                            $erreur = "Erreur durant l'importation de votre photo de profil";
                                        }
                                    }
                                    else
                                    {
                                        $erreur = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
                                    }
                                }
                                else
                                {
                                    $erreur = "Votre photo de profil ne doit pas dépasser 2Mo";
                                }
                            }
                            ?>
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Avatar :</h3>
                                        <img src="<?php echo "membres/avatars/",$data['avatar'];?>" alt="" />
                                        <div class="col-lg-6" style="    margin-top: 6%;padding: 6px;">
                                        <form  enctype="multipart/form-data" method="post" class="form-horizontal">
                                            <div class="row form-group" style="width: 466px;">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Changer :</label>
                                                </div>
                                                <div class="container">
                                                    <div class="row"> 
                                                        <div class="col-sm-0 col-md-2 col-lg-1"></div>
                                                        <div class="col-sm-12 col-md-8 col-lg-10"> 
                                                            <form method="post" enctype="multipart/form-data">
                                                               <input type="file" name="avatar"><br />
                                                               <button type="submit">Envoyer</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                           
                                        </form>  
                                    </div>  
                                    </div>  
                            </div>
                        </div>
                        <?php require ('footer.php'); ?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
<!-- end document-->
