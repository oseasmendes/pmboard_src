<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosproduto $projetosproduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosfeedbacks'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosfeedback'), ['controller' => 'Projetosprodutosfeedbacks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosnotas'), ['controller' => 'Projetosprodutosnotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosnota'), ['controller' => 'Projetosprodutosnotas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosparetos'), ['controller' => 'Projetosprodutosparetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutospareto'), ['controller' => 'Projetosprodutosparetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutos form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosproduto) ?>
     <?php $proje_id = $_POST['keyword'];
            //var_dump($tktid); ?>
            <?= $this->projeto_id = $proje_id; ?>
    <fieldset>
        <legend><?= __('Add Projetosproduto') ?></legend>
        <?php
            echo $this->Form->control('produto');
            //echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            //echo $this->Form->control('projeto_id', ['options' => $projetos, 'empty' => true]);
            echo $this->Form->control('projeto_id', array('default'=>$proje_id,'disabled' => 'disabled','value'=>$proje_id));            
            echo $this->Form->control('codenome');
            echo $this->Form->control('referencia');
            echo $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals, 'empty' => true]);
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
