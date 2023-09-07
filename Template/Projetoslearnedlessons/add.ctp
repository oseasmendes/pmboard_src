<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetoslearnedlesson $projetoslearnedlesson
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetoslearnedlessons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aproaches'), ['controller' => 'Aproaches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aproach'), ['controller' => 'Aproaches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Severidades'), ['controller' => 'Severidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Severidade'), ['controller' => 'Severidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetoslearnedlessons form large-9 medium-8 columns content">
    <?= $this->Form->create($projetoslearnedlesson) ?>
    <fieldset>
        <legend><?= __('Add Projetoslearnedlesson') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('aproach_id', ['options' => $aproaches, 'empty' => true]);
            echo $this->Form->control('resumo');
            echo $this->Form->control('historico');
            echo $this->Form->control('casoreferencia');
            echo $this->Form->control('severidade_id', ['options' => $severidades, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
