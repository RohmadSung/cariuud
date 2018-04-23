<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tugas UTS - Information Retrieval</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Information Retrieval
                    </a>
                </li>
				<li>
                    <a href="index.html">Beranda</a>
                </li>
                <li>
                    <a href="upload.php">Unggah</a>
                </li>
                <li>
                    <a href="query.php">Pencarian Query</a>
                </li>
				<li>
                    <a href="#">Pencarian Query TF</a>
                </li>
				<li>
                    <a href="#">Hitung Bobot</a>
                </li>
				<li>
                    <a href="carikatadasar.php">Pencarian Kata Dasar</a>
                </li>
                <li>
                    <a href="about.php">Tentang</a>
                </li>
               </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Sistem Pengolah File Perundang-Undangan</h1><br>
                <center>
				<form method="post" action="">
				<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
				<input class="btnForm" type="submit" name="submit" value="Submit"/>
				</form>
				<br>
				<?php
				if(isset($_POST['kata'])){
					$teksAsli = $_POST['kata'];
					echo "Teks asli : ".$teksAsli.'<br/>';
					$stemming = Enhanced_CS($teksAsli);
					echo "Kata dasar : ".$stemming.'<br/>';
				}
				?>
				</center>
				<br>
				<a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Tampilkan Menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
