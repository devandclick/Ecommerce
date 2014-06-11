<?php include '../layout/header.php'; ?>
<div class="container">
    <div class="row">
        
        <?php include '../layout/col-left-co.php'; ?>
        
        <div class="span9">
            <h2>Mes informations</h2>
            <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                    
                    <div class="span4">
                        <h4>Modifier mes informations</h4>
                        <form>
                            <label>Nom d'utilisateur</label>
                            <input type="text" name="email" id="email">
                            
                            <label>Adresse email</label>
                            <input type="text" name="email" id="email">
                            
                            <label>Mot de passe</label>
                            <input type="text" name="email" id="email">
                            
                            <label>Confirmer</label>
                            <input type="text" name="password" id="password">
                            <br />
                            <button class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../layout/footer.php'; ?>