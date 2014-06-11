<?php include '../layout/header.php'; ?>
	<div class="container">
		<div class="row">

            <?php include '../layout/col-left-co.php'; ?>
				
				<div class="span9">
                    <h2>Factures</h2>
                    <form>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Date</th>
                                <th>Prix TTC</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">AB29837</a></td>
                                <td>20/02/14</td>
                                <td>333,33€</td>
                                <td><a href="#"><i class="icon-refresh"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="#">AB29837</a></td>
                                <td>20/02/14</td>
                                <td>333,33€</td>
                                <td><a href="#"><i class="icon-refresh"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
    
            </div>
		
		</div>
	</div>
<?php include '../layout/footer.php'; ?>