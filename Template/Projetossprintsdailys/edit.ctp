<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsdaily $projetossprintsdaily
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetossprintsdaily->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsdaily->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsdailys'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetossprintsdailys form large-9 medium-8 columns content">
    <?= $this->Form->create($projetossprintsdaily) ?>
    <fieldset>
        <legend><?= __('Edit Projetossprintsdaily') ?></legend>
        <?php
            echo $this->Form->control('projetossprint_id', ['options' => $projetossprints, 'empty' => true]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('referencia');
            echo $this->Form->control('comentario');
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('agenda_id', ['options' => $agendas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
