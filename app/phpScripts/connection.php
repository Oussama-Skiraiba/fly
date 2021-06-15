<?php


        $connection = mysqli_connect('localhost', 'root', '', 'fly');

        //check the connection
        if(!$connection){
            echo 'Connection Error: ' . mysqli_connect_error(); 
        }

