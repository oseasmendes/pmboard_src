<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasimg $projetosprodutosentregasimg
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregasimgs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosentregasimgs form large-9 medium-8 columns content">
     <?php echo $this->Form->create($projetosprodutosentregasimg,['type' => 'file'],['$paramid' => 'Imagem']) ?>
      <!-- <?php $paramid = $_POST['Imagem']; ?> 
        <?php var_dump($paramid); ?> -->
         <?php $this->projetosprodutosentrega_id = $paramid; ?>
   
 
    
    <fieldset>
        <legend><?= __('Add Projetosprodutosentregasimg') ?></legend>
        <?php

            echo $this->Form->control('image[]',['label' => 'Imagem', 'type' => 'file','multiple'=>'true']);
            //echo $this->Form->create('User', array('url' => array('action' => 'create'), 'enctype' => 'multipart/form-data'));
           // echo $this->Form->input('image', array('type' => 'file'));

               echo $this->Form->control('projetosprodutosentrega_id', array('default'=>$paramid,'disabled' => 'disabled','value'=>$paramid,'class'=>['class'=> 'form-control']));
            // echo $this->Form->control('projetosprodutosentrega_id', ['options' => $projetosprodutosentregas, 'empty' => true]);
          
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
