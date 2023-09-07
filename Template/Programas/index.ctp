<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programa[]|\Cake\Collection\CollectionInterface $programas
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Programas</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Portfolios'), ['controller' => 'Portfolios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portfolio'), ['controller' => 'Portfolios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programasnotas'), ['controller' => 'Programasnotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programasnota'), ['controller' => 'Programasnotas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programasplanotaxas'), ['controller' => 'Programasplanotaxas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programasplanotaxa'), ['controller' => 'Programasplanotaxas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div>
<div class="row" > 
<div class="programas index large-9 medium-8 columns content">    
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('portfolio_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($programas as $programa): ?>
            <tr>
                <td><?= $this->Number->format($programa->id) ?></td>
                <td><?= $programa->has('portfolio') ? $this->Html->link($programa->portfolio->descricao, ['controller' => 'Portfolios', 'action' => 'view', $programa->portfolio->id]) : '' ?></td>
                <td><?= h($programa->descricao) ?></td>
                <td><?= h($programa->created) ?></td>
                <td><?= h($programa->modified) ?></td>
                <td><?= h($programa->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $programa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $programa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $programa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programa->id)]) ?>
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