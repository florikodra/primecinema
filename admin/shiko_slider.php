﻿<?php include('session.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>PRIMECINEMA - SHIKO Slider</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.jpg" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>
<?php include('dbcon.php'); ?>
<body class="theme-red">
    <!-- Page Loader -->
 <?php include('top.php'); ?>
    
<?php include('menu.php'); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">

            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                 Lista e Sliderave
                            </h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Titulli</th>
                                            <th>Pershkrimi</th>
                                            <th>Rradha</th>
                                            <th>Imazhi</th>
                                            <th>Te tjera</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                    <?php $slider=mysql_query("select * from slider")or die (mysql_error());
				while($kin=mysql_fetch_array($slider)){ ?>
                                        <tr>
                                            <td><?php echo $kin['slider_id'];?></td>
                                            <td><?php echo $kin['slider_emri'];?></td>
                                            <td><?php echo $kin['pershkrimi'];?></td>
                                            <td><?php echo $kin['radha'];?></td>
                                            <td><img src="images/slider/<?php echo $kin['slider_image'];?>" height="30" width="50"></td>
                                            <td><a type="button" class="btn btn-danger waves-effect" href="fshi_slider.php?id=<?php echo $kin['slider_id'];?>">FSHI</a>&nbsp;<a type="button" class="btn btn-warning waves-effect" href="edito_slider.php?id=<?php echo $kin['slider_id'];?>"> EDITO</a></td>
                                        </tr>

                <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>