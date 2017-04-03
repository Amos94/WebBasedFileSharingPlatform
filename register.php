<?php
/**
 * Created by PhpStorm.
 * User: amos neculau
 * Date: 03-Apr-17
 * Time: 12:11 AM
 */


session_start();
require_once("dbcon.php");
?>

<html>
<head>
    <title>Cloud BST S.D.</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
</head>
<body style="background-color: whitesmoke">
<header>

    <center>
        <h1>Soluție "Cloud" Biserica Sfânta Treime Londra</h1>
        <h2>Școala Dominicală</h2>
        <hr style="width:70%;"/>
    </center>
</header>

<div class="row">
    <div class="col-sm-4" style="width:16%">
    </div>
    <div class="col-sm-10" style="width: 70%">
        <center>
            <h3>Login</h3>
            <form class="form-group" style="width: 50%" method="POST"
                <input class="form-control" type="text" placeholder="Nume"/><br />
                <input class="form-control" type="email" placeholder="Email"/><br />
                <input class="form-control" type="password" placeholder="Parolă"/><br />
                <input class="btn btn-primary" type="submit" name="submit" value="Login"/><br />
            </form>
        </center>
    </div>
</div>
</body>
</html>
