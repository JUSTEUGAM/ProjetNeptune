<?php
declare (strict_types = 1);
namespace MyApp\Entity;

class User
{
    private ?int $idFact = null;
    private string $DateFact;
    private string $prix;
    private string $ligneAdresse1;
    private string $ligneAdresse2;
    private string $ligneAdresse3;
    private string $villeFact;
    private string $codePostFacture;
    private string $paysCusto;
    public function __construct(?int $idFact, string $DateFact, string $prix, string $ligneAdresse1, string $ligneAdresse2, string $ligneAdresse3, string $villeFact, string $codePostFacture, string $paysCusto)
    {
        $this->id = $idFact;
        $this->DateFact = $DateFact;
        $this->prix = $prix;
        $this->ligneAdresse1 = $ligneAdresse1;
        $this->ligneAdresse2 = $ligneAdresse2;
        $this->ligneAdresse3 = $ligneAdresse3;
        $this->villeFact = $villeFact;
        $this->codePostFacture = $codePostFacture;
        $this->paysCusto = $paysCusto;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getPrix(): string
    {
        return $this->prix;
    }
    public function setPrix(string $prix): void
    {
        $this->prix = $prix;
    }
    public function setDateFact(string $DateFact): void
    {
        $this->DateFact = $DateFact;
    }
    public function getDateFact(): string
    {
        return $this->DateFact;
    }
    public function setLigneAdresse1(string $ligneAdresse1): void
    {
        $this->ligneAdresse1 = $ligneAdresse1;
    }
    public function getLigneAdresse1(): string
    {
        return $this->ligneAdresse1;
    }
    public function setLigneAdresse2(string $ligneAdresse2): void
    {
        $this->ligneAdresse2 = $ligneAdresse2;
    }
    public function getLigneAdresse2(): string
    {
        return $this->ligneAdresse2;
    }
    public function setLigneAdresse3(string $ligneAdresse3): void
    {
        $this->ligneAdresse3 = $ligneAdresse3;
    }
    public function getligneAdresse3(): string
    {
        return $this->ligneAdresse3;
    }
    public function setCp(string $cp): void
    {
        $this->cp = $cp;
    }
    public function getcp(): string
    {
        return $this->cp;
    }
    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }
    public function getTelephone(): string
    {
        return $this->telephone;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    
    
}
