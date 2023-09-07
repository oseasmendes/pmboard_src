<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasdoc $sistemasdoc
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasdocs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documentos'), ['controller' => 'Documentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Documento'), ['controller' => 'Documentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasdocs form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasdoc) ?>
      <?php $paramid = $_POST['Docs'];
            //var_dump($tktid); ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemasdoc') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid));            
            echo $this->Form->control('documento_id', ['options' => $documentos, 'empty' => true]);
            echo $this->Form->control('criadoem', ['empty' => true]);
            echo $this->Form->control('atualizadoem', ['empty' => true]);
            echo $this->Form->control('documentourl');
            echo $this->Form->control('documentonome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
