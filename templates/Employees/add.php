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
                        <div class="row mb-1">
                            <div class="col-sm">
                                <h5 class="text-center">ADD User</h5>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <div class="form-outline">
                                    <input type="text" id="nome" name="nome" class="form-control"/>
                                    <label class="form-label" for="nome">Nome</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <div class="form-outline">
                                    <input type="text" id="siape" name="siape" class="form-control"/>
                                    <label class="form-label" for="siape">Siape</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <div class="form-outline">
                                    <input type="text" id="email" name="email" class="form-control"/>
                                    <label class="form-label" for="email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <div class="form-outline">
                                    <input type="text" id="telefone" name="telefone" class="form-control "/>
                                    <label class="form-label" for="telefone">Telefone</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <div class="form-outline">
                                    <input type="password" id="password" name="password" class="form-control"/>
                                    <label class="form-label" for="password">Senha</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <div class="form-outline">
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control"/>
                                    <label class="form-label" for="confirm_password">Repita a Senha</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <?php echo $this->Form->control('role_id', ['options' => $roles]); ?>
                            </div>
                            <div class="col-sm">
                                <?php echo $this->Form->control('area_id', ['options' => $areas]); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <button type="submit" class="btn btn-outline-primary">Enviar</button>
                            </div>
                            <div class="col-sm d-flex justify-content-end">
                                <a class="btn btn-outline-danger" href="/users/index">Index</a>
                            </div>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
