<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprint $projetossprint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetossprint->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprint->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sprinttipos'), ['controller' => 'Sprinttipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sprinttipo'), ['controller' => 'Sprinttipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jiraetlversions'), ['controller' => 'Jiraetlversions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jiraetlversion'), ['controller' => 'Jiraetlversions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsforecasts'), ['controller' => 'Projetossprintsforecasts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsforecast'), ['controller' => 'Projetossprintsforecasts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsitems'), ['controller' => 'Projetossprintsitems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsitem'), ['controller' => 'Projetossprintsitems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsrealizados'), ['controller' => 'Projetossprintsrealizados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsrealizado'), ['controller' => 'Projetossprintsrealizados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetossprints form large-9 medium-8 columns content">
    <?= $this->Form->create($projetossprint) ?>
    <fieldset>
        <legend><?= __('Edit Projetossprint') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('datainicio', ['empty' => true]);
            echo $this->Form->control('datafim', ['empty' => true]);
            echo $this->Form->control('sprinttipo_id', ['options' => $sprinttipos, 'empty' => true]);
            echo $this->Form->control('data', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
