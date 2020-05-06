 <?php

    // Fonction de récupération d'une matrice
    function recupMat ($matrice) {

    	// Dimension de la matrice
    	$ligne = explode(";", $matrice);
	    $nbrlgn = count($ligne);
	    $colonne = explode(",", $ligne[0]);
	    $nbrcln = count($colonne);

	    // Initiation de la matrice de retour
	    $matrices[][] = array();

	    for ($m=0; $m < strlen($matrice); $m++) { 
	    	if ($matrice[$m] == ";") {

			    $test = true;

			    // Vérification des dimensions
			    for ($i=1; $i < $nbrlgn; $i++) { 
			    	if ($nbrcln != count(explode(",", $ligne[$i]))) {
			    		$test = false;
			    		break;
			    	}
			    }

			    // Récupération
			    if ($test == true) {

			    	$tab = explode(",", str_replace(";", ",", $matrice));
			    	$i = 0; $compteur = 0; $valint = $nbrcln;
			    	while ($i < $nbrlgn) {
			    		$j = 0;
			    		while ($j < $nbrcln) {
			    			if ($compteur < count($tab)) {
			    				while ($compteur < $valint) {
			    					$matrices[$i][$j] = $tab[$compteur];
			    					$compteur++; $j++;
			    				}
			    			}
			    			$valint += $nbrcln;
			    		}
			    		$i++;
			    	}
			    }
	    	}

	    	// Sortie de la boucle une fois la condition réalisée
	    	if($test) {
	    		break;
	    	}
	    }

    	return $matrices;
    }


    // Somme et produit de deux matrices
    function opMat ($m1, $m2, $op) {

	    $l1 = explode(";", $m1);
	    $l2 = explode(";", $m2);
	    $nl1 = count($l1);
	    $nl2 = count($l2);
	    $c1 = explode(",", $l1[0]); 
	    $c2 = explode(",", $l2[0]); 
	    $nc1 = count($c1);
	    $nc2 = count($c2);

	    // Initiation de la matrice de retour
    	$opMats = array();

    	// Récupération des matrices par la fonction recupMat 
    	$mat1 = recupMat ($m1);
    	$mat2 = recupMat ($m2);

	    if ($op == "somme") {

	    	// Somme
	    	if ($nl1 == $nl2 && $nc1 == $nc2) {

	    		for ($i=0; $i < $nl1; $i++) { 
		    		for ($j=0; $j < $nc1; $j++) { 
		    			$opMats[$i][$j] = $mat1[$i][$j] + $mat2[$i][$j];
		    		}
		    	}
		    }
	    } else if ($op == "produit") {
	    	
	    	// Produit
	    	if ($nc1 == $nl2) {
	    		
	    		for ($i=0; $i < $nl1; $i++) { 
	    			for ($j=0; $j < $nc2; $j++) { 
	    				for ($k=0; $k < $nc1; $k++) { 
	    					$opMats[$i][$j] += $mat1[$i][$k]*$mat2[$k][$j];
	    				}
	    			}
	    		}
	    	}
	    }

	    return $opMats;
    }

    function pdtMatVect ($m, $v) {

    	// Dimensions 
    	$l = explode(";", $m);
	    $nl = count($l);
	    $c = explode(",", $l[0]);
	    $nc = count($c);

	    // Récupération de la matrice par la fonction recupMat
	    $mat = recupMat($m);

	    // Dimension du vecteur
	    $ve = explode(";", $v);
	    $dim = count($ve);

	    // Initiation du vecteur de retour
	    $vect = array();

	    if ($nc == $dim) {
	    	
	    	// Produit
	    	for ($i=0; $i < $nl; $i++) { 
	    		for ($j=0; $j < $nc; $j++) { 
	    			$vect[$i] += $mat[$i][$j]*$ve[$j];
	    		}
	    	}
	    }

	    return $vect;
    }

    ?>
