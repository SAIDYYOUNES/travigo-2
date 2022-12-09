<?php
    require_once '../database/db_connection.php';
    class admin{
        
        static public function get_admin($data){
            $email=$data['email'];
            try{
                $db=Database::connect()->prepare('SELECT * FROM trips WHERE email = :email');
                $db->execute(array(':email'=>$email));
                return $db->fetch(PDO::FETCH_OBJ);

            }catch(PDOException $e){
                return 'error ' . $e->getMessage();
            };

        }
    }


    