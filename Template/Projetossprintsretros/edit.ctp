<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsretro $projetossprintsretro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetossprintsretro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsretro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretrosactions'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretrosaction'), ['controller' => 'Projetossprintsretrosactions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretrositems'), ['controller' => 'Projetossprintsretrositems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretrositem'), ['controller' => 'Projetossprintsretrositems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetossprintsretros form large-9 medium-8 columns content">
    <?= $this->Form->create($projetossprintsretro) ?>
    <fieldset>
        <legend><?= __('Edit Projetossprintsretro') ?></legend>
        <?php
            echo $this->Form->control('projetossprint_id', ['options' => $projetossprints, 'empty' => true]);
            echo $this->Form->control('pareto_id', ['options' => $paretos, 'empty' => true]);
            echo $this->Form->control('dataretro', ['empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('observacao');
            echo $this->Form->control('referenciaboard');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
