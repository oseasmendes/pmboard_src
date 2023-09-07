<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solucoestipo $solucoestipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Solucoestipo'), ['action' => 'edit', $solucoestipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Solucoestipo'), ['action' => 'delete', $solucoestipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solucoestipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Solucoestipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solucoestipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Solucoesaplicadas'), ['controller' => 'Solucoesaplicadas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solucoesaplicada'), ['controller' => 'Solucoesaplicadas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="solucoestipos view large-9 medium-8 columns content">
    <h3><?= h($solucoestipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($solucoestipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($solucoestipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($solucoestipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($solucoestipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Solucoesaplicadas') ?></h4>
        <?php if (!empty($solucoestipo->solucoesaplicadas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Solucoestipo Id') ?></th>
                <th scope="col"><?= __('Detalhestecnico') ?></th>
                <th scope="col"><?= __('Prio') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($solucoestipo->solucoesaplicadas as $solucoesaplicadas): ?>
            <tr>
                <td><?= h($solucoesaplicadas->id) ?></td>
                <td><?= h($solucoesaplicadas->descricao) ?></td>
                <td><?= h($solucoesaplicadas->solucoestipo_id) ?></td>
                <td><?= h($solucoesaplicadas->detalhestecnico) ?></td>
                <td><?= h($solucoesaplicadas->prio) ?></td>
                <td><?= h($solucoesaplicadas->ativo) ?></td>
                <td><?= h($solucoesaplicadas->created) ?></td>
                <td><?= h($solucoesaplicadas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Solucoesaplicadas', 'action' => 'view', $solucoesaplicadas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Solucoesaplicadas', 'action' => 'edit', $solucoesaplicadas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Solucoesaplicadas', 'action' => 'delete', $solucoesaplicadas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solucoesaplicadas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
