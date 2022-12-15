<?php

// use post as GlobalPost;

require_once '../models/trips.model.php';
     class ADD_trip{
        
        
        public function add_trip(){
             $data = array(
               
                'nom'=>$_POST['nom'],
                'prix'=>$_POST['prix'],
                'photo'=>$_POST['photo'],
            );
            
            $result=trip::addtrip($data);
        }
        public function gettrips(){
            return trip::getAlltrips();
            header('location:tours.php');
        }
        public function gettrip($id){
            
            
            
            $trips = trip::getOnetrip($id);
            return $trips;
            header('location:updatetrip.php');
            
        }
        
        public function delete_trip(){
            $id = array(
                'id' => $_POST['id']
            );
            trip::delete_trip($id);
            header('location:Dashbord.php');
        }
        public function update_trip(){
            $data_update = array(
                'id'=>$_POST['id'],
                'nom'=>$_POST['nom'],
                'prix'=>$_POST['prix'],
                'photo'=>$_POST['photo'],
            );
            $result=trip::update_trip($data_update);
            
            header('location:Dashbord.php');
        }
    }
    $data = new ADD_trip();
$new_trips = $data->gettrips();




if (isset($_POST['add'])) {
    $trip = new ADD_trip();
    $trip->add_trip();
    header('location:Dashbord.php');

    
}
if (isset($_POST['delete'])) {
    $delete = new ADD_trip();
    $delete->delete_trip();
    header('location:Dashbord.php');

}

if (isset($_POST['update_trip'])) {
    $update = new ADD_trip();
    $update->update_trip();
}
