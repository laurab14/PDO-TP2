<?php
//il faut tjrs appeler la base de donnée dans le controller
require '../model/DataBase.php';
require '../model/CreateClient.php';

if(count($_POST) > 0){
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $birthDate = $_POST['birthDate'];
    $address = $_POST['address'];
    $zipCode = $_POST['zipCode'];
    $phone = $_POST['phone'];
    $maritalStatus = $_POST['maritalStatus'];
    //objet qui contient les attributs et les méthodes de la class Client
    $client = new Client();
    $client->lastName= $lastName;
    $client->firstName = $firstName;
    $client->birthDate = $birthDate;
    $client->address = $address;
    $client->zipCode = $zipCode;
    $client->phone = $phone;
    $client->maritalStatus = $maritalStatus;
    if($client->addClient()){
        header('Location: ../index.php');
    }
}