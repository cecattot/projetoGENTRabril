<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="row">
    <div class="col d-flex align-items-center justify-content-center" style="height: 80vh;">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img
                        src="https://media.istockphoto.com/photos/young-cheerful-indian-mathematics-teacher-in-classroom-vertical-picture-id182698785"
                        alt="Trendy Pants and Shoes"
                        class="img-fluid rounded-start"
                    />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row mb-1">
                            <div class="col-sm">
                                <h5 class="text-center">Usuário</h5>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm">
                                SIAPE: <?= $user['siape'] ?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm">
                                Ativo: <?= $user['ativo'] ?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm">
                                Role: <?= $user['role']['nome'] ?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm">
                                Id: <?= $user['id'] ?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm">
                                Created: <?= $user['created'] ?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm">
                                Modified: <?= $user['modified'] ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
                            </div>
                            <div class="col-sm">
                                <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'btn btn-warning btn-sm']) ?>
                            </div>
                            <div class="col-sm">
                                <?= $this->Html->link(__("New⠀User"), ['action' => 'add'], ['class' => 'btn btn-success btn-sm']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
