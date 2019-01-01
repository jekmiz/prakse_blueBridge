<!DOCTYPE html>
<html>
<head>
<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}


.active {
    background-color: #0000FF;
}

form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    background-color: #0000FF;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.container {
    padding: 16px;
    width: 500px;
}

</style>
</head>
<body>

<ul>
    <li><a class="active" href="http://127.0.0.1/prakse_med/index.html">Galvenā lapa</a></li>
</ul>

<h1>Administratora dati</h1>
<form method = "get">
<div class="container">
    <label for="uname"><b>Lietotāja vārds</b></label>
    <input type="text" placeholder="Ievadiet lietotāja vārdu" name="uname" required>

    <label for="psw"><b>Parole</b></label>
    <input type="password" placeholder="Ievadiet paroli" name="psw" required>

    <button type="submit" id = "submitBtn">Ielogoties</button>
  </div>
</form>

<script type="text/javascript">
    document.getElementById("submitBtn").onclick = function () {
        
    };
</script>


<?php
    if($_GET){
        include ('connect.php');
        connect();

        $checks = checkAdminPsw($_GET["uname"], $_GET["psw"]);
        $location = "Location:http://127.0.0.1/prakse_med/elements.html";

        if($checks == "true"){
            header($location);
        }else{
            echo("Nepareizi dati!");
        }


        

    }

?> 

</body>
</html>