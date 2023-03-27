<?php

// check if form is submitted
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    // validate form inputs
    if ( empty( $_POST['fname'] ) || empty( $_POST['lname'] ) || empty( $_POST['email'] ) || empty( $_POST['password'] ) || empty( $_POST['confirm_password'] ) ) {
        die( 'All fields are required.' );
    }

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // validate email format
    if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        die( 'Invalid email format.' );
    }

    //validate password
    if($password != $confirm_password){
        die( 'Password mismatch');
    }


    // save user's data to CSV file
    $data = array( $fname, $lname, $email, $password );
    $file = fopen( 'users.csv', 'a+' );

    if ( fputcsv( $file, $data ) === false ) {
        die( 'Error writing to file.' );
    }

    fclose( $file );

    // start session and set cookie
    session_start();
    setcookie( 'username', $name );

    // redirect to userlist page
    header( 'Location: regsuccess.php' );
    exit();
}

?>