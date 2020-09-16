<?php

require ('header.php');
?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>members online</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>items solid</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>this week</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <img data-v-b1739aaa="" style="margin-bottom: 76px;" src="data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZpZXdCb3g9IjAgMCAyMjYgMjI2Ij48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLWxpbmVqb2luPSJtaXRlciIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSIiIHN0cm9rZS1kYXNob2Zmc2V0PSIwIiBmb250LWZhbWlseT0ibm9uZSIgZm9udC13ZWlnaHQ9Im5vbmUiIGZvbnQtc2l6ZT0ibm9uZSIgdGV4dC1hbmNob3I9Im5vbmUiIHN0eWxlPSJtaXgtYmxlbmQtbW9kZTogbm9ybWFsIj48cGF0aCBkPSJNMCwyMjZ2LTIyNmgyMjZ2MjI2eiIgZmlsbD0ibm9uZSI+PC9wYXRoPjxnIGZpbGw9IiNmZmZmZmYiPjxwYXRoIGQ9Ik0xMjcuMTI1LDI4LjI1Yy0zMy40NjQxMSwwIC02MC42MzgxOCwyNy40NDk5NSAtNjguNDE3OTcsNjMuNTYyNWgtMTYuMzMyMDN2MTQuMTI1aDE0LjU2NjQxYy0wLjE2NTUyLDIuMzE3MzggLTAuNDQxNDEsNC42ODk5NCAtMC40NDE0MSw3LjA2MjVjMCwyLjM3MjU2IDAuMjc1ODgsNC43NDUxMiAwLjQ0MTQxLDcuMDYyNWgtMTQuNTY2NDF2MTQuMTI1aDE2LjMzMjAzYzcuNzc5NzksMzYuMTEyNTUgMzQuOTUzODYsNjMuNTYyNSA2OC40MTc5Nyw2My41NjI1YzE5LjExODQxLDAgMzYuNDk4NzgsLTkuMjE0MzUgNDguOTk2MDksLTIzLjYxNTIzbC0xMC44MTQ0NSwtOS4yNjk1M2MtMTAuMjYyNywxMS44MzUyIC0yMy41NjAwNiwxOC43NTk3NyAtMzguMTgxNjQsMTguNzU5NzdjLTI0Ljc0NjM0LDAgLTQ2LjU0MDc3LC0yMC40NzAyMSAtNTMuODUxNTYsLTQ5LjQzNzVoNjAuOTE0MDZ2LTE0LjEyNWgtNjMuMzQxOGMtMC4xOTMxMiwtMi4zNDQ5NyAtMC4yMjA3LC00LjY2MjM1IC0wLjIyMDcsLTcuMDYyNWMwLC0yLjQwMDE1IDAuMDI3NTksLTQuNzE3NTMgMC4yMjA3LC03LjA2MjVoNjMuMzQxOHYtMTQuMTI1aC02MC45MTQwNmM3LjMxMDc5LC0yOC45NjcyOCAyOS4xMDUyMywtNDkuNDM3NSA1My44NTE1NiwtNDkuNDM3NWMxNC42MjE1OSwwIDI3LjkxODk1LDYuOTI0NTYgMzguMTgxNjQsMTguNzU5NzdsMTAuODE0NDUsLTkuMjY5NTNjLTEyLjQ5NzMxLC0xNC40MDA4OCAtMjkuODc3NjksLTIzLjYxNTIzIC00OC45OTYwOSwtMjMuNjE1MjN6Ij48L3BhdGg+PC9nPjwvZz48L3N2Zz4=" alt="icon" width="46" height="46">
                                            <div class="text">
                                                <h2><?php echo $solde; ?></h2>
                                                
                                                <span>Solde</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Ajouter une dépense</h3>
                                        <div class="col-lg-6" style="    margin-top: 6%;padding: 6px;">
                                       <?php if (isset($_REQUEST['d_nom'], $_REQUEST['d_montant'])){ 
                                            $code = $data['code'];
                                            $type = "depense";
                                            $date = date("d/m/Y");
                                        

                                            $d_nom = stripslashes($_REQUEST['d_nom']);
                                            $d_nom = mysqli_real_escape_string($conn, $d_nom); 
                                            
                                            $d_montant = stripslashes($_REQUEST['d_montant']);
                                            $d_montant = mysqli_real_escape_string($conn, $d_montant); 

                                            $query3 = "INSERT INTO `gestion`(`code`, `type`, `date`, `nom`, `somme`) VALUES ('$code', '$type', '$date', '$d_nom', '$d_montant')";
                                            // Exécuter la requête sur la base de données
                                            $new_solde = $solde - $d_montant;
                                                $res1 = mysqli_query($conn, $query3);
                                                
                                                if($res1){
                                                    $query4 = "UPDATE `user` SET `solde`='$new_solde' WHERE `code`='$code'";
                                                    $res2 = mysqli_query($conn, $query4);
                                                    if($res2){
                                                        echo "<meta http-equiv='refresh' content='0.2'>";
                                                    }
                                                }
                                            }else{
                                             
                                       ?>                                    
                                            <form action="" method="post" class="form-horizontal">
                                                <input style="margin:20px" name="d_nom" class="au-input au-input--xl" placeholder="Nom" ></input>
                                                <input style="margin:20px" name="d_montant" class="au-input au-input--xl" placeholder="Montant" ></input>
                                                <button class="au-btn au-btn-load js-load-btn" type="submit">Ajouter</button>
                                            </form> 
                                        <?php } ?>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Ajouter une rentrée</h3>
                                        <div class="col-lg-6" style="    margin-top: 6%;padding: 6px;">
                                        <?php if (isset($_REQUEST['r_nom'], $_REQUEST['r_montant'])){ 
                                            $code = $data['code'];
                                            $type = "rentree";
                                            $date = date("d/m/Y");
                                        

                                            $r_nom = stripslashes($_REQUEST['r_nom']);
                                            $r_nom = mysqli_real_escape_string($conn, $r_nom); 
                                            
                                            $r_montant = stripslashes($_REQUEST['r_montant']);
                                            $r_montant = mysqli_real_escape_string($conn, $r_montant); 

                                            $query5 = "INSERT INTO `gestion`(`code`, `type`, `date`, `nom`, `somme`) VALUES ('$code', '$type', '$date', '$r_nom', '$r_montant')";
                                            // Exécuter la requête sur la base de données
                                            $new_solde = $solde + $r_montant;
                                                $res2 = mysqli_query($conn, $query5);
                                                
                                                if($res2){
                                                    $query6 = "UPDATE `user` SET `solde`='$new_solde' WHERE `code`='$code'";
                                                    $res3 = mysqli_query($conn, $query6);
                                                    if($res3){
                                                        echo "<meta http-equiv='refresh' content='0.2'>";
                                                    }
                                                }
                                            }else{
                                             
                                       ?>  
                                        <form action="" method="post" class="form-horizontal">
                                            <input style="margin:20px" name="r_nom" class="au-input au-input--xl" placeholder="Nom" ></input>
                                            <input style="margin:20px" name="r_montant" class="au-input au-input--xl" placeholder="Montant" ></input>
                                            <button class="au-btn au-btn-load js-load-btn" type="submit">Ajouter</button>
                                        </form>  
                                        <?php } ?>  
                                    </div>  
                                    </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Dernières opérations :</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead style="    max-width: 100%;width: 100%;" >
                                            <tr>
                                                <th>date</th>
                                                <th>type</th>
                                                <th>nom</th>
                                                <th class="text-right">montant</th>
                                            </tr>
                                        </thead>
                                        <?php 
                                        // On récupère tout le contenu de la table jeux_video
                                        $code = $data['code'];
                                        $reponse = $bdd->query("SELECT * FROM gestion WHERE code='$code' ORDER BY id DESC");

                                        // On affiche chaque entrée une à une
                                        while ($donnees = $reponse->fetch())
                                        {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $donnees['date']?></td>
                                                <?php 
                                                if ($donnees['type'] == "rentree"){
                                                    echo "<td style='color:green'>Rentrée</td>";
                                                }if ($donnees['type'] == "depense"){
                                                    echo "<td style='color:red'>Dépense</td>";
                                                }
                                                ?>
                                                <td><?php echo $donnees['nom']?></td>
                                                <td class="text-right"><?php echo $donnees['somme']?> €</td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Prochains paiement :</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>United States</td>
                                                        <td class="text-right">$119,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                        <td class="text-right">$70,261.65</td>
                                                    </tr>
                                                    <tr>
                                                        <td>United Kingdom</td>
                                                        <td class="text-right">$46,399.22</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Turkey</td>
                                                        <td class="text-right">$35,364.90</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Germany</td>
                                                        <td class="text-right">$20,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>France</td>
                                                        <td class="text-right">$10,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Australia</td>
                                                        <td class="text-right">$5,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Italy</td>
                                                        <td class="text-right">$1639.32</td>
                                                    </tr>
                                                </tbody>
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
