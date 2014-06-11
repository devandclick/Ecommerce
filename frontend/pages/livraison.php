<?php include '../layout/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="span12">
            <h2>Livraison</h2>
            <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                    <div class="span4">
                        <form action="validation.php">
                            <h4>Adresse de livraison</h4>
                            <label class="radio">
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                3b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>
                            </label>
                            <label class="radio">
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                4b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>
                            </label>
                            <label class="radio">
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                5b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>
                            </label>
                            
                            <br /><br />
                            
                            <h4>Adresse de facturation</h4>
                            <label class="radio">
                                <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">
                                3b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>
                            </label>
                            <label class="radio">
                                <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">
                                4b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>
                            </label>
                            <label class="radio">
                                <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">
                                5b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>
                            </label>
                            <button class="btn btn-primary">Valider mon adresse de livraison</button>
                        </form>
                    </div>
                    

								<div class="span4 offset2">
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