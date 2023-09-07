<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreq[]|\Cake\Collection\CollectionInterface $projetosentregasreqs
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
        <li><?= $this->Html->link(__('New Projetosentregasreq'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>        
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefs'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsref'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqs index large-9 medium-8 columns content">
    <h3><?= __('Requisitos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Referencia','projetosprodutosentrega_id') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('participante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataemissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('solicitante') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosentregasreqs as $projetosentregasreq): ?>
            <tr>
                <td><?= $this->Number->format($projetosentregasreq->id) ?></td>
                <td><?= $projetosentregasreq->has('projetosprodutosentrega') ? $this->Html->link($projetosentregasreq->projetosprodutosentrega->referencia, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosentregasreq->projetosprodutosentrega->id]) : '' ?></td>                
                <td><?= $projetosentregasreq->has('participante') ? $this->Html->link($projetosentregasreq->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $projetosentregasreq->participante->id]) : '' ?></td>
                <td><?= h($projetosentregasreq->dataemissao) ?></td>
                <td><?= h($projetosentregasreq->solicitante) ?></td>                
                <td><?= h($projetosentregasreq->descricao) ?></td>                
                <td><?= $projetosentregasreq->has('consultore') ? $this->Html->link($projetosentregasreq->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosentregasreq->consultore->id]) : '' ?></td>                
                <td><?= h($projetosentregasreq->referencia) ?></td>                
                <td><?= h($projetosentregasreq->created) ?></td>
                <td><?= h($projetosentregasreq->modified) ?></td>
                <td><?= $this->Number->format($projetosentregasreq->ordem) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosentregasreq->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosentregasreq->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosentregasreq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreq->id)]) ?>
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