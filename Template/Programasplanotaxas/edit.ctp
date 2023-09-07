<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programasplanotaxa $programasplanotaxa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $programasplanotaxa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $programasplanotaxa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Programasplanotaxas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="programasplanotaxas form large-9 medium-8 columns content">
    <?= $this->Form->create($programasplanotaxa) ?>
    <fieldset>
        <legend><?= __('Edit Programasplanotaxa') ?></legend>
        <?php
            echo $this->Form->control('competencia_id', ['options' => $competencias, 'empty' => true]);
            echo $this->Form->control('programa_id', ['options' => $programas, 'empty' => true]);
            echo $this->Form->control('valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
