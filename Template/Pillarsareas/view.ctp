<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pillarsarea $pillarsarea
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pillarsarea'), ['action' => 'edit', $pillarsarea->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pillarsarea'), ['action' => 'delete', $pillarsarea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pillarsarea->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pillarsareas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pillarsarea'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprintsretrosactions'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprintsretrosaction'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pillarsareas view large-9 medium-8 columns content">
    <h3><?= h($pillarsarea->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($pillarsarea->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pillarsarea->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pillarsarea->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pillarsarea->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetossprintsretrosactions') ?></h4>
        <?php if (!empty($pillarsarea->projetossprintsretrosactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetossprintsretrositem Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Propostopor') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Pillar Id') ?></th>
                <th scope="col"><?= __('Pillarsarea Id') ?></th>
                <th scope="col"><?= __('Pillarsresponsabilitie Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pillarsarea->projetossprintsretrosactions as $projetossprintsretrosactions): ?>
            <tr>
                <td><?= h($projetossprintsretrosactions->id) ?></td>
                <td><?= h($projetossprintsretrosactions->projetossprintsretrositem_id) ?></td>
                <td><?= h($projetossprintsretrosactions->descricao) ?></td>
                <td><?= h($projetossprintsretrosactions->propostopor) ?></td>
                <td><?= h($projetossprintsretrosactions->consultore_id) ?></td>
                <td><?= h($projetossprintsretrosactions->created) ?></td>
                <td><?= h($projetossprintsretrosactions->modified) ?></td>
                <td><?= h($projetossprintsretrosactions->pillar_id) ?></td>
                <td><?= h($projetossprintsretrosactions->pillarsarea_id) ?></td>
                <td><?= h($projetossprintsretrosactions->pillarsresponsabilitie_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'view', $projetossprintsretrosactions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'edit', $projetossprintsretrosactions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'delete', $projetossprintsretrosactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsretrosactions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
