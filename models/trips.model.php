<?php
    require_once '../database/db_connection.php';
  
class trip{
    static public function addtrip($data){
        $db=Database::connect()->prepare("INSERT INTO trips( nom , prix , photo )
                                        VALUES( :nom , :prix , :photo )");
                                       
       
    //    
       $db->bindParam(':nom',$data['nom']);
       $db->bindParam(':prix',$data['prix']);
       $db->bindParam(':photo',$data['photo']);
        $db->execute();
}
    static public function getAlltrips(){
        $db=Database::connect()->prepare("SELECT * FROM trips");
        $db->execute();
        $trips=$db->fetchAll();
        $db=NULL;
        
        
        
        return $trips;
    }
    static public function getOnetrip($id){
        $db=Database::connect()->prepare("SELECT * FROM trips WHERE id = :id");
        
        $db->bindParam(':id',$id['id']);
        $db->execute();
        $trips=$db->fetchAll();
        $db=NULL;
        
        
        
        return $trips;
    }
    static public function update_trip($data_update){
        $db=Database::connect()->prepare("UPDATE trips SET nom = :nom , prix = :prix , photo = :photo 
                                            WHERE id = :id");

        $db->bindParam(':id',$data_update['id']);
        $db->bindParam(':nom',$data_update['nom']);
        $db->bindParam(':prix',$data_update['prix']);
        $db->bindParam(':photo',$data_update['photo']);
        

        $db->execute();
    }

    static public function delete_trip($data){
        $db=Database::connect()->prepare("DELETE FROM trips WHERE id = :id ");
        $db->bindParam(':id',$data['id']);
        $db->execute();
    }
}

// $a =trip ::getOnetrip();

// print_r(trip::getOnetrip());