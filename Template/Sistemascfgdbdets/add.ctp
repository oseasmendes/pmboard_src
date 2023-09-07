<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgdbdet $sistemascfgdbdet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgdbdets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgdbs'), ['controller' => 'Sistemascfgdbs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgdb'), ['controller' => 'Sistemascfgdbs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgdbdets form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemascfgdbdet) ?>
     <?php $paramid = $_POST['Det']; ?>
            <?= $this->sistemascfgdb_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemascfgdbdet') ?></legend>
        <?php
           // echo $this->Form->control('sistemascfgdb_id', ['options' => $sistemascfgdbs, 'empty' => true]);

            echo $this->Form->control('sistemascfgdb_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid)); //inserido esse parametro para receber projeto_id  
            echo $this->Form->control('datainventario', ['empty' => true]);
            echo $this->Form->control('tamanho');
            echo $this->Form->control('qtetabelas');
            echo $this->Form->control('qtecolunas');
            echo $this->Form->control('qteregistros');
            echo $this->Form->control('qtestoreprocedures');
            echo $this->Form->control('qtetriggers');
            echo $this->Form->control('espacoemdisco');
            echo $this->Form->control('responsavelinventario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
