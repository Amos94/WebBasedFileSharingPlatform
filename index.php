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
                <tr style="background-color: aliceblue"><td><strong><font color="#6495ed"><a href="index.php">Index</a></font></strong></td></tr>
                <tr><td><a href="documente.php">Documente</a></td></tr>
                <tr><td><a href="upload.php">Upload documente</a></td></tr>
                <tr><td><a href="profil.php">Setări profil</a></td></tr>
            </table>
        </div>
        <div class="col-sm-10">
            <center><h2>Descriere</h2></center>
            <p>Acest website oferă o modalitate simplă și eficientă de sharing de fisiere. <br />
            <center><h3>Exista două tipuri de utilizatori:</h3> <br /></center>
                <table class="table table-striped" style="width: 83%">
                    <tr><th>Tip utilizator</th><th>Lista drepturi</th></tr>
                    <tr><td>admin</td> <td>poate încărca fișiere pe server, poate activa/ dezctiva un user</td></tr>
                    <tr><td>user</td> <td>[nu are drepturi speciale]</td></tr>
                </table>
            </p>
            <center><h2>Cum se foloseste platforma</h2></center>
            <p>Adminul încarcă orice tip de fișier pe server. Odată ce fișierul a fost încărcat cu succes, un link către acesta va apărea în secțiunea:<strong>Documente</strong>.</p>
            <center><h2>Account management</h2></center>
            <p>Pentru schimbarea parolei se poate folosi secțiunea: <strong>Setări profil</strong>.</p>
            <center><h2>Detalii despre platformă</h2></center>
            <p>Versiunea: Beta 1.0 <br /> Pentru feedback sau contact: admin@bisericasfantatreime.co.uk</p>
        </div>
    </div>
    </body>
</html>
