<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programasnota $programasnota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Programasnotas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="programasnotas form large-9 medium-8 columns content">
    <?= $this->Form->create($programasnota) ?>
    <fieldset>
        <legend><?= __('Add Programasnota') ?></legend>
        <?php
            echo $this->Form->control('notatipo_id', ['options' => $notatipos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('historico',['class'=> "form-control"]);
            echo $this->Form->control('programa_id', ['options' => $programas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('referencia',['class'=> "form-control text-primary"]);
            echo $this->Form->control('ativo',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
