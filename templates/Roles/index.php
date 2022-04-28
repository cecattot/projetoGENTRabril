<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\role[]|\Cake\Collection\CollectionInterface $roles
 */
?>
<br>
<div class="roles index content">
    <div class="card border border-success shadow-0 mb-3">
        <div class="card-header bg-transparent border-success">
            <div class="row">
                <div class="col-10">
                    <h3 class="text-center"><?= __('Papeis') ?></h3>
                </div>
                <div class="col">
                    <?= $this->Html->link(__('New role'), ['action' => 'add'], ['class' => 'btn btn-success']) ?>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover" id="tableIndex">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Ativo</th>
                                <th>Created</th>
                                <th>Modified</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($roles as $role): ?>
                                <tr>
                                    <td><?= $this->Number->format($role->id) ?></td>
                                    <td><?= h($role->nome) ?></td>
                                    <td><?= h($role->ativo) ?></td>
                                    <td><?= h($role->created) ?></td>
                                    <td><?= h($role->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $role->id], ['class' => 'btn btn-secondary btn-sm']) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $role->id], ['class' => 'btn btn-danger btn-sm']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $role->id], ['class' => 'btn btn-warning btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?>
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

