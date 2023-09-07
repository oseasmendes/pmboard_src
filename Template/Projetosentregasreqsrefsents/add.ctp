<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsrefsent $projetosentregasreqsrefsent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefs'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosentregasreqsref'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqsrefsents form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasreqsrefsent) ?>
    <fieldset>
        <legend><?= __('Add Projetosentregasreqsrefsent') ?></legend>
        <?php
            echo $this->Form->control('projetosentregasreqsref_id', ['options' => $projetosentregasreqsrefs, 'empty' => true]);
            echo $this->Form->control('tabela');
            echo $this->Form->control('campo');
            echo $this->Form->control('tipo');
            echo $this->Form->control('formato');
            echo $this->Form->control('descricao');
            echo $this->Form->control('chave');
            echo $this->Form->control('comentario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
