<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosimg $projetosprodutosimg
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projetosprodutosimg'), ['action' => 'edit', $projetosprodutosimg->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projetosprodutosimg'), ['action' => 'delete', $projetosprodutosimg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosimg->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosimgs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosimg'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetosprodutosimgs view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosimg->id) ?></h3>
    <?php
    $Root_Path = "http://".$_SERVER['SERVER_NAME']."/pmboard";
    //$pathurl = WWW_ROOT.'img'.DS.'projetosprodutos'.DS.$projetosprodutosimg->projetosproduto->id;
   
    $newpath = $Root_Path.'/img'.'/projetosprodutos/'.$projetosprodutosimg->projetosproduto->id; 
    $pathimage = $newpath.'/'.$projetosprodutosimg->imagemoriginal;  
    echo '<img src="'.$pathimage.'" alt="Saes" width="200" height="100">';
    
    ?>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $projetosprodutosimg->has('projetosproduto') ? $this->Html->link($projetosprodutosimg->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosimg->projetosproduto->id]) : '' ?></td>
        </tr>

        
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetosprodutosimg->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutosimg->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagemoriginal') ?></th>
            <td><?= h($projetosprodutosimg->imagemoriginal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($projetosprodutosimg->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagempath') ?></th>
            <td><?= h($projetosprodutosimg->imagempath) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosimg->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagemoriginalid') ?></th>
            <td><?= $this->Number->format($projetosprodutosimg->imagemoriginalid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= $this->Number->format($projetosprodutosimg->ordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosimg->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosimg->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Imagem') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutosimg->imagem)); ?>
    </div>
</div>
