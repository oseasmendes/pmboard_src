<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ata $ata
 */
?>

<div class="sistemas index large-9 medium-8 columns content"> 


    <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <div>
                    <div class="col-sm-8 col-md-7 py-4">                   
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?= $this->Html->link(__('Edit Ata'), ['action' => 'edit', $ata->id],['class'=>'dropdown-item'])?> 
                    <?= $this->Form->postLink(__('Delete Ata'), ['action' => 'delete', $ata->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ata->id)],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('List Atas'), ['action' => 'index'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('New Ata'), ['action' => 'add'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('List Conditions'), ['controller' => 'Conditions', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('New Condition'), ['controller' => 'Conditions', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('List Tipodocumentos'), ['controller' => 'Tipodocumentos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('New Tipodocumento'), ['controller' => 'Tipodocumentos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('List Ataaprovadores'), ['controller' => 'Ataaprovadores', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('New Ataaprovadore'), ['controller' => 'Ataaprovadores', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('List Ataparticipantes'), ['controller' => 'Ataparticipantes', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('New Ataparticipante'), ['controller' => 'Ataparticipantes', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('List Atarevisaohistoricos'), ['controller' => 'Atarevisaohistoricos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('New Atarevisaohistorico'), ['controller' => 'Atarevisaohistoricos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('List Atarevisoes'), ['controller' => 'Atarevisoes', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                    <?= $this->Html->link(__('New Atareviso'), ['controller' => 'Atarevisoes', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                        </div>
                    </div>  
                </div>
                </div>                              
            </div>
          </div>
          <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 
    <div class="row" >
             <div class="row no-gutters" >
    
                    <div class="col-3"> 
                        <?= $this->Form->create($ata, ['url'=>['controller' => 'Atasdetalhes', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('topico',['default'=> $this->Number->format($ata->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Inserir Topico',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>                 
                    <div class="col-3"> 
                        <?= $this->Form->create($ata, ['url'=>['controller' => 'Ataparticipantes', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Pessoas',['default'=> $this->Number->format($ata->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Inserir Participantes',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?>             
                    </div>                 
                    <div class="col-3"> 
                        <?= $this->Form->create($ata, ['url'=>['controller' => 'Ataconsultores', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Consultores',['default'=> $this->Number->format($ata->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Inserir Consultores',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>                 
                </div>    
            </div>

<div class="atas view large-9 medium-8 columns content">
    
    <h1><p class="text-info"><?= "Ata: ".h($ata->id)."-".h($ata->datareuniao)."-".h($ata->resumogeral) ?></p></h1>
    
    <table class="table table-info table-responsive-sm">  
         <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ata->id) ?></td>
            <th scope="row"><?= __('Versao') ?></th>
            <td><?= h($ata->versao) ?></td>
            <th scope="row"><?= __('Agenda Id') ?></th>
            <td><?= $this->Number->format($ata->agenda_id) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Resumogeral') ?></th>
            <td><?= h($ata->resumogeral) ?></td>
             <th scope="row"><?= __('Local') ?></th>
            <td><?= h($ata->local) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Proximareuniaolocal') ?></th>
            <td><?= h($ata->proximareuniaolocal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Condition') ?></th>
            <td><?= $ata->has('condition') ? $this->Html->link($ata->condition->descricao, ['controller' => 'Conditions', 'action' => 'view', $ata->condition->id]) : '' ?></td>
             <th scope="row"><?= __('Participante') ?></th>
            <td><?= $ata->has('participante') ? $this->Html->link($ata->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $ata->participante->id]) : '' ?>                
            </td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Tipodocumento') ?></th>
            <td><?= $ata->has('tipodocumento') ? $this->Html->link($ata->tipodocumento->descricao, ['controller' => 'Tipodocumentos', 'action' => 'view', $ata->tipodocumento->id]) : '' ?></td>
        </tr>       
        <tr>
            <th scope="row"><?= __('Relator Id') ?></th>
            <td><?= $this->Number->format($ata->relator_id) ?></td>
            <th scope="row"><?= __('Patrocinador Id') ?></th>
            <td><?= $this->Number->format($ata->patrocinador_id) ?></td>
            <th scope="row"><?= __('Coordenadorreuniao Id') ?></th>
            <td><?= $this->Number->format($ata->coordenadorreuniao_id) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Dataemissao') ?></th>
            <td><?= h($ata->dataemissao) ?></td>
            <th scope="row"><?= __('Datareuniao') ?></th>
            <td><?= h($ata->datareuniao) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Horarioreuniao') ?></th>
            <td><?= h($ata->horarioreuniao) ?></td>
            <th scope="row"><?= __('Proximadatareuniao') ?></th>
            <td><?= h($ata->proximadatareuniao) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Horainicio') ?></th>
            <td><?= h($ata->horainicio) ?></td>
            <th scope="row"><?= __('Horafim') ?></th>
            <td><?= h($ata->horafim) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ata->created) ?></td>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ata->modified) ?></td>
        </tr>        
    </table>
   
        <h4><?= __('Objetivo') ?></h4>
       <table class="table table-striped">
            <tr>
                <th scope="col">
                    <?= $this->Text->autoParagraph(h($ata->objetivo)); ?>
                </th>
            </tr>
        </table>
   
    <div class="related">
        <h4><?= __('Tópicos') ?></h4>
        <?php if (!empty($ata->atasdetalhes)): ?>
         <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ata Id') ?></th>
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Detalhamento') ?></th>
                <th scope="col"><?= __('Statusacao') ?></th>                               
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ata->atasdetalhes as $atasdetalhes): ?>
            <tr>
                <td><?= h($atasdetalhes->id) ?></td>
                <td><?= h($atasdetalhes->ata_id) ?></td>
                <td><?= h($atasdetalhes->resumo) ?></td>
                <td><?= h($atasdetalhes->detalhamento) ?></td>
                <td><?= h($atasdetalhes->statusacao) ?></td>                
                <td><?= h($atasdetalhes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Atasdetalhes', 'action' => 'view', $atasdetalhes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Atasdetalhes', 'action' => 'edit', $atasdetalhes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Atasdetalhes', 'action' => 'delete', $atasdetalhes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atasdetalhes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Participantes') ?></h4>
        <?php if (!empty($ata->ataparticipantes)): ?>
         <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ata Id') ?></th>
                <th scope="col"><?= __('Participante Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ata->ataparticipantes as $ataparticipantes): ?>
            <tr>
                <td><?= h($ataparticipantes->id) ?></td>
                <td><?= h($ataparticipantes->ata_id) ?></td>
                <td><?= h($ataparticipantes->participante_id) ?></td>
                <td><?= h($ataparticipantes->nome) ?></td>
                <td><?= h($ataparticipantes->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ataparticipantes', 'action' => 'view', $ataparticipantes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ataparticipantes', 'action' => 'edit', $ataparticipantes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ataparticipantes', 'action' => 'delete', $ataparticipantes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ataparticipantes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        <h4><?= __('Consultores') ?></h4>
        <?php if (!empty($ata->ataconsultores)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ata Id') ?></th>
                <th scope="col"><?= __('Participante Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ata->ataconsultores as $ataconsultores): ?>
            <tr>
                <td><?= h($ataconsultores->id) ?></td>
                <td><?= h($ataconsultores->ata_id) ?></td>
                <td><?= h($ataconsultores->consultore_id) ?></td>                  
                <td><?= h($ataconsultores->nome) ?></td>
                <td><?= h($ataconsultores->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ataconsultores', 'action' => 'view', $ataconsultores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ataconsultores', 'action' => 'edit', $ataconsultores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ataconsultores', 'action' => 'delete', $ataconsultores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ataconsultores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        <h4><?= __('Históricos') ?></h4>
        <?php if (!empty($ata->atarevisaohistoricos)): ?>
         <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ata Id') ?></th>
                <th scope="col"><?= __('Atadetalhe Id') ?></th>
                <th scope="col"><?= __('Correcao Solicitado Por') ?></th>
                <th scope="col"><?= __('Aprovado') ?></th>
                <th scope="col"><?= __('Proposta Alteracao') ?></th>
                <th scope="col"><?= __('Datarevisao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ata->atarevisaohistoricos as $atarevisaohistoricos): ?>
            <tr>
                <td><?= h($atarevisaohistoricos->id) ?></td>
                <td><?= h($atarevisaohistoricos->ata_id) ?></td>
                <td><?= h($atarevisaohistoricos->atadetalhe_id) ?></td>
                <td><?= h($atarevisaohistoricos->correcao_solicitado_por) ?></td>
                <td><?= h($atarevisaohistoricos->aprovado) ?></td>
                <td><?= h($atarevisaohistoricos->proposta_alteracao) ?></td>
                <td><?= h($atarevisaohistoricos->datarevisao) ?></td>
                <td><?= h($atarevisaohistoricos->created) ?></td>
                <td><?= h($atarevisaohistoricos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Atarevisaohistoricos', 'action' => 'view', $atarevisaohistoricos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Atarevisaohistoricos', 'action' => 'edit', $atarevisaohistoricos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Atarevisaohistoricos', 'action' => 'delete', $atarevisaohistoricos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atarevisaohistoricos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Revisões') ?></h4>
        <?php if (!empty($ata->atarevisoes)): ?>
          <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ata Id') ?></th>
                <th scope="col"><?= __('Participante Id') ?></th>
                <th scope="col"><?= __('Revisao Status') ?></th>
                <th scope="col"><?= __('Revisao Data') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ata->atarevisoes as $atarevisoes): ?>
            <tr>
                <td><?= h($atarevisoes->id) ?></td>
                <td><?= h($atarevisoes->ata_id) ?></td>
                <td><?= h($atarevisoes->participante_id) ?></td>
                <td><?= h($atarevisoes->revisao_status) ?></td>
                <td><?= h($atarevisoes->revisao_data) ?></td>
                <td><?= h($atarevisoes->created) ?></td>
                <td><?= h($atarevisoes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Atarevisoes', 'action' => 'view', $atarevisoes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Atarevisoes', 'action' => 'edit', $atarevisoes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Atarevisoes', 'action' => 'delete', $atarevisoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atarevisoes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    
    <div class="related">
         <h4><?= __('Aprovadores') ?></h4>
         <?php if (!empty($ata->ataaprovadores)): ?>
          <table class="table">    
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ata Id') ?></th>
                <th scope="col"><?= __('Participante Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Aprovacao Status') ?></th>
                <th scope="col"><?= __('Aprovacao Data') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ata->ataaprovadores as $ataaprovadores): ?>
                <tr>
                    <td><?= h($ataaprovadores->id) ?></td>
                    <td><?= h($ataaprovadores->ata_id) ?></td>
                    <td><?= h($ataaprovadores->participante_id) ?></td>

                    <td>
                        <?= $ataaprovadores->has('participante') ? $this->Html->link($ataaprovadores->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $ataaprovadores->participante->id]) : '' ?>  
                    </td>

                    <td><?= h($ataaprovadores->aprovacao_status) ?></td>
                    <td><?= h($ataaprovadores->aprovacao_data) ?></td>
                    <td><?= h($ataaprovadores->created) ?></td>
                    <td><?= h($ataaprovadores->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Ataaprovadores', 'action' => 'view', $ataaprovadores->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Ataaprovadores', 'action' => 'edit', $ataaprovadores->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ataaprovadores', 'action' => 'delete', $ataaprovadores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ataaprovadores->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>    
</div>


