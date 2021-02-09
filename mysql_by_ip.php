<?php
             
             $mysqli_externa = new mysqli('34.70.88.13', 'usr_mario', 'marioramirez090121', 'prueba_mario', 3306);
             if ($mysqli->connect_errno) {
                echo 'Fallo al conectar a MySQL con ip externa: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
              }                           
             echo $mysqli_externa->host_info . '\n';


            ?>
