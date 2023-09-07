<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calendariosplano $calendariosplano
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Calendariosplanos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Calendariostipos'), ['controller' => 'Calendariostipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calendariostipo'), ['controller' => 'Calendariostipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Calendarios'), ['controller' => 'Calendarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calendario'), ['controller' => 'Calendarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="calendariosplanos form large-9 medium-8 columns content">
    <?= $this->Form->create($calendariosplano) ?>
    <fieldset>
        <legend><?= __('Add Calendariosplano') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('calendariostipo_id', ['options' => $calendariostipos, 'empty' => true]);
            echo $this->Form->control('horainicio', ['empty' => true]);
            echo $this->Form->control('horafim', ['empty' => true]);
            echo $this->Form->control('horaalmocoinicio', ['empty' => true]);
            echo $this->Form->control('horaalmocofim', ['empty' => true]);
            echo $this->Form->control('primeiraparadainicio', ['empty' => true]);
            echo $this->Form->control('primeiraparadafim', ['empty' => true]);
            echo $this->Form->control('segundaparadainicio', ['empty' => true]);
            echo $this->Form->control('segundaparadafim', ['empty' => true]);
            echo $this->Form->control('terceiraparadainicio', ['empty' => true]);
            echo $this->Form->control('terceiraparadafim', ['empty' => true]);
            echo $this->Form->control('quartaparadainicio', ['empty' => true]);
            echo $this->Form->control('quartaparadafim', ['empty' => true]);
            echo $this->Form->control('tempoabertura');
            echo $this->Form->control('tempoparadaprogramada');
            echo $this->Form->control('tempodisponivel');
            echo $this->Form->control('considerarcrossday');
            echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true]);
            echo $this->Form->control('tempoprimeiraparada');
            echo $this->Form->control('temposegundaparada');
            echo $this->Form->control('tempoterceiraparada');
            echo $this->Form->control('tempoquartaparada');
            echo $this->Form->control('tempoalmocoparada');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
