<?php include '../layout/header.php'; ?>
<div class="container">
    <div class="row">

        <?php include '../layout/col-left-co.php'; ?>
        <div class="span9">

                    <h2>Factures du jour</h2>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Client</th>
                                <th>Date</th>
                                <th>Prix TTC</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">AB29837</a></td>
                                <td><a href="#">M Catelain</a></td>
                                <td>20/02/14</td>
                                <td>333,33€</td>
                                <td>
                                    <a href="#"><i class="icon-edit"></i></a>
                                    <a href="#"><i class="icon-remove"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">AB29837</a></td>
                                <td><a href="#">M Catelain</a></td>
                                <td>20/02/14</td>
                                <td>333,33€</td>
                                <td>
                                    <a href="#"><i class="icon-edit"></i></a>
                                    <a href="#"><i class="icon-remove"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
    

        </div>
    </div>
</div>
<?php include '../layout/footer.php'; ?>