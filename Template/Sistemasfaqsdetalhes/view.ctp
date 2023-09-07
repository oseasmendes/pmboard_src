<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasfaqsdetalhe $sistemasfaqsdetalhe
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


<div class="sistemasfaqsdetalhes view large-9 medium-8 columns content">
    <h3><?= h($sistemasfaqsdetalhe->id) ?></h3>
                <div class="row no-gutters" >
                    <div class="col-3">  
                        <?= $this->Form->create($sistemasfaqsdetalhe, ['url'=>['controller' => 'Sistemasfaqsdetalhesimgs', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('Imagem',['default'=> $this->Number->format($sistemasfaqsdetalhe->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Add Imgs',['class'=>'btn btn-secondary btn-sm btn-block']) ?>            
                        <?= $this->Form->end() ?>
                    </div>
                </div>          


    <table class="table">
        <tr>
            <th scope="row"><?= __('Sistemasfaq') ?></th>
            <td><?= $sistemasfaqsdetalhe->has('sistemasfaq') ? $this->Html->link($sistemasfaqsdetalhe->sistemasfaq->Descricao, ['controller' => 'Sistemasfaqs', 'action' => 'view', $sistemasfaqsdetalhe->sistemasfaq->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($sistemasfaqsdetalhe->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasfaqsdetalhe->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participante') ?></th>
            <td><?= $sistemasfaqsdetalhe->has('participante') ? $this->Html->link($sistemasfaqsdetalhe->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $sistemasfaqsdetalhe->participante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contribuicaode') ?></th>
            <td><?= h($sistemasfaqsdetalhe->contribuicaode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasfaqsdetalhe->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= $this->Number->format($sistemasfaqsdetalhe->ordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Faqprecedente') ?></th>
            <td><?= $this->Number->format($sistemasfaqsdetalhe->faqprecedente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasfaqsdetalhe->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasfaqsdetalhe->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistemasfaqsdetalhe->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasfaqsdetalhe->historico)); ?>
    </div>
    <div class="related">
        <h4><?= __('Imagens') ?></h4>
        <?php if (!empty($sistemasfaqsdetalhe->sistemasfaqsdetalhesimgs)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistemasfaqsdetalhe Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>             
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Picture') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemasfaqsdetalhe->sistemasfaqsdetalhesimgs as $sistemasfaqsdetalhesimgs): ?>
            <tr>
                <td><?= h($sistemasfaqsdetalhesimgs->id) ?></td>
                <td><?= h($sistemasfaqsdetalhesimgs->sistemasfaqsdetalhe_id) ?></td>
                <td><?= h($sistemasfaqsdetalhesimgs->descricao) ?></td>                
                <td><?= h($sistemasfaqsdetalhesimgs->referencia) ?></td>
                <td><?= h($sistemasfaqsdetalhesimgs->created) ?></td>
                <td><?= h($sistemasfaqsdetalhesimgs->modified) ?></td>
                <td>
                 <?php
    $Root_Path = "http://".$_SERVER['SERVER_NAME']."/pmboard";

   
    $newpath = $Root_Path.'/img'.'/sistemasfaqsdetalhes/'.$sistemasfaqsdetalhesimgs->sistemasfaqsdetalhe_id; 
    $pathimage = $newpath.'/'.$sistemasfaqsdetalhesimgs->imagemoriginal;  
    echo '<img src="'.$pathimage.'" alt="Saes" width="220" height="120">';
    
    ?>
                </td>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasfaqsdetalhesimgs', 'action' => 'view', $sistemasfaqsdetalhesimgs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasfaqsdetalhesimgs', 'action' => 'edit', $sistemasfaqsdetalhesimgs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasfaqsdetalhesimgs', 'action' => 'delete', $sistemasfaqsdetalhesimgs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasfaqsdetalhesimgs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>





</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
