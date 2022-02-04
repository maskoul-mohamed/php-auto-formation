
    <?php
            // declaration des variable
            $trouve;
            $listNumbers;
            $userInput; 
            // saisire
            $listNumbers = array(1 ,10, 4, 987, 9) ;
            $trouve = false;
            $userInput = (int)readline('Entrez une valeur pour userInput: ');

            // traitment
            for ($i = 0; $i <= 4; $i++) {
                if ($userInput === $listNumbers[$i]) {
                   $trouve = true;
                   break;
                }
            }
            if ($trouve) {
                echo "le nombre existe dans la position " . $i;
            } else {
                echo "le nombre n'existe pas";
            }
        
    ?>
