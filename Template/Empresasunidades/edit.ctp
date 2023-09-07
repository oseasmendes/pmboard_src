<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresasunidade $empresasunidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empresasunidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empresasunidade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Empresasunidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="empresasunidades form large-9 medium-8 columns content">
    <?= $this->Form->create($empresasunidade) ?>
    <fieldset>
        <legend><?= __('Edit Empresasunidade') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('sigla');
            echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
