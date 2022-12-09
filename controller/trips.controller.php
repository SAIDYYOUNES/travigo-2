<?php

// use post as GlobalPost;

require_once '../models/trips.model.php';
    class ADD_trip{
        
        public function add_trip(){
             $data = array(
                // 'username' => $_SESSION['username'],
                // 'title'=>$_POST['title'],
                'nom'=>$_POST['nom'],
                'prix'=>$_POST['prix'],
                'photo'=>$_POST['photo'],
            );
            $result=trip::addtrip($data);
        }
        public function gettrips(){
            return trip::getAlltrips();
            header('location:trips.php');
        }
        public function gettrip(){
            $id =array('id'=> $_trip['id']);
            return trip::getOnetrip($id);
            header('location:trip.php');
        }
        
        public function delete_trip(){
            $data = array(
                'id' => $_POST['id']
            );
            trip::delete_trip($data);
            header('location:trip.php');
        }
        public function update_trip(){
            $data_update = array(
                // 'username' => $_SESSION['username'],
                // 'title'=>$_POST['title'],
                'nom'=>$_POST['nom'],
                'prix'=>$_POST['prix'],
                'photo'=>$_POST['photo'],
            );
            $result=trip::update_trip($data_update);
            // print_r();
            header('location:trip.php');
        }
    }
    $data = new ADD_trip();
$new_trips = $data->gettrips();


if (isset($_POST['add'])) {
    $trip = new ADD_trip();
    $trip->add_trip();

    
}
if (isset($_POST['delete'])) {
    $delete = new ADD_trip();
    $delete->delete_trip();
}
if (isset($_POST['update'])) {
    $update = new ADD_trip();
    $update->update_trip();
}

