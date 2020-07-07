<?php

    include("../connect_database.php");

    class UserModel {

        // public static function insert($user){
            
        //     $sql = "INSERT INTO users (username, password, displayname, active, role) 
        //     VALUES ('$user["username"]', '$user["password"]','$user["displayname"]','$user["active"]','$user["role"]')";
        //     return $database->query($sql);
        // }

        public static function list($id){
            global $database;
            

            $sql = "SELECT * FROM users WHERE id='$id'";
            $result = $database->query($sql);
            $resultSet = array();

            
                while ($row = $result->fetch_assoc()){
                    array_push($resultSet, $row);
                }
            

            return $resultSet;
        }
    }
?>