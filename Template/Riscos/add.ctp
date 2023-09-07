<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Risco $risco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Riscos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Riscoscategorias'), ['controller' => 'Riscoscategorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Riscoscategoria'), ['controller' => 'Riscoscategorias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasriscos'), ['controller' => 'Sistemasriscos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasrisco'), ['controller' => 'Sistemasriscos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="riscos form large-9 medium-8 columns content">
    <?= $this->Form->create($risco) ?>
    <fieldset>
        <legend><?= __('Add Risco') ?></legend>
        <?php
            echo $this->Form->control('riscoscategoria_id', ['options' => $riscoscategorias, 'empty' => true]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('hora');
            //echo $this->Form->text('hora', array('type' => 'time'));
            echo $this->Form->text('hora', array('type' => 'date'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=> "btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
