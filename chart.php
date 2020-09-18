<?php
$title = "Virement";
require ('header.php');
?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Ajouter un virement</h3>
                                        <?php if (isset($_REQUEST['nom'], $_REQUEST['montant'], $_REQUEST['date'], $_REQUEST['periode'])){ 
                                            $code = $data['code'];
                                            $date = date("d/m/Y");
                                        

                                            $nom = stripslashes($_REQUEST['nom']);
                                            $nom = mysqli_real_escape_string($conn, $nom); 
                                            
                                            $montant = stripslashes($_REQUEST['montant']);
                                            $montant = mysqli_real_escape_string($conn, $montant); 

                                            $date = stripslashes($_REQUEST['date']);
                                            $date = mysqli_real_escape_string($conn, $date);  
                                            $periode = $_REQUEST['periode'];                                         

                                            $query3 = "INSERT INTO `virement`(`type`, `code`, `nom`, `montant`, `date`) VALUES ('$periode', '$code', '$nom', '$montant', '$date')";
                                            // Exécuter la requête sur la base de données
                                                $res1 = mysqli_query($conn, $query3);
                                                
                                                if($res1){
                                                    echo "<meta http-equiv='refresh' content='0.2'>";
                                                    
                                                }
                                            }else{
                                             
                                       ?> 
                                        <form action="" method="post" class="form-horizontal">
                                                <input style="margin:20px" name="nom" class="au-input au-input--xl" placeholder="Nom" ></input>
                                                <div style="margin-left: 7px;" class="form-group row">
                                                    <div class="col-10">
                                                        <input style="width:105%" class="form-control" name ="date" type="date" value="2011-08-19" id="example-date-input">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                <div class="col-12 col-md-9">
                                                    <select style="    width: 112%;margin-left: 20px;" name="periode" id="SelectLm" class="form-control-sm form-control">
                                                        <option value="0">Periode :</option>
                                                        <option value="1">Tout les jours</option>
                                                        <option value="2">Toutes les semaines</option>
                                                        <option value="3">Tout les mois</option>
                                                        <option value="4">Tout les an</option>
                                                    </select>
                                                </div>
                                            </div>
                                                <input style="margin:20px" name="montant" class="au-input au-input--xl" placeholder="Montant" ></input>
                                                <button class="au-btn au-btn-load js-load-btn" type="submit">Ajouter</button>
                                            </form> 
                                        <?php } ?>   
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Virement en cours</h3>
                                        <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead style="    max-width: 100%;width: 100%;" >
                                            <tr>
                                                <th>periode</th>
                                                <th>nom</th>
                                                <th class="text-right">montant</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                        // On récupère tout le contenu de la table jeux_video
                                        $code = $data['code'];
                                        $reponse = $bdd->query("SELECT * FROM virement WHERE code='$code' ORDER BY id DESC");

                                        // On affiche chaque entrée une à une
                                        while ($donnees = $reponse->fetch())
                                        {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if ($donnees['type'] == "1"){
                                                    echo "Tout les jours";
                                                }elseif ($donnees['type'] == "2"){
                                                    echo "Toute les semaines";
                                                    }elseif ($donnees['type'] == "3"){
                                                        echo "Tout les mois";
                                                         }elseif ($donnees['type'] == "4"){
                                                            echo "Tout les an";
                                                            }
                                                ?></td>
                                                <td><?php echo $donnees['nom']?></td>
                                                <td class="text-right"><?php echo $donnees['montant']?> €</td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php require ('footer.php'); ?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

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
