<?php
namespace App\Service;

use App\Entity\User;
use App\Repository\ProduitRepository;

class total
    {
        public function getTotal(User $user): array
        {
            $reponse = [];
            $quantiteTT = 0;
            $prixTT = 0;
            $paniers = $user->getPaniers();
            for($i = 0; $i < count($paniers); $i++){
                $quantiteTT = $quantiteTT + $paniers[$i]->getQuantite();
                $prixTT = $prixTT + ($paniers[$i]->getProduit()->getPrix() * $paniers[$i]->getQuantite());
            }
            $reponse[0] = $quantiteTT;
            $reponse[1] = $prixTT;
            return $reponse;
        }
}

?>