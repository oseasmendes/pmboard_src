<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisitostipo $requisitostipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Requisitostipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefs'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsref'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requisitostipos form large-9 medium-8 columns content">
    <?= $this->Form->create($requisitostipo) ?>
    <fieldset>
        <legend><?= __('Add Requisitostipo') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
