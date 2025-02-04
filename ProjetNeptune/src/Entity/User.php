<?php
declare (strict_types = 1);
namespace MyApp\Entity;

class User
{
    private ?int $IDuser = null;
    private string $userName;
    private string $userEmail;
    private string $userPass;
    private string $userNum;
    private bool $isAdmin;
    private string $userFirstName;
    public function __construct(?int $IDuser, string $userName, string $userEmail,  string $userPass, string $userNum,  bool $isAdmin, string $userFirstName)
    {
        $this->IDuser = $IDuser;
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userPass = $userPass;
        $this->userNum = $userNum;
        $this->isAdmin = $isAdmin;
        $this->userFirstName = $userFirstName;
    }
    public function getId(): ?int
    {
        return $this->IDuser;
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
    public function setPass(string $userPass): void
    {
        $this->userPass = $userPass;
    }
    public function getPass(): string
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
    public function setIsAdmin(string $isAdmin): void
    {
        $this->isAdmin = $isAdmin;
    }
    public function getIsAdmin(): string
    {
        return $this->isAdmin;
    }
    
   
}
