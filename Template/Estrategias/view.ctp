<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estrategia $estrategia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estrategia'), ['action' => 'edit', $estrategia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estrategia'), ['action' => 'delete', $estrategia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estrategia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estrategias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estrategia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasestrategias'), ['controller' => 'Sistemasestrategias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasestrategia'), ['controller' => 'Sistemasestrategias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estrategias view large-9 medium-8 columns content">
    <h3><?= h($estrategia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($estrategia->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estrategia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($estrategia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($estrategia->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sistemasestrategias') ?></h4>
        <?php if (!empty($estrategia->sistemasestrategias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estrategia Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estrategia->sistemasestrategias as $sistemasestrategias): ?>
            <tr>
                <td><?= h($sistemasestrategias->id) ?></td>
                <td><?= h($sistemasestrategias->estrategia_id) ?></td>
                <td><?= h($sistemasestrategias->descricao) ?></td>
                <td><?= h($sistemasestrategias->created) ?></td>
                <td><?= h($sistemasestrategias->modified) ?></td>
                <td><?= h($sistemasestrategias->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasestrategias', 'action' => 'view', $sistemasestrategias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasestrategias', 'action' => 'edit', $sistemasestrategias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasestrategias', 'action' => 'delete', $sistemasestrategias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasestrategias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
