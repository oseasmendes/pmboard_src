<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsabilidadestipo $responsabilidadestipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Responsabilidadestipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Responsabilidades'), ['controller' => 'Responsabilidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Responsabilidade'), ['controller' => 'Responsabilidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="responsabilidadestipos form large-9 medium-8 columns content">
    <?= $this->Form->create($responsabilidadestipo) ?>
    <fieldset>
        <legend><?= __('Add Responsabilidadestipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
