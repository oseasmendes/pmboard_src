<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agenda $agenda
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                       
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>


<div class="sistemas index large-9 medium-8 columns content"> 



            <div class="row" >
                    <div class="col-3"> 
                        <?= $this->Form->create($agenda, ['url'=>['controller' => 'Atas', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('novaata',['default'=> $this->Number->format($agenda->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Inserir Ata',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>     
                    <div class="col-3">        
                        <?= $this->Form->create($agenda, ['url'=>['controller' => 'Agendasnotes', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('Notes',['default'=> $this->Number->format($agenda->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Nova Nota',['class'=>'btn btn-secondary btn-sm btn-block']) ?>        
                        <?= $this->Form->end() ?>
                    </div>            
                    
            </div>


<div class="row">
     <h1><p class="text-info"><?= "Agenda: ".h($agenda->id)." - ".h($agenda->dataagenda)." - ".h($agenda->etiquetaadicional) ?></p></h1>
    
    <table class="table table-info table-responsive-sm">          
        <tr>
        <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $agenda->has('projeto') ? $this->Html->link($agenda->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $agenda->projeto->id]) : '' ?></td>
            <th scope="row"><?= __('Evento') ?></th>
            <td><?= h($agenda->etiquetaadicional) ?></td>      
            <th scope="row"><?= __('Local') ?></th>
            <td><?= h($agenda->local) ?></td>
        </tr>                         
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($agenda->dataagenda) ?></td>
            <th scope="row"><?= __('Inicio') ?></th>
            <td><?= h($agenda->horainicio->format('H:i')) ?></td>            
            <th scope="row"><?= __('Fim') ?></th>
            <td><?= h($agenda->horafim->format('H:i')) ?></td>
        </tr>                
    </table>
    <h4><?= __('Observações') ?></h4>
    <div class="row">
        <div class="container">
            <div style="white-space: pre-line"> 
                <?= h($agenda->observacao) ?>
            </div>  
            </p>         
        </div> 
    </div> 
</div>
    <div class="related">        
        <?php if (!empty($agenda->atas)): ?>
        <h4><?= __('Atas') ?></h4>
        <table class="table">
            <tr">
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Agenda Id') ?></th>
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($agenda->atas as $atas): ?>
            <tr>
                <td><?= h($atas->id) ?></td>
                <td><?= h($atas->agenda_id) ?></td>
                <td><?= h($atas->resumogeral) ?></td>
                <td><?= h($atas->created) ?></td>
                <td><?= h($atas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Atas', 'action' => 'view', $atas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Atas', 'action' => 'edit', $atas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Atas', 'action' => 'delete', $atas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">        
      <?php if (!empty($agenda->agendasnotes)): ?>
            <h4><?= __('Notas') ?></h4>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Agenda Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Keywords') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($agenda->agendasnotes as $agendasnote): ?>
            <tr>
                <td><?= h($agendasnote->id) ?></td>
                <td><?= h($agendasnote->agenda_id) ?></td>
                <td><?= h($agendasnote->description) ?></td>
                <td><?= h($agendasnote->keywords) ?></td>
                <td><?= h($agendasnote->created) ?></td>
                <td><?= h($agendasnote->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Agendasnotes', 'action' => 'view', $agendasnote->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Agendasnotes', 'action' => 'edit', $agendasnote->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendasnotes', 'action' => 'delete', $agendasnote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendasnote->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">        
        <?php if (!empty($agenda->projetossprintsdailysreferences)): ?>
            <h4><?= __('Itens do Follow-Up') ?></h4>
            
            <table class="table">
                <tr style="background-color:rgb(189, 216, 39)">                
                <th scope="col"><?= __('ID/INC#','Reference') ?></th>
                <th scope="col"><?= __('Titulo','Resumo') ?></th>
                <th scope="col"><?= __('Analista','Additionalcomments') ?></th>
                <th scope="col"><?= __('Status','Statusdetalhado') ?></th>        
                <th scope="col"><?= __('Follow','Comments') ?></th>        
            </tr>
            
            <?php foreach ($agenda->projetossprintsdailysreferences as $ref): ?>
            <?php if (!empty(h($ref->comments))): ?> 
            <tr>                
                <td style="font-family:calibri"><?= h($ref->reference) ?></td>
                <td style="font-family:calibri; font-weight: bold; color:#859092"><?= h($ref->resumo) ?></td>                                                                
                <td style="font-family:calibri"><?= h($ref->additionalcomments) ?></td>
                <td style="font-family:calibri"><?= h($ref->statusdetalhado) ?></td>
                <td style="font-family:calibri"><?= h($ref->comments) ?></td>
            </tr>                
            <?php endif; ?>           
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
