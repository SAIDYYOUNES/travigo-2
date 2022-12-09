<?php

require_once '../models/admin.model.php';
    class login{
       
        public function login(){
            
            if(isset($_POST['login'])){
                $data['username'] = $_POST['username'];
        
            $result=admin::get_admin($data);
            if($result->username===$_POST['email'] && $_POST['password']=== $result->password){
                session_start();
                $_SESSION['username']=$result->username; 
                    header('location:poste.php');
            }
        }
    }}