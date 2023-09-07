<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetoscontato $projetoscontato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetoscontatos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetoscontatos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetoscontato) ?>
    <fieldset>
        <legend><?= __('Add Projetoscontato') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true]);
            echo $this->Form->control('nome');
            echo $this->Form->control('papel');
            echo $this->Form->control('descricao');
            echo $this->Form->control('dataengajamento', ['empty' => true]);
            echo $this->Form->control('representacao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
