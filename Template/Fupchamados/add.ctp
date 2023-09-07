<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupchamado $fupchamado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fupchamados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fupagendas'), ['controller' => 'Fupagendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['controller' => 'Fupagendas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupchamados form large-9 medium-8 columns content">
    <?= $this->Form->create($fupchamado) ?>
    <fieldset>
        <legend><?= __('Add Fupchamado') ?></legend>
        <?php
            echo $this->Form->control('fupagenda_id', ['options' => $fupagendas, 'empty' => true]);
            echo $this->Form->control('departamento');
            echo $this->Form->control('kanban');
            echo $this->Form->control('chamadonr');
            echo $this->Form->control('titulo');
            echo $this->Form->control('prio');
            echo $this->Form->control('requisitante');
            echo $this->Form->control('statusdetalhado');
            echo $this->Form->control('analista');
            echo $this->Form->control('comentario');
            echo $this->Form->control('lastupdate', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
