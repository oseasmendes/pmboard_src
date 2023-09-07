<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistema $sistema
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

                                    </div>

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
                            <?= $this->Html->link(__('List Sistemas'), ['action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Sistema'), ['action' => 'add'],['class'=>'dropdown-item'])?>                            
                            <?= $this->Html->link(__('Nova Nota'), ['controller' => 'Sistemasnotas', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Sistemasareas'), ['controller' => 'Sistemasareas', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Sistemasarea'), ['controller' => 'Sistemasareas', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Sistemasbriefings'), ['controller' => 'Sistemasbriefings', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Sistemasbriefing'), ['controller' => 'Sistemasbriefings', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Sistemascfgdbs'), ['controller' => 'Sistemascfgdbs', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Sistemascfgdb'), ['controller' => 'Sistemascfgdbs', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Sistemascfgfronts'), ['controller' => 'Sistemascfgfronts', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Sistemascfgfront'), ['controller' => 'Sistemascfgfronts', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Sistemascfgintegrations'), ['controller' => 'Sistemascfgintegrations', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Sistemascfgintegration'), ['controller' => 'Sistemascfgintegrations', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Sistemascfgrelacionados'), ['controller' => 'Sistemascfgrelacionados', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Sistemascfgrelacionado'), ['controller' => 'Sistemascfgrelacionados', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Sistemasconsultores'), ['controller' => 'Sistemasconsultores', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Sistemasconsultore'), ['controller' => 'Sistemasconsultores', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Sistemasdocs'), ['controller' => 'Sistemasdocs', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Sistemasdoc'), ['controller' => 'Sistemasdocs', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Sistemashistoricos'), ['controller' => 'Sistemashistoricos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Sistemashistorico'), ['controller' => 'Sistemashistoricos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Sistemasriscos'), ['controller' => 'Sistemasriscos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Sistemasrisco'), ['controller' => 'Sistemasriscos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
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

<div class="row no-gutters" >
        <div class="col-3"> 
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemasareas', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('Area',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>
                      
                 <?= $this->Form->button('Nova Area',['class'=>'btn btn-primary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?> 
        </div>
        <div class="col-3">        
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemasdocs', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('Docs',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>
                <?= $this->Form->button('Novo Documento',['class'=>'btn btn-primary btn-sm btn-block']) ?>        
            <?= $this->Form->end() ?>
        </div>
        <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemasriscos', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('Riscos',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>
                <?= $this->Form->button('Novo Risco',['class'=>'btn btn-primary btn-sm btn-block']) ?>            
            <?= $this->Form->end() ?>
        </div>
         <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemasconsultores', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('Consultant',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>
                <?= $this->Form->button('Novo SuporteTeam',['class'=>'btn btn-primary btn-sm btn-block']) ?>       
            <?= $this->Form->end() ?>            
        </div>        
</div>    
    
     <div class="row no-gutters" >
        <div class="col-3"> 
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemashistoricos', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('Historic',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>
              
                 <?= $this->Form->button('Novo Historico',['class'=>'btn btn-info btn-sm btn-block']) ?>             
            <?= $this->Form->end() ?> 
        </div>
       
        <div class="col-3">        
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemasusuarios', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('UserNew',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>
                <?= $this->Form->button('Novo KeyUser',['class'=>'btn btn-info btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
        <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemasbriefings', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('Briefing',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>
                 <?= $this->Form->button('Novo Briefing',['class'=>'btn btn-info btn-sm btn-block']) ?>        
            <?= $this->Form->end() ?>
        </div>
        <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemascfgdbs', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('Base',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>
                   
             <?= $this->Form->button('Informar DB/Fonte',['class'=>'btn btn-info btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
     <div class="row no-gutters" >
        <div class="col-3"> 
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemascfgfronts', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('Tecno',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>
              
                 <?= $this->Form->button('Informar Front',['class'=>'btn btn-secondary btn-sm btn-block']) ?>             
            <?= $this->Form->end() ?> 
        </div>
       
        <div class="col-3">        
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemascfgintegrations', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('Integration',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>
                <?= $this->Form->button('Informar Integrações',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
        <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemascfgrelacionados', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('SystemRel',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>
                 <?= $this->Form->button('Informar Sistemas Relacionados',['class'=>'btn btn-secondary btn-sm btn-block']) ?>        
            <?= $this->Form->end() ?>
        </div>
        <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemasnotas', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('Notas',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>
                   
             <?= $this->Form->button('Inserir Notas',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
        </div>
     <div class="row no-gutters" >
        <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemasmodulos', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('Modulos',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>                   
             <?= $this->Form->button('Inserir Modulos',['class'=>'btn btn-primary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
        <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemasprocessos', 'action' => 'addid'],'']) ?>   
                <?= $this->Form->control('Processo',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>                   
             <?= $this->Form->button('Inserir Processos',['class'=>'btn btn-primary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
        <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemascfgscripts', 'action' => 'addid'],'']) ?>   
                <?= $this->Form->control('Roteiro',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>                   
             <?= $this->Form->button('Inserir Roteiro',['class'=>'btn btn-primary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
        <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemascfgurls', 'action' => 'addid'],'']) ?>   
                <?= $this->Form->control('Url',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>                   
             <?= $this->Form->button('Inserir URL',['class'=>'btn btn-primary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    <div class="row no-gutters" >
        <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemasrelatorios', 'action' => 'addid'],'']) ?>   
                <?= $this->Form->control('Relatorio',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>                   
             <?= $this->Form->button('Inserir Relatorios',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
        <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemascfgtables', 'action' => 'addid'],'']) ?>   
                <?= $this->Form->control('TabelaRef',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>                   
             <?= $this->Form->button('Inserir Tabela',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
        <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemasfaqs', 'action' => 'addid'],'']) ?>   
                <?= $this->Form->control('faq',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>                   
             <?= $this->Form->button('Inserir FAQ',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
        <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemasupdates', 'action' => 'addid'],'']) ?>   
                <?= $this->Form->control('updates',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>                   
             <?= $this->Form->button('Inserir Update',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>



<!-- <div class="sistemas view large-9 medium-8 columns content"> -->
<div class="sistemas view large-9 medium-8 columns content">
    <h3 class="text-info"><?= h($sistema->descricao) ?></h3>
   
    <table class="table table-light table-responsive">        
        <tr>
            <th scope="row"><?= __('Codenome') ?></th>
            <td><?= h($sistema->codenome) ?></td>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistema->descricao) ?></td>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($sistema->referencia) ?></td>
        </tr>   
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $sistema->has('empresa') ? $this->Html->link($sistema->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $sistema->empresa->id]) : '' ?></td>       
            <th scope="row"><?= __('Unidade') ?></th>
            <td><?= $sistema->has('empresasunidade') ? $this->Html->link($sistema->empresasunidade->sigla, ['controller' => 'Empresasunidades', 'action' => 'view', $sistema->empresasunidade->id]) : '' ?></td>        
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $sistema->has('departamento') ? $this->Html->link($sistema->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $sistema->departamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistema->id) ?></td>        
            <th scope="row"><?= __('Bookmarked') ?></th>
            <td><?= $this->Number->format($sistema->bookmarked) ?></td>        
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistema->ativo ? __('Yes') : __('No'); ?></td> 
            <th scope="row"><?= __('Statusfuncional Id') ?></th>
            <td><?= $this->Number->format($sistema->statusfuncional_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataregistro') ?></th>
            <td><?= h($sistema->dataregistro) ?></td>     
            <th scope="row"><?= __('Dataimplantacao') ?></th>
            <td><?= h($sistema->dataimplantacao) ?></td>        
            <th scope="row"><?= __('Dataultimaatualizacao') ?></th>
            <td><?= h($sistema->dataultimaatualizacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estrategia') ?></th>
            <td><?= $sistema->has('sistemasestrategia') ? $this->Html->link($sistema->sistemasestrategia->descricao, ['controller' => 'Sistemasestrategias', 'action' => 'view', $sistema->sistemasestrategia->id]) : '' ?></td>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistema->created) ?></td>        
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistema->modified) ?></td>
        </tr>
    </table>
    <div>
    <div class="container">
        <h5><font color="#0066ff"><?= __('Objetivo') ?></font></h5> 
        <div class="row">                
             <?= $this->Text->autoParagraph(h($sistema->objetivo)); ?>               
        </div>
    </div>
    
    </div>
    <div class="row no-gutters" >

    <div class="col-3">    
            <?= $this->Form->create($sistema, ['url'=>['controller' => 'Sistemasobjetos', 'action' => 'addid'],'']) ?>   
                <?= $this->Form->control('Objetos',['default'=> $this->Number->format($sistema->id),'type' => 'hidden']); ?>                   
             <?= $this->Form->button('Inserir Objeto',['class'=>'btn btn-secondary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>

     <div class="related">
        
        <?php if (!empty($sistema->sistemasmodulos)): ?>
        <h5><font color="#0066ff"><?= __('Módulos') ?></font></h5>    
        <!-- <table cellpadding="0" cellspacing="0"> -->
        <table class="table table-striped table-responsive">       
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Versao') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>                
                <th scope="col"><?= __('Statusfuncional Id') ?></th>               
                <th scope="col"><?= __('Prio') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>               
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemasmodulos as $sistemasmodulos): ?>
            <tr>
                <td><?= h($sistemasmodulos->id) ?></td>
                <td><?= h($sistemasmodulos->nome) ?></td>
                <td><?= h($sistemasmodulos->versao) ?></td>
                <td><?= h($sistemasmodulos->descricao) ?></td>
                <td><?= h($sistemasmodulos->statusfuncional_id) ?></td>
                <td><?= h($sistemasmodulos->prio) ?></td>
                <td><?= h($sistemasmodulos->created) ?></td>
                <td><?= h($sistemasmodulos->modified) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasmodulos', 'action' => 'view', $sistemasmodulos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasmodulos', 'action' => 'edit', $sistemasmodulos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasmodulos', 'action' => 'delete', $sistemasmodulos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasmodulos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">        
        <?php if (!empty($sistema->projetosprodutosentregas)): ?>
        <h5><font color="#0066ff"><?= __('Entregas Relacionadas') ?></font></h5>    
        <!-- <table cellpadding="0" cellspacing="0"> -->
        <table class="table table-responsive">       
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('PrdId','Projetosproduto Id') ?></th>               
                <th scope="col"><?= __('Stat','Statusfuncional Id') ?></th>
                <th scope="col"><?= __('ParetoId','Pareto Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Canal') ?></th> 
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->projetosprodutosentregas as $projetosprodutosentregas): ?>
            <tr>
                <td><?= h($projetosprodutosentregas->id) ?></td>
                <td><?= h($projetosprodutosentregas->referencia) ?></td>
                <td><?= h($projetosprodutosentregas->descricao) ?></td>
                <td><?= h($projetosprodutosentregas->projetosproduto_id) ?></td>               
                <td><?= h($projetosprodutosentregas->statusfuncional_id) ?></td>
                <td><?= h($projetosprodutosentregas->pareto_id) ?></td>
                <td><?= h($projetosprodutosentregas->created) ?></td>
                <td><?= h($projetosprodutosentregas->modified) ?></td>
                <td><?= h($projetosprodutosentregas->canal) ?></td>             
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregas', 'action' => 'edit', $projetosprodutosentregas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregas', 'action' => 'delete', $projetosprodutosentregas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">        
        <?php if (!empty($sistema->sistemasareas)): ?>
            <h5><?= __('Areas/Departamentos') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Contato') ?></th>
                <th scope="col"><?= __('Quantidadeusuarios') ?></th>
                <th scope="col"><?= __('Quantidadelicencas') ?></th>
                <th scope="col"><?= __('Tipolicenca') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Papeldocontato') ?></th>
                <th scope="col"><?= __('Contatoramal') ?></th>
                <th scope="col"><?= __('Contatoemail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemasareas as $sistemasareas): ?>
            <tr>
                <td><?= h($sistemasareas->id) ?></td>
                <td><?= h($sistemasareas->sistema_id) ?></td>
                <td><?= h($sistemasareas->departamento_id) ?></td>
                <td><?= h($sistemasareas->contato) ?></td>
                <td><?= h($sistemasareas->quantidadeusuarios) ?></td>
                <td><?= h($sistemasareas->quantidadelicencas) ?></td>
                <td><?= h($sistemasareas->tipolicenca) ?></td>
                <td><?= h($sistemasareas->created) ?></td>
                <td><?= h($sistemasareas->modified) ?></td>
                <td><?= h($sistemasareas->descricao) ?></td>
                <td><?= h($sistemasareas->papeldocontato) ?></td>
                <td><?= h($sistemasareas->contatoramal) ?></td>
                <td><?= h($sistemasareas->contatoemail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasareas', 'action' => 'view', $sistemasareas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasareas', 'action' => 'edit', $sistemasareas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasareas', 'action' => 'delete', $sistemasareas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasareas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        
        <?php if (!empty($sistema->sistemasbriefings)): ?>
            <h5><?= __('Briefing') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Dataregistro') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Objetivo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Smcplan Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemasbriefings as $sistemasbriefings): ?>
            <tr>
                <td><?= h($sistemasbriefings->id) ?></td>
                <td><?= h($sistemasbriefings->sistema_id) ?></td>
                <td><?= h($sistemasbriefings->dataregistro) ?></td>
                <td><?= h($sistemasbriefings->departamento_id) ?></td>
                <td><?= h($sistemasbriefings->objetivo) ?></td>
                <td><?= h($sistemasbriefings->created) ?></td>
                <td><?= h($sistemasbriefings->modified) ?></td>
                <td><?= h($sistemasbriefings->smcplan_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasbriefings', 'action' => 'view', $sistemasbriefings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasbriefings', 'action' => 'edit', $sistemasbriefings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasbriefings', 'action' => 'delete', $sistemasbriefings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasbriefings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
       
        <?php if (!empty($sistema->sistemascfgdbs)): ?>
            <h5><?= __('Databases ou Fontes') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Banco Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Contato') ?></th>
                <th scope="col"><?= __('Ipaddress') ?></th>
                <th scope="col"><?= __('Host') ?></th>
                <th scope="col"><?= __('Urlresumida') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemascfgdbs as $sistemascfgdbs): ?>
            <tr>
                <td><?= h($sistemascfgdbs->id) ?></td>
                <td><?= h($sistemascfgdbs->sistema_id) ?></td>
                <td><?= h($sistemascfgdbs->banco_id) ?></td>
                <td><?= h($sistemascfgdbs->descricao) ?></td>
                <td><?= h($sistemascfgdbs->contato) ?></td>
                <td><?= h($sistemascfgdbs->ipaddress) ?></td>
                <td><?= h($sistemascfgdbs->host) ?></td>
                <td width="10%"><?= h($sistemascfgdbs->urlresumida) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemascfgdbs', 'action' => 'view', $sistemascfgdbs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemascfgdbs', 'action' => 'edit', $sistemascfgdbs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemascfgdbs', 'action' => 'delete', $sistemascfgdbs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgdbs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>


    <div class="related">
        
        <?php if (!empty($sistema->sistemascfgfronts)): ?>
            <h5><?= __('Tecnologias') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tecnologia Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Percentual') ?></th>
                <th scope="col"><?= __('Versao') ?></th>
                <th scope="col"><?= __('Ultimaatualizacao') ?></th>
                <th scope="col"><?= __('Motivoatualizacao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemascfgfronts as $sistemascfgfronts): ?>
            <tr>
                <td><?= h($sistemascfgfronts->id) ?></td>
                <td><?= h($sistemascfgfronts->tecnologia_id) ?></td>
                <td><?= h($sistemascfgfronts->descricao) ?></td>
                <td><?= h($sistemascfgfronts->percentual) ?></td>
                <td><?= h($sistemascfgfronts->versao) ?></td>
                <td><?= h($sistemascfgfronts->ultimaatualizacao) ?></td>
                <td><?= h($sistemascfgfronts->motivoatualizacao) ?></td>
                <td><?= h($sistemascfgfronts->created) ?></td>
                <td><?= h($sistemascfgfronts->modified) ?></td>
                <td><?= h($sistemascfgfronts->sistema_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemascfgfronts', 'action' => 'view', $sistemascfgfronts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemascfgfronts', 'action' => 'edit', $sistemascfgfronts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemascfgfronts', 'action' => 'delete', $sistemascfgfronts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgfronts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        
        <?php if (!empty($sistema->sistemascfgintegrations)): ?>
            <h5><?= __('Integrações') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tecnologia Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Contato') ?></th>                
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Integration Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemascfgintegrations as $sistemascfgintegrations): ?>
            <tr>
                <td><?= h($sistemascfgintegrations->id) ?></td>
                <td><?= h($sistemascfgintegrations->tecnologia_id) ?></td>
                <td><?= h($sistemascfgintegrations->referencia) ?></td>
                <td><?= h($sistemascfgintegrations->descricao) ?></td>
                <td><?= h($sistemascfgintegrations->contato) ?></td>                
                <td><?= h($sistemascfgintegrations->created) ?></td>
                <td><?= h($sistemascfgintegrations->modified) ?></td>
                <td><?= h($sistemascfgintegrations->sistema_id) ?></td>
                <td><?= h($sistemascfgintegrations->integration_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemascfgintegrations', 'action' => 'view', $sistemascfgintegrations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemascfgintegrations', 'action' => 'edit', $sistemascfgintegrations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemascfgintegrations', 'action' => 'delete', $sistemascfgintegrations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgintegrations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        
        <?php if (!empty($sistema->sistemascfgrelacionados)): ?>
            <h5><?= __('Sistemas Relacionados') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Sistemarelacionado Id') ?></th>
                <th scope="col"><?= __('Ambiente Id') ?></th>                
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemascfgrelacionados as $sistemascfgrelacionados): ?>
            <tr>
                <td><?= h($sistemascfgrelacionados->id) ?></td>
                <td><?= h($sistemascfgrelacionados->descricao) ?></td>
                <td><?= h($sistemascfgrelacionados->sistema_id) ?></td>
                <td><?= h($sistemascfgrelacionados->sistemarelacionado_id) ?></td>
                <td><?= h($sistemascfgrelacionados->ambiente_id) ?></td>                
                <td><?= h($sistemascfgrelacionados->created) ?></td>
                <td><?= h($sistemascfgrelacionados->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemascfgrelacionados', 'action' => 'view', $sistemascfgrelacionados->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemascfgrelacionados', 'action' => 'edit', $sistemascfgrelacionados->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemascfgrelacionados', 'action' => 'delete', $sistemascfgrelacionados->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgrelacionados->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        
        <?php if (!empty($sistema->sistemasconsultores)): ?>
            <h5><?= __('Consultores e Suporte') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Knowhow Id') ?></th>
                <th scope="col"><?= __('Principalfuncao') ?></th>
                <th scope="col"><?= __('Atividadeexecutada') ?></th>
                <th scope="col"><?= __('Dataatividade') ?></th>
                <th scope="col"><?= __('Consultoria') ?></th>
                <th scope="col"><?= __('Alocacao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemasconsultores as $sistemasconsultores): ?>
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
                <td><?= h($sistemasconsultores->modified) ?></td>
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
        
        <?php if (!empty($sistema->sistemasdocs)): ?>
            <h5><?= __('Relação de Documento') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Documento Id') ?></th>
                <th scope="col"><?= __('Criadoem') ?></th>
                <th scope="col"><?= __('Atualizadoem') ?></th>
                <th scope="col"><?= __('Documentourl') ?></th>
                <th scope="col"><?= __('Documentonome') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemasdocs as $sistemasdocs): ?>
            <tr>
                <td width="5%"><?= h($sistemasdocs->id) ?></td>                
                <td><?= h($sistemasdocs->documento_id) ?></td>
                <td><?= h($sistemasdocs->criadoem) ?></td>
                <td><?= h($sistemasdocs->atualizadoem) ?></td>
                <td width="10%"><?= h($sistemasdocs->documentourl) ?></td>
                <td><?= h($sistemasdocs->documentonome) ?></td>
                <td width="5%"><?= h($sistemasdocs->created) ?></td>
                <td width="5%"><?= h($sistemasdocs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasdocs', 'action' => 'view', $sistemasdocs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasdocs', 'action' => 'edit', $sistemasdocs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasdocs', 'action' => 'delete', $sistemasdocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasdocs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        
        <?php if (!empty($sistema->sistemashistoricos)): ?>
            <h5><?= __('Histórico da Aplicação') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Dataregistro') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Dataimplantacao') ?></th>
                <th scope="col"><?= __('Dataultimaatualizacao') ?></th>
                <th scope="col"><?= __('Versaoatual') ?></th>
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Motivoultimaalteracao') ?></th>
                <th scope="col"><?= __('Versaopathatual') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemashistoricos as $sistemashistoricos): ?>
            <tr>
                <td><?= h($sistemashistoricos->id) ?></td>
                <td><?= h($sistemashistoricos->dataregistro) ?></td>
                <td><?= h($sistemashistoricos->sistema_id) ?></td>
                <td><?= h($sistemashistoricos->dataimplantacao) ?></td>
                <td><?= h($sistemashistoricos->dataultimaatualizacao) ?></td>
                <td><?= h($sistemashistoricos->versaoatual) ?></td>
                <td><?= h($sistemashistoricos->resumo) ?></td>
                <td><?= h($sistemashistoricos->motivoultimaalteracao) ?></td>
                <td><?= h($sistemashistoricos->versaopathatual) ?></td>
                <td><?= h($sistemashistoricos->created) ?></td>
                <td><?= h($sistemashistoricos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemashistoricos', 'action' => 'view', $sistemashistoricos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemashistoricos', 'action' => 'edit', $sistemashistoricos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemashistoricos', 'action' => 'delete', $sistemashistoricos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemashistoricos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        
        <?php if (!empty($sistema->sistemasriscos)): ?>
            <h5><?= __('Riscos Eminentes Conhecidos') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Risco Id') ?></th>
                <th scope="col"><?= __('Aplicabilidade Id') ?></th>
                <th scope="col"><?= __('Nivel') ?></th>
                <th scope="col"><?= __('Detalhes') ?></th>
                <th scope="col"><?= __('Probabilidade') ?></th>
                <th scope="col"><?= __('Tempoprevistoimpacto') ?></th>
                <th scope="col"><?= __('Pessoasafetadas') ?></th>
                <th scope="col"><?= __('Estimativafinanceiradorisco') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemasriscos as $sistemasriscos): ?>
            <tr>
                <td><?= h($sistemasriscos->id) ?></td>
                <td><?= h($sistemasriscos->sistema_id) ?></td>
                <td><?= h($sistemasriscos->risco_id) ?></td>
                <td><?= h($sistemasriscos->aplicabilidade_id) ?></td>
                <td><?= h($sistemasriscos->nivel) ?></td>
                <td><?= h($sistemasriscos->detalhes) ?></td>
                <td><?= h($sistemasriscos->probabilidade) ?></td>
                <td><?= h($sistemasriscos->tempoprevistoimpacto) ?></td>
                <td><?= h($sistemasriscos->pessoasafetadas) ?></td>
                <td><?= h($sistemasriscos->estimativafinanceiradorisco) ?></td>
                <td><?= h($sistemasriscos->created) ?></td>
                <td><?= h($sistemasriscos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasriscos', 'action' => 'view', $sistemasriscos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasriscos', 'action' => 'edit', $sistemasriscos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasriscos', 'action' => 'delete', $sistemasriscos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasriscos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">        
        <?php if (!empty($sistema->sistemasusuarios)): ?>
            <h5><?= __('Principais Usuários') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Ramal') ?></th>
                <th scope="col"><?= __('Responsabilidade Id') ?></th>
                <th scope="col"><?= __('Empresa') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Statususuario') ?></th>
                <th scope="col"><?= __('Knowhow Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemasusuarios as $sistemasusuarios): ?>
            <tr>
                <td><?= h($sistemasusuarios->id) ?></td>
                <td><?= h($sistemasusuarios->sistema_id) ?></td>
                <td><?= h($sistemasusuarios->usuario_id) ?></td>
                <td><?= h($sistemasusuarios->nome) ?></td>
                <td><?= h($sistemasusuarios->ramal) ?></td>
                <td><?= h($sistemasusuarios->responsabilidade_id) ?></td>
                <td><?= h($sistemasusuarios->empresa) ?></td>
                <td><?= h($sistemasusuarios->created) ?></td>
                <td><?= h($sistemasusuarios->modified) ?></td>
                <td><?= h($sistemasusuarios->statususuario) ?></td>
                <td><?= h($sistemasusuarios->knowhow_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasusuarios', 'action' => 'view', $sistemasusuarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasusuarios', 'action' => 'edit', $sistemasusuarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasusuarios', 'action' => 'delete', $sistemasusuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasusuarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        
        <?php if (!empty($sistema->sistemasnotas)): ?>
            <h5><?= __('Notas') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Nota Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemasnotas as $sistemasnotas): ?>
            <tr>
                <td><?= h($sistemasnotas->id) ?></td>
                <td><?= h($sistemasnotas->sistema_id) ?></td>
                <td><?= h($sistemasnotas->notatipo_id) ?></td>
                <td><?= h($sistemasnotas->descricao) ?></td>
                <td><?= h($sistemasnotas->created) ?></td>
                <td><?= h($sistemasnotas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasnotas', 'action' => 'view', $sistemasnotas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasnotas', 'action' => 'edit', $sistemasnotas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasnotas', 'action' => 'delete', $sistemasnotas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasnotas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <!------------------ -->

    <div class="related">
        
        <?php if (!empty($sistema->sistemasprocessos)): ?>
            <h5><?= __('Processos') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Motivo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemasprocessos as $sistemasprocessos): ?>
            <tr>
                <td><?= h($sistemasprocessos->id) ?></td>                    
                <td><?= h($sistemasprocessos->descricao) ?></td>
                <td><?= h($sistemasprocessos->motivo) ?></td>
                <td><?= h($sistemasprocessos->created) ?></td>
                <td><?= h($sistemasprocessos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasprocessos', 'action' => 'view', $sistemasprocessos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasprocessos', 'action' => 'edit', $sistemasprocessos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasprocessos', 'action' => 'delete', $sistemasprocessos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasprocessos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

     <!------------------ -->

     <div class="related">
        
        <?php if (!empty($sistema->sistemascfgscripts)): ?>
            <h5><?= __('Scritps') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Codenome') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Scriptaplicado') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemascfgscripts as $sistemascfgscript): ?>
            <tr>
                <td width="3%"><?= h($sistemascfgscript->id) ?></td>                    
                <td width="5%"><?= h($sistemascfgscript->codenome) ?></td>
                <td width="12%"><?= h($sistemascfgscript->descricao) ?></td>
                <td width="20%"><?= h($sistemascfgscript->scriptaplicado) ?></td>
                <td width="5%"><?= h($sistemascfgscript->created) ?></td>
                <td width="5%"><?= h($sistemascfgscript->modified) ?></td>
                <td width="10%" class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemascfgscripts', 'action' => 'view', $sistemascfgscript->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemascfgscripts', 'action' => 'edit', $sistemascfgscript->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemascfgscripts', 'action' => 'delete', $sistemascfgscript->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgscript->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    
    <div class="related">
        
        <?php if (!empty($sistema->sistemascfgurls)): ?>
            <h5><?= __('URLS') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Urlresumida') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemascfgurls as $sistemascfgurl): ?>
            <tr>
                <td><?= h($sistemascfgurl->id) ?></td>                    
                <td><?= h($sistemascfgurl->descricao) ?></td>
                <td width="10%"><?= h($sistemascfgurl->urlresumida) ?></td>
                <td width="10%"><?= h($sistemascfgurl->url) ?></td>
                <td><?= h($sistemascfgurl->created) ?></td>
                <td><?= h($sistemascfgurl->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemascfgurls', 'action' => 'view', $sistemascfgurl->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemascfgurls', 'action' => 'edit', $sistemascfgurl->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemascfgurls', 'action' => 'delete', $sistemascfgurl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgurl->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        
        <?php if (!empty($sistema->sistemasrelatorios)): ?>
            <h5><?= __('Relatórios Associados') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Nome','Name') ?></th>
                <th scope="col"><?= __('Descrição','Description') ?></th>
                <th scope="col"><?= __('Objetivo','Objective') ?></th>
                <th scope="col"><?= __('Data Criação','Datacriacao') ?></th>
                <th scope="col"><?= __('Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemasrelatorios as $sistemasrelatorio): ?>
            <tr>
                <td><?= h($sistemasrelatorio->id) ?></td>                    
                <td><?= h($sistemasrelatorio->name) ?></td>
                <td><?= h($sistemasrelatorio->description) ?></td>
                <td><?= h($sistemasrelatorio->objective) ?></td>
                <td><?= h($sistemasrelatorio->created) ?></td>
                <td><?= h($sistemasrelatorio->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasrelatorios', 'action' => 'view', $sistemasrelatorio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasrelatorios', 'action' => 'edit', $sistemasrelatorio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasrelatorios', 'action' => 'delete', $sistemasrelatorio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasrelatorio->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        
        <?php if (!empty($sistema->sistemasfaqs)): ?>
            <h5><?= __('FAQS Associados') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Referencia','Name') ?></th>
                <th scope="col"><?= __('Mensagem Erro','mensagemerro') ?></th>                                
                <th scope="col"><?= __('Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemasfaqs as $sistemasfaqs): ?>
            <tr>
                <td><?= h($sistemasfaqs->id) ?></td>                                    
                <td><?= h($sistemasfaqs->referencia) ?></td>
                <td><?= h($sistemasfaqs->mensagemerro) ?></td>                
                <td><?= h($sistemasfaqs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasfaqs', 'action' => 'view', $sistemasfaqs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasfaqs', 'action' => 'edit', $sistemasfaqs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasfaqs', 'action' => 'delete', $sistemasfaqs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasfaqs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">
        
        <?php if (!empty($sistema->sistemasupdates)): ?>
            <h5><?= __('Updates') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Descrição','descricao') ?></th>
                <th scope="col"><?= __('Descrição Técnica','descricaotecnica') ?></th>                                
                <th scope="col"><?= __('Atualizado','Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemasupdates as $sistemasupd): ?>
            <tr>
                <td><?= h($sistemasupd->id) ?></td>                                    
                <td><?= h($sistemasupd->descricao) ?></td>
                <td><?= h($sistemasupd->descricaotecnica) ?></td>                
                <td><?= h($sistemasupd->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasupdates', 'action' => 'view', $sistemasupd->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasupdates', 'action' => 'edit', $sistemasupd->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasupdates', 'action' => 'delete', $sistemasupd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasupd->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>


    <div class="related">
        
        <?php if (!empty($sistema->sistemascfgtables)): ?>
            <h5><?= __('Lista de Tabelas do Sistema') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Nome','Name') ?></th>
                <th scope="col"><?= __('Descrição','Description') ?></th>
                <th scope="col"><?= __('Objetivo','Objective') ?></th>
                <th scope="col"><?= __('Data Criação','Datacriacao') ?></th>
                <th scope="col"><?= __('Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemascfgtables as $tables): ?>
            <tr>
                <td><?= h($tables->id) ?></td>                    
                <td><?= h($tables->tabelanome) ?></td>
                <td><?= h($tables->descricao) ?></td>
                <td><?= h($tables->detalhe) ?></td>
                <td><?= h($tables->created) ?></td>
                <td><?= h($tables->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemascfgtables', 'action' => 'view', $tables->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemascfgtables', 'action' => 'edit', $tables->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemascfgtables', 'action' => 'delete', $tables->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tables->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>


    <div class="related">
        
        <?php if (!empty($sistema->sistemasobjetos)): ?>
            <h5><?= __('Lista de Objetos') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Nome','nome') ?></th>               
                <th scope="col"><?= __('Descrição','Description') ?></th>
                <th scope="col"><?= __('Objetivo','Objective') ?></th>                
                <th scope="col"><?= __('Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistema->sistemasobjetos as $tables): ?>
            <tr>
                <td><?= h($tables->id) ?></td>                    
                <td><?= h($tables->nome) ?></td>
                <td><?= h($tables->descricao) ?></td>
                <td><?= h($tables->objetivo) ?></td>                
                <td><?= h($tables->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasobjetos', 'action' => 'view', $tables->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasobjetos', 'action' => 'edit', $tables->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasobjetos', 'action' => 'delete', $tables->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tables->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>


</div>

<!--  FIM DE FORM --------- -->

</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
