<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasnota $sistemasnota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemasnota->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasnota->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemasnotas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasnotas form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasnota) ?>
    <fieldset>
        <legend><?= __('Edit Sistemasnota') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('notatipo_id', ['options' => $notatipos, 'empty' => true]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('historico',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
