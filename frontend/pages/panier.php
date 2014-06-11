<?php include '../layout/header.php'; ?>
	<div class="container">
		<div class="row">
                <?php include '../layout/col-left.php'; ?>
				<div class="span9">
                    <h2>Votre parnier</h2>
                    <form>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AB29837</td>
                                <td>
                                    <select class="span1"><option>1</option></select>&nbsp;
                                    <a href="#"><i class="icon-refresh"></i></a>
                                    <a href="#"><i class="icon-trash"></i></a>
                                </td>
                                <td>333,33€</td>
                                <td>333,33€</td>
                            </tr>
                            <tr>
                                <td>AC34423</td>
                                <td>
                                    <select class="span1"><option>1</option></select>&nbsp;
                                    <a href="#"><i class="icon-refresh"></i></a>
                                    <a href="#"><i class="icon-trash"></i></a>
                                </td>                                
                                <td>333,33€</td>
                                <td>666,66€</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
    
                <dl class="dl-horizontal pull-right">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>
                    
                    <dt>TVA :</dt>
                    <dd>200€</dd>
    
                    <dt>Total:</dt>
                    <dd>999,99€</dd>
                </dl>
                <div class="clearfix"></div>
                <a href="livraison.php" class="btn btn-success pull-right">Valider mon panier</a>
                <a href="index.php" class="btn btn-primary">Continuer mes achats</a>
            </div>
		
		</div>
	</div>
<?php include '../layout/footer.php'; ?>