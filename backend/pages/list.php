<?php include '../layout/header.php'; ?>
<div class="container">
    <div class="row">

        <?php include '../layout/col-left-co.php'; ?>
        <div class="span9">

                    <h2>Produits</h2>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Date</th>
                                <th>nom</th>
                                <th>Prix HT</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">AB29837</a></td>
                                <td>20/02/14</td>
                                <td><a href="#">tomate</a></td>
                                <td>333,33€</td>
                                <td><a href="#"><i class="icon-refresh"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="#">AB29837</a></td>
                                <td>20/02/14</td>
                                <td><a href="#">poire</a></td>
                                <td>333,33€</td>
                                <td><a href="#"><i class="icon-refresh"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                    
            <div class="pagination">
                <ul>
                    <li class"disabled"><span>Précédent</span></li>
                    <li class"disabled"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Suivant</a></li>
                </ul>
            </div>

    

        </div>
    </div>
</div>
<?php include '../layout/footer.php'; ?>