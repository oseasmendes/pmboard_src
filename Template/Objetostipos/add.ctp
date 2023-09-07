<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Objetostipo $objetostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Objetostipos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="objetostipos form large-9 medium-8 columns content">
    <?= $this->Form->create($objetostipo) ?>
    <fieldset>
        <legend><?= __('Add Objetostipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
