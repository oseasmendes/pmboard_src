<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrenciastipo $ocorrenciastipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ocorrenciastipo'), ['action' => 'edit', $ocorrenciastipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ocorrenciastipo'), ['action' => 'delete', $ocorrenciastipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrenciastipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ocorrenciastipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ocorrenciastipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ocorrenciastipos view large-9 medium-8 columns content">
    <h3><?= h($ocorrenciastipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($ocorrenciastipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ocorrenciastipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ocorrenciastipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ocorrenciastipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ocorrencias') ?></h4>
        <?php if (!empty($ocorrenciastipo->ocorrencias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ocorrenciastipo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ocorrenciastipo->ocorrencias as $ocorrencias): ?>
            <tr>
                <td><?= h($ocorrencias->id) ?></td>
                <td><?= h($ocorrencias->ocorrenciastipo_id) ?></td>
                <td><?= h($ocorrencias->descricao) ?></td>
                <td><?= h($ocorrencias->created) ?></td>
                <td><?= h($ocorrencias->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
