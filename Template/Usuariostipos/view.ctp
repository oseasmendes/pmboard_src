<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuariostipo $usuariostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuariostipo'), ['action' => 'edit', $usuariostipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuariostipo'), ['action' => 'delete', $usuariostipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuariostipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuariostipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuariostipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuariostipos view large-9 medium-8 columns content">
    <h3><?= h($usuariostipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($usuariostipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuariostipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($usuariostipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($usuariostipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sistemasusuarios') ?></h4>
        <?php if (!empty($usuariostipo->sistemasusuarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Ramal') ?></th>
                <th scope="col"><?= __('Responsabilidade Id') ?></th>
                <th scope="col"><?= __('Empresa') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Statususuario') ?></th>
                <th scope="col"><?= __('Knowhow Id') ?></th>
                <th scope="col"><?= __('Autenticacao') ?></th>
                <th scope="col"><?= __('Login') ?></th>
                <th scope="col"><?= __('Passwordapp') ?></th>
                <th scope="col"><?= __('Usuariostipo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuariostipo->sistemasusuarios as $sistemasusuarios): ?>
            <tr>
                <td><?= h($sistemasusuarios->id) ?></td>
                <td><?= h($sistemasusuarios->sistema_id) ?></td>
                <td><?= h($sistemasusuarios->usuario_id) ?></td>
                <td><?= h($sistemasusuarios->nome) ?></td>
                <td><?= h($sistemasusuarios->ramal) ?></td>
                <td><?= h($sistemasusuarios->responsabilidade_id) ?></td>
                <td><?= h($sistemasusuarios->empresa) ?></td>
                <td><?= h($sistemasusuarios->created) ?></td>
                <td><?= h($sistemasusuarios->modified) ?></td>
                <td><?= h($sistemasusuarios->statususuario) ?></td>
                <td><?= h($sistemasusuarios->knowhow_id) ?></td>
                <td><?= h($sistemasusuarios->autenticacao) ?></td>
                <td><?= h($sistemasusuarios->login) ?></td>
                <td><?= h($sistemasusuarios->passwordapp) ?></td>
                <td><?= h($sistemasusuarios->usuariostipo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasusuarios', 'action' => 'view', $sistemasusuarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasusuarios', 'action' => 'edit', $sistemasusuarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasusuarios', 'action' => 'delete', $sistemasusuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasusuarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
