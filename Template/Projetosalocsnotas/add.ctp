<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosalocsnota $projetosalocsnota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosalocsnotas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosalocsnotas form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosalocsnota) ?>
    <fieldset>
        <legend><?= __('Add Projetosalocsnota') ?></legend>
        <?php
            echo $this->Form->control('notatipo_id', ['options' => $notatipos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('historico');
            echo $this->Form->control('projetosaloc_id', ['options' => $projetosalocs, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
