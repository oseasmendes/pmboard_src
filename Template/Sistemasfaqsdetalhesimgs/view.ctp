<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasfaqsdetalhesimg $sistemasfaqsdetalhesimg
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">System Roll</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 



<div class="sistemasfaqsdetalhesimgs view large-9 medium-8 columns content">
    <h3><?= h($sistemasfaqsdetalhesimg->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Sistemasfaqsdetalhe') ?></th>
            <td><?= $sistemasfaqsdetalhesimg->has('sistemasfaqsdetalhe') ? $this->Html->link($sistemasfaqsdetalhesimg->sistemasfaqsdetalhe->descricao, ['controller' => 'Sistemasfaqsdetalhes', 'action' => 'view', $sistemasfaqsdetalhesimg->sistemasfaqsdetalhe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($sistemasfaqsdetalhesimg->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasfaqsdetalhesimg->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pathimage') ?></th>
            <td><?= h($sistemasfaqsdetalhesimg->pathimage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagestipo') ?></th>
            <td><?= $sistemasfaqsdetalhesimg->has('imagestipo') ? $this->Html->link($sistemasfaqsdetalhesimg->imagestipo->descricao, ['controller' => 'Imagestipos', 'action' => 'view', $sistemasfaqsdetalhesimg->imagestipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($sistemasfaqsdetalhesimg->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagemid') ?></th>
            <td><?= h($sistemasfaqsdetalhesimg->imagemid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagemoriginal') ?></th>
            <td><?= h($sistemasfaqsdetalhesimg->imagemoriginal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagempath') ?></th>
            <td><?= h($sistemasfaqsdetalhesimg->imagempath) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagem') ?></th>
            <td><?= h($sistemasfaqsdetalhesimg->imagem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasfaqsdetalhesimg->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagemoriginalid') ?></th>
            <td><?= $this->Number->format($sistemasfaqsdetalhesimg->imagemoriginalid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= $this->Number->format($sistemasfaqsdetalhesimg->ordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasfaqsdetalhesimg->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasfaqsdetalhesimg->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistemasfaqsdetalhesimg->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <?php
                    $Root_Path = "http://".$_SERVER['SERVER_NAME']."/pmboard";
                    $newpath = $Root_Path.'/img'.'/sistemasfaqsdetalhes/'.$sistemasfaqsdetalhesimg->sistemasfaqsdetalhe_id; 
                    $pathimage = $newpath.'/'.$sistemasfaqsdetalhesimg->imagemoriginal;  
                    echo '<img src="'.$pathimage.'" alt="Saes" width=80% height=30%>';    
                ?>

    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasfaqsdetalhesimg->url)); ?>
    </div>
</div>




</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
