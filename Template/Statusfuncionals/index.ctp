<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statusfuncional[]|\Cake\Collection\CollectionInterface $statusfuncionals
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
        <li><?= $this->Html->link(__('New Statusfuncional'), ['action' => 'add']) ?></li>        
    </ul>
</nav>
</div>
<div class="row" > 
<div class="statusfuncionals index large-9 medium-8 columns content">
    
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
            <?php foreach ($statusfuncionals as $statusfuncional): ?>
            <tr>
                <td><?= $this->Number->format($statusfuncional->id) ?></td>
                <td><?= h($statusfuncional->descricao) ?></td>
                <td><?= h($statusfuncional->created) ?></td>
                <td><?= h($statusfuncional->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $statusfuncional->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statusfuncional->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statusfuncional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusfuncional->id)]) ?>
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