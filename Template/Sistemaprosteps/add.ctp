<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaprostep $sistemaprostep
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemaprosteps'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemaproactions'), ['controller' => 'Sistemaproactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemaproaction'), ['controller' => 'Sistemaproactions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemaprostepsfiles'), ['controller' => 'Sistemaprostepsfiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemaprostepsfile'), ['controller' => 'Sistemaprostepsfiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemaprosteps form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemaprostep) ?>
    <fieldset>
        <legend><?= __('Add Sistemaprostep') ?></legend>
        <?php
            echo $this->Form->control('sistemaproaction_id', ['options' => $sistemaproactions, 'empty' => true]);
            echo $this->Form->control('stepaction',['class'=> "form-control"]);
            echo $this->Form->control('description',['class'=> "form-control"]);
            echo $this->Form->control('historic',['class'=> "form-control"]);
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
