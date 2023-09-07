<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencia $ocorrencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultoresnotas'), ['controller' => 'Consultoresnotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultoresnota'), ['controller' => 'Consultoresnotas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ocorrencias form large-9 medium-8 columns content">
    <?= $this->Form->create($ocorrencia) ?>
    <fieldset>
        <legend><?= __('Add Ocorrencia') ?></legend>
        <?php
            echo $this->Form->control('ocorrenciastipo_id');
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
