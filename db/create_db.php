<?php
    $host='127.0.0.1';
    $user='root';
    $psw='';
    $db_name='users_fake_bank';

    $connection=new mysqli($host,$user,$psw);
    $create_query='CREATE DATABASE '.$db_name;

    if($connection->query($create_query)===true){

        echo 'SUCCESS: The DB was created ';

        $connectionDB=new mysqli($host,$user,$psw,$db_name);
        $create_table_query="CREATE TABLE login_table (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            e_mail VARCHAR(50) NOT NULL,
            psw VARCHAR(30) NOT NULL
        )";

        if($connectionDB->query($create_table_query)===true){
            echo 'SUCCESS: The TABLE was created ';
        }else{
            echo 'ERROR TABLE: '.$connectionDB->error;
        }

    }else{
        echo 'ERROR DB: '.$connection->error;
    }
?>