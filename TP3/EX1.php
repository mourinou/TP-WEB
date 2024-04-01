<h2>Nombres d'Armstrong inférieurs à 1000 :</h2>
<ul>
    <?php
    for ($nb = 1; $nb < 1000; $nb++) {
        $somme = 0;
        $temp = $nb;
        
        
        while ($temp > 0) {
            $chiffre = $temp % 10;
            $somme += $chiffre * $chiffre * $chiffre; 
            $temp = (int)($temp/ 10); 
        }
        
        
        if ($somme === $nb) {
            echo "<li>$nb</li>";
        }
    }
    ?>
</ul>