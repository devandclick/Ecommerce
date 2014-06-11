<?php include '../layout/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="span12">
            <h2>Connexion</h2>
            <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                    <div class="span4">
                        <h4>Pas encore inscrit ?</h4>
                        <em>
                            nous vous invitons à vous inscrire<br />
                            afin de passer votre commande et de manger équilibré.
                        </em>
                        <br /><br />
                        <a href="inscription.php" class="btn btn-primary">S'inscrire</a>
                        
                    </div>
                    
                    <div class="span4 offset2">
                        <h4>Connexion</h4>
                        <form action="mon-compte.php">
                            <label>Nom d'utilisateur</label>
                            <input type="text" name="email" id="email">
                            
                            <label>Mot de passe</label>
                            <input type="text" name="password" id="password">
                            <br />
                            <button class="btn btn-primary">Connexion</button>
                        </form>
                    </div>
                    <div class="span10">
                        <a href="mot-de-passe-perdu.php">Mot de passe perdu ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../layout/footer.php'; ?>