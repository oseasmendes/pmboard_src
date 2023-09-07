<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultore $consultore
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Deliverable</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 

                                   



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
<?= $this->Html->link(__('Edit Consultore'), ['action' => 'edit', $consultore->id],['class'=>'dropdown-item'])?>
<?= $this->Form->postLink(__('Delete Consultore'), ['action' => 'delete', $consultore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultore->id)],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Consultores'), ['action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Consultore'), ['action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Superiorimediatos'), ['controller' => 'Superiorimediatos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Superiorimediato'), ['controller' => 'Superiorimediatos', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Consultorias'), ['controller' => 'Consultorias', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Consultoria'), ['controller' => 'Consultorias', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Projetosapontamentos'), ['controller' => 'Projetosapontamentos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Projetosapontamento'), ['controller' => 'Projetosapontamentos', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Sistemasconsultores'), ['controller' => 'Sistemasconsultores', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Sistemasconsultore'), ['controller' => 'Sistemasconsultores', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>                              
            </div>
          </div>
            <div>
              <nav class="navbar navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>      
                </button>            
              </nav>
            </div>            
    </div> 

</div>
</div>                   
                  
<div class="consultores view large-9 medium-8 columns content">
    <h1><p class="text-info"><?= "#".$this->Number->format($consultore->id)." - ".h($consultore->nome) ?></p></h1>
    <div class="row" > 
                    <div class="col-3"> 
                        <?= $this->Form->create($consultore, ['url'=>['controller' => 'Consultoresnotas', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Nota',['default'=> $this->Number->format($consultore->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Inserir Anotação',['class'=>'btn btn-primary btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div> 
</div> 
    <table class="table table-primary table-responsive-sm">  
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($consultore->nome) ?></td>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $consultore->has('departamento') ? $this->Html->link($consultore->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $consultore->departamento->id]) : '' ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($consultore->email) ?></td>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($consultore->telefone) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= h($consultore->cargo) ?></td>
            <th scope="row"><?= __('Responsabilidade') ?></th>
            <td><?= h($consultore->responsabilidade) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Superiorimediato') ?></th>
            <td><?= $consultore->has('superiorimediato') ? $this->Html->link($consultore->superiorimediato->nome, ['controller' => 'Superiorimediatos', 'action' => 'view', $consultore->superiorimediato->id]) : '' ?></td>
            <th scope="row"><?= __('Consultoria') ?></th>
            <td><?= $consultore->has('consultoria') ? $this->Html->link($consultore->consultoria->razaosocial, ['controller' => 'Consultorias', 'action' => 'view', $consultore->consultoria->id]) : '' ?></td>
        </tr>                
        <tr>
            <th scope="row"><?= __('Login') ?></th>
            <td><?= h($consultore->login) ?></td>
            <th scope="row"><?= __('Prio') ?></th>
            <td><?= h($consultore->prio) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Data Nascimento') ?></th>
            <td><?= h($consultore->datanascimento) ?></td>
            <th scope="row"><?= __('Data Engajamento') ?></th>
            <td><?= h($consultore->dataengajamento) ?></td>
        </tr>                  
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($consultore->created) ?></td>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($consultore->modified) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Selecionar') ?></th>
            <td><?= $consultore->selecionar ? __('Yes') : __('No'); ?></td>
            <th scope="row"><?= __('Duplacidadania') ?></th>
            <td><?= $consultore->duplacidadania ? __('Yes') : __('No'); ?></td>
        </tr>                        
    </table>

    <div class="related">
        
        <?php if (!empty($consultore->agendas)): ?>
            <h4><p class="text-primary"><?= __('Agendas') ?></p></h4>
         <table class="table table-striped table-responsive-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Data','Dataagenda') ?></th>
                <th scope="col"><?= __('Dia','Diadasemana') ?></th>              
                <th scope="col"><?= __('Inicio','Horainicio') ?></th>               
                <th scope="col"><?= __('Fim','Horafim') ?></th>
                <th scope="col"><?= __('Titulo','Etiquetaadicional') ?></th>                  
                <th scope="col"><?= __('Created') ?></th>                               
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consultore->agendas as $agenda): ?>
            <tr>            
                <td><?= h($agenda->id) ?></td>                
                <td><?= h($agenda->dataagenda) ?></td>
                <td><?= h($agenda->diadasemana) ?></td>              
                <td><?= date("H:i", strtotime(h($agenda->horainicio))) ?></td>
                <td><?= date("H:i", strtotime(h($agenda->horafim))) ?></td>
                <td><?= h($agenda->etiquetaadicional) ?></td>                               
                <td><?= h($agenda->created) ?></td>                              
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Agendas', 'action' => 'view', $agenda->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Agendas', 'action' => 'edit', $agenda->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendas', 'action' => 'delete', $agenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        
        <?php if (!empty($consultore->fivewthreehs)): ?>
            <h4><p class="text-primary"><?= __('5W2H') ?></p></h4>
         <table class="table table-striped table-responsive-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('PrjId','Projeto Id') ?></th>
                <th scope="col"><?= __('PrdId','Projetosproduto Id') ?></th>               
                <th scope="col"><?= __('Demanda','Description') ?></th>
                <th scope="col"><?= __('Quem','Wwho') ?></th>
                <th scope="col"><?= __('Quando','Wwhen') ?></th>              
                <th scope="col"><?= __('Onde','Wwhere') ?></th>                    
                <th scope="col"><?= __('Created') ?></th>               
                <th scope="col"><?= __('Status','Statusfuncional Id') ?></th>                    
                <th scope="col"><?= __('Acao') ?></th>
                <th scope="col"><?= __('Resolvido') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consultore->fivewthreehs as $fivewthreehs): ?>
            <tr>
                <td><?= h($fivewthreehs->id) ?></td>                
                <td><?= h($fivewthreehs->projeto_id) ?></td>
                <td><?= h($fivewthreehs->projetosproduto_id) ?></td>              
                <td><?= h($fivewthreehs->description) ?></td>
                <td><?= h($fivewthreehs->wwho) ?></td>
                <td><?= h($fivewthreehs->wwhen) ?></td>               
                <td><?= h($fivewthreehs->wwhere) ?></td>                        
                <td><?= h($fivewthreehs->created) ?></td>              
                <td><?= h($fivewthreehs->statusfuncional_id) ?></td>                
                <td><?= h($fivewthreehs->acao) ?></td>
                <td><?= h($fivewthreehs->resolvido) ?></td>              
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fivewthreehs', 'action' => 'view', $fivewthreehs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fivewthreehs', 'action' => 'edit', $fivewthreehs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fivewthreehs', 'action' => 'delete', $fivewthreehs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fivewthreehs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>


    <div class="related">       
        <?php if (!empty($consultore->projetosprodutosentregas)): ?>
         <h4><p class="text-primary"><?= __('Entregas') ?></p></h4>   
         <table class="table table-striped">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>  
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Lancto','Datacriacaooriginal') ?></th>
                <th scope="col"><?= __('Comentario') ?></th>    
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consultore->projetosprodutosentregas as $entregas): ?>
            <tr>
                <td><?= h($entregas->id) ?></td>
                <td><?= h($entregas->referencia) ?></td>
                <td><?= h($entregas->descricao) ?></td>
                <td><?= h($entregas->datacriacaooriginal) ?></td>
                <td><?= h($entregas->comentario) ?></td>
                <td><?= h($entregas->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $entregas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregas', 'action' => 'edit', $entregas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregas', 'action' => 'delete', $entregas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entregas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div> 



     <div class="related">       
        <?php if (!empty($consultore->consultoresferias)): ?>
         <h4><p class="text-primary"><?= __('Plano de Férias') ?></p></h4>   
         <table class="table table-striped">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Resumo') ?></th>  
                <th scope="col"><?= __('Datainicio') ?></th>
                <th scope="col"><?= __('Datafim') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>    
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consultore->consultoresferias as $consultoresferias): ?>
            <tr>
                <td><?= h($consultoresferias->id) ?></td>
                <td><?= h($consultoresferias->resumo) ?></td>
                <td><?= h($consultoresferias->datainicio) ?></td>
                <td><?= h($consultoresferias->datafim) ?></td>
                <td><?= h($consultoresferias->created) ?></td>
                <td><?= h($consultoresferias->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Consultoresferias', 'action' => 'view', $consultoresferias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Consultoresferias', 'action' => 'edit', $consultoresferias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultoresferias', 'action' => 'delete', $consultoresferias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresferias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>   
    <div class="related">
        
        <?php if (!empty($consultore->projetosalocs)): ?>
        <h4><p class="text-primary"><?= __('Alocações') ?></p></h4>
         <table class="table table-striped">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('PrjId','Projeto Id') ?></th>                           
                <th scope="col"><?= __('DtAloc','Dataalocacao') ?></th>
                <th scope="col"><?= __('Status','Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('%','Percentual') ?></th>                
                <th scope="col"><?= __('Fim Prev','Desalocacaoprevista') ?></th>
                <th scope="col"><?= __('Fim Real','Desalocacaorealizada') ?></th>
                 <th scope="col"><?= __('Created') ?></th>    
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consultore->projetosalocs as $projetosalocs): ?>
            <tr>
                <td><?= h($projetosalocs->id) ?></td>
                <td><?= h($projetosalocs->projeto_id) ?></td>                                    
                <td><?= h($projetosalocs->dataalocacao) ?></td>
                <td><?= h($projetosalocs->statusfuncional_id) ?></td>
                <td><?= h($projetosalocs->descricao) ?></td>
                <td><?= h($projetosalocs->percentual) ?></td>                
                <td><?= h($projetosalocs->desalocacaoprevista) ?></td>
                <td><?= h($projetosalocs->desalocacaorealizada) ?></td>
                <td><?= h($projetosalocs->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosalocs', 'action' => 'view', $projetosalocs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosalocs', 'action' => 'edit', $projetosalocs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosalocs', 'action' => 'delete', $projetosalocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosalocs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">        
        <?php if (!empty($consultore->projetosapontamentos)): ?>
            <h4><p class="text-primary"><?= __('Apontamentos') ?></p></h4>
         <table class="table table-striped">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('EntrgId','Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('HrInicio','Horainicio') ?></th>
                <th scope="col"><?= __('HrFim','Horafim') ?></th>
                <th scope="col"><?= __('Tempo','Temporealizado') ?></th>
                <th scope="col"><?= __('Status','Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Canal') ?></th>
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consultore->projetosapontamentos as $projetosapontamentos): ?>
            <tr>
                <td><?= h($projetosapontamentos->id) ?></td>                
                <td><?= h($projetosapontamentos->projetosprodutosentrega_id) ?></td>
                <td><?= h($projetosapontamentos->data) ?></td>
                <td><?= h($projetosapontamentos->horainicio) ?></td>
                <td><?= h($projetosapontamentos->horafim) ?></td>
                <td><?= h($projetosapontamentos->temporealizado) ?></td>
                <td><?= h($projetosapontamentos->statusfuncional_id) ?></td>
                <td><?= h($projetosapontamentos->descricao) ?></td>
                <td><?= h($projetosapontamentos->historico) ?></td>
                <td><?= h($projetosapontamentos->canal) ?></td>
                <td><?= h($projetosapontamentos->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosapontamentos', 'action' => 'view', $projetosapontamentos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosapontamentos', 'action' => 'edit', $projetosapontamentos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosapontamentos', 'action' => 'delete', $projetosapontamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosapontamentos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">        
        <?php if (!empty($consultore->sistemasconsultores)): ?>
         <h4><p class="text-primary"><?= __('Sistema Associado') ?></p></h4>
         <table class="table table-info table-responsive-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('CnsId','Consultore Id') ?></th>
                <th scope="col"><?= __('Knowhow','Knowhow Id') ?></th>
                <th scope="col"><?= __('Função','Principalfuncao') ?></th>
                <th scope="col"><?= __('Atividade','Atividadeexecutada') ?></th>
                <th scope="col"><?= __('Data','Dataatividade') ?></th>
                <th scope="col"><?= __('Consultoria') ?></th>
                <th scope="col"><?= __('Alocacao') ?></th>
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col"><?= __('SistId','Sistema Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consultore->sistemasconsultores as $sistemasconsultores): ?>
            <tr>
                <td><?= h($sistemasconsultores->id) ?></td>
                <td><?= h($sistemasconsultores->consultore_id) ?></td>
                <td><?= h($sistemasconsultores->knowhow_id) ?></td>
                <td><?= h($sistemasconsultores->principalfuncao) ?></td>
                <td><?= h($sistemasconsultores->atividadeexecutada) ?></td>
                <td><?= h($sistemasconsultores->dataatividade) ?></td>
                <td><?= h($sistemasconsultores->consultoria) ?></td>
                <td><?= h($sistemasconsultores->alocacao) ?></td>
                <td><?= h($sistemasconsultores->created) ?></td>                
                <td><?= h($sistemasconsultores->sistema_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasconsultores', 'action' => 'view', $sistemasconsultores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasconsultores', 'action' => 'edit', $sistemasconsultores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasconsultores', 'action' => 'delete', $sistemasconsultores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasconsultores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>   
     <div class="related">        
        <?php if (!empty($consultore->consultoresnotas)): ?>
         <h4><p class="text-primary"><?= __('Anotações') ?></p></h4>
         <table class="table table-info table-responsive-sm">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ocorrências','Ocorrenciaresumo') ?></th>              
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col"><?= __('Modified') ?></th>                                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consultore->consultoresnotas as $consultoresnotas): ?>
            <tr>
                <td><?= h($consultoresnotas->id) ?></td>               
                <td><?= h($consultoresnotas->ocorrenciaresumo) ?></td>                
                <td><?= h($consultoresnotas->created) ?></td>      
                <td><?= h($consultoresnotas->modified) ?></td>                      
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Consultoresnotas', 'action' => 'view', $consultoresnotas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Consultoresnotas', 'action' => 'edit', $consultoresnotas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultoresnotas', 'action' => 'delete', $consultoresnotas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresnotas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">        
        <?php if (!empty($consultore->projetosprodutosentregasalocs)): ?>
            <h4><p class="text-primary"><?= __('Atividades Alocadas') ?></p></h4>   
         <table class="table table-striped">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>                           
                <th scope="col"><?= __('Competencia','Competencia_id') ?></th>
                <th scope="col"><?= __('Pareto','Pareto_Id') ?></th>               
                 <th scope="col"><?= __('Created') ?></th>    
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consultore->projetosprodutosentregasalocs as $palocs): ?>
                <tr>
                    <td><?= h($palocs->id) ?></td>
                    <td><?= h($palocs->descricao) ?></td>                                    
                    <td><?= h($palocs->competencia_id) ?></td>
                    <td><?= h($palocs->pareto_id) ?></td>   
                    <td><?= h($palocs->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregasalocs', 'action' => 'view', $palocs->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregasalocs', 'action' => 'edit', $palocs->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregasalocs', 'action' => 'delete', $palocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $palocs->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>  
    
    
    <div class="related">        
        <?php if (!empty($consultore->sistemasqueuesconsultores)): ?>
            <h4><p class="text-primary"><?= __('Atividades Alocadas') ?></p></h4>   
         <table class="table table-striped">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>                           
                <th scope="col"><?= __('Trilha','sistemasqueue_id') ?></th>                
                 <th scope="col"><?= __('Created') ?></th>    
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($consultore->sistemasqueuesconsultores as $trilha): ?>
                <tr>
                    <td><?= h($trilha->id) ?></td>
                    <td><?= h($trilha->desricao) ?></td>                                    
                    <td><?= h($trilha->sistemasqueue_id) ?></td>                    
                    <td><?= h($trilha->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Sistemasqueuesconsultores', 'action' => 'view', $trilha->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasqueuesconsultores', 'action' => 'edit', $trilha->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasqueuesconsultores', 'action' => 'delete', $trilha->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trilha->id)]) ?>
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
        </div>      
        </div>      
    </section>