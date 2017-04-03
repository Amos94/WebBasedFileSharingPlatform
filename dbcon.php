<?php
/**
 * Created by PhpStorm.
 * User: amosn
 * Date: 03-Apr-17
 * Time: 03:36 AM
 */
mysqli_connect("localhost","root","Amos.expert94","sd");

class DBCon{

    function getDatabaseConnection(){
        return mysqli_connect("localhost","root","Amos.expert94","sd");
    }
}
?>