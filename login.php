<?php
    $conn = mysqli_connect("localhost","root","","proyectofinal");

    if(!$conn){
        die("No se pudo conectar".mysqli_connect_error());
    }


    $usuario = $_POST["user"];
    $pass = $_POST["pass"];

    $query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '".$usuario."' and password = '".$pass."' ");
    $nr = mysqli_num_rows($query);

    if($nr==1){
        header("Location: main.html");
    }
    else if($nr==0){
        echo"Noingreso";
    }

?>