<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Documento $documento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Documento'), ['action' => 'edit', $documento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Documento'), ['action' => 'delete', $documento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Documentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Documento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasdocs'), ['controller' => 'Sistemasdocs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasdoc'), ['controller' => 'Sistemasdocs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="documentos view large-9 medium-8 columns content">
    <h3><?= h($documento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($documento->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($documento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($documento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($documento->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sistemasdocs') ?></h4>
        <?php if (!empty($documento->sistemasdocs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Documento Id') ?></th>
                <th scope="col"><?= __('Criadoem') ?></th>
                <th scope="col"><?= __('Atualizadoem') ?></th>
                <th scope="col"><?= __('Documentourl') ?></th>
                <th scope="col"><?= __('Documentonome') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($documento->sistemasdocs as $sistemasdocs): ?>
            <tr>
                <td><?= h($sistemasdocs->id) ?></td>
                <td><?= h($sistemasdocs->sistema_id) ?></td>
                <td><?= h($sistemasdocs->documento_id) ?></td>
                <td><?= h($sistemasdocs->criadoem) ?></td>
                <td><?= h($sistemasdocs->atualizadoem) ?></td>
                <td><?= h($sistemasdocs->documentourl) ?></td>
                <td><?= h($sistemasdocs->documentonome) ?></td>
                <td><?= h($sistemasdocs->created) ?></td>
                <td><?= h($sistemasdocs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasdocs', 'action' => 'view', $sistemasdocs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasdocs', 'action' => 'edit', $sistemasdocs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasdocs', 'action' => 'delete', $sistemasdocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasdocs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
