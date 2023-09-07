<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgfront $sistemascfgfront
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemascfgfront->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgfront->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemascfgfronts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tecnologias'), ['controller' => 'Tecnologias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnologia'), ['controller' => 'Tecnologias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemascfgfronts form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemascfgfront) ?>
    <fieldset>
        <legend><?= __('Edit Sistemascfgfront') ?></legend>
        <?php
            echo $this->Form->control('tecnologia_id', ['options' => $tecnologias, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('percentual');
            echo $this->Form->control('versao');
            echo $this->Form->control('ultimaatualizacao', ['empty' => true]);
            echo $this->Form->control('motivoatualizacao');
            echo $this->Form->control('sistema_id', ['options' => $sistemas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
