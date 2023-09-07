<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fivewthreehstype $fivewthreehstype
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehstypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fivewthreehstypes form large-9 medium-8 columns content">
    <?= $this->Form->create($fivewthreehstype) ?>
    <fieldset>
        <legend><?= __('Add Fivewthreehstype') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
