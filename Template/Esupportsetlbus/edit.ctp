<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Esupportsetlbus $esupportsetlbus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $esupportsetlbus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $esupportsetlbus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Esupportsetlbus'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresasunidades'), ['controller' => 'Empresasunidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresasunidade'), ['controller' => 'Empresasunidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="esupportsetlbus form large-9 medium-8 columns content">
    <?= $this->Form->create($esupportsetlbus) ?>
    <fieldset>
        <legend><?= __('Edit Esupportsetlbus') ?></legend>
        <?php
            echo $this->Form->control('canal');
            echo $this->Form->control('descricao');
            echo $this->Form->control('referencia');
            echo $this->Form->control('empresasunidade_id', ['options' => $empresasunidades, 'empty' => true]);
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
