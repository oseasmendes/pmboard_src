<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aproach $aproach
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aproach'), ['action' => 'edit', $aproach->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aproach'), ['action' => 'delete', $aproach->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aproach->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aproaches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aproach'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetoslearnedlessons'), ['controller' => 'Projetoslearnedlessons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetoslearnedlesson'), ['controller' => 'Projetoslearnedlessons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aproaches view large-9 medium-8 columns content">
    <h3><?= h($aproach->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($aproach->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aproach->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($aproach->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($aproach->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetoslearnedlessons') ?></h4>
        <?php if (!empty($aproach->projetoslearnedlessons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Aproach Id') ?></th>
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($aproach->projetoslearnedlessons as $projetoslearnedlessons): ?>
            <tr>
                <td><?= h($projetoslearnedlessons->id) ?></td>
                <td><?= h($projetoslearnedlessons->projeto_id) ?></td>
                <td><?= h($projetoslearnedlessons->aproach_id) ?></td>
                <td><?= h($projetoslearnedlessons->resumo) ?></td>
                <td><?= h($projetoslearnedlessons->historico) ?></td>
                <td><?= h($projetoslearnedlessons->created) ?></td>
                <td><?= h($projetoslearnedlessons->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetoslearnedlessons', 'action' => 'view', $projetoslearnedlessons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetoslearnedlessons', 'action' => 'edit', $projetoslearnedlessons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetoslearnedlessons', 'action' => 'delete', $projetoslearnedlessons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetoslearnedlessons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
