<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Přidat sál
                        <a href="<?= base_url('vypis_vstupenek') ?>" class="btn btn-dark btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatVstupenku') ?>" method="POST">
                    <div class="form-group mb-2">
                            <label>Čas prodeje</label>
                            <input type="text" name="cas_prodeje"  class="form-control" placeholder="00:00:00" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Cena vstupenky</label>
                            <input type="text" name="cena_vstupenky"  class="form-control" placeholder="V korunách" required>
                        </div>

                        <div class="form-group mb-2">
                            <label>Číslo sálu</label>
                            <input type="text" name="id_salu_id"  class="form-control" placeholder="Napište číslo sálu" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Místo</label>
                            <input type="text" name="misto_v_sale"  class="form-control" placeholder="Napište číslo místa v sále" required>
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
                
