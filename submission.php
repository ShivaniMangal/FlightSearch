<?php

// Connect to your MySQL database

    $dbhst = "localhost";
    $dbnme = "airlinebooking"; 
    $bdusr = "root";
    $dbpws = "";

// Using PDO to connect

$conn = new PDO('mysql:host='.$dbhst.';dbname='.$dbnme, $bdusr, $dbpws);

// Getting variables
$from = $_POST['From'];
$to = $_POST['To'];
$date= $_POST['Date'];
$PNo = $_POST['dropdown']

// Comparing answers

try {

    $stmt = $conn->prepare('SELECT * FROM table_with_answers WHERE question='" . $questionID . "' and answer='". $answer . "' LIMIT 0,1');
    $stmt->execute();

    $result = $stmt->fetchAll();

    if ( count($result) ) {

    foreach($result as $row) { 

    echo 'OK, you've entered a correct answer';
    // Do Something Else

    }} else {

    echo 'ERROR: Seems like you didn't put the correct answer. Please try again';
    exit;

    }} catch(PDOException $e) {

    echo 'ERROR: ' . $e->getMessage();

    }

?>