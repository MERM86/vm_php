<?php
             $mysqli = new mysqli('34.68.11.173', 'mario_user', 'marioramirez080221', 'prueba');
             if ($mysqli->connect_errno) {
                echo 'Fallo al conectar a MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
              }
             echo $mysqli->host_info . '\n';

             $mysqli = new mysqli('127.0.0.1', 'usr_mario', 'marioramirez090121', 'prueba_mario', 3306);
             if ($mysqli->connect_errno) {
                echo 'Fallo al conectar a MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
              }

              echo $mysqli->host_info . '\n';
            ?>
