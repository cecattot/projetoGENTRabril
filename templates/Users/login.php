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
                        <div class="row mb-4">
                            <div class="col-sm">
                                <h5 class="text-center"> Tela de Login</h5>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <div class="form-outline">
                                    <i class="fas fa-user trailing"></i>
                                    <input type="text" id="siape" class="form-control form-icon-trailing" />
                                    <label class="form-label" for="siape">SIAPE</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <div class="form-outline">
                                    <i class="fas fa-key trailing"></i>
                                    <input type="text" id="password" class="form-control form-icon-trailing" />
                                    <label class="form-label" for="password">Senha</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <button type="submit" class="btn btn-outline-primary">Logar</button>
                            </div>
                            <div class="col-sm d-flex justify-content-end">
                                <a class="btn btn-outline-danger" href="#"><small>Esqueci a senha</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('siape', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Esqueceu a senha", ['action' => 'XXXX']) ?>
</div>
