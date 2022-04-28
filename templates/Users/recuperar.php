<div class="row">
    <div class="col d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img
                        src="https://mdbcdn.b-cdn.net/wp-content/uploads/2020/06/vertical.webp"
                        alt="Trendy Pants and Shoes"
                        class="img-fluid rounded-start"
                    />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <?= $this->Form->create() ?>
                        <div class="row mb-4">
                            <div class="col-sm">
                                <h5 class="text-center">Tela de Recuperação </h5>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <div class="form-outline">
                                    <i class="fas fa-user trailing"></i>
                                    <input type="text" id="siape" name="siape" class="form-control form-icon-trailing"/>
                                    <label class="form-label" for="siape">SIAPE</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <button type="submit" class="btn btn-outline-primary">Enviar</button>
                            </div>
                            <div class="col-sm d-flex justify-content-end">
                                <a class="btn btn-outline-danger" href="/users/login">Cancelar</a>
                            </div>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
