<?php 

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    
</body>
</html>