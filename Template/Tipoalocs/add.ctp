<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoaloc $tipoaloc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipoalocs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoalocs form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoaloc) ?>
    <fieldset>
        <legend><?= __('Add Tipoaloc') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
