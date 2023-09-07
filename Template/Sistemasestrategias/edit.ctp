<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasestrategia $sistemasestrategia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemasestrategia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasestrategia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemasestrategias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasestrategias form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasestrategia) ?>
    <fieldset>
        <legend><?= __('Edit Sistemasestrategia') ?></legend>
        <?php
            echo $this->Form->control('estrategia_id');
            echo $this->Form->control('descricao');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
