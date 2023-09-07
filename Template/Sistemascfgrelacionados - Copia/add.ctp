<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgrelacionado $sistemascfgrelacionado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgrelacionados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgrelacionados form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemascfgrelacionado) ?>
     <?php $paramid = $_POST['SystemRel'];
            //var_dump($tktid); ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemascfgrelacionado') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid)); //inserido esse parametro para receber projeto_id  

            echo $this->Form->control('sistemarelacionado_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
