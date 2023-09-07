<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreqsscript $projetosentregasreqsscript
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosentregasreqsscripts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="projetosentregasreqsscripts form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosentregasreqsscript) ?>
            <?php $paramid = $_POST['scriptsm']; ?>            
            <?php $this->projetosentregasreqsref_id = $paramid; ?>
    <fieldset>
        <legend><?= __('Add Script') ?></legend>
        <?php
            echo $this->Form->control('projetosentregasreqsref_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control'])); //inserido esse parametro para receber projeto_id
            echo $this->Form->control('referencia',['class'=> "form-control"]);
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            //echo $this->Form->control('projetosentregasreqsref_id');
            echo $this->Form->control('scriptsemantic',['class'=> "form-control"]);
            echo $this->Form->control('observacao',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
