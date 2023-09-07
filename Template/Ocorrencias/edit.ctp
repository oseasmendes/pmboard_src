<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencia $ocorrencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ocorrencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultoresnotas'), ['controller' => 'Consultoresnotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultoresnota'), ['controller' => 'Consultoresnotas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ocorrencias form large-9 medium-8 columns content">
    <?= $this->Form->create($ocorrencia) ?>
    <fieldset>
        <legend><?= __('Edit Ocorrencia') ?></legend>
        <?php
            echo $this->Form->control('ocorrenciastipo_id');
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
