<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosurl[]|\Cake\Collection\CollectionInterface $projetosurls
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosurl'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosurls index large-9 medium-8 columns content">
    <h3><?= __('Projetosurls') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosurls as $projetosurl): ?>
            <tr>
                <td><?= $this->Number->format($projetosurl->id) ?></td>
                <td><?= $projetosurl->has('projeto') ? $this->Html->link($projetosurl->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosurl->projeto->id]) : '' ?></td>
                <td><?= h($projetosurl->descricao) ?></td>
                <td><?= h($projetosurl->url) ?></td>
                <td><?= h($projetosurl->path) ?></td>
                <td><?= h($projetosurl->ativo) ?></td>
                <td><?= h($projetosurl->created) ?></td>
                <td><?= h($projetosurl->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosurl->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosurl->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosurl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosurl->id)]) ?>
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
