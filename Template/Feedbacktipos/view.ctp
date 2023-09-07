<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Feedbacktipo $feedbacktipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Feedbacktipo'), ['action' => 'edit', $feedbacktipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feedbacktipo'), ['action' => 'delete', $feedbacktipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedbacktipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Feedbacktipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feedbacktipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosfeedbacks'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosfeedback'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="feedbacktipos view large-9 medium-8 columns content">
    <h3><?= h($feedbacktipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($feedbacktipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($feedbacktipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($feedbacktipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($feedbacktipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosprodutosfeedbacks') ?></h4>
        <?php if (!empty($feedbacktipo->projetosprodutosfeedbacks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Feedbacktipo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($feedbacktipo->projetosprodutosfeedbacks as $projetosprodutosfeedbacks): ?>
            <tr>
                <td><?= h($projetosprodutosfeedbacks->id) ?></td>
                <td><?= h($projetosprodutosfeedbacks->feedbacktipo_id) ?></td>
                <td><?= h($projetosprodutosfeedbacks->descricao) ?></td>
                <td><?= h($projetosprodutosfeedbacks->historico) ?></td>
                <td><?= h($projetosprodutosfeedbacks->created) ?></td>
                <td><?= h($projetosprodutosfeedbacks->modified) ?></td>
                <td><?= h($projetosprodutosfeedbacks->projetosproduto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'view', $projetosprodutosfeedbacks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'edit', $projetosprodutosfeedbacks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'delete', $projetosprodutosfeedbacks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosfeedbacks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
