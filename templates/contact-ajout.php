<!-- include le head et le header et la base de donnée... -->
<?php 
    include("top.php");
    include("../bdd.php");
?>

<div class="menu-contenu">
    <nav class="menu">
        <div class="block">
                <div class="iconeMenu">MENU</div>
        </div>
        <div class="block">
            <a href="accueil.php" style="display: flex; flex-direction: row;">
                <div>Camille Desens</div>
            </a>
        </div>
        <div class="block">
            <a href="parcours.php" style="display: flex; flex-direction: row;">
                <div>Parcours</div>
            </a>
        </div>
        <div class="block">
            <a href="competences.php" style="display: flex; flex-direction: row;">
                <div>Compétences</div>
            </a>
        </div>
        <div class="block">
            <a href="experiences.php" style="display: flex; flex-direction: row;">
                <div>Expériences</div>
            </a>
        </div>
        <div class="block">
            <a href="contact-ajout.php" style="display: flex; flex-direction: row;">
                <div class="pageActuelle">Contact</div>
            </a>
        </div>
    </nav>    


    <?php
        //écrire ma requete SQL pour récupérer les messages
        $sql = "SELECT * FROM post";
    
        //envoyer la requete à MySQL
        $stmt = $pdo->prepare($sql);
    
        //exécuter la requete
        $stmt->execute();
    
        //récupérer le resultat avec ->fetch()
        $post = $stmt->fetchAll();
    ?>

<div class="container">
		<nav>
            <a href="contact-voir.php">Voir les messages</a>
		</nav>

</div>

    <?php 

    //pour appeler une fonction

    //function debug($var){
        //echo '<pre style="background-color: #000; color: lightgreen; padding: 100px;">';
        //print_r($var);
        //echo '</pre>';
    //}

    //debug($_POST);


    if(!empty($_POST)){
        $formIsValid = true;
        $nom = strip_tags($_POST['nom']);
        $prenom = strip_tags($_POST['prenom']);
        $email = strip_tags($_POST['email']);
        $entreprise = strip_tags($_POST['entreprise']);
        $message = strip_tags($_POST['message']);


        //tableau qui stocke nos éventuels messages derreur
        $errors = [];

        //si le nom est vide
        if(empty($nom)){
            $formIsValid = false;
            $errors[] = "Merci de remplir le champs \"Votre NOM\"";
        }

        //si le nom est trop court
        elseif(mb_strlen($nom) <= 1){
            $formIsValid = false;
            $errors[] = "Votre NOM est trop court";
        }    


        //si le nom est vide
        if(empty($prenom)){
            $formIsValid = false;
            $errors[] = "Merci de remplir le champs \"Votre PRENOM\"";
        }

        //si le nom est trop court
        elseif(mb_strlen($prenom) <= 1){
            $formIsValid = false;
            $errors[] = "Votre PRENOM est trop court";
        }   

        //validation de l'email
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $formIsValid = false;
            $errors[] = "Votre EMAIL n'est pas valide !";
        }

        //si le nom est vide
        if(empty($entreprise)){
            $formIsValid = false;
            $errors[] = "Merci de remplir le champs \"Votre ENTREPRISE\"";
        }   

        //si le champs du message est vide
        if(empty($message)){
            $formIsValid = false;
            $errors[] = "Merci d'écrire quelque chose dans le champs \"MESSAGE\" !!";
        }


        //si le formulaire est toujours valide
        if($formIsValid == true){
        $sql = "INSERT INTO post 
                (nom, prenom, email, entreprise, message, date)
                VALUES 
                (:nom, :prenom, :email, :entreprise, :message, NOW())";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":email" => $email,
            ":entreprise" => $entreprise,
            ":message" => $message,
        ]);
        }

        //var_dump($_POST);
    }

  ?>

	    <div class="container">
		    <form method="post">
	            <div> 
	                <label for="nom"><h4>VOTRE NOM</h4></label>
	                <input type="text" name="nom" id="nom">
                </div>
                <div> 
	                <label for="prenom"><h4>VOTRE PRENOM</h4></label>
	                <input type="text" name="prenom" id="prenom">
	            </div>
	            <div> 
	                <label for="email"><h4>VOTRE EMAIL</h4></label>
	                <input type="email" name="email" id="email">
                </div>
                <div> 
	                <label for="entreprise"><h4>VOTRE ENTREPRISE</h4></label>
	                <input type="text" name="entreprise" id="entreprise">
	            </div>
	            <div> 
	                <label for="message"><h4>VOTRE MESSAGE</h4></label>
	                <textarea name="message" id="message"></textarea>
	            </div>
            
                <?php 
                    //affiche les éventuelles erreurs de validations
                    //if (!empty($errors)) {
                        //foreach ($errors as $error) {
                        //echo '<div>' . $error . '</div>';
                        //}
                    //}   
                ?>

	            <button>Envoyer !</button>
	        </form>
	    </div>
    </div>
</div>
</div>




<!-- inclue le footer et les fermetures de balises -->
<?php include("bottom.php") ?>