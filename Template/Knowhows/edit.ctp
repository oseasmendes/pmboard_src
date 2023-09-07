<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Knowhow $knowhow
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $knowhow->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $knowhow->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Knowhows'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultoresvrstecnologias'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultoresvrstecnologia'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasconsultores'), ['controller' => 'Sistemasconsultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasconsultore'), ['controller' => 'Sistemasconsultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="knowhows form large-9 medium-8 columns content">
    <?= $this->Form->create($knowhow) ?>
    <fieldset>
        <legend><?= __('Edit Knowhow') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('peso');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
