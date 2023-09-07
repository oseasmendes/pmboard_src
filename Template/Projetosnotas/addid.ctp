<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosnota $projetosnota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosnotas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosnotas form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosnota) ?>
            <?php $paramid = $_POST['Nota']; ?>
            <?php $this->projeto_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Nota de Projeto') ?></legend>
        <?php
            echo $this->Form->control('projeto_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //inserido esse parametro para receber projeto_id
            echo $this->Form->control('notatipo_id', ['options' => $notatipos,'class'=>['class'=> 'form-control'] ,'empty' => true]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('historico',['class'=> "form-control"]);
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo '</p>';
            $ativo = ['N' => 'Inativo', 'A' => 'Ativo'];
            echo $this->Form->select('ativo', $ativo, ['default' => 'A','class'=>['class'=> 'form-control']]);
            echo '</p>';
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
