<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasrelatorio $sistemasrelatorio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasrelatorios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasrelatorios form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasrelatorio) ?>
    <fieldset>
        <legend><?= __('Add Sistemasrelatorio') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('description');
            echo $this->Form->control('name');
            echo $this->Form->control('datacriacao', ['empty' => true]);
            echo $this->Form->control('cabnumer');
            echo $this->Form->control('requestnumber');
            echo $this->Form->control('objective');
            echo $this->Form->control('script');
            echo $this->Form->control('version');
            echo $this->Form->control('departamento_id', ['options' => $departamentos, 'empty' => true]);
            echo $this->Form->control('descontinuado');
            echo $this->Form->control('descontinuadodata', ['empty' => true]);
            echo $this->Form->control('ativo');
            echo $this->Form->control('relatoriobase');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
