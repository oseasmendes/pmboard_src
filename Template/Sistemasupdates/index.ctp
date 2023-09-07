<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasupdate[]|\Cake\Collection\CollectionInterface $sistemasupdates
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
        <li><?= $this->Html->link(__('New Sistemasupdate'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasupdates index large-9 medium-8 columns content">
    <h3><?= __('Updates') ?></h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id','Sistema') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataupdate','Liberado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao','Descrição') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('liberadoparaaplicacao','Deployed') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('Updated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id','Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasupdates as $sistemasupdate): ?>
            <tr>
                <td><?= $this->Number->format($sistemasupdate->id) ?></td>
                <td><?= $sistemasupdate->has('sistema') ? $this->Html->link($sistemasupdate->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemasupdate->sistema->id]) : '' ?></td>
                <td><?= h($sistemasupdate->dataupdate) ?></td>
                <td><?= h($sistemasupdate->descricao) ?></td>                
                <td><?= h($sistemasupdate->liberadoparaaplicacao) ?></td>                
                <td><?= h($sistemasupdate->modified) ?></td>
                <td><?= $sistemasupdate->has('statusfuncional') ? $this->Html->link($sistemasupdate->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $sistemasupdate->statusfuncional->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasupdate->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasupdate->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasupdate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasupdate->id)]) ?>
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
