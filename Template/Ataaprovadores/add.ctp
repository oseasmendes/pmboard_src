<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ataaprovadore $ataaprovadore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ataaprovadores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ataaprovadores form large-9 medium-8 columns content">
    <?= $this->Form->create($ataaprovadore) ?>
    <fieldset>
        <legend><?= __('Add Ataaprovadore') ?></legend>
        <?php
            echo $this->Form->control('ata_id', ['options' => $atas, 'empty' => true]);
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true]);
            echo $this->Form->control('aprovacao_status');
            echo $this->Form->control('aprovacao_data', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
