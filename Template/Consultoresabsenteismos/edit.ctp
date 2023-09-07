<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultoresabsenteismo $consultoresabsenteismo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $consultoresabsenteismo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresabsenteismo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Consultoresabsenteismos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consultoresabsenteismos form large-9 medium-8 columns content">
    <?= $this->Form->create($consultoresabsenteismo) ?>
    <fieldset>
        <legend><?= __('Edit Consultoresabsenteismo') ?></legend>
        <?php
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('resumo');
            echo $this->Form->control('datainicio', ['empty' => true]);
            echo $this->Form->control('datafim', ['empty' => true]);
            echo $this->Form->control('observacao');
            echo $this->Form->control('informadoem', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
