<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Přidat sál
                        <a href="<?= base_url('vypis_salu') ?>" class="btn btn-dark btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatSal') ?>" method="POST">
                    <div class="form-group mb-2">
                            <label>Číslo sálu</label>
                            <input type="number" name="cislo_salu"  class="form-control" placeholder="Napište číslo sálu" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Typ promítání</label>
                            <input type="text" name="typ_promitani"  class="form-control" placeholder="Napiš typ promítání" required pattern="3[Dd]|2[Dd]">
                        </div>
                        <div class="form-group mb-2">
                            <label>Typ ozvučení</label>
                            <input type="text" name="typ_ozvuceni"  class="form-control" placeholder="Napište typ ozvučení" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info mt-2">Uložit</button>
                        </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div></div>
                
