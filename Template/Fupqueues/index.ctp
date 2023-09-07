<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupqueue[]|\Cake\Collection\CollectionInterface $fupqueues
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                       
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>

                                    <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>        
        <li><?= $this->Html->link(__('New Fupqueue'), ['action' => 'add']) ?> </li>        
    </ul>
</nav>

<div class="fupqueues index large-9 medium-8 columns content">
    <h3><?= __('Fupqueues') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observacao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fupqueues as $fupqueue): ?>
            <tr>
                <td><?= $this->Number->format($fupqueue->id) ?></td>
                <td><?= h($fupqueue->descricao) ?></td>
                <td><?= h($fupqueue->created) ?></td>
                <td><?= h($fupqueue->modified) ?></td>
                <td><?= h($fupqueue->ativo) ?></td>
                <td><?= h($fupqueue->observacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fupqueue->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fupqueue->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fupqueue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupqueue->id)]) ?>
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
        </div>      
    </section>