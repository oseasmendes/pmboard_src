<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsretrositem $projetossprintsretrositem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretrositems'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetossprintsretros'), ['controller' => 'Projetossprintsretros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetossprintsretro'), ['controller' => 'Projetossprintsretros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetossprintsretrositems form large-9 medium-8 columns content">
    <?= $this->Form->create($projetossprintsretrositem) ?>
    <fieldset>
        <legend><?= __('Add Projetossprintsretrositem') ?></legend>
        <?php
            echo $this->Form->control('projetossprintsretro_id', ['options' => $projetossprintsretros, 'empty' => true]);
            echo $this->Form->control('pareto_id', ['options' => $paretos, 'empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('detalhes');
            echo $this->Form->control('geraplanoacao');
            echo $this->Form->control('observacao');
            echo $this->Form->control('classificacao');
            echo $this->Form->control('referenciaoriginal');
            echo $this->Form->control('numerocard');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
