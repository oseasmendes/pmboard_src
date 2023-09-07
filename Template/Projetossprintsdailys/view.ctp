<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsdaily $projetossprintsdaily
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetossprintsdaily'), ['action' => 'edit', $projetossprintsdaily->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetossprintsdaily'), ['action' => 'delete', $projetossprintsdaily->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsdaily->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprintsdailys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprintsdaily'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetossprintsdailys view large-9 medium-8 columns content">
    <h3><?= h($projetossprintsdaily->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetossprint') ?></th>
            <td><?= $projetossprintsdaily->has('projetossprint') ? $this->Html->link($projetossprintsdaily->projetossprint->descricao, ['controller' => 'Projetossprints', 'action' => 'view', $projetossprintsdaily->projetossprint->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $projetossprintsdaily->has('consultore') ? $this->Html->link($projetossprintsdaily->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetossprintsdaily->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetossprintsdaily->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comentario') ?></th>
            <td><?= h($projetossprintsdaily->comentario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetossprintsdaily->has('projetosprodutosentrega') ? $this->Html->link($projetossprintsdaily->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetossprintsdaily->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agenda') ?></th>
            <td><?= $projetossprintsdaily->has('agenda') ? $this->Html->link($projetossprintsdaily->agenda->etiquetaadicional, ['controller' => 'Agendas', 'action' => 'view', $projetossprintsdaily->agenda->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetossprintsdaily->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($projetossprintsdaily->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetossprintsdaily->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetossprintsdaily->modified) ?></td>
        </tr>
    </table>
     <div class="related">
        <h4><?= __('Feedbacks') ?></h4>
        <?php if (!empty($projetossprintsdaily->projetossprintsdailysreferences)): ?>
            <table class="table table-striped table-responsive">  
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Reference') ?></th>    
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetossprintsdaily->projetossprintsdailysreferences as $ref): ?>
            <tr>
                <td><?= h($ref->id) ?></td>
                <td><?= h($ref->reference) ?></td>                
                <td><?= h($ref->resumo) ?></td>
                <td><?= h($ref->created) ?></td>
                <td><?= h($ref->modified) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetossprintsdailysreferences', 'action' => 'view', $ref->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetossprintsdailysreferences', 'action' => 'edit', $ref->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetossprintsdailysreferences', 'action' => 'delete', $ref->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ref->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
