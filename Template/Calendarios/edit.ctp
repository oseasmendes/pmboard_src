<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendario $calendario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $calendario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $calendario->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Calendarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Calendariosplanos'), ['controller' => 'Calendariosplanos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calendariosplano'), ['controller' => 'Calendariosplanos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="calendarios form large-9 medium-8 columns content">
    <?= $this->Form->create($calendario) ?>
    <fieldset>
        <legend><?= __('Edit Calendario') ?></legend>
        <?php
            echo $this->Form->control('data', ['empty' => true]);
            echo $this->Form->control('etiqueta');
            echo $this->Form->control('dia');
            echo $this->Form->control('mes');
            echo $this->Form->control('ano');
            echo $this->Form->control('dianome');
            echo $this->Form->control('mesnome');
            echo $this->Form->control('feriado');
            echo $this->Form->control('diaserial');
            echo $this->Form->control('endweek');
            echo $this->Form->control('technicalfreezing');
            echo $this->Form->control('semananumero');
            echo $this->Form->control('referenciadia');
            echo $this->Form->control('tempoabertura');
            echo $this->Form->control('tempoparadaprogramada');
            echo $this->Form->control('tempodisponivel');
            echo $this->Form->control('calendariosplano_id', ['options' => $calendariosplanos, 'empty' => true]);
            echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
