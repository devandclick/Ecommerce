<?php include '../layout/header.php'; ?>

	<div class="container">
		<div class="row">
            <?php include '../layout/col-left.php'; ?>
			
			<div class="span9">
				<div class="row">
					<div class="span5">
						<img src="../img/holder.png" alt="DevAndClick" width="470" height="310">
					</div>

					<div class="span4">
						<h4>Item Brand and Category</h4>
						<h5>AB29837 Item Model</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<h4>3.33€</h4>
						<form action="panier.php">
					

							<select name="qte" class="span1">
								<option>1</option>
							</select>

							<div>
							    <button class="btn btn-primary">Ajouter au panier</button>
							</div>
						</form>
						
					</div>
				</div>


			</div>
		</div>
	</div>
<?php include '../layout/footer.php'; ?>