<?php
session_start();
require_once '../models/admin.model.php';
    class login{
       
        public function login(){
            
        $email = $_POST['email'];
        $psw = $_POST['password'];
        // echo '<script>alert("wrong '.$psw.' '.$email.'or email")</script>';
            
            
               
        
            $result=admin::get_admin($email);
            // $a="";
            // $b="";
            foreach($result as $admin){
            // $a=$admin['email'];
            // $b=$admin['password'];
            
            
            
            
            if($admin['email']===$email && $admin['password'] === $psw){
                
                
                $_SESSION["login"] = true;
                
                $_SESSION['email']=$admin['email']; 
                header('location:Dashbord.php');
            
                    
            }else{
                
                echo '<script>alert("wrong password or email")</script>';
            }
        }
        }
        
    
    
}
    if(isset($_POST['login']) ){

        $admin= new login();
        $admin->login();
        
        
        
    }
    // $email = "younes";
    // $psw = $_POST['password'];
    // $admin= new login();
    // $admin->login($email,$psw);
    

    ?>