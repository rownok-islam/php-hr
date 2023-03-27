<?php

// check if form is submitted
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    // validate form inputs
    if ( empty( $_POST['email'] ) || empty( $_POST['password'] ))  {
        die( 'All fields are required.' );
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    // check users data from CSV file
    $file = fopen( 'users.csv', 'r' );
    while (($data = fgetcsv($file)) !== false) {
        if ($data[2]==$email && $data[3]==$password){
            session_start();
            setcookie( "username",$data[0] );
            header('Location: loginsuccess.php');
            exit();
        }

    }

    
    fclose( $file );

    die('Email and password mismatch');
    

    
}

?>