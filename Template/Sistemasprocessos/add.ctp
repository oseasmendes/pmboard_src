<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasprocesso $sistemasprocesso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasprocessos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Processos'), ['controller' => 'Processos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Processo'), ['controller' => 'Processos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasprocessos form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasprocesso) ?>
    <fieldset>
        <legend><?= __('Add Sistemasprocesso') ?></legend>
        <?php
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('processo_id', ['options' => $processos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('ativo');
            echo $this->Form->control('descontinuadoem', ['empty' => true]);
            echo $this->Form->control('descontinuadomotivo');
            echo $this->Form->control('motivo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
