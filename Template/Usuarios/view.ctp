<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $usuario->has('empresa') ? $this->Html->link($usuario->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $usuario->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= h($usuario->cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $usuario->has('departamento') ? $this->Html->link($usuario->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $usuario->departamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefonecelular') ?></th>
            <td><?= h($usuario->telefonecelular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ramal') ?></th>
            <td><?= h($usuario->ramal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($usuario->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($usuario->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sistemasusuarios') ?></h4>
        <?php if (!empty($usuario->sistemasusuarios)): ?>
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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->sistemasusuarios as $sistemasusuarios): ?>
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
