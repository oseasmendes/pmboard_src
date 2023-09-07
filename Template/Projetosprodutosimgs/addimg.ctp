<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosimage $projetosimage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetos Produtos Imgs'), ['action' => 'index']) ?></li>                
        <li><?= $this->Html->link(__('List Imagestipos'), ['controller' => 'Imagestipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Imagestipo'), ['controller' => 'Imagestipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosimages form large-9 medium-8 columns content">              
        <?= $this->Form->create($projetosprodutosimg,['type' => 'file'],['$paramid' => 'Imagem']) ?>
        <?php $paramid = $this->request->getParam('$paramid');?>                
    <fieldset>
        <legend><?= __('Add Image') ?></legend>
        <?php           
            
             echo $this->Form->control('image[]',['label' => 'Imagem', 'type' => 'file','multiple'=>'true']);
            

               echo $this->Form->control('projetosproduto_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            // echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
