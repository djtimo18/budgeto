<?php

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
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Avatar :</h3>
                                        <div class="col-lg-6" style="    margin-top: 6%;padding: 6px;">
                                        <form action="upload_avatar.php" method="post" class="form-horizontal">
                                            <div class="row form-group" style="width: 466px;">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Avatar :</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="avatar" class="form-control-file">
                                                </div>
                                            </div>
                                            <button class="au-btn au-btn-load js-load-btn" type="submit">Ajouter</button>
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