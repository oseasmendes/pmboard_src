<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaprostep $sistemaprostep
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Steps Roll</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 


<div class="sistemaprosteps view large-9 medium-8 columns content">

    <div class="row no-gutters" >
            <div class="col-3"> 
                <?= $this->Form->create($sistemaprostep, ['url'=>['controller' => 'Sistemaprostepsimgs', 'action' => 'addimg'],'']) ?>   
                    <?= $this->Form->control('Imagem',['default'=> $this->Number->format($sistemaprostep->id),'type' => 'hidden']); ?>
                        
                    <?= $this->Form->button('Insert Picture',['class'=>'btn btn-primary btn-sm btn-block']) ?>
                <?= $this->Form->end() ?> 
            </div>
    </div>
    <h3><?= h($sistemaprostep->id) ?></h3>
    <h4><font color="#0066ff"><?= "Observação: Para Inserir Imagens é necessário editar Step Process para gerar o container" ?></font></h4>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistemaproaction') ?></th>
            <td><?= $sistemaprostep->has('sistemaproaction') ? $this->Html->link($sistemaprostep->sistemaproaction->id, ['controller' => 'Sistemaproactions', 'action' => 'view', $sistemaprostep->sistemaproaction->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($sistemaprostep->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participante') ?></th>
            <td><?= $sistemaprostep->has('participante') ? $this->Html->link($sistemaprostep->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $sistemaprostep->participante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $sistemaprostep->has('consultore') ? $this->Html->link($sistemaprostep->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $sistemaprostep->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemaprostep->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stepaction') ?></th>
            <td><?= $this->Number->format($sistemaprostep->stepaction) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemaprostep->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemaprostep->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historic') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemaprostep->historic)); ?>
    </div>
    <div class="related">
        
        <?php if (!empty($sistemaprostep->sistemaprostepsfiles)): ?>
        <h4><?= __('Arquivos Anexados') ?></h4>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistemaprostep Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Nomearquivo') ?></th>
                <th scope="col"><?= __('Detalhes') ?></th>
                <th scope="col"><?= __('Extensao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemaprostep->sistemaprostepsfiles as $sistemaprostepsfiles): ?>
            <tr>
                <td><?= h($sistemaprostepsfiles->id) ?></td>
                <td><?= h($sistemaprostepsfiles->sistemaprostep_id) ?></td>
                <td><?= h($sistemaprostepsfiles->descricao) ?></td>
                <td><?= h($sistemaprostepsfiles->nomearquivo) ?></td>
                <td><?= h($sistemaprostepsfiles->detalhes) ?></td>
                <td><?= h($sistemaprostepsfiles->extensao) ?></td>
                <td><?= h($sistemaprostepsfiles->created) ?></td>
                <td><?= h($sistemaprostepsfiles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemaprostepsfiles', 'action' => 'view', $sistemaprostepsfiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemaprostepsfiles', 'action' => 'edit', $sistemaprostepsfiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemaprostepsfiles', 'action' => 'delete', $sistemaprostepsfiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemaprostepsfiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
         
         <?php if (!empty($sistemaprostep->sistemaprostepsimgs)): ?>
          <h4><?= __('Telas Relacionadas') ?></h4>
          <table class="table">    
            <tr>                
                <th scope="col"><?= __('Descricao') ?></th>                              
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Sample') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemaprostep->sistemaprostepsimgs as $img): ?>
                <tr>                
                    <td><?= h($img->descricao) ?></td>     
                    <td><?= h($img->created) ?></td>
                    <td><?= h($img->modified) ?></td>
                    <td>
                 <?php
    $Root_Path = "http://".$_SERVER['SERVER_NAME']."/pmboard";
    //$pathurl = WWW_ROOT.'img'.DS.'projetosprodutos'.DS.$projetosprodutosimg->projetosproduto->id;
   
    $newpath = $Root_Path.'/img'.'/sistemaprostepsimgs/'.$img->sistemaprostep_id; 
    $pathimage = $newpath.'/'.$img->imagemoriginal;  
    echo '<img src="'.$pathimage.'" alt="Saes" width="220" height="120">';
    
    ?>
                </td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Sistemaprostepsimgs', 'action' => 'view', $img->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemaprostepsimgs', 'action' => 'edit', $img->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemaprostepsimgs', 'action' => 'delete', $img->id], ['confirm' => __('Are you sure you want to delete # {0}?', $img->id)]) ?>
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
