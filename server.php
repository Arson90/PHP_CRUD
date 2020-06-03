<?php
    session_start();
    //db information
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "my_library";

    //connect to database
    $connection = mysqli_connect($servername, $username, $password, $dbname) or die('No db connection');

    //if 'save' button is clicked
    if(isset($_POST['save'])){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $bookname = $_POST['bookname'];

        $insert_query = "INSERT INTO authors (firstname, lastname, bookname) VALUES ('$firstname','$lastname','$bookname')";
        mysqli_query($connection, $insert_query);
        $_SESSION['message'] = "Author has been added";
        header('location: index.php');
    }
    //display all rows in table
    $result = $connection->query('SELECT * FROM authors');

