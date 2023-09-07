<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientesalocs'), ['controller' => 'Clientesalocs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clientesaloc'), ['controller' => 'Clientesalocs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nomepesquisa') ?></th>
            <td><?= h($cliente->nomepesquisa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cliente->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cliente->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Clientesalocs') ?></h4>
        <?php if (!empty($cliente->clientesalocs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Codenome') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Cliente Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->clientesalocs as $clientesalocs): ?>
            <tr>
                <td><?= h($clientesalocs->id) ?></td>
                <td><?= h($clientesalocs->descricao) ?></td>
                <td><?= h($clientesalocs->codenome) ?></td>
                <td><?= h($clientesalocs->created) ?></td>
                <td><?= h($clientesalocs->modified) ?></td>
                <td><?= h($clientesalocs->cliente_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Clientesalocs', 'action' => 'view', $clientesalocs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Clientesalocs', 'action' => 'edit', $clientesalocs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clientesalocs', 'action' => 'delete', $clientesalocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientesalocs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
