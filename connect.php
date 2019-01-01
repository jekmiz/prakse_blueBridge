<?php

$servername = "127.0.0.1";
$username = "jekmiz";
$password = "jekmiz";
$conn = new PDO("mysql:host=$servername;dbname=darbinieki", $username, $password);

function connect(){
    
    try {
        // set the PDO error mode to exception
            $GLOBALS['conn']->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully"; 
        }
    catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
}

function checkAdminPsw($username, $password){
    $sql = "SELECT parole FROM admins WHERE logins = '" .$username. "' ";
    
        $result =  $GLOBALS['conn']->query($sql);
        $pw = $result->fetchColumn(0);
        if($pw == $password){
            $check = "true";
        }else{
            $check = "false";
            
        }
        return $check;
}

