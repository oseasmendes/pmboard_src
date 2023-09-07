<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasfaqsdetalhe $sistemasfaqsdetalhe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemasfaqsdetalhe->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasfaqsdetalhe->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemasfaqsdetalhes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasfaqs'), ['controller' => 'Sistemasfaqs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasfaq'), ['controller' => 'Sistemasfaqs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasfaqsdetalhesimgs'), ['controller' => 'Sistemasfaqsdetalhesimgs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasfaqsdetalhesimg'), ['controller' => 'Sistemasfaqsdetalhesimgs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasfaqsdetalhes form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasfaqsdetalhe) ?>
    <fieldset>
        <legend><?= __('Edit Sistemasfaqsdetalhe') ?></legend>
        <?php
            echo $this->Form->control('sistemasfaq_id', ['options' => $sistemasfaqs, 'empty' => true]);
            echo $this->Form->control('referencia');
            echo $this->Form->control('ordem');
            echo $this->Form->control('descricao');
            echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true]);
            echo $this->Form->control('historico');
            echo $this->Form->control('contribuicaode');
            echo $this->Form->control('faqprecedente');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
