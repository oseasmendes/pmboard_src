<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosalocsprofile[]|\Cake\Collection\CollectionInterface $projetosalocsprofiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosalocsprofile'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosalocsprofiles index large-9 medium-8 columns content">
    <h3><?= __('Projetosalocsprofiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosaloc_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('percentual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataalocacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('competencia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horasdia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosalocsprofiles as $projetosalocsprofile): ?>
            <tr>
                <td><?= $this->Number->format($projetosalocsprofile->id) ?></td>
                <td><?= $projetosalocsprofile->has('projetosaloc') ? $this->Html->link($projetosalocsprofile->projetosaloc->descricao, ['controller' => 'Projetosalocs', 'action' => 'view', $projetosalocsprofile->projetosaloc->id]) : '' ?></td>
                <td><?= $this->Number->format($projetosalocsprofile->percentual) ?></td>
                <td><?= $projetosalocsprofile->has('statusfuncional') ? $this->Html->link($projetosalocsprofile->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosalocsprofile->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetosalocsprofile->dataalocacao) ?></td>
                <td><?= h($projetosalocsprofile->created) ?></td>
                <td><?= h($projetosalocsprofile->modified) ?></td>
                <td><?= $projetosalocsprofile->has('competencia') ? $this->Html->link($projetosalocsprofile->competencia->descricao, ['controller' => 'Competencias', 'action' => 'view', $projetosalocsprofile->competencia->id]) : '' ?></td>
                <td><?= h($projetosalocsprofile->descricao) ?></td>
                <td><?= $this->Number->format($projetosalocsprofile->horasdia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosalocsprofile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosalocsprofile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosalocsprofile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosalocsprofile->id)]) ?>
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
