<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaprostepsimg $sistemaprostepsimg
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Roll Actions</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemaprostepsimg'), ['action' => 'edit', $sistemaprostepsimg->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemaprostepsimg'), ['action' => 'delete', $sistemaprostepsimg->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemaprostepsimg->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemaprostepsimgs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemaprostepsimg'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemaprosteps'), ['controller' => 'Sistemaprosteps', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemaprostep'), ['controller' => 'Sistemaprosteps', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemaprostepsimgs view large-9 medium-8 columns content">
    <h3><?= h($sistemaprostepsimg->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistemaprostep') ?></th>
            <td><?= $sistemaprostepsimg->has('sistemaprostep') ? $this->Html->link($sistemaprostepsimg->sistemaprostep->description, ['controller' => 'Sistemaprosteps', 'action' => 'view', $sistemaprostepsimg->sistemaprostep->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($sistemaprostepsimg->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemaprostepsimg->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagemoriginal') ?></th>
            <td><?= h($sistemaprostepsimg->imagemoriginal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($sistemaprostepsimg->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagempath') ?></th>
            <td><?= h($sistemaprostepsimg->imagempath) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemaprostepsimg->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagemoriginalid') ?></th>
            <td><?= $this->Number->format($sistemaprostepsimg->imagemoriginalid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= $this->Number->format($sistemaprostepsimg->ordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemaprostepsimg->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemaprostepsimg->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Imagem') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemaprostepsimg->imagem)); ?>
    </div>
    <div class="row">
                <?php
                         $Root_Path = "http://".$_SERVER['SERVER_NAME']."/pmboard";
                        //$pathurl = WWW_ROOT.'img'.DS.'projetosprodutos'.DS.$projetosprodutosimg->projetosproduto->id;
   
                        $newpath = $Root_Path.'/img'.'/sistemaprostepsimgs/'.$sistemaprostepsimg->sistemaprostep_id; 
                        $pathimage = $newpath.'/'.$sistemaprostepsimg->imagemoriginal;  
                        echo '<img src="'.$pathimage.'" alt="Saes" width="920" height="580">';
    
                ?>
     </div>
</div>




</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
