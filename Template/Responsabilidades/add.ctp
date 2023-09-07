<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsabilidade $responsabilidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Responsabilidadestipos'), ['controller' => 'Responsabilidadestipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Responsabilidadestipo'), ['controller' => 'Responsabilidadestipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="responsabilidades form large-9 medium-8 columns content">
    <?= $this->Form->create($responsabilidade) ?>
    <fieldset>
        <legend><?= __('Add Responsabilidade') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('responsabilidadestipo_id', ['options' => $responsabilidadestipos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
