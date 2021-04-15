<div class="container mt-4">
    <div class="row">
        <div class ="col-md-12">
            <div class ="card">
                <div class="card-header">
                    <h5>Výpis sálů</h5>
                </div>
                <div class="card-body">
                <table class="table table-bordered" id="filmy-list">
                    <thead>
                        <tr>
                            
                            <th>Číslo sálu</th>
                            <th>Typ promítání</th>
                            <th>Typ ozvučení</th>


                        </tr>
                        </thead>
                        <tbody>
                            <?php if($saly): ?>

                                <?php foreach($saly as $row) : ?>
                                    <tr>
                                        
                                        <td><?php echo $row['cislo_salu']; ?></td>
                                        <td><?php echo $row['typ_promitani']; ?></td>
                                        <td><?php echo $row['typ_ozvuceni']; ?></td>

                                        <td>
                                            <a href="#" class="btn btn-primary btn-info">Upravit</a>
                                            <a href="#" class="btn btn-danger btn-dark">Smazat</a>
                                        </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
