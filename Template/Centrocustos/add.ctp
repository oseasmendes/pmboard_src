<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centrocusto $centrocusto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Centrocustos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Propostas'), ['controller' => 'Propostas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proposta'), ['controller' => 'Propostas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="centrocustos form large-9 medium-8 columns content">
    <?= $this->Form->create($centrocusto) ?>
    <fieldset>
        <legend><?= __('Add Centrocusto') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('codigoexterno');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
