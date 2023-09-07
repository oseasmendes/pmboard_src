<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasfaqsdetalhesimg $sistemasfaqsdetalhesimg
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sistemasfaqsdetalhesimgs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sistemasfaqsdetalhes'), ['controller' => 'Sistemasfaqsdetalhes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sistemasfaqsdetalhe'), ['controller' => 'Sistemasfaqsdetalhes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Imagestipos'), ['controller' => 'Imagestipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['controller' => 'Imagestipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sistemasfaqsdetalhesimgs form large-9 medium-8 columns content">
    <?= $this->Form->create($sistemasfaqsdetalhesimg) ?>
    <fieldset>
        <legend><?= __('Add Sistemasfaqsdetalhesimg') ?></legend>
        <?php
            echo $this->Form->control('sistemasfaqsdetalhe_id', ['options' => $sistemasfaqsdetalhes, 'empty' => true]);
            echo $this->Form->control('referencia');
            echo $this->Form->control('descricao');
            echo $this->Form->control('pathimage');
            echo $this->Form->control('imagestipo_id', ['options' => $imagestipos, 'empty' => true]);
            echo $this->Form->control('image');
            echo $this->Form->control('imagemid');
            echo $this->Form->control('ativo');
            echo $this->Form->control('imagemoriginal');
            echo $this->Form->control('url');
            echo $this->Form->control('imagemoriginalid');
            echo $this->Form->control('imagempath');
            echo $this->Form->control('ordem');
            echo $this->Form->control('imagem');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
