<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnologia[]|\Cake\Collection\CollectionInterface $tecnologias
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">User</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tecnologia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultoresvrstecnologias'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultoresvrstecnologia'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Integrations'), ['controller' => 'Integrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Integration'), ['controller' => 'Integrations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sh Apptechno'), ['controller' => 'ShApptechno', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sh Apptechno'), ['controller' => 'ShApptechno', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgfronts'), ['controller' => 'Sistemascfgfronts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgfront'), ['controller' => 'Sistemascfgfronts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgintegrations'), ['controller' => 'Sistemascfgintegrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgintegration'), ['controller' => 'Sistemascfgintegrations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tecnologias index large-9 medium-8 columns content">
    <h3><?= __('Tecnologias') ?></h3>
    <table class="table">
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
            <?php foreach ($tecnologias as $tecnologia): ?>
            <tr>
                <td><?= $this->Number->format($tecnologia->id) ?></td>
                <td><?= h($tecnologia->descricao) ?></td>
                <td><?= h($tecnologia->created) ?></td>
                <td><?= h($tecnologia->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tecnologia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tecnologia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tecnologia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tecnologia->id)]) ?>
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