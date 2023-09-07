<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgurl $sistemascfgurl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgurls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasdocs'), ['controller' => 'Sistemasdocs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasdoc'), ['controller' => 'Sistemasdocs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgurls form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemascfgurl) ?>
    <fieldset>
        <legend><?= __('Add Sistemascfgurl') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('detalhes',['class'=> "form-control"]);
            echo $this->Form->control('observacao',['class'=> "form-control"]);
            echo $this->Form->control('ativo');
            echo $this->Form->control('sistemasdoc_id', ['options' => $sistemasdocs, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
