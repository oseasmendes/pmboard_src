<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgtable $sistemascfgtable
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemascfgtable->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgtable->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgtables'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasmodulos'), ['controller' => 'Sistemasmodulos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasmodulo'), ['controller' => 'Sistemasmodulos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgtables form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemascfgtable) ?>
    <fieldset>
        <legend><?= __('Edit Sistemascfgtable') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('tabelanome');
            echo $this->Form->control('descricao');
            echo $this->Form->control('detalhe');
            echo $this->Form->control('versao');
            echo $this->Form->control('ativo');
            echo $this->Form->control('sistemasmodulo_id', ['options' => $sistemasmodulos, 'empty' => true]);
            echo $this->Form->control('chaveprimaria');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
