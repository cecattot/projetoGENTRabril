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
                        <?= $this->Form->create($employee) ?>
                        <div class="row mb-1">
                            <div class="col-sm">
                                <h5 class="text-center">Tela de Recuperação</h5>
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
                                    <i class="fas fa-envelope trailing"></i>
                                    <input type="hidden" id="email" name="email" value="<?= $employee['email'] ?>"/>
                                    <input type="text" id="confirm_email" name="confirm_email" class="form-control form-icon-trailing"/>
                                    <label class="form-label" for="confirm_email">E-mail</label>
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
