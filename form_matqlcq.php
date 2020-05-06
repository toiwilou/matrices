<?php 

// Récupération des valeurs du formulaire
$operation = $_POST['operation'];
$matrice1 = $_POST['mat1'];
$matrice2 = $_POST['mat2'];

// Dimension de la première matrice
$li1 = explode(";", $matrice1);
$nbrl1 = count($li1);
$col1 = explode(",", $li1[0]);
$nbrc1 = count($col1);


if ($operation == "somme" || $operation == "produit") {

	// Dimension de la deuxième matrice
	$li2 = explode(";", $matrice2);
	$nbrl2 = count($li2);
	$col2 = explode(",", $li2[0]);
	$nbrc2 = count($col2);

	// Affichage
	if (!empty($matrice1 && !empty($matrice2))) {
		$matt1 = recupMat($matrice1);
		$matt2 = recupMat($matrice2);
		echo "Matrice 1".nl2br("\n");
		for ($i=0; $i < $nbrl1; $i++) { 
			for ($j=0; $j < $nbrc1; $j++) { 
				echo $matt1[$i][$j].' ';
			}
			echo nl2br("\n");
		}
		echo "Matrice 2".nl2br("\n");
		for ($i=0; $i < $nbrl2; $i++) { 
			for ($j=0; $j < $nbrc2; $j++) { 
				echo $matt2[$i][$j].' ';
			}
			echo nl2br("\n");
		}
	}
	
	// Opération
	$mats = opMat($matrice1, $matrice2, $operation);

	// Résultat
	echo nl2br("Résultat :\n");
	for ($i=0; $i < $nbrl1; $i++) { 
		for ($j=0; $j < $nbrc2; $j++) { 
			echo $mats[$i][$j].' ';
		}
		echo nl2br("\n");
	}
} else if ($operation == "produitmv") {

	// Affichage
	if (!empty($matrice1 && !empty($matrice2))) {
		$matt = recupMat($matrice1);
		$vectt = explode(";", $matrice2);
		echo "Matrice".nl2br("\n");
		for ($i=0; $i < $nbrl1; $i++) { 
			for ($j=0; $j < $nbrc1; $j++) { 
				echo $matt[$i][$j].' ';
			}
			echo nl2br("\n");
		}
		echo "Vecteur".nl2br("\n");
		for ($i=0; $i < count($vectt); $i++) { 
			echo $vectt[$i];
			echo nl2br("\n");
		}
	}

	// Opération
	$vects = pdtMatVect($matrice1, $matrice2);

	// Résultat
	echo "Résultat".nl2br("\n");
	for ($i=0; $i < count($vects); $i++) { 
		echo $vects[$i];
		echo nl2br("\n");
	}
}

?>
