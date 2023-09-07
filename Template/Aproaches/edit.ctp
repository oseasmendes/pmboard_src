<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aproach $aproach
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aproach->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aproach->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Aproaches'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetoslearnedlessons'), ['controller' => 'Projetoslearnedlessons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetoslearnedlesson'), ['controller' => 'Projetoslearnedlessons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="aproaches form large-9 medium-8 columns content">
    <?= $this->Form->create($aproach) ?>
    <fieldset>
        <legend><?= __('Edit Aproach') ?></legend>
        <?php
            echo $this->Form->control('descricao',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
