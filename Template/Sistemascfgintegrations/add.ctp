<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgintegration $sistemascfgintegration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgintegrations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tecnologias'), ['controller' => 'Tecnologias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnologia'), ['controller' => 'Tecnologias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Integrations'), ['controller' => 'Integrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Integration'), ['controller' => 'Integrations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgintegrations form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemascfgintegration) ?>
      <?php $paramid = $_POST['Integration'];
            //var_dump($tktid); ?>
            <?= $this->sistema_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Sistemascfgintegration') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid)); //inserido esse parametro para receber projeto_id  
            echo $this->Form->control('tecnologia_id', ['options' => $tecnologias, 'empty' => true]);
            echo $this->Form->control('referencia');
            
            echo $this->Form->control('descricao');
            echo $this->Form->control('contato');
            echo $this->Form->control('observacao');
            echo $this->Form->control('transacao');
            echo $this->Form->control('transacaodescricao');

            echo $this->Form->control('integration_id', ['options' => $integrations, 'empty' => true]);
            echo $this->Form->control('referenciadirecao');
            echo $this->Form->control('sistemaorigem_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('sistemadestino_id', ['options' => $sistemas, 'empty' => true]);
             echo $this->Form->control('sistemacfgtransaction_id', ['options' => $sistemascfgtransactions, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
