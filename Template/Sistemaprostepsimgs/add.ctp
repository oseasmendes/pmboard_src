<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaprostepsimg $sistemaprostepsimg
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemaprostepsimgs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemaprosteps'), ['controller' => 'Sistemaprosteps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemaprostep'), ['controller' => 'Sistemaprosteps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemaprostepsimgs form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemaprostepsimg) ?>
    <fieldset>
        <legend><?= __('Add Sistemaprostepsimg') ?></legend>
        <?php
            echo $this->Form->control('sistemaprostep_id', ['options' => $sistemaprosteps, 'empty' => true]);
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('imagemoriginal',['class'=> "form-control"]);
            echo $this->Form->control('url',['class'=> "form-control"]);
            echo $this->Form->control('imagemoriginalid',['class'=> "form-control"]);
            echo $this->Form->control('imagempath',['class'=> "form-control"]);
            echo $this->Form->control('ordem',['class'=> "form-control"]);
            echo $this->Form->control('imagem',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
