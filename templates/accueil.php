<!-- include le head et le header... -->
<?php include("top.php") ?>

<!-- le menu à gauche -->
<div class="menu-contenu">
    <div class="menu">

    <img class="photo" src="../images/photo-4.jpg" alt="">

        <div class="block">
                <div class="iconeMenu">MENU</div>
        </div>
        <div class="block">
            <a href="#profil" style="display: flex; flex-direction: row;">
                <div style="display: flex;">
                    <img class="logo-menu" src="../images/profil.png" alt="">
                    Présentation
                </div>
            </a>
        </div>
        <div class="block">
            <a href="#parcours" style="display: flex; flex-direction: row;">
                <div style="display: flex;">
                    <img class="logo-menu" src="../images/parcours.png" alt="">
                    Parcours
                </div>
            </a>
        </div>
        <div class="block">
            <a href="#competences" style="display: flex; flex-direction: row;">
                <div style="display: flex;">
                    <img class="logo-menu" src="../images/competence.png" alt="">
                    Compétences
                </div>
            </a>
        </div>
        <div class="block">
            <a href="#experiences" style="display: flex; flex-direction: row;">
                <div style="display: flex;">
                    <img class="logo-menu" src="../images/experiences.png" alt="">
                    Expériences
                </div>
            </a>
        </div>
        <div class="block">
            <a href="#contact" style="display: flex; flex-direction: row;">
                <div style="display: flex;">
                    <img class="logo-menu" src="../images/contact.png" alt="">
                    Contact
                </div>
            </a>
        </div>
    
        <div class="coordonnees">
            <div>06 18 83 51 37</div>
            <div>camille.desens@gmail.com</div>
        </div>
</div>


<!-- page d'accueil citation -->
<div class="contenu">
        <div id="citation" class="citation">
            <div style="display : flex; justify-content: center;">
                <img class="logo-citation" src="../images/chess.png" alt="">
                <img class="logo-citation" src="../images/opportunity.png" alt="">
            </div>
            <h3>« Ne pensez pas à l'échec,
                pensez aux opportunités que vous risquez de manquer
                si vous n'essayez pas. »
            </h3>
            <h5>- Jack Canfield</h5>
        </div>
        

<!-- profil -->
        <div id="profil" class="profil">
            <div class="titre">
                <img src="../images/hello.png" alt="">
                Bienvenue sur mon portfolio !
            </div>
            <div class="texte-presentation">
                Je suis actuellement en 1ère année
                <br>de Bachelor Informatique à Campus Academy.
                <br>Ce qui m'intéresse et me stimule le plus est l'aspect 
                <br>développement d'applications et de site web. 
                <br>J'aime tout ce qui est mise en page, 
                <br>esthétisme et interface utilisateur.
            </div>
            <div>
                <img class="logo-presentation" src="../images/brain.png" alt="">
                <img class="logo-presentation" src="../images/design.png" alt="">
            </div>
            <div class="retour-profil">
                <a class="lien-retour" href="#citation">
                    <img class="fleche-retour" src="../images/fleche-retour-haut.png" alt="">
                    <div>retour haut de page</div>
                </a>
            </div>
        </div>


<!-- parcours -->

        <div id="parcours" class="parcours">
            <div class="texte-parcours">
                <div class="paragraphes-parcours-gauche">
                    <img class="img-parcours-gauche" src="../images/bac.png" alt="">
                        <div style="width: 400px;">
                            <div class="diplome">Baccalauréat Scientifique</div>
                            <div class="lieu">Lycée Aristide Briand, St-Nazaire</div>
                            <div class="annee">2010</div>
                        </div>
                </div>
                <div class="paragraphes-parcours-droite">
                    <div style="width: 400px;">
                            <div class="diplome">Cycle Préparatoire Scientifique</div>
                            <div class="lieu">Ecole des Métiers de l'Environnement, Rennes</div>
                            <div class="annee">2010-2012</div>
                        </div>
                    <img class="img-parcours-droite" src="../images/prepa.png" alt="">
                </div>
                <div class="paragraphes-parcours-gauche">
                    <img class="img-parcours-gauche" src="../images/biologie.png" alt="">
                        <div style="width: 400px;">
                            <div class="diplome">Licence 2 Biologie</div>
                            <div class="lieu">Université de Bretagne Sud, Vannes</div>
                            <div class="annee">2012-2013</div>
                        </div>
                </div>
                <div class="paragraphes-parcours-droite">
                    <div style="width: 400px;">
                            <div class="diplome">CQP Bar et Monde de la Nuit</div>
                            <div class="lieu">Henriman Formation, Nantes</div>
                            <div class="annee">2013-2014</div>
                        </div>
                    <img class="img-parcours-droite" src="../images/bar.png" alt="">
                </div>
                <div class="paragraphes-parcours-gauche">
                    <img class="img-parcours-gauche" src="../images/vestiaire.png" alt="">
                        <div style="width: 400px;">
                            <div class="diplome">Employée Polyvalente en bar</div>
                            <div class="lieu">Bar Au Vestiaire, Nantes</div>
                            <div class="annee">2014-2019</div>
                        </div>
                </div>
                <div class="paragraphes-parcours-droite">
                    <div style="width: 400px;">
                            <div class="diplome">Bachelor 1 DevOps</div>
                            <div class="lieu">Campus Academy, Nantes</div>
                            <div class="annee">2019-2020</div>
                        </div>
                    <img class="img-parcours-droite" src="../images/info.png" alt="">
                </div>
            </div>
            <div class="retour-parcours">
                <a class="lien-retour" href="#citation">
                    <img class="fleche-retour" src="../images/fleche-retour-haut.png" alt="">
                    <div>retour haut de page</div>
                </a>
            </div>
        </div>


