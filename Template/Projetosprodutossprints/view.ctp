<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutossprint $projetosprodutossprint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutossprint'), ['action' => 'edit', $projetosprodutossprint->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutossprint'), ['action' => 'delete', $projetosprodutossprint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutossprint->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutossprints'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutossprint'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sprinttipos'), ['controller' => 'Sprinttipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sprinttipo'), ['controller' => 'Sprinttipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregassprints'), ['controller' => 'Projetosprodutosentregassprints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentregassprint'), ['controller' => 'Projetosprodutosentregassprints', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutossprints view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutossprint->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $projetosprodutossprint->has('projetosproduto') ? $this->Html->link($projetosprodutossprint->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutossprint->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutossprint->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sprinttipo') ?></th>
            <td><?= $projetosprodutossprint->has('sprinttipo') ? $this->Html->link($projetosprodutossprint->sprinttipo->id, ['controller' => 'Sprinttipos', 'action' => 'view', $projetosprodutossprint->sprinttipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutossprint->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datainicio') ?></th>
            <td><?= h($projetosprodutossprint->datainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datafim') ?></th>
            <td><?= h($projetosprodutossprint->datafim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutossprint->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutossprint->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosprodutosentregassprints') ?></h4>
        <?php if (!empty($projetosprodutossprint->projetosprodutosentregassprints)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosprodutossprint Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosprodutossprint->projetosprodutosentregassprints as $projetosprodutosentregassprints): ?>
            <tr>
                <td><?= h($projetosprodutosentregassprints->id) ?></td>
                <td><?= h($projetosprodutosentregassprints->projetosprodutossprint_id) ?></td>
                <td><?= h($projetosprodutosentregassprints->projetosprodutosentrega_id) ?></td>
                <td><?= h($projetosprodutosentregassprints->created) ?></td>
                <td><?= h($projetosprodutosentregassprints->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregassprints', 'action' => 'view', $projetosprodutosentregassprints->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregassprints', 'action' => 'edit', $projetosprodutosentregassprints->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregassprints', 'action' => 'delete', $projetosprodutosentregassprints->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregassprints->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
