<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosgrooming $projetosgrooming
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosgroomings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosgroomingsitems'), ['controller' => 'Projetosgroomingsitems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosgroomingsitem'), ['controller' => 'Projetosgroomingsitems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosgroomings form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosgrooming) ?>
    <fieldset>
        <legend><?= __('Add Projetosgrooming') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('projetossprint_id', ['options' => $projetossprints, 'empty' => true]);
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
