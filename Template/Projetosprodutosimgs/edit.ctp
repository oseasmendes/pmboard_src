<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosimg $projetosprodutosimg
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $projetosprodutosimg->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosimg->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosimgs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosprodutosimgs form large-9 medium-8 columns content">
    <?= $this->Form->create($projetosprodutosimg) ?>
     <?php
    $Root_Path = "http://".$_SERVER['SERVER_NAME']."/pmboard";
    //$pathurl = WWW_ROOT.'img'.DS.'projetosprodutos'.DS.$projetosprodutosimg->projetosproduto->id;
   
    $newpath = $Root_Path.'/img'.'/projetosprodutos/'.$projetosprodutosimg->projetosproduto_id; 
    $pathimage = $newpath.'/'.$projetosprodutosimg->imagemoriginal;  
    echo '<img src="'.$pathimage.'" alt="Saes" width="200" height="100">';
    
    ?>
    <fieldset>
        <legend><?= __('Edit Projetosprodutosimg') ?></legend>
        <?php
            echo $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos, 'empty' => true,'disabled' => 'disabled','class'=>['class'=> 'form-control']]);
            echo $this->Form->control('referencia',['class'=> "form-control"]);            
            echo $this->Form->control('descricao',['class'=> "form-control"]);
            echo $this->Form->control('imagemoriginal',['class'=> "form-control"]);
            echo $this->Form->control('url',['class'=> "form-control"]);
            echo $this->Form->control('imagemoriginalid',['class'=> "form-control"]);
            echo $this->Form->control('imagempath',['class'=> "form-control"]);
            echo $this->Form->control('ordem',['class'=> "form-control"]);
            echo $this->Form->control('imagem',['class'=> "form-control"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
