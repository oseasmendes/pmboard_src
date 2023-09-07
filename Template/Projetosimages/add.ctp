<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosimage $projetosimage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosimages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Imagestipos'), ['controller' => 'Imagestipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['controller' => 'Imagestipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosimages form large-9 medium-8 columns content">              
        <?= $this->Form->create($projetosimage,['type' => 'file'],['$paramid' => 'Imagem']) ?>
        <?php $paramid = $this->request->getParam('$paramid');?>
         <!-- <?php $this->projeto_id = $this->request->getParam('$paramid'); ?>

        <?php $paramid = $this->request->getQueryParams(); ?>
        <?php $this->projeto_id = $paramid; ?>  -->
    <fieldset>
        <legend><?= __('Add Projetosimage') ?></legend>
        <?php           
            
             echo $this->Form->control('image[]',['label' => 'Imagem', 'type' => 'file','multiple'=>'true']);
            

               echo $this->Form->control('projeto_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            // echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
