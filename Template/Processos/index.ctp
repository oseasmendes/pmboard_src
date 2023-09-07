<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Processo[]|\Cake\Collection\CollectionInterface $processos
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Lista de Projetos</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Processo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Processostipos'), ['controller' => 'Processostipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Processostipo'), ['controller' => 'Processostipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atasdetalhes'), ['controller' => 'Atasdetalhes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atasdetalhe'), ['controller' => 'Atasdetalhes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="processos index large-9 medium-8 columns content">
    <h3><?= __('Processos') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('processostipo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($processos as $processo): ?>
            <tr>
                <td><?= $this->Number->format($processo->id) ?></td>
                <td><?= h($processo->descricao) ?></td>
                <td><?= h($processo->created) ?></td>
                <td><?= h($processo->modified) ?></td>
                <td><?= h($processo->description) ?></td>
                <td><?= h($processo->movimento) ?></td>
                <td><?= $processo->has('processostipo') ? $this->Html->link($processo->processostipo->descricao, ['controller' => 'Processostipos', 'action' => 'view', $processo->processostipo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $processo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $processo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $processo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $processo->id)]) ?>
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