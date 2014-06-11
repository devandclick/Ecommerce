<?php include '../layout/header.php'; ?>
	<div class="container">
		<div class="row">
                <?php include '../layout/col-left.php'; ?>
				<div class="span9">
                    <h2>Valider mon parnier</h2>
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
                                    2
                                </td>
                                <td>333,33€</td>
                                <td>333,33€</td>
                            </tr>
                            <tr>
                                <td>AC34423</td>
                                <td>
                                    1
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
                    <dd>999,99€ TTC</dd>
                </dl>
                <div class="clearfix"></div>
                <a href="#" class="btn btn-success pull-right">Payer</a>
            </div>
		
		</div>
	</div>
<?php include '../layout/footer.php'; ?>