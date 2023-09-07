<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Riscoscategoria $riscoscategoria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Riscoscategoria'), ['action' => 'edit', $riscoscategoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Riscoscategoria'), ['action' => 'delete', $riscoscategoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $riscoscategoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Riscoscategorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Riscoscategoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Riscos'), ['controller' => 'Riscos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Risco'), ['controller' => 'Riscos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="riscoscategorias view large-9 medium-8 columns content">
    <h3><?= h($riscoscategoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($riscoscategoria->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($riscoscategoria->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($riscoscategoria->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($riscoscategoria->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Riscos') ?></h4>
        <?php if (!empty($riscoscategoria->riscos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Riscoscategoria Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($riscoscategoria->riscos as $riscos): ?>
            <tr>
                <td><?= h($riscos->id) ?></td>
                <td><?= h($riscos->riscoscategoria_id) ?></td>
                <td><?= h($riscos->descricao) ?></td>
                <td><?= h($riscos->created) ?></td>
                <td><?= h($riscos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Riscos', 'action' => 'view', $riscos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Riscos', 'action' => 'edit', $riscos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Riscos', 'action' => 'delete', $riscos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $riscos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
