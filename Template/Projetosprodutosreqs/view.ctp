<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosreq $projetosprodutosreq
 */
?>

					<div class="col-3">        
                        <?= $this->Form->create($projetosprodutosreq, ['url'=>['controller' => 'Projetosprodutosreqsrefs', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('Requisito',['default'=> $this->Number->format($projetosprodutosreq->id),'type' => 'hidden']); ?>
                            <?= $this->Form->button('Informar EPT',['class'=>'btn btn-info btn-sm btn-block']) ?>        
                        <?= $this->Form->end() ?>
                    </div>
<div class="projetosprodutosreqs view large-9 medium-8 columns content">
    <h3><p class="text-secondary">Requisito: #_<?= h($projetosprodutosreq->id) ?></p></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Produto') ?></th>
            <td><?= $projetosprodutosreq->has('projetosproduto') ? $this->Html->link($projetosprodutosreq->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosreq->projetosproduto->id]) : '' ?></td>
            <th scope="row"><?= __('Tipo de Entrega') ?></th>
            <td><?= $projetosprodutosreq->has('entregastipo') ? $this->Html->link($projetosprodutosreq->entregastipo->descricao, ['controller' => 'Entregastipos', 'action' => 'view', $projetosprodutosreq->entregastipo->id]) : '' ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Processo') ?></th>
            <td><?= $projetosprodutosreq->has('processo') ? $this->Html->link($projetosprodutosreq->processo->descricao, ['controller' => 'Processos', 'action' => 'view', $projetosprodutosreq->processo->id]) : '' ?></td>
            <th scope="row"><?= __('Participante') ?></th>
            <td><?= $projetosprodutosreq->has('participante') ? $this->Html->link($projetosprodutosreq->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $projetosprodutosreq->participante->id]) : '' ?></td>
        </tr>      
        <tr>
            <th scope="row"><?= __('Solicitante') ?></th>
            <td><?= h($projetosprodutosreq->solicitante) ?></td>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $projetosprodutosreq->has('statusfuncional') ? $this->Html->link($projetosprodutosreq->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosreq->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataemissao') ?></th>
            <td><?= h($projetosprodutosreq->dataemissao) ?></td>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosprodutosreq->descricao) ?></td>
        </tr>      
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $projetosprodutosreq->has('consultore') ? $this->Html->link($projetosprodutosreq->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosprodutosreq->consultore->id]) : '' ?></td>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($projetosprodutosreq->referencia) ?></td>
        </tr>      
        <tr>
            <th scope="row"><?= __('Frente') ?></th>
            <td><?= $projetosprodutosreq->has('frente') ? $this->Html->link($projetosprodutosreq->frente->descricao, ['controller' => 'Frentes', 'action' => 'view', $projetosprodutosreq->frente->id]) : '' ?></td>
            <th scope="row"><?= __('Wave') ?></th>
            <td><?= $this->Number->format($projetosprodutosreq->wave) ?></td>
        </tr>               
        <tr>
            <th scope="row"><?= __('Prio') ?></th>
            <td><?= $this->Number->format($projetosprodutosreq->prioridade) ?></td>
            <th scope="row"><?= __('Previsaosprints') ?></th>
            <td><?= $this->Number->format($projetosprodutosreq->previsaosprints) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tmp Analise') ?></th>
            <td><?= $this->Number->format($projetosprodutosreq->previsaoanalise) ?></td>
            <th scope="row"><?= __('Unid. Tmp') ?></th>
            <td><?= $projetosprodutosreq->has('unidademedida') ? $this->Html->link($projetosprodutosreq->unidademedida->descricao, ['controller' => 'Unidademedidas', 'action' => 'view', $projetosprodutosreq->unidademedida->id]) : '' ?></td>
        </tr>     
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosreq->created) ?></td>
             <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosreq->modified) ?></td>
        </tr>        
    </table>
    <div class="row">
        <h4><p class="text-secondary"><?= __('Detalhes') ?></p></h4>
         </p>    
        <table class="table">   
            <tr>
                <td>
                    <?= $this->Text->autoParagraph(h($projetosprodutosreq->detalhes)); ?>
                     </td>
            </tr>        
        </table>
    </div>
    
    <h4><p class="text-secondary"><?= __('Tasks Referenciadas') ?></p></h4>
        <?php if (!empty($projetosprodutosreq->projetosprodutosreqsrefs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Projetosprodutosreq Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Cancelled') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosprodutosreq->projetosprodutosreqsrefs as $projetosprodutosreqsrefs): ?>
            <tr>
                <td><?= h($projetosprodutosreqsrefs->id) ?></td>
                <td><?= h($projetosprodutosreqsrefs->referencia) ?></td>
                <td><?= h($projetosprodutosreqsrefs->description) ?></td>
                <td><?= h($projetosprodutosreqsrefs->projetosprodutosreq_id) ?></td>
                <td><?= h($projetosprodutosreqsrefs->projetosprodutosentrega_id) ?></td>
                <td><?= h($projetosprodutosreqsrefs->cancelled) ?></td>
                <td><?= h($projetosprodutosreqsrefs->created) ?></td>
                <td><?= h($projetosprodutosreqsrefs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosreqsrefs', 'action' => 'view', $projetosprodutosreqsrefs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosreqsrefs', 'action' => 'edit', $projetosprodutosreqsrefs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosreqsrefs', 'action' => 'delete', $projetosprodutosreqsrefs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosreqsrefs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
