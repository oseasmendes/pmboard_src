<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Apontamento $apontamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Apontamentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atividades'), ['controller' => 'Atividades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atividade'), ['controller' => 'Atividades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="apontamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($apontamento) ?>
            <?php $paramid = $_POST['Apontamento']; ?>
            <?php $this->projetosprodutosentrega_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Apontamento') ?></legend>
        <?php
            echo $this->Form->control('projetosprodutosentrega_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid));

            
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('atividade_id', ['options' => $atividades, 'empty' => true]);           
            echo $this->Form->control('data');
            //echo $this->Form->text('data', array('type' => 'date'));
            echo $this->Form->text('inicio', array('type' => 'time'));
            echo $this->Form->text('fim', array('type' => 'time'));            
            echo $this->Form->control('resumo');
            echo $this->Form->control('registro');
            //echo $this->Form->control('inicio');
            //echo $this->Form->control('fim');
            echo $this->Form->control('integrado');
            echo $this->Form->control('tempo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
