<?php
             
             $mysqli_ip_privada = new mysqli('10.48.177.3', 'usr_mario', 'marioramirez090121', 'prueba_mario', 3306);
             if ($mysqli_ip_privada->connect_errno) {
                echo 'Fallo al conectar a MySQL con ip externa: (' . $mysqli_ip_privada->connect_errno . ') ' . $mysqli_ip_privada->connect_error;
              }                           
             echo $mysqli_ip_privada->host_info . '\n';


            ?>
