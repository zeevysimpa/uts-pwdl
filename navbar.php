<!DOCTYPE HTML>
<html>
	<head>
		<title>
            R & B GAMES NET
        </title>
         <!-- Favicon-->
         <link rel="icon" type="image/x-icon" href="assets/img/pb.jpg" />
		<!-- BOOTSTRAP 4-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.1/css/bootstrap.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/main.css?v=<?=time();?>">
        <!-- jQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	</head>
    <body class="d-flex flex-column min-vh-100">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" img src="assets/img/pb.jpg">
                    <b>
                        <i class="fa fa-cog"></i> 
                        APLIKASI STOK BARANG
                    </b>
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto">
                        <?php if(!empty($_SESSION['ADMIN'])){?>
                            <li class="nav-item active">
                                <a class="nav-link" href="home.php?aksi=home">
                                    <i class="fa fa-home"></i> Home
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php?aksi=index">
                                    <i class="fa fa-cube"></i> Jenis Barang
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="detail.php?aksi=detail">
                                    <i class="fa fa-cubes"></i> Data Barang
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="proses.php?aksi=logout">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a>
                            </li>
                        <?php }else{?>
                            <li class="nav-item active">
                                <a class="nav-link" href="home.php">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="login.php">
                                    <i class="fa fa-sign-in"></i> Login Disini
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Jenis Barang</a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </nav>