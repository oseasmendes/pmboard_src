<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetldepto $esupportsetldepto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $esupportsetldepto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetldepto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Esupportsetldeptos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetldeptos form large-9 medium-8 columns content">
    <?= $this->Form->create($esupportsetldepto) ?>
    <fieldset>
        <legend><?= __('Edit Esupportsetldepto') ?></legend>
        <?php
            echo $this->Form->control('canal');
            echo $this->Form->control('descricao');
            echo $this->Form->control('referencia');
            echo $this->Form->control('departamento_id', ['options' => $departamentos, 'empty' => true]);
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
