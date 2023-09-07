<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Riscoscategoria $riscoscategoria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Riscoscategorias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Riscos'), ['controller' => 'Riscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Risco'), ['controller' => 'Riscos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="riscoscategorias form large-9 medium-8 columns content">
    <?= $this->Form->create($riscoscategoria) ?>
    <fieldset>
        <legend><?= __('Add Riscoscategoria') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
