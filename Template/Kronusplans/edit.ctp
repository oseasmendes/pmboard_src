<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kronusplan $kronusplan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kronusplan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kronusplan->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Kronusplans'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kronus'), ['controller' => 'Kronus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kronus'), ['controller' => 'Kronus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kronusitems'), ['controller' => 'Kronusitems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kronusitem'), ['controller' => 'Kronusitems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kronusplans form large-9 medium-8 columns content">
    <?= $this->Form->create($kronusplan) ?>
    <fieldset>
        <legend><?= __('Edit Kronusplan') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
             echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true]);
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('version');
            echo $this->Form->control('datainicio', ['empty' => true]);
            echo $this->Form->control('datafim', ['empty' => true]);
            echo $this->Form->control('kronusplantype');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
