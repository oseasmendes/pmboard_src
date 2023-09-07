<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsallocation $projetossprintsallocation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsallocations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetossprintsallocations form large-9 medium-8 columns content">
    <?= $this->Form->create($projetossprintsallocation) ?>
    <fieldset>
        <legend><?= __('Add Projetossprintsallocation') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('projetossprint_id', ['options' => $projetossprints, 'empty' => true]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('competencia_id', ['options' => $competencias, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
