<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaproaction $sistemaproaction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemaproactions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasprocessos'), ['controller' => 'Sistemasprocessos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasprocesso'), ['controller' => 'Sistemasprocessos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemaprosteps'), ['controller' => 'Sistemaprosteps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemaprostep'), ['controller' => 'Sistemaprosteps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemaproactions form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemaproaction) ?>
    <fieldset>
        <legend><?= __('Add Sistemaproaction') ?></legend>
        <?php
            echo $this->Form->control('sistemasprocesso_id', ['options' => $sistemasprocessos, 'empty' => true]);
            echo $this->Form->control('evento_id', ['options' => $eventos, 'empty' => true]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
