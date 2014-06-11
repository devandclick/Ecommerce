<?php include '../layout/header.php'; ?>
<div class="container">
    <div class="row">
        
        <?php include '../layout/col-left-co.php'; ?>
        
       
        <div class="span9">
            <h2>Livraison</h2>
            <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                                <div class="span4">
                                    <form action="validation.php">
                                        <h4 class="radio">Adresses de livraisons</h4>
                                        <label class="radio">
                                            3b rue jules paulo, 75 000 Paris 
                                            <a href="#"><i class="icon-trash"></i></a>
                                            <a href="#"><i class="icon-refresh"></i></a>
                                        </label>
                                        <label class="radio">
                                            3b rue jules paulo, 75 000 Paris 
                                            <a href="#"><i class="icon-trash"></i></a>
                                            <a href="#"><i class="icon-refresh"></i></a>
                                        </label>
                                        <label class="radio">
                                            3b rue jules paulo, 75 000 Paris 
                                            <a href="#"><i class="icon-trash"></i></a>
                                            <a href="#"><i class="icon-refresh"></i></a>
                                        </label>
                                    </form>
                                </div>

								<div class="span4">
									<h4>Ajouter une nouvelle adresse</h4>
									<form>
										<label>Nom</label>
										<input type="text">
										
										<label>Prénom</label>
										<input type="text">
										
										<label>Adresse</label>
										<input type="text">
										
										<label>Ville</label>
										<input type="text">
										
										<label>Code postal</label>
										<input type="text">
                                        
										<label>Ville</label>
										<input type="text">
                                        
										<label>Téléphone</label>
										<input type="text">                                        
                                        
                                        <br />
										<button class="btn btn-primary">Ajouter</button>
									</form>
								</div>
								
                </div>
            </div>
                        
		</div>
	</div>
<?php include '../layout/footer.php'; ?>