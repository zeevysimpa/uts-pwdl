<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    require 'koneksi.php';
    if(!empty($_SESSION['ADMIN'])){ }else{
        echo '<script>alert("Maaf Login Dahulu !");window.location="login.php"</script>';
    }
    include 'navbar.php';
?>
 <!-- Header - set the background image for the header in the line below-->
            <div class="text-center my-5">
                <img src="assets/img/rb.png">
                <h1 class="text-dark fs-3 fw-bolder"> WELCOME TO R & B GAMES NET </h1>
            </div>
<?php include 'footer.php';?>