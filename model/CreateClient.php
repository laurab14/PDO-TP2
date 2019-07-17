<?php
//la class User qui hérite de DataBase.php (DataBase)
class Client extends DataBase{
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $address;
    public $zipCode;
    public $phone;
    public $maritalStatus;
    public function __construct(){
        //On récupere le constructeur de la page DataBase.php qui est le parent de la class User
        parent::__construct();
    }
    public function addClient(){
        $query = "INSERT INTO `client`(`lastName`, `firstName`, `birthDate`, `address`, `zipCode`, `phone`, `maritalStatus`) VALUES (:lastName, :firstName, :birthDate, :address, :zipCode, :phone, :maritalStatus)";
        // création de la variable $addUser qui nous a permis de préparer la requête
        $addClient = $this->db->prepare($query);
        $addClient->bindValue(':lastName', $this->lastName,PDO::PARAM_STR);
        $addClient->bindValue(':firstName', $this->firstName,PDO::PARAM_STR);
        $addClient->bindValue(':birthDate', $this->birthDate,PDO::PARAM_STR);
        $addClient->bindValue(':address', $this->address,PDO::PARAM_STR);
        $addClient->bindValue(':zipCode', $this->zipCode,PDO::PARAM_STR);
        $addClient->bindValue(':phone', $this->phone,PDO::PARAM_STR);
        $addClient->bindValue(':maritalStatus', $this->maritalStatus,PDO::PARAM_INT);
        if($addClient->execute()){
            return true;
        }
    }
}