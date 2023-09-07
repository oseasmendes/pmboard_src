<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresasunidade[]|\Cake\Collection\CollectionInterface $empresasunidades
 */
?>

  <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Filiais</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Empresasunidade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div>
<div class="row" > 
<div class="empresasunidades index large-9 medium-8 columns content">
    
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sigla') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empresasunidades as $empresasunidade): ?>
            <tr>
                <td><?= $this->Number->format($empresasunidade->id) ?></td>
                <td><?= h($empresasunidade->descricao) ?></td>
                <td><?= h($empresasunidade->sigla) ?></td>
                <td><?= h($empresasunidade->created) ?></td>
                <td><?= h($empresasunidade->modified) ?></td>
                <td><?= $empresasunidade->has('empresa') ? $this->Html->link($empresasunidade->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $empresasunidade->empresa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $empresasunidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresasunidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresasunidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresasunidade->id)]) ?>
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