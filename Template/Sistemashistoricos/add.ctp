<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemashistorico $sistemashistorico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemashistoricos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemashistoricos form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemashistorico) ?>
     <?php $paramid = $_POST['Historic'];
            //var_dump($tktid); ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemashistorico') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid)); //inserido esse parametro para receber projeto_id  
            echo $this->Form->control('dataregistro', ['empty' => true]);           
            echo $this->Form->control('dataimplantacao', ['empty' => true]);
            echo $this->Form->control('dataultimaatualizacao', ['empty' => true]);
            echo $this->Form->control('versaoatual');
            echo $this->Form->control('resumo');
            echo $this->Form->control('motivoultimaalteracao');
            echo $this->Form->control('versaopathatual');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
