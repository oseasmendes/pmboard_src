<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosnews $projetosnews
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosnews->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosnews->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosnews'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosnews form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosnews) ?>
    <fieldset>
        <legend><?= __('Edit Projetosnews') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('canal');
            echo $this->Form->control('referencia');
            echo $this->Form->control('prio');
            echo $this->Form->control('descricao');
            echo $this->Form->control('datalancto', ['empty' => true]);
            echo $this->Form->control('requisitante');
            echo $this->Form->control('departamento');
            echo $this->Form->control('sistema');
            echo $this->Form->control('complexidade');
            echo $this->Form->control('evento');
            echo $this->Form->control('datacheckin', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
