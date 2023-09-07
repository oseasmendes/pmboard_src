<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgscript $sistemascfgscript
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgscripts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Scriptstipos'), ['controller' => 'Scriptstipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Scriptstipo'), ['controller' => 'Scriptstipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documentos'), ['controller' => 'Documentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Documento'), ['controller' => 'Documentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgscripts form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemascfgscript) ?>
    <fieldset>
        <legend><?= __('Add Sistemascfgscript') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('scriptstipo_id', ['options' => $scriptstipos, 'empty' => true]);
            echo $this->Form->control('codenome', ['label' => 'Codenome','empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('scriptaplicado');
            echo $this->Form->control('versaonumero');
            echo $this->Form->control('ativo');
            echo $this->Form->control('autor');
            echo $this->Form->control('dataroteiro', ['empty' => true]);
            echo $this->Form->control('instrucaotecnica');
            echo $this->Form->control('advertencias');
            echo $this->Form->control('palavraschave');
            echo $this->Form->control('documento_id', ['options' => $documentos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
