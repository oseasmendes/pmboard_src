<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasbriefing $sistemasbriefing
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasbriefings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Smcplans'), ['controller' => 'Smcplans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Smcplan'), ['controller' => 'Smcplans', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasbriefings form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasbriefing) ?>
            <?php $paramid = $_POST['Briefing'];
            //var_dump($tktid); ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemasbriefing') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid)); //inserido esse parametro para receber projeto_id   
            echo $this->Form->control('dataregistro', ['empty' => true]);
            echo $this->Form->control('departamento_id', ['options' => $departamentos, 'empty' => true]);
            echo $this->Form->control('objetivo');
            echo $this->Form->control('smcplan_id', ['options' => $smcplans, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
