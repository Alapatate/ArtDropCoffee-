<!DOCTYPE html>
<html lang="fr">
    
	<?php 
    $page = '404';
    include("head.php"); 
    ?>
    
	<body>
		<div class="container-fluid">
            
			<?php include("header.php"); ?>
            
			<section>
                <div class="row">
                    <div class="col-md-offset-4 col-md-4 center">
                        <h3>:/ ERREUR 484</h3>
                        <h2>Cette page n’existe pas.</h2>
                        <p>Il peut s'agir d'une erreur technique. 
                        Veuillez réessayer ultérieurement. 
                        Si vous ne pouvez pas accéder au fichier après plusieurs tentatives, 
                        cela peut signifier qu'il a été supprimé, ou bien que l’url que vous avez saisie est erronée.</p>
                    </div>
                </div>
            </section>
            
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
