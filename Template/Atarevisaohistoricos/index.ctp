<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atarevisaohistorico[]|\Cake\Collection\CollectionInterface $atarevisaohistoricos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Atarevisaohistorico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atadetalhes'), ['controller' => 'Atadetalhes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atadetalhe'), ['controller' => 'Atadetalhes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atarevisaohistoricos index large-9 medium-8 columns content">
    <h3><?= __('Atarevisaohistoricos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ata_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atadetalhe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correcao_solicitado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aprovado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datarevisao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atarevisaohistoricos as $atarevisaohistorico): ?>
            <tr>
                <td><?= $this->Number->format($atarevisaohistorico->id) ?></td>
                <td><?= $atarevisaohistorico->has('ata') ? $this->Html->link($atarevisaohistorico->ata->id, ['controller' => 'Atas', 'action' => 'view', $atarevisaohistorico->ata->id]) : '' ?></td>
                <td><?= $atarevisaohistorico->has('atadetalhe') ? $this->Html->link($atarevisaohistorico->atadetalhe->id, ['controller' => 'Atadetalhes', 'action' => 'view', $atarevisaohistorico->atadetalhe->id]) : '' ?></td>
                <td><?= h($atarevisaohistorico->correcao_solicitado_por) ?></td>
                <td><?= h($atarevisaohistorico->aprovado) ?></td>
                <td><?= h($atarevisaohistorico->datarevisao) ?></td>
                <td><?= h($atarevisaohistorico->created) ?></td>
                <td><?= h($atarevisaohistorico->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $atarevisaohistorico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $atarevisaohistorico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $atarevisaohistorico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atarevisaohistorico->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
