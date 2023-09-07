<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetospareto $projetospareto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetospareto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetospareto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosparetos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosparetos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetospareto) ?>
    <fieldset>
        <legend><?= __('Edit Projetospareto') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('pareto_id', ['options' => $paretos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('historico');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
