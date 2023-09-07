<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fivewthreeh $fivewthreeh
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
                            <?= $this->Html->link(__('Edit Fivewthreeh'), ['action' => 'edit', $fivewthreeh->id],['class'=>'dropdown-item'])?>
                            <?= $this->Form->postLink(__('Delete Fivewthreeh'), ['action' => 'delete', $fivewthreeh->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fivewthreeh->id)],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Fivewthreehs'), ['action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Fivewthreeh'), ['action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index'],['class'=>'dropdown-item'])?>
                            <?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add'],['class'=>'dropdown-item'])?>
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
                    <div class="col-3"> 
                        <?= $this->Form->create($fivewthreeh, ['url'=>['controller' => 'Fivewthreehsparetos', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Pareto',['default'=> $this->Number->format($fivewthreeh->id),'type' => 'hidden']); ?>                                  
                             <?= $this->Form->button('Inserir Posicionamento',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>                            
            </div>
<div class="fivewthreehs view large-9 medium-8 columns content">
    <h3><?= h($fivewthreeh->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Programa') ?></th>
            <td><?= $fivewthreeh->has('programa') ? $this->Html->link($fivewthreeh->programa->descricao, ['controller' => 'Programas', 'action' => 'view', $fivewthreeh->programa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $fivewthreeh->has('projeto') ? $this->Html->link($fivewthreeh->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $fivewthreeh->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $fivewthreeh->has('projetosproduto') ? $this->Html->link($fivewthreeh->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $fivewthreeh->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participante') ?></th>
            <td><?= $fivewthreeh->has('participante') ? $this->Html->link($fivewthreeh->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $fivewthreeh->participante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($fivewthreeh->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wwho') ?></th>
            <td><?= h($fivewthreeh->wwho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hhowmany') ?></th>
            <td><?= h($fivewthreeh->hhowmany) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hhowlong') ?></th>
            <td><?= h($fivewthreeh->hhowlong) ?></td>            
        </tr>
        <tr>            
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($fivewthreeh->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $fivewthreeh->has('statusfuncional') ? $this->Html->link($fivewthreeh->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $fivewthreeh->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $fivewthreeh->has('consultore') ? $this->Html->link($fivewthreeh->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $fivewthreeh->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acao') ?></th>
            <td><?= h($fivewthreeh->acao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ata') ?></th>
            <td><?= $fivewthreeh->has('ata') ? $this->Html->link($fivewthreeh->ata->resumogeral, ['controller' => 'Atas', 'action' => 'view', $fivewthreeh->ata->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $fivewthreeh->has('empresa') ? $this->Html->link($fivewthreeh->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $fivewthreeh->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fivewthreeh->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hhowmuch') ?></th>
            <td><?= $this->Number->format($fivewthreeh->hhowmuch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fivewthreehpredecessor') ?></th>
            <td><?= $this->Number->format($fivewthreeh->fivewthreehpredecessor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wwhen') ?></th>
            <td><?= h($fivewthreeh->wwhen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fivewthreeh->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fivewthreeh->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resolvido') ?></th>
            <td><?= h($fivewthreeh->resolvido) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Wwhat') ?></h4>
        <?= $this->Text->autoParagraph(h($fivewthreeh->wwhat)); ?>
    </div>
    <div class="row">
        <h4><?= __('Wwhere') ?></h4>
        <?= $this->Text->autoParagraph(h($fivewthreeh->wwhere)); ?>
    </div>
    <div class="row">
        <h4><?= __('Wwhy') ?></h4>
        <?= $this->Text->autoParagraph(h($fivewthreeh->wwhy)); ?>
    </div>
    <div class="row">
        <h4><?= __('Hhow') ?></h4>
        <?= $this->Text->autoParagraph(h($fivewthreeh->hhow)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Atasdetalhes') ?></h4>
        <?php if (!empty($fivewthreeh->atasdetalhes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ata Id') ?></th>
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Detalhamento') ?></th>
                <th scope="col"><?= __('Responsavel Id') ?></th>
                <th scope="col"><?= __('Dataprevista') ?></th>
                <th scope="col"><?= __('Statusacao') ?></th>
                <th scope="col"><?= __('Dataexecutada') ?></th>
                <th scope="col"><?= __('Atadetallheordem') ?></th>
                <th scope="col"><?= __('Horaexecutada') ?></th>
                <th scope="col"><?= __('Etapa Id') ?></th>
                <th scope="col"><?= __('Atividade Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Horainicio') ?></th>
                <th scope="col"><?= __('Horafim') ?></th>
                <th scope="col"><?= __('Fivewthreeh Id') ?></th>
                <th scope="col"><?= __('Processo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fivewthreeh->atasdetalhes as $atasdetalhes): ?>
            <tr>
                <td><?= h($atasdetalhes->id) ?></td>
                <td><?= h($atasdetalhes->ata_id) ?></td>
                <td><?= h($atasdetalhes->resumo) ?></td>
                <td><?= h($atasdetalhes->detalhamento) ?></td>
                <td><?= h($atasdetalhes->responsavel_id) ?></td>
                <td><?= h($atasdetalhes->dataprevista) ?></td>
                <td><?= h($atasdetalhes->statusacao) ?></td>
                <td><?= h($atasdetalhes->dataexecutada) ?></td>
                <td><?= h($atasdetalhes->atadetallheordem) ?></td>
                <td><?= h($atasdetalhes->horaexecutada) ?></td>
                <td><?= h($atasdetalhes->etapa_id) ?></td>
                <td><?= h($atasdetalhes->atividade_id) ?></td>
                <td><?= h($atasdetalhes->created) ?></td>
                <td><?= h($atasdetalhes->modified) ?></td>
                <td><?= h($atasdetalhes->horainicio) ?></td>
                <td><?= h($atasdetalhes->horafim) ?></td>
                <td><?= h($atasdetalhes->fivewthreeh_id) ?></td>
                <td><?= h($atasdetalhes->processo_id) ?></td>
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
        <h4><?= __('Related Fivewthreehsparetos') ?></h4>
        <?php if (!empty($fivewthreeh->fivewthreehsparetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fivewthreeh Id') ?></th>
                <th scope="col"><?= __('Pareto Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fivewthreeh->fivewthreehsparetos as $fivewthreehsparetos): ?>
            <tr>
                <td><?= h($fivewthreehsparetos->id) ?></td>
                <td><?= h($fivewthreehsparetos->fivewthreeh_id) ?></td>
                <td><?= h($fivewthreehsparetos->pareto_id) ?></td>
                <td><?= h($fivewthreehsparetos->descricao) ?></td>
                <td><?= h($fivewthreehsparetos->historico) ?></td>
                <td><?= h($fivewthreehsparetos->created) ?></td>
                <td><?= h($fivewthreehsparetos->modified) ?></td>
                <td><?= h($fivewthreehsparetos->data) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fivewthreehsparetos', 'action' => 'view', $fivewthreehsparetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fivewthreehsparetos', 'action' => 'edit', $fivewthreehsparetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fivewthreehsparetos', 'action' => 'delete', $fivewthreehsparetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fivewthreehsparetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosprodutosentregasdiarios') ?></h4>
        <?php if (!empty($fivewthreeh->projetosprodutosentregasdiarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Feitoontem') ?></th>
                <th scope="col"><?= __('Feitohoje') ?></th>
                <th scope="col"><?= __('Impedimento') ?></th>
                <th scope="col"><?= __('Fivewthreeh Id') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fivewthreeh->projetosprodutosentregasdiarios as $projetosprodutosentregasdiarios): ?>
            <tr>
                <td><?= h($projetosprodutosentregasdiarios->id) ?></td>
                <td><?= h($projetosprodutosentregasdiarios->projetosprodutosentrega_id) ?></td>
                <td><?= h($projetosprodutosentregasdiarios->consultore_id) ?></td>
                <td><?= h($projetosprodutosentregasdiarios->resumo) ?></td>
                <td><?= h($projetosprodutosentregasdiarios->feitoontem) ?></td>
                <td><?= h($projetosprodutosentregasdiarios->feitohoje) ?></td>
                <td><?= h($projetosprodutosentregasdiarios->impedimento) ?></td>
                <td><?= h($projetosprodutosentregasdiarios->fivewthreeh_id) ?></td>
                <td><?= h($projetosprodutosentregasdiarios->statusfuncional_id) ?></td>
                <td><?= h($projetosprodutosentregasdiarios->created) ?></td>
                <td><?= h($projetosprodutosentregasdiarios->modified) ?></td>
                <td><?= h($projetosprodutosentregasdiarios->data) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregasdiarios', 'action' => 'view', $projetosprodutosentregasdiarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregasdiarios', 'action' => 'edit', $projetosprodutosentregasdiarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregasdiarios', 'action' => 'delete', $projetosprodutosentregasdiarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregasdiarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
