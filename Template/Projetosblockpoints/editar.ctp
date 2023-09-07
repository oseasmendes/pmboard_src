<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosblockpoint $projetosblockpoint
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosblockpoint->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosblockpoint->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosblockpoints'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosblockpoints form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosblockpoint) ?>
    <fieldset>
        <legend><?= __('Edit Projetosblockpoint') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('detalhes');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
            echo $this->Form->control('consultore_id', ['options' => $consultores, 'empty' => true]);
            echo $this->Form->control('responsavel');
            echo $this->Form->control('resolvidoem', ['empty' => true]);
            echo $this->Form->control('planoacao');
            echo $this->Form->control('ativo');
            echo $this->Form->control('risco');
            echo $this->Form->control('flag');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
