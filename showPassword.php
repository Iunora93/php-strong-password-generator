<?php 
session_start();
include_once __DIR__ . "/index.php";
function generatePassword() {
    $min_length=8;  //Minimum length of the password
    $min_numbers=2; //Minimum of numbers AND special characters
    $min_letters=2; //Minimum of letters
    
    $password = '';
    $numbers=0;
    $letters=0;
    $length=0;
    
    while ( $length <= $min_length OR $numbers <= $min_numbers OR $letters <= $min_letters) {
        $length+=1;
        $type=rand(1, 3);
        if ($type==1) {
            $password .= chr(rand(33, 64)); //Numbers and special characters
            $numbers+=1;
        }elseif ($type==2) {
            $password .= chr(rand(65, 90)); //A->Z
            $letters+=1;
        }else {
            $password .= chr(rand(97, 122)); //a->z
            $letters+=1;
        }
        
    
    } 
    return $password;
   
    }
    var_dump(generatePassword())  ; 
    echo (generatePassword());
    if( !empty($_GET['password']) && !empty($_GET['password']) ) {
        $credentials = [
            "password" => $_GET['password'],
        ];
    
        $user = (generatePassword());
    
        if( $user ) {
            $_SESSION['logged_in'] = true;
            
        } else {
            $_SESSION['error'] = "Credenziali errate";
            
        }
    }
?>