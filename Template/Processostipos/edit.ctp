<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Processostipo $processostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $processostipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $processostipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Processostipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="processostipos form large-9 medium-8 columns content">
    <?= $this->Form->create($processostipo) ?>
    <fieldset>
        <legend><?= __('Edit Processostipo') ?></legend>
        <?php
            echo $this->Form->control('descricao',['class'=> "form-control"]);            
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
