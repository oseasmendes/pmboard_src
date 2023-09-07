<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programasnota[]|\Cake\Collection\CollectionInterface $programasnotas
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
        <li><?= $this->Html->link(__('New Programasnota'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div>
<div class="row" > 
<div class="programasnotas index large-9 medium-8 columns content">    
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notatipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('programa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($programasnotas as $programasnota): ?>
            <tr>
                <td><?= $this->Number->format($programasnota->id) ?></td>
                <td><?= $programasnota->has('notatipo') ? $this->Html->link($programasnota->notatipo->descricao, ['controller' => 'Notatipos', 'action' => 'view', $programasnota->notatipo->id]) : '' ?></td>
                <td><?= h($programasnota->descricao) ?></td>
                <td><?= h($programasnota->created) ?></td>
                <td><?= h($programasnota->modified) ?></td>
                <td><?= $programasnota->has('programa') ? $this->Html->link($programasnota->programa->descricao, ['controller' => 'Programas', 'action' => 'view', $programasnota->programa->id]) : '' ?></td>
                <td><?= h($programasnota->referencia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $programasnota->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $programasnota->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $programasnota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programasnota->id)]) ?>
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