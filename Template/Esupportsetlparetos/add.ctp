<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlpareto $esupportsetlpareto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Esupportsetlparetos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetlparetos form large-9 medium-8 columns content">
    <?= $this->Form->create($esupportsetlpareto) ?>
    <fieldset>
        <legend><?= __('Add Esupportsetlpareto') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('canal');
            echo $this->Form->control('referencia');
            echo $this->Form->control('pareto_id', ['options' => $paretos, 'empty' => true]);
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
