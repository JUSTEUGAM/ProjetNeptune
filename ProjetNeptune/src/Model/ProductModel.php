<?php
declare (strict_types = 1);
namespace MyApp\Model;

use MyApp\Entity\Produit;
use PDO;

class ProductModel
{
    private PDO $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function getAllProduits(): array
    {
        $sql = "SELECT * FROM Product";
        $stmt = $this->db->query($sql);
        $produits = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produits[] = new Produit($row['id'], $row['name'], $row['price']);
        }
        return $produits;

    }
}
