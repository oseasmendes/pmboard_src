<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Integration[]|\Cake\Collection\CollectionInterface $integrations
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
        <li><?= $this->Html->link(__('New Integration'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tecnologias'), ['controller' => 'Tecnologias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnologia'), ['controller' => 'Tecnologias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgintegrations'), ['controller' => 'Sistemascfgintegrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgintegration'), ['controller' => 'Sistemascfgintegrations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="integrations index large-9 medium-8 columns content">
    <h3><?= __('Integrations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('banco_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tecnologia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('servico') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($integrations as $integration): ?>
            <tr>
                <td><?= $this->Number->format($integration->id) ?></td>
                <td><?= h($integration->referencia) ?></td>
                <td><?= h($integration->descricao) ?></td>
                <td><?= $integration->has('banco') ? $this->Html->link($integration->banco->id, ['controller' => 'Bancos', 'action' => 'view', $integration->banco->id]) : '' ?></td>
                <td><?= $integration->has('tecnologia') ? $this->Html->link($integration->tecnologia->id, ['controller' => 'Tecnologias', 'action' => 'view', $integration->tecnologia->id]) : '' ?></td>
                <td><?= h($integration->servico) ?></td>
                <td><?= h($integration->created) ?></td>
                <td><?= h($integration->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $integration->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $integration->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $integration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $integration->id)]) ?>
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