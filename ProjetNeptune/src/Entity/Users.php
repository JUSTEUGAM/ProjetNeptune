<?php
declare (strict_types = 1);
namespace MyApp\Entity;

class Users
{
    private ?int $IDuser = null;
    private string $userName;
    private string $userFirstName;
    private string $userPass;
    private string $userNum;
    private string $userEmail;
    private string $isAdmin;
    public function __construct(?int $IDuser, string $userName, string $userFirstName, string $userPass, string $userNum, string $userEmail, string $isAdmin)
    {
        $this->IDuser = $IDuser;
        $this->userName = $userName;
        $this->userFirstName = $userFirstName;
        $this->userPass = $userPass;
        $this->userNum = $userNum;
        $this->userEmail = $userEmail;
        $this->isAdmin = $isAdmin;
    }
    public function getId(): ?int
    {
        return $this->Iduser;
    }
    public function setId(?int $IDuser): void
    {
        $this->IDuser = $IDuser;
    }
    public function getNom(): string
    {
        return $this->userName;
    }
    public function setNom(string $userName): void
    {
        $this->userName = $userName;
    }
    public function setPrenom(string $userFirstName): void
    {
        $this->userFirstName = $userFirstName;
    }
    public function getPrenom(): string
    {
        return $this->userFirstName;
    }
    public function setMotdePasse(string $userPass): void
    {
        $this->userPass = $userPass;
    }
    public function getMotdePasse(): string
    {
        return $this->userPass;
    }
    public function setEmail(string $userEmail): void
    {
        $this->userEmail = $userEmail;
    }
    public function getEmail(): string
    {
        return $this->userEmail;
    }
    public function setNum(string $userNum): void
    {
        $this->userNum = $userNum;
    }
    public function getNum(): string
    {
        return $this->userNum;
    }
    public function setisAdmin(string $isAdmin): void
    {
        $this->isAdmin = $isAdmin;
    }
    public function getisAdmin(): string
    {
        return $this->isAdmin;
    }
    
   
}
