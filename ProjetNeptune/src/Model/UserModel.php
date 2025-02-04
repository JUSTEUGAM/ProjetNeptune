<?php
declare (strict_types = 1);
namespace MyApp\Model;

use MyApp\Entity\User;
use PDO;

class UserModel
{
    private PDO $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function getAllUser(): array
    {
        $sql = "SELECT * FROM User";
        $stmt = $this->db->query($sql);
        $users = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new User($row['IDuser'], $row['userName'], $row['userEmail'], $row['userPass'], $row['userNum'], $row['isAdmin'], $row['userFirstName']);
        }
        return $users;

    }
    public function getOneUser(int $IDuser): ?User
    {
        $sql = "SELECT * from User where IDuser = :IDuser";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":IDuser", $IDuser);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        return new User($row['IDuser'], $row['userName'], $row['userEmail'], $row['userPass'], $row['userNum'], $row['isAdmin'], $row['userFirstName']);
    }
    public function createUser(User $users): bool
    {
        $sql = "INSERT INTO User (userName, userFirstName, userEmail, userNum, userPass) VALUES (:userName, :userFirstName, :userEmail, :userNum, :userPass)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':userName', $users->getNom(), PDO::PARAM_STR);
        $stmt->bindValue(':userFirstName', $users->getPrenom(), PDO::PARAM_STR);
        $stmt->bindValue(':userEmail', $users->getEmail(), PDO::PARAM_STR);
        $stmt->bindValue(':userNum', $users->getNum(), PDO::PARAM_STR);
        $stmt->bindValue(':userPass', $users->getPass(), PDO::PARAM_STR);
        return $stmt->execute();
    }
}
