<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Superiorimediato $superiorimediato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Superiorimediatos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetousuarios'), ['controller' => 'Projetousuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetousuario'), ['controller' => 'Projetousuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="superiorimediatos form large-9 medium-8 columns content">
    <?= $this->Form->create($superiorimediato) ?>
    <fieldset>
        <legend><?= __('Inserir Gestor') ?></legend>
        <?php
            echo $this->Form->control('nome',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
