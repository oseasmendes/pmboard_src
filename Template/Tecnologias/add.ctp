<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tecnologia $tecnologia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tecnologias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultoresvrstecnologias'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultoresvrstecnologia'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Integrations'), ['controller' => 'Integrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Integration'), ['controller' => 'Integrations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sh Apptechno'), ['controller' => 'ShApptechno', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sh Apptechno'), ['controller' => 'ShApptechno', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgfronts'), ['controller' => 'Sistemascfgfronts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgfront'), ['controller' => 'Sistemascfgfronts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgintegrations'), ['controller' => 'Sistemascfgintegrations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemascfgintegration'), ['controller' => 'Sistemascfgintegrations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tecnologias form large-9 medium-8 columns content">
    <?= $this->Form->create($tecnologia) ?>
    <fieldset>
        <legend><?= __('Add Tecnologia') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
