<?php 
	//require("header.php");
	require("conexion.php");
	/*
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;*/
    if(isset($_POST['submit'])) {    
        // Datos del usuario
        $cc =  mysqli_real_escape_string($conex, $_POST['CC']);
        $first_name = mysqli_real_escape_string($conex, $_POST['first_name']);
        $first_last_name = mysqli_real_escape_string($conex, $_POST['first_last_name']);
        $second_name = mysqli_real_escape_string($conex, $_POST['second_name']);
        $second_last_name = mysqli_real_escape_string($conex, $_POST['second_last_name']);
        $email = mysqli_real_escape_string($conex, $_POST['email']);
        $phone = mysqli_real_escape_string($conex, $_POST['phone']);
        $type_CC = mysqli_real_escape_string($conex, $_POST['type_CC']);
        $country = mysqli_real_escape_string($conex, $_POST['country']);
        $city = mysqli_real_escape_string($conex, $_POST['city']);
        $english_level = mysqli_real_escape_string($conex, $_POST['english_level']);
        $position = mysqli_real_escape_string($conex, $_POST['position']);
        $time_comunicate = mysqli_real_escape_string($conex, $_POST['time_comunicate']);
    
        $sql = "INSERT INTO t_employee (type_CC, CC, first_Name, first_LastName, email, phone, country, city, eng_Lvl, potition, time_comunicate) VALUES ('$type_CC', '$CC', '$first_Name', '$first_LastName', '$email', '$phone', '$country', '$city', '$eng_Lvl', '$potition','$time_comunicate')";
        //$req = mysqli_query($conex, $sql);
        if (mysqli_query($conex, $sql)) {   ?>
            <section class="section">
                <div class="row align-items-top justify-content-center">
                    <div class="col-lg-4">
                        <!-- Card with an image on top -->
                        <div class="card align-items-center justify-content-center">
                            <img src="assets/img/not-found.svg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Se han enviado los datos correctamente!</h5>
                                <p class="card-text"></p>
                                <p class="card-text"><a href="index.php" class="btn btn-primary btn-block">Terminar</a></p>
                            </div>
                        </div><!-- End Card with an image on top -->
                        <!-- Card with titles, buttons, and links -->
                    </div>        
                </div>
            </section>
        <?php
        } 
        else {
            echo "Error al subir datos y archivos: " . mysqli_error($conex);
        }
    
?>