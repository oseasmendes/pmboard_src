<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Login') ?></th>
            <td><?= h($user->login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pwd') ?></th>
            <td><?= h($user->pwd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($user->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile Id') ?></th>
            <td><?= $this->Number->format($user->profile_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetos') ?></h4>
        <?php if (!empty($user->projetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Programa Id') ?></th>
                <th scope="col"><?= __('Realizadodatainicio') ?></th>
                <th scope="col"><?= __('Realizadodatafim') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Administrativo') ?></th>
                <th scope="col"><?= __('Prioridade') ?></th>
                <th scope="col"><?= __('Fase Id') ?></th>
                <th scope="col"><?= __('Codenome') ?></th>
                <th scope="col"><?= __('Propostatecnica') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Previstodatainicio') ?></th>
                <th scope="col"><?= __('Previstodatafim') ?></th>
                <th scope="col"><?= __('Datacancelamento') ?></th>
                <th scope="col"><?= __('Datasuspensao') ?></th>
                <th scope="col"><?= __('Arquivo') ?></th>
                <th scope="col"><?= __('Dataaprovacao') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->projetos as $projetos): ?>
            <tr>
                <td><?= h($projetos->id) ?></td>
                <td><?= h($projetos->descricao) ?></td>
                <td><?= h($projetos->programa_id) ?></td>
                <td><?= h($projetos->realizadodatainicio) ?></td>
                <td><?= h($projetos->realizadodatafim) ?></td>
                <td><?= h($projetos->statusfuncional_id) ?></td>
                <td><?= h($projetos->administrativo) ?></td>
                <td><?= h($projetos->prioridade) ?></td>
                <td><?= h($projetos->fase_id) ?></td>
                <td><?= h($projetos->codenome) ?></td>
                <td><?= h($projetos->propostatecnica) ?></td>
                <td><?= h($projetos->created) ?></td>
                <td><?= h($projetos->modified) ?></td>
                <td><?= h($projetos->previstodatainicio) ?></td>
                <td><?= h($projetos->previstodatafim) ?></td>
                <td><?= h($projetos->datacancelamento) ?></td>
                <td><?= h($projetos->datasuspensao) ?></td>
                <td><?= h($projetos->arquivo) ?></td>
                <td><?= h($projetos->dataaprovacao) ?></td>
                <td><?= h($projetos->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetos', 'action' => 'view', $projetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetos', 'action' => 'edit', $projetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetos', 'action' => 'delete', $projetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
