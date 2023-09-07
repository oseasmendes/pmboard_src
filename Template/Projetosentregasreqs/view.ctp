<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasreq $projetosentregasreq
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Lista de Projetos</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>


                <div class="row" >                 
                    <div class="col-2">    
                        <?= $this->Form->create($projetosentregasreq, ['url'=>['controller' => 'Projetosentregasreqsrefs', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('itens',['default'=> $this->Number->format($projetosentregasreq->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Add Itens',['class'=>'btn btn-secondary btn-sm btn-block']) ?>            
                        <?= $this->Form->end() ?>
                    </div>
                </div>  

<div class="projetosentregasreqs view large-9 medium-8 columns content">
    <h3><?= h($projetosentregasreq->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $projetosentregasreq->has('projetosprodutosentrega') ? $this->Html->link($projetosentregasreq->projetosprodutosentrega->referencia, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosentregasreq->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entregastipo') ?></th>
            <td><?= $projetosentregasreq->has('entregastipo') ? $this->Html->link($projetosentregasreq->entregastipo->descricao, ['controller' => 'Entregastipos', 'action' => 'view', $projetosentregasreq->entregastipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Processo') ?></th>
            <td><?= $projetosentregasreq->has('processo') ? $this->Html->link($projetosentregasreq->processo->descricao, ['controller' => 'Processos', 'action' => 'view', $projetosentregasreq->processo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participante') ?></th>
            <td><?= $projetosentregasreq->has('participante') ? $this->Html->link($projetosentregasreq->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $projetosentregasreq->participante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Solicitante') ?></th>
            <td><?= h($projetosentregasreq->solicitante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosentregasreq->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Versão') ?></th>
            <td><?= h($projetosentregasreq->docversion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc. Referência') ?></th>
            <td><?= h($projetosentregasreq->docreference) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo Técnico da Alteração') ?></th>
            <td><?= h($projetosentregasreq->docchangereference) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Objetivo') ?></th>
            <td><?= h($projetosentregasreq->objetivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Regra De Negocio') ?></th>
            <td><?= h($projetosentregasreq->regradenegocio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dados da Amostra Inicial') ?></th>
            <td><?= h($projetosentregasreq->sample) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosentregasreq->has('statusfuncional') ? $this->Html->link($projetosentregasreq->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosentregasreq->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $projetosentregasreq->has('consultore') ? $this->Html->link($projetosentregasreq->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosentregasreq->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Developer') ?></th>
            <td><?= $projetosentregasreq->has('consultore') ? $this->Html->link($projetosentregasreq->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosentregasreq->consultore->developer_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidademedida') ?></th>
            <td><?= $projetosentregasreq->has('unidademedida') ? $this->Html->link($projetosentregasreq->unidademedida->descricao, ['controller' => 'Unidademedidas', 'action' => 'view', $projetosentregasreq->unidademedida->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetosentregasreq->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frente') ?></th>
            <td><?= $projetosentregasreq->has('frente') ? $this->Html->link($projetosentregasreq->frente->descricao, ['controller' => 'Frentes', 'action' => 'view', $projetosentregasreq->frente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reqstatus') ?></th>
            <td><?= h($projetosentregasreq->reqstatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosentregasreq->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wave') ?></th>
            <td><?= $this->Number->format($projetosentregasreq->wave) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prioridade') ?></th>
            <td><?= $this->Number->format($projetosentregasreq->prioridade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Previsaoanalise') ?></th>
            <td><?= $this->Number->format($projetosentregasreq->previsaoanalise) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Previsaosprints') ?></th>
            <td><?= $this->Number->format($projetosentregasreq->previsaosprints) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= $this->Number->format($projetosentregasreq->ordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataemissao') ?></th>
            <td><?= h($projetosentregasreq->dataemissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosentregasreq->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosentregasreq->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $projetosentregasreq->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosentregasreq->detalhes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Itens do Requisito') ?></h4>
        <?php if (!empty($projetosentregasreq->projetosentregasreqsrefs)): ?>
        <table class="table table-bordered table-responsive-sm">  
        <tr style="background-color:rgb(189, 216, 39)">                  
                <th scope="col"><?= __('Ordem') ?></th>     
                <th scope="col"><?= __('Tipo','Requisitostipo Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Requisito') ?></th>                                
                <th scope="col"><?= __('Teste') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosentregasreq->projetosentregasreqsrefs as $projetosentregasreqsrefs): ?>
            <tr>                
                <td><?= h($projetosentregasreqsrefs->ordem) ?></td>                
                <td><?= h($projetosentregasreqsrefs->requisitostipo_id) ?></td>
                <td><?= h($projetosentregasreqsrefs->referencia) ?></td>
                <td><?= h($projetosentregasreqsrefs->descricao) ?></td>
                <td><?= h($projetosentregasreqsrefs->requisito) ?></td>                                
                <td><?= h($projetosentregasreqsrefs->teste)  ? __('Yes') : __('No'); ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'view', $projetosentregasreqsrefs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'edit', $projetosentregasreqsrefs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregasreqsrefs', 'action' => 'delete', $projetosentregasreqsrefs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasreqsrefs->id)]) ?>
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