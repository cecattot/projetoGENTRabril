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
                        <?= $this->Form->create($userForm) ?>
                        <div class="row mb-1">
                            <div class="col-sm">
                                <h5 class="text-center">Tela de Recuperação  SENHA</h5>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm ">
                                <?= $employee['nome'] ?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm">
                                SIAPE: <?= $employee['siape'] ?>
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-sm" id="emailBarrado">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <div class="form-outline">
                                    <i class="fas fa-key trailing"></i>
                                    <input type="password" id="password" name="password" class="form-control form-icon-trailing"/>
                                    <label class="form-label" for="password">Senha</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <div class="form-outline">
                                    <i class="fas fa-key trailing"></i>
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control form-icon-trailing"/>
                                    <label class="form-label" for="confirm_password">Confirme a senha</label>
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

<script type="text/javascript">
    function emailMask(email) {
        var maskedEmail = email.replace(/([^@\.])/g, "*").split('');
        var previous	= "";
        for(i=0;i<maskedEmail.length;i++){
            if (i<=1 || previous == "." || previous == "@"){
                maskedEmail[i] = email[i];
            }
            previous = email[i];
        }
        return maskedEmail.join('');
    }
    // $('#emailBarrado').val(emailMask($('#emailBarrado').val()));
    var masked = emailMask("<?= $employee['email'] ?>");
    $('#emailBarrado').text("e-mail: "+ masked);

</script>
