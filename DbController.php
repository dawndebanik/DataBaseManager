<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Connects to Database
 *
 * @author Debanik
 */
class DbController {
    function connect($db){
        require_once __DIR__.'/config.php';
        $con = new mysqli(SERVER, USERNAME, PASSWORD, $db);
        if($con->errno){
            return null;
        }
        return $con;
    }
    function disconnect(mysqli $con){
        $con->close();
    }

    function lol(){
    }
}

