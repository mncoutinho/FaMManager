<?php
        /*$idnota       = $_POST["idnota"];*/
       include_once 'php/nota/postNota.php';
        include_once 'php/nota/queryIncluirNota.php';
       include_once 'conexao.php';
        $re=mysqli_query($con, $sql) or die (mysqli_error($con));
        header ('location: geranota.php?nome=' );
         die();
        ?>