<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasfaq $sistemasfaq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sistemasfaq->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasfaq->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sistemasfaqs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entregasfaqs'), ['controller' => 'Entregasfaqs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entregasfaq'), ['controller' => 'Entregasfaqs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasfaqsdetalhes'), ['controller' => 'Sistemasfaqsdetalhes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasfaqsdetalhe'), ['controller' => 'Sistemasfaqsdetalhes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasfaqs form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasfaq) ?>
    <fieldset>
        <legend><?= __('Edit Sistemasfaq') ?></legend>
        <?php
            echo $this->Form->control('sistema_id', ['options' => $sistemas,'disabled' => 'disabled','class'=>['class'=> 'form-control']]);     
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('mensagemerro',['class'=> "form-control","label" => "Mensagem do Erro"]);
            echo $this->Form->control('Descricao',['class'=> "form-control"]);
            echo $this->Form->control('Historico',['class'=> "form-control"]);
            echo $this->Form->control('FrequentlyAskedQuestions');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
