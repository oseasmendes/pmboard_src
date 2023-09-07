<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sprinttipo $sprinttipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sprinttipo'), ['action' => 'edit', $sprinttipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sprinttipo'), ['action' => 'delete', $sprinttipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sprinttipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sprinttipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sprinttipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutossprints'), ['controller' => 'Projetosprodutossprints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutossprint'), ['controller' => 'Projetosprodutossprints', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sprinttipos view large-9 medium-8 columns content">
    <h3><?= h($sprinttipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sprinttipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sprinttipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sprinttipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sprinttipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosprodutossprints') ?></h4>
        <?php if (!empty($sprinttipo->projetosprodutossprints)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Datainicio') ?></th>
                <th scope="col"><?= __('Datafim') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Sprinttipo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sprinttipo->projetosprodutossprints as $projetosprodutossprints): ?>
            <tr>
                <td><?= h($projetosprodutossprints->id) ?></td>
                <td><?= h($projetosprodutossprints->projetosproduto_id) ?></td>
                <td><?= h($projetosprodutossprints->descricao) ?></td>
                <td><?= h($projetosprodutossprints->datainicio) ?></td>
                <td><?= h($projetosprodutossprints->datafim) ?></td>
                <td><?= h($projetosprodutossprints->created) ?></td>
                <td><?= h($projetosprodutossprints->modified) ?></td>
                <td><?= h($projetosprodutossprints->sprinttipo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutossprints', 'action' => 'view', $projetosprodutossprints->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutossprints', 'action' => 'edit', $projetosprodutossprints->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutossprints', 'action' => 'delete', $projetosprodutossprints->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutossprints->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
