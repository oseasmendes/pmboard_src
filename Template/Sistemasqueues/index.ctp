<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasqueue[]|\Cake\Collection\CollectionInterface $sistemasqueues
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Nova Entrega</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>




<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sistemasqueue'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasqueues index large-9 medium-8 columns content">
    <h3><?= __('Sistemasqueues') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('selectedflag') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemasqueues as $sistemasqueue): ?>
            <tr>
                <td><?= $this->Number->format($sistemasqueue->id) ?></td>
                <td><?= h($sistemasqueue->descricao) ?></td>
                <td><?= h($sistemasqueue->created) ?></td>
                <td><?= h($sistemasqueue->modified) ?></td>
                <td><?= h($sistemasqueue->ativo) ?></td>
                <td><?= h($sistemasqueue->selectedflag) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemasqueue->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemasqueue->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemasqueue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasqueue->id)]) ?>
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
        </div>      
    </section>