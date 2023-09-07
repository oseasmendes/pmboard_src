<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unidademedida[]|\Cake\Collection\CollectionInterface $unidademedidas
 */
?>
 <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Program News</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Unidademedida'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div>
 <div class="row" > 

<div class="unidademedidas index large-9 medium-8 columns content">
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($unidademedidas as $unidademedida): ?>
            <tr>
                <td><?= $this->Number->format($unidademedida->id) ?></td>
                <td><?= h($unidademedida->descricao) ?></td>
                <td><?= h($unidademedida->created) ?></td>
                <td><?= h($unidademedida->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $unidademedida->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $unidademedida->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $unidademedida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidademedida->id)]) ?>
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
</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>