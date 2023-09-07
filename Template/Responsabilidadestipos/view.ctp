<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsabilidadestipo $responsabilidadestipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Responsabilidadestipo'), ['action' => 'edit', $responsabilidadestipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Responsabilidadestipo'), ['action' => 'delete', $responsabilidadestipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsabilidadestipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Responsabilidadestipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Responsabilidadestipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['controller' => 'Responsabilidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['controller' => 'Responsabilidades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="responsabilidadestipos view large-9 medium-8 columns content">
    <h3><?= h($responsabilidadestipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($responsabilidadestipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($responsabilidadestipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($responsabilidadestipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($responsabilidadestipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Responsabilidades') ?></h4>
        <?php if (!empty($responsabilidadestipo->responsabilidades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Responsabilidadestipo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($responsabilidadestipo->responsabilidades as $responsabilidades): ?>
            <tr>
                <td><?= h($responsabilidades->id) ?></td>
                <td><?= h($responsabilidades->descricao) ?></td>
                <td><?= h($responsabilidades->created) ?></td>
                <td><?= h($responsabilidades->modified) ?></td>
                <td><?= h($responsabilidades->responsabilidadestipo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Responsabilidades', 'action' => 'view', $responsabilidades->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Responsabilidades', 'action' => 'edit', $responsabilidades->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Responsabilidades', 'action' => 'delete', $responsabilidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsabilidades->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
