<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proposta[]|\Cake\Collection\CollectionInterface $propostas
 */
?>
 <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Propostas Comercais</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Proposta'), ['action' => 'add']) ?></li>      
    </ul>
</nav>
</div>
<div class="row" > 
<div class="propostas index large-9 medium-8 columns content">
    
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numerointernoproposta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datademanda') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numeropo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valortotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horastotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($propostas as $proposta): ?>
            <tr>
                <td><?= $this->Number->format($proposta->id) ?></td>
                <td><?= h($proposta->data) ?></td>
                <td><?= h($proposta->numerointernoproposta) ?></td>
                <td><?= h($proposta->descricao) ?></td>
                <td><?= $proposta->has('empresa') ? $this->Html->link($proposta->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $proposta->empresa->id]) : '' ?></td>
                <td><?= h($proposta->datademanda) ?></td>
                <td><?= h($proposta->numeropo) ?></td>                
                <td><?= $proposta->has('statusfuncional') ? $this->Html->link($proposta->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $proposta->statusfuncional->id]) : '' ?></td>
                <td><?= $this->Number->format($proposta->valortotal) ?></td>
                <td><?= $this->Number->format($proposta->horastotal) ?></td>
                <td><?= h($proposta->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $proposta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proposta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proposta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proposta->id)]) ?>
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