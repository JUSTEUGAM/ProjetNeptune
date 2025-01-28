<?php
declare (strict_types = 1);
namespace MyApp\Entity;

class User
{
    private ?int $id = null;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    private string $rue;
    private string $ville;
    private string $cp;
    private string $telephone;
    private string $email;
    private string $isAdmin;
    public function __construct(?int $id, string $nom, string $prenom, string $dateNaissance, string $rue, string $ville, string $cp, string $telephone, string $email, string $isAdmin)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->rue = $rue;
        $this->ville = $ville;
        $this->cp = $cp;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->isAdmin = $isAdmin;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function setDateNaissance(string $dateNaissance): void
    {
        $this->dateNaissance = $dateNaissance;
    }
    public function getDateNaissance(): string
    {
        return $this->dateNaissance;
    }
    public function setRue(string $rue): void
    {
        $this->rue = $rue;
    }
    public function getRue(): string
    {
        return $this->rue;
    }
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }
    public function getVille(): string
    {
        return $this->ville;
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
