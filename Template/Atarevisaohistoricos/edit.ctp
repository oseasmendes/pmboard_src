<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Atarevisaohistorico $atarevisaohistorico
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $atarevisaohistorico->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $atarevisaohistorico->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Atarevisaohistoricos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Atas'), ['controller' => 'Atas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ata'), ['controller' => 'Atas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Atadetalhes'), ['controller' => 'Atadetalhes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atadetalhe'), ['controller' => 'Atadetalhes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="atarevisaohistoricos form large-9 medium-8 columns content">
    <?= $this->Form->create($atarevisaohistorico) ?>
    <fieldset>
        <legend><?= __('Edit Atarevisaohistorico') ?></legend>
        <?php
            echo $this->Form->control('ata_id', ['options' => $atas, 'empty' => true]);
            echo $this->Form->control('atadetalhe_id', ['options' => $atadetalhes, 'empty' => true]);
            echo $this->Form->control('correcao_solicitado_por');
            echo $this->Form->control('aprovado');
            echo $this->Form->control('proposta_alteracao');
            echo $this->Form->control('datarevisao', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
