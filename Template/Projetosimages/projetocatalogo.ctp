<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosimage[]|\Cake\Collection\CollectionInterface $projetosimages
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosimage'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Imagestipos'), ['controller' => 'Imagestipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['controller' => 'Imagestipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosimages index large-9 medium-8 columns content">
    <h3><?= __('Projetosimages') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('imagestipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosimages as $projetosimage): ?>
            <tr>
                <td><?= $this->Number->format($projetosimage->id) ?></td>
                <td><?= $projetosimage->has('projeto') ? $this->Html->link($projetosimage->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosimage->projeto->id]) : '' ?></td>
                <td><?= h($projetosimage->descricao) ?></td>                
                <td><?= $projetosimage->has('imagestipo') ? $this->Html->link($projetosimage->imagestipo->descricao, ['controller' => 'Imagestipos', 'action' => 'view', $projetosimage->imagestipo->id]) : '' ?></td>
                <td><?= h($projetosimage->ativo) ?></td>
                <td><?= h($projetosimage->created) ?></td>
                <td><?= h($projetosimage->modified) ?></td>
                <td><?= h($projetosimage->image) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosimage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosimage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosimage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosimage->id)]) ?>
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
