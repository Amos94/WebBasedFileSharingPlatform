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
        <center><h3>Meniu</h3></center>
        <table class="table text-center table-hover">
            <tr><td><a href="index.php">Index</a></td></tr>
            <tr><td><a href="documente.php">Documente</a></td></tr>
            <tr><td><a href="upload.php">Upload documente</a></td></tr>
            <tr style="background-color: aliceblue"><td><strong><font color="#6495ed"><a href="profil.php">Setări profil</a></td></tr>
        </table>
    </div>
    <div class="col-sm-10" style="width: 70%">
        <center>
            <h3>Schimbă parola</h3>
            <form class="form-group" style="width: 50%" method="post">
                <input class="form-control" type="password" placeholder="Old password"/><br />
                <input class="form-control" type="password" placeholder="New Password"/><br />
                <input class="form-control" type="password" placeholder="Repeat old password"/><br />
                <input class="btn btn-primary" type="submit" name="submit" value="Submit"/><br />
            </form>
        </center>
    </div>
</div>
</body>
</html>
