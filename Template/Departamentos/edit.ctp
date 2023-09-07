<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $departamento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetousuarios'), ['controller' => 'Projetousuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetousuario'), ['controller' => 'Projetousuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasareas'), ['controller' => 'Sistemasareas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasarea'), ['controller' => 'Sistemasareas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasbriefings'), ['controller' => 'Sistemasbriefings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasbriefing'), ['controller' => 'Sistemasbriefings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($departamento) ?>
    <fieldset>
        <legend><?= __('Edit Departamento') ?></legend>
        <?php
            echo $this->Form->control('empresasunidade_id', ['options' => $empresasunidades, 'empty' => true]);
            echo $this->Form->control('gerente_id', ['options' => $gerentes, 'empty' => true]);
            echo $this->Form->control('fupqueue_id', ['options' => $fupqueues, 'empty' => true,'class'=>['class'=> 'form-control']]);                    
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
