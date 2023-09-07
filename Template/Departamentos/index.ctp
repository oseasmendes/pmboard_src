<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento[]|\Cake\Collection\CollectionInterface $departamentos
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
        <li><?= $this->Html->link(__('New Departamento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetousuarios'), ['controller' => 'Projetousuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetousuario'), ['controller' => 'Projetousuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasareas'), ['controller' => 'Sistemasareas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasarea'), ['controller' => 'Sistemasareas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasbriefings'), ['controller' => 'Sistemasbriefings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasbriefing'), ['controller' => 'Sistemasbriefings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departamentos index large-9 medium-8 columns content">
    <h3><?= __('Departamentos') ?></h3>
    <table class="table table-striped table-responsive">  
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
            <?php foreach ($departamentos as $departamento): ?>
            <tr>
                <td><?= $this->Number->format($departamento->id) ?></td>
                <td><?= h($departamento->descricao) ?></td>
                <td><?= h($departamento->created) ?></td>
                <td><?= h($departamento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $departamento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $departamento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $departamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->id)]) ?>
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