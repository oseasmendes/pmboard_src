<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entregasblockpoint[]|\Cake\Collection\CollectionInterface $entregasblockpoints
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Impedimentos nas Entregas</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>



<div class="entregasblockpoints index large-9 medium-8 columns content">
    <h3><?= __('Impedimentos das Entregas') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id','EntId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resolvidoem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planoacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('risco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('flag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entregasblockpoints as $entregasblockpoint): ?>
            <tr>
                <td><?= $this->Number->format($entregasblockpoint->id) ?></td>
                <td><?= $entregasblockpoint->has('projetosprodutosentrega') ? $this->Html->link($entregasblockpoint->projetosprodutosentrega->referencia, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $entregasblockpoint->projetosprodutosentrega->id]) : '' ?></td>
                <td><?= h($entregasblockpoint->descricao) ?></td>
                <td><?= $entregasblockpoint->has('statusfuncional') ? $this->Html->link($entregasblockpoint->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $entregasblockpoint->statusfuncional->id]) : '' ?></td>
                <td><?= $entregasblockpoint->has('consultore') ? $this->Html->link($entregasblockpoint->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $entregasblockpoint->consultore->id]) : '' ?></td>
                <td><?= h($entregasblockpoint->responsavel) ?></td>
                <td><?= h($entregasblockpoint->resolvidoem) ?></td>
                <td><?= h($entregasblockpoint->planoacao) ?></td>
                <td><?= h($entregasblockpoint->ativo) ?></td>
                <td><?= h($entregasblockpoint->risco) ?></td>
                <td><?= $this->Number->format($entregasblockpoint->flag) ?></td>
                <td><?= h($entregasblockpoint->created) ?></td>
                <td><?= h($entregasblockpoint->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entregasblockpoint->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entregasblockpoint->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entregasblockpoint->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entregasblockpoint->id)]) ?>
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
