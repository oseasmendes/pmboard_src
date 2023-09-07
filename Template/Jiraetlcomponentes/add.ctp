<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jiraetlcomponente $jiraetlcomponente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Jiraetlcomponentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jiraetlcomponentes form large-9 medium-8 columns content">
    <?= $this->Form->create($jiraetlcomponente) ?>
    <fieldset>
        <legend><?= __('Add Jiraetlcomponente') ?></legend>
        <?php
            echo $this->Form->control('componente');
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
