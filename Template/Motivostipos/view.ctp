<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Motivostipo $motivostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Motivostipo'), ['action' => 'edit', $motivostipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Motivostipo'), ['action' => 'delete', $motivostipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motivostipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Motivostipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motivostipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="motivostipos view large-9 medium-8 columns content">
    <h3><?= h($motivostipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($motivostipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($motivostipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($motivostipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($motivostipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Motivos') ?></h4>
        <?php if (!empty($motivostipo->motivos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Motivostipo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($motivostipo->motivos as $motivos): ?>
            <tr>
                <td><?= h($motivos->id) ?></td>
                <td><?= h($motivos->descricao) ?></td>
                <td><?= h($motivos->created) ?></td>
                <td><?= h($motivos->modified) ?></td>
                <td><?= h($motivos->motivostipo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Motivos', 'action' => 'view', $motivos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Motivos', 'action' => 'edit', $motivos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Motivos', 'action' => 'delete', $motivos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motivos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