<!-- compétences -->

        <div id="competences" class="competences">
            <div class="texte-competences">
                <div style="display: flex;">
                    <div class="paragraphe-competence">
                        <div class="paragraphe-icone">
                            <img class="logo-competences" src="../images/logo-html.png" alt="">    
                            <div>Html</div>
                        </div>
                        <div class="paragraphe-icone">
                            <img class="logo-competences" src="../images/logo-css.png" alt="">    
                            <div>CSS</div>
                        </div>
                    </div>
                    <div class="paragraphe-competence">
                        <div class="paragraphe-icone">
                            <img class="logo-competences" src="../images/logo-php.png" alt="">    
                            <div>PHP</div>
                        </div>
                        <div class="paragraphe-icone">
                            <img class="logo-competences" src="../images/logo-github.png" alt="">    
                            <div>GitHub</div>
                        </div>
                    </div>
                    <div class="paragraphe-competence">
                        <div class="paragraphe-icone">
                            <img class="logo-competences" src="../images/logo-bdd.png" alt="">    
                            <div>Base de données</div>
                        </div>
                        <div class="paragraphe-icone">
                            <img class="logo-competences" src="../images/logo-python.png" alt="">    
                            <div>Python</div>
                        </div>
                    </div>
                    <div class="paragraphe-competence">
                        <div class="paragraphe-icone">
                            <img class="logo-competences" src="../images/logo-photoshop.png" alt="">    
                            <div>Photoshop</div>
                        </div>
                        <div class="paragraphe-icone">
                            <img class="logo-competences" src="../images/logo-anglais.png" alt="">    
                            <div>Anglais</div>
                        </div>
                    </div>
                </div>

                <div class="lien-bas">
                    <a class="lien-bas-competences" href="#img-competences">
                        <img src="../images/fleche-retour-bas.png" alt="">
                    </a>
                </div>

                <img id="img-competences" class="img-competences" src="../images/competences.png" alt="">

            </div>
            <div class="retour-competences">
                <a class="lien-retour" href="#citation">
                    <img class="fleche-retour" src="../images/fleche-retour-haut.png" alt="">
                    <div>retour haut de page</div>
                </a>
            </div>
        </div>


<!-- expériences -->

        <div id="experiences" class="experiences">
            <div class="texte-experiences">
                <div class="paragraphes-experiences">
                    <img class="logo-experience" src="../images/stage.png" alt="">
                    <div class="titre-experience">Stage en entreprise</div>
                    <br>journée d’immersion dans l'entreprise Peek'in, Nantes
                    <img class="logo-peekin" src="../images/peekin.png" alt="">
                </div>
                <div class="paragraphes-experiences">
                    <img class="logo-experience" src="../images/projet.png" alt="">
                    <div class="titre-experience">Projets</div>
                    <br>Création en groupe d’une application de localisation 
                    <br>Projet "Campus Factory", Campus Academy, Nantes
                </div>
            </div>
            <div class="retour-experiences">
                <a class="lien-retour" href="#citation">
                    <img class="fleche-retour" src="../images/fleche-retour-haut.png" alt="">
                    <div>retour haut de page</div>
                </a>
            </div>
        </div>


<!-- contact -->
<!-- on inclue la base de données -->
<?php 
    include("../bdd.php");
?>

<!-- ajouter un message -->
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
        <div id="contact" class="contact">
	        <div class="texte-contact">
                <form method="post">
                    <div class="nom-prenom">
	                    <div class="champs"> 
	                        <label for="nom"><h4>Votre Nom</h4></label>
	                        <input type="text" name="nom" id="nom">
                        </div>
                        <div class="champs"> 
	                        <label for="prenom"><h4>Votre Prénom</h4></label>
	                        <input type="text" name="prenom" id="prenom">
                        </div>
                    </div>
                    <div class="email-entreprise">
	                    <div class="champs"> 
	                        <label for="email"><h4>Votre Email</h4></label>
	                        <input type="email" name="email" id="email">
                        </div>
                        <div class="champs"> 
	                        <label for="entreprise"><h4>Votre Entreprise</h4></label>
	                        <input type="text" name="entreprise" id="entreprise">
                        </div>
                    </div>
	                    <div class="champs-message"> 
	                        <label for="message"><h4>Votre Message</h4></label>
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

            <div class="lien-bas">
                <a class="lien-retour" href="#messages">
                    <div>voir les messages</div>
                    <img src="../images/fleche-retour-bas.png" alt="">
                </a>
            </div>
            




<!-- la liste des messages -->
            <div id="messages" class="container">	
		        <form method="post">
                    <h3>Affichage des <?php echo count($post);?> messages.</h3>
                    <?php
                    foreach($post as $posts){
                        ?>
                        <h4> Message de <?php echo $posts['nom'] . ' ' . $posts['prenom'] ;?> (<?php echo $posts['entreprise']?> ) </h4>
                        <article class="message"> <?php echo $posts['message']?> </article> 
                        <h5> <?php ; echo $posts['date'] ?> </h5> <?php ;
                        }
                    ?>
                </form>
                <div class="retour-messages">
                <a class="lien-retour" href="#citation">
                    <img class="fleche-retour" src="../images/fleche-retour-haut.png" alt="">
                    <div>retour haut de page</div>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>
