<?php 
function OpenCon()
{
    $dbhost = "127.0.0.1";
    $dbuser = "root";
    $dbpass = "";
    $db = "webass2";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
    if(!$conn) {
        die("Connect failed: %s\n". $conn -> error);
    }
    else {
        // echo "Successfully";
    }
    return $conn;
}
 
function CloseCon($conn)
{
    $conn -> close();
}

global $database;
if ($database == NULL){
    $database = OpenCon();

}
?>