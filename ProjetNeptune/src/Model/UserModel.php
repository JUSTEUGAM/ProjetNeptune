<?php
declare (strict_types = 1);
namespace MyApp\Model;

use MyApp\Entity\Users;
use PDO;

class UserModel
{
    private PDO $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function getAllUsers(): array
    {
        $sql = "SELECT * FROM Users";
        $stmt = $this->db->query($sql);
        $users = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new Users($row['IDuser'], $row['userName'], $row['userFirstName'], $row['userPass'], $row['userNum'], $row['userEmail']);
        }
        return $users;

    }
}