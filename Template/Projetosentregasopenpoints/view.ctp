<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasopenpoint $projetosentregasopenpoint
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


<div class="projetosentregasopenpoints view large-9 medium-8 columns content">
    <h3><?= h($projetosentregasopenpoint->id) ?></h3>
                <div class="row" >
                    <div class="col-2"> 
                        <?= $this->Form->create($projetosentregasopenpoint, ['url'=>['controller' => 'Projetosentregasopprespostas', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('OppResposta',['default'=> $this->Number->format($projetosentregasopenpoint->id),'type' => 'hidden']); ?>                                  
                            <?= $this->Form->button('Inserir Retorno',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
                </div>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosentregasopenpoint->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosentregasreqsref Id') ?></th>            
            <td><?= $projetosentregasopenpoint->has('projetosentregasreqsref') ? $this->Html->link($projetosentregasopenpoint->projetosentregasreqsref->id, ['controller' => 'Projetosentregasreqsrefs', 'action' => 'view', $projetosentregasopenpoint->projetosentregasreqsref->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosentregasopenpoint->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivo') ?></th>
            <td><?= $projetosentregasopenpoint->has('motivo') ? $this->Html->link($projetosentregasopenpoint->motivo->descricao, ['controller' => 'Motivos', 'action' => 'view', $projetosentregasopenpoint->motivo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planodeacaodescricao') ?></th>
            <td><?= h($projetosentregasopenpoint->planodeacaodescricao) ?></td>
        </tr>                
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($projetosentregasopenpoint->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosentregasopenpoint->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosentregasopenpoint->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planoacao') ?></th>
            <td><?= $projetosentregasopenpoint->planoacao ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosentregasopenpoint->detalhes)); ?>
    </div>
</div>
<div class="related">        
        <?php if (!empty($projetosentregasopenpoint->projetosentregasopprespostas)): ?>
        <h5 class="display-4"><?= __('Resposta') ?></h5>
        <table class="table table-bordered table-responsive-sm">  
        <tr style="background-color:rgb(189, 216, 39)">                  
                <th scope="col"><?= __('Id') ?></th>                    
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Docdata','docdata') ?></th>
                <th scope="col"><?= __('Planoacao') ?></th>                                
                <th scope="col"><?= __('Validado') ?></th>                                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosentregasopenpoint->projetosentregasopprespostas as $opp): ?>
            <tr>                
                <td><?= h($opp->id) ?></td>                                
                <td><?= h($opp->descricao) ?></td>                
                <td><?= h($opp->doccanal) ?></td>     
                <td><?= h($opp->planoacao) ?></td>     
                <td><?= h($opp->validado) ?></td>     
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregasopprespostas', 'action' => 'view', $opp->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregasopprespostas', 'action' => 'edit', $opp->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregasopprespostas', 'action' => 'delete', $opp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opp->id)]) ?>
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
    </section>