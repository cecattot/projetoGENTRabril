<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\role $role
 */
?>

<div class="row">
    <div class="col d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="card mb-3" style="max-width: 700px;">
            <div class="row g-0 mb-2">
                <div class="col-md-4">
                    <div class="card-body">

                    <img
                        src="https://media.istockphoto.com/photos/young-cheerful-indian-mathematics-teacher-in-classroom-vertical-picture-id182698785"
                        alt="Trendy Pants and Shoes"
                        class="img-fluid rounded-start"
                    />
                </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row mb-1">
                            <div class="col-sm">
                                <h5 class="text-center">Papel</h5>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm">
                                Nome: <?= $role['nome'] ?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm">
                                Ativo: <?= $role['ativo'] ?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm">
                                Id: <?= $role['id'] ?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm">
                                Created: <?= $role['created'] ?>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm">
                                Modified: <?= $role['modified'] ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm">
                                <?= $this->Form->postLink(__('Delete role'), ['action' => 'delete', $role->id], ['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id), 'class' => 'side-nav-item']) ?>
                            </div>
                            <div class="col-sm">
                                <?= $this->Html->link(__('List roles'), ['action' => 'index'], ['class' => 'btn btn-warning btn-sm']) ?>
                            </div>
                            <div class="col-sm">
                                <?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id], ['class' => 'btn btn-secondary btn-sm']) ?>
                            </div>
                            <div class="col-sm">
                                <?= $this->Html->link(__("New⠀role"), ['action' => 'add'], ['class' => 'btn btn-success btn-sm']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-sm table-hover" id="tableIndex">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>SIAPE</th>
                            <th>Ativo</th>
                            <th>Created</th>
                            <th>Modified</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($role->users as $user): ?>
                            <tr>
                                <td><?= $this->Number->format($user->id) ?></td>
                                <td><?= h($user->siape) ?></td>
                                <td><?= h($user->ativo) ?></td>
                                <td><?= h($user->created) ?></td>
                                <td><?= h($user->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller'=>'users', 'action' => 'view', $user->id], ['class' => 'btn btn-secondary btn-sm']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-warning btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
