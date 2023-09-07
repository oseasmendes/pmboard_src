<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosblockpoint $projetosblockpoint
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
                                    <div class="col-2"> 
                        <?= $this->Form->create($projetosblockpoint, ['url'=>['controller' => 'Projetosblockpointsfls', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('Follow',['default'=> $this->Number->format($projetosblockpoint->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Insert Follow',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>

                                    <div class="row" >
                                    
</div>
                  
                </div>

               
<div class="projetosblockpoints view large-9 medium-8 columns content">
    <h3><p class="text-secondary">BlockPoint: #_<?= h($projetosblockpoint->id) ?></p></h3>
    <table class="table">        
                <tr>                    
                        <th scope="row"><?= __('Projeto') ?></th>
                        <td><?= $projetosblockpoint->has('projeto') ? $this->Html->link($projetosblockpoint->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosblockpoint->projeto->id]) : '' ?></td>                    
                        <th scope="row"><?= __('Descricao') ?></th>
                        <td><?= h($projetosblockpoint->descricao) ?></td>
                </tr>
                  
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $projetosblockpoint->has('statusfuncional') ? $this->Html->link($projetosblockpoint->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosblockpoint->statusfuncional->id]) : '' ?></td>
            <th scope="row"><?= __('Consultor') ?></th>
            <td><?= $projetosblockpoint->has('consultore') ? $this->Html->link($projetosblockpoint->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosblockpoint->consultore->id]) : '' ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($projetosblockpoint->responsavel) ?></td>
            <th scope="row"><?= __('Risco') ?></th>
            <td><?= $projetosblockpoint->risco ? __('Yes') : __('No'); ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Flag') ?></th>
            <td><?= $this->Number->format($projetosblockpoint->flag) ?></td>
            <th scope="row"><?= __('Resolvidoem') ?></th>
            <td><?= h($projetosblockpoint->resolvidoem) ?></td>
        </tr>   
        <tr>
            <th scope="row"><?= __('Planoacao') ?></th>
            <td><?= $projetosblockpoint->planoacao ? __('Yes') : __('No'); ?></td>
             <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $projetosblockpoint->ativo ? __('Yes') : __('No'); ?></td>
        </tr>              
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosblockpoint->created) ?></td>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosblockpoint->modified) ?></td>
        </tr>        
    </table>
    <div class="row">
        <h4><p class="text-secondary"><?= __('Detalhes') ?></p></h4>
        </p>    
        <table class="table">   
            <tr>
                <td>
                    <?= $this->Text->autoParagraph(h($projetosblockpoint->detalhes)); ?>
                <td>
            </tr>        
        </table>
     <div class="related">
        <h4><p class="text-secondary"><?= __('Follow') ?></p></h4>
        <?php if (!empty($projetosblockpoint->projetosblockpointsfls)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>            
                <th scope="col"><?= __('Descricao') ?></th>                
                <th scope="col"><?= __('Created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosblockpoint->projetosblockpointsfls as $follow): ?>
            <tr>
                <td><?= h($follow->id) ?></td>                                
                <td><?= h($follow->descricao) ?></td>                
                <td><?= h($follow->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosblockpointsfls', 'action' => 'view', $follow->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosblockpointsfls', 'action' => 'edit', $follow->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosblockpointsfls', 'action' => 'delete', $follow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $follow->id)]) ?>
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
