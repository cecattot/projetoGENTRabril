<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<br>
<div class="users index content">
    <div class="card border border-success shadow-0 mb-3">
        <div class="card-header bg-transparent border-success">
            <div class="row">
                <div class="col-10">
                    <h3 class="text-center"><?= __('Users') ?></h3>
                </div>
                <div class="col">
                    <?= $this->Html->link(__('New User'), ['controller' => 'employees', 'action' => 'add'], ['class' => 'btn btn-success']) ?>
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
                                <th>SIAPE</th>
                                <th>Ativo</th>
                                <th>Created</th>
                                <th>Modified</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $this->Number->format($user->id) ?></td>
                                    <td><?= h($user->siape) ?></td>
                                    <td><?= h($user->ativo) ?></td>
                                    <td><?= h($user->created) ?></td>
                                    <td><?= h($user->modified) ?></td>
                                    <td><?= $user->has('role') ? $this->Html->link($user->role->nome, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-secondary btn-sm']) ?>
<!--                                        //= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-danger btn-sm']) ?> --!-->
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

