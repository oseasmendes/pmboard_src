<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoaloc $tipoaloc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipoaloc'), ['action' => 'edit', $tipoaloc->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipoaloc'), ['action' => 'delete', $tipoaloc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoaloc->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipoalocs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipoaloc'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoalocs view large-9 medium-8 columns content">
    <h3><?= h($tipoaloc->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($tipoaloc->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipoaloc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tipoaloc->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tipoaloc->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosalocs') ?></h4>
        <?php if (!empty($tipoaloc->projetosalocs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Dataalocacao') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Percentual') ?></th>
                <th scope="col"><?= __('Tipoaloc Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tipoaloc->projetosalocs as $projetosalocs): ?>
            <tr>
                <td><?= h($projetosalocs->id) ?></td>
                <td><?= h($projetosalocs->projeto_id) ?></td>
                <td><?= h($projetosalocs->consultore_id) ?></td>
                <td><?= h($projetosalocs->created) ?></td>
                <td><?= h($projetosalocs->modified) ?></td>
                <td><?= h($projetosalocs->dataalocacao) ?></td>
                <td><?= h($projetosalocs->statusfuncional_id) ?></td>
                <td><?= h($projetosalocs->descricao) ?></td>
                <td><?= h($projetosalocs->percentual) ?></td>
                <td><?= h($projetosalocs->tipoaloc_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosalocs', 'action' => 'view', $projetosalocs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosalocs', 'action' => 'edit', $projetosalocs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosalocs', 'action' => 'delete', $projetosalocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosalocs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
