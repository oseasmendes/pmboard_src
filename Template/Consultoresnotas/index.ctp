<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresnota[]|\Cake\Collection\CollectionInterface $consultoresnotas
 */
?>

 <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Notificações</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Consultoresnota'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoresnotas index large-9 medium-8 columns content">
  
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ocorrencia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ocorrenciaresumo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultoresnotas as $consultoresnota): ?>
            <tr>
                <td><?= $this->Number->format($consultoresnota->id) ?></td>
                <td><?= $consultoresnota->has('consultore') ? $this->Html->link($consultoresnota->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $consultoresnota->consultore->id]) : '' ?></td>
                <td><?= $consultoresnota->has('ocorrencia') ? $this->Html->link($consultoresnota->ocorrencia->id, ['controller' => 'Ocorrencias', 'action' => 'view', $consultoresnota->ocorrencia->id]) : '' ?></td>
                <td><?= h($consultoresnota->ocorrenciaresumo) ?></td>
                <td><?= h($consultoresnota->created) ?></td>
                <td><?= h($consultoresnota->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $consultoresnota->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consultoresnota->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consultoresnota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresnota->id)]) ?>
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