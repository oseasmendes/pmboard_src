<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosgroomingsitem $projetosgroomingsitem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosgroomingsitems'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosgroomings'), ['controller' => 'Projetosgroomings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosgrooming'), ['controller' => 'Projetosgroomings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosgroomingsitems form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosgroomingsitem) ?>
    <fieldset>
        <legend><?= __('Add Projetosgroomingsitem') ?></legend>
        <?php
            echo $this->Form->control('projetosgrooming_id', ['options' => $projetosgroomings, 'empty' => true]);
            echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
            echo $this->Form->control('referencianumerica');
            echo $this->Form->control('referencia');
            echo $this->Form->control('estimado');
            echo $this->Form->control('quebrado');
            echo $this->Form->control('descricao');
            echo $this->Form->control('comentario');
            echo $this->Form->control('statusfuntional_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
