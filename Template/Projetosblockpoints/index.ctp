<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosblockpoint[]|\Cake\Collection\CollectionInterface $projetosblockpoints
 */
?>

  <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-danger">
                        <div class="card-header">

                        <h3 class="card-title">Impedimentos de Projetos</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosblockpoint'), ['action' => 'add']) ?></li>
       
    </ul>
</nav>
<div class="projetosblockpoints index large-9 medium-8 columns content">   
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resolvidoem') ?></th>              
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosblockpoints as $projetosblockpoint): ?>
            <tr>
                <td><?= $this->Number->format($projetosblockpoint->id) ?></td>
                <td><?= $projetosblockpoint->has('projeto') ? $this->Html->link($projetosblockpoint->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosblockpoint->projeto->id]) : '' ?></td>
                <td><?= h($projetosblockpoint->descricao) ?></td>
                <td><?= $projetosblockpoint->has('statusfuncional') ? $this->Html->link($projetosblockpoint->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosblockpoint->statusfuncional->id]) : '' ?></td>
                <td><?= $projetosblockpoint->has('consultore') ? $this->Html->link($projetosblockpoint->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosblockpoint->consultore->id]) : '' ?></td>
                <td><?= h($projetosblockpoint->responsavel) ?></td>
                <td><?= h($projetosblockpoint->resolvidoem) ?></td>              
                <td><?= h($projetosblockpoint->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosblockpoint->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosblockpoint->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosblockpoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosblockpoint->id)]) ?>
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