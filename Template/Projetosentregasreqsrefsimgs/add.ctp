<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsrefsimg $projetosentregasreqsrefsimg
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsrefsimgs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Imagestipos'), ['controller' => 'Imagestipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['controller' => 'Imagestipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqsrefsimgs form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasreqsrefsimg) ?>
    <fieldset>
        <legend><?= __('Add Projetosentregasreqsrefsimg') ?></legend>
        <?php
            echo $this->Form->control('projetosentregasreqsref_id');
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('pathimage',['class'=> "form-control"]);
            echo $this->Form->control('imagestipo_id', ['options' => $imagestipos, 'empty' => true,'class'=>['class'=> 'form-control']]);
            echo $this->Form->control('image',['class'=> "form-control"]);
            echo $this->Form->control('imagemid');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
