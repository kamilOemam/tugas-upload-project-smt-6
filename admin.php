<?php 
session_start();
 include "config/__config_url.php"; 
 include "config/__config_database.php"; 
   
 if ($_SESSION['status_login'] != true) { 
         header('location:login.php'); 
     }
 ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Aplikasi Pertama</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Aplikasi Pertama</a>
                <button
                    class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"  aria-controls="navbarSupportedContent"aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <?php
                        if ($_SESSION['level'] == "admin")
                        {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" <?php echo isset($_GET['target']) && $_GET['target'] == 'prodi' ? "active" : "";?>href="<?php echo base_url(); ?>admin.php?target=prodi">Prodi</a>
                        </li>
                        <?php }?>
                        <?php
                        if ($_SESSION['level'] == "prodi")
                        {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" <?php echo isset($_GET['target']) && $_GET['target'] == 'semester' ? "active" : "";?> href="<?php echo base_url(); ?>admin.php?target=semester">Semester</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" <?php echo isset($_GET['target']) && $_GET['target'] == 'mahasiswa' ? "active" : "";?> href="<?php echo base_url(); ?>admin.php?target=mahasiswa">Mahasiswa</a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <div class="d-flex"> 
                 <a href="<?php echo base_url(); ?>logout.php" class="btn btn-sm btn-danger">Logout</a> 
             </div> 
            </div>
        </nav>
        <div class="clearfix">&nbsp;</div>
        <div class="container">
            <?php include_once "content.php"; ?>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
    </body>

</html>