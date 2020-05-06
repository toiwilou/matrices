<!DOCTYPE html>
<html>
<head>
	<title>MATRICE</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?PHP require'fonctions.php'; ?>

	<div id="onglet">
        <ul class="tabs">
            <li class="active"><a href="#mcarr">Matrice quelconque</a></li>
            <li><a href="#mqlcq">Matrice carrée</a></li>
        </ul>
        <div class="tabs-content">
            <div class="tab-content active" id="mcarr">
                <h2 class="title">MATRICE QUELCONQUE</h2>

                <div>
                	<p>
                		NB: Séparer les lignes de la matrice par des <strong><i>point-virgules</i></strong> et les colonnes par des virgules. <br> Par exemple : <strong><i>1,2,3;4,5,6;7,8,9 </i></strong><br> 
                		pour désigner la matrice : <strong><br>1 2 3 <br>4 5 6 <br>7 8 9</strong>
                	</p>
                </div>
            	
            	<form method="POST">
            		<div class="dive1">
	            		<h3>Opération</h3>

						<div id="operation">
							<div class="radio">
						        <label for="som">Somme matricielle</label>
						        <input type="radio" name="operation" id="som" value="somme" required>
						    </div>
						    <div class="radio">
						        <label for="pdt">Produit matriciel</label>
						        <input type="radio" name="operation" id="pdt" value="produit" required>
						    </div>
						    <div class="radio">
						        <label for="pmv">Produit matrice - vecteur</label>
						        <input type="radio" name="operation" id="pmv" value="produitmv" required>
						    </div>
						</div>
	            	</div>

					<div class="dive2">
						<h3>Matrice</h3>

						<div class="form-group">
			                <input type="text" class="form-control" placeholder="exp: 1,2,3,... -- (matrice 1)" name="mat1" required>
			            </div>
			            <div class="form-group">
			                <input type="text" class="form-control" placeholder="exp: 1,2,3,... -- (matrice 2)" name="mat2" required>
			            </div>
			            <button type="submit" id="envoyer2" class="btn btn-info">Run</button>
					</div>

					<div class="dive3">
						<div class="jumbotron">
				        	<?php require'form_matqlcq.php'; ?>
					    </div>
					</div>
            	</form>
            </div>

            <div class="tab-content" id="mqlcq">
            	<h2 class="title">MATRICE CARREE</h2>

            	<div>
            		<p>
            			NB: Cette partie n'est pas encore disponible.
            		</p>
            	</div>
                
                <form method="POST">
                	<div class="dive1">
	                	<h3>Opération</h3>

						<div id="operation">
						    <div class="radio">
						        <label for="det">Déterminant</label>
						        <input type="radio" name="operation" id="det" value="determinant" required>
						    </div>
						    <div class="radio">
						        <label for="eps">Eléments propres</label>
						        <input type="radio" name="operation" id="eps" value="eltprops" required>
						    </div>
						    <div class="radio">
						        <label for="exp">Exponentielle</label>
						        <input type="radio" name="operation" id="exp" value="exponentielle" required>
						    </div>
						    <div class="radio">
						        <label for="mtc">Matrice ²</label>
						        <input type="radio" name="operation" id="mtc" value="matcar" required>
						    </div>
						</div>
	                </div>

					<div class="dive2">
						<h3>Matrice</h3>

						<div class="form-group">
			                <input type="text" class="form-control" placeholder="exp: 1,2,3,..." name="matrice" required>
			            </div>
	            		<button type="submit" id="envoyer1" class="btn btn-info">Run</button>
					</div>

					<div class="dive3">
						<div class="jumbotron">
				        	<?php require'form_matcarr.php'; ?>
					    </div>
					</div>
                </form>
            </div>
        </div>
    </div>

	<script src="matrice.js"></script>
</body>
</html>