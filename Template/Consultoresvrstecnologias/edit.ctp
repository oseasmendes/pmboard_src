<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresvrstecnologia $consultoresvrstecnologia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $consultoresvrstecnologia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresvrstecnologia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Consultoresvrstecnologias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tecnologias'), ['controller' => 'Tecnologias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnologia'), ['controller' => 'Tecnologias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Knowhows'), ['controller' => 'Knowhows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Knowhow'), ['controller' => 'Knowhows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoresvrstecnologias form large-9 medium-8 columns content">
    <?= $this->Form->create($consultoresvrstecnologia) ?>
    <fieldset>
        <legend><?= __('Edit Consultoresvrstecnologia') ?></legend>
        <?php
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('tecnologia_id', ['options' => $tecnologias, 'empty' => true]);
            echo $this->Form->control('knowhow_id', ['options' => $knowhows, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
