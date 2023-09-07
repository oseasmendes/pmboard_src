<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosblockpointsfl $projetosblockpointsfl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosblockpointsfls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosblockpoints'), ['controller' => 'Projetosblockpoints', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosblockpoint'), ['controller' => 'Projetosblockpoints', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosblockpointsfls form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosblockpointsfl) ?>
                <?php $paramid = $_POST['Follow']; ?>
                <?php $this->projetosblockpoint_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Projetosblockpointsfl') ?></legend>
        <?php
            //echo $this->Form->control('projetosblockpoint_id', ['options' => $projetosblockpoints, 'empty' => true]);
            echo $this->Form->control('projetosblockpoint_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            
            echo $this->Form->control('dataemissao', ['empty' => true]);
            echo $this->Form->control('descricao');
            echo $this->Form->control('detalhes');
            echo $this->Form->control('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
