<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entregasblockpoint $entregasblockpoint
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


                <div class="row" >
                    <div class="col-2"> 
                        <?= $this->Form->create($entregasblockpoint, ['url'=>['controller' => 'Entregasblockpointsfls', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('BlockFUP',['default'=> $this->Number->format($entregasblockpoint->id),'type' => 'hidden']); ?>                                  
                             <?= $this->Form->button('Follow-Up',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
                </div>

<div class="entregasblockpoints view large-9 medium-8 columns content">
    <h3><?= h($entregasblockpoint->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $entregasblockpoint->has('projetosprodutosentrega') ? $this->Html->link($entregasblockpoint->projetosprodutosentrega->referencia, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $entregasblockpoint->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($entregasblockpoint->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $entregasblockpoint->has('statusfuncional') ? $this->Html->link($entregasblockpoint->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $entregasblockpoint->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $entregasblockpoint->has('consultore') ? $this->Html->link($entregasblockpoint->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $entregasblockpoint->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($entregasblockpoint->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($entregasblockpoint->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flag') ?></th>
            <td><?= $this->Number->format($entregasblockpoint->flag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resolvidoem') ?></th>
            <td><?= h($entregasblockpoint->resolvidoem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($entregasblockpoint->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($entregasblockpoint->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planoacao') ?></th>
            <td><?= $entregasblockpoint->planoacao ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $entregasblockpoint->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Risco') ?></th>
            <td><?= $entregasblockpoint->risco ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalhes') ?></h4>
        <?= $this->Text->autoParagraph(h($entregasblockpoint->detalhes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Follow-Up') ?></h4>
        <?php if (!empty($entregasblockpoint->entregasblockpointsfls)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Entregasblockpoint Id') ?></th>
                <th scope="col"><?= __('Dataemissao') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Detalhes') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($entregasblockpoint->entregasblockpointsfls as $entregasblockpointsfls): ?>
            <tr>
                <td><?= h($entregasblockpointsfls->id) ?></td>
                <td><?= h($entregasblockpointsfls->entregasblockpoint_id) ?></td>
                <td><?= h($entregasblockpointsfls->dataemissao) ?></td>
                <td><?= h($entregasblockpointsfls->descricao) ?></td>
                <td><?= h($entregasblockpointsfls->detalhes) ?></td>
                <td><?= h($entregasblockpointsfls->ativo) ?></td>
                <td><?= h($entregasblockpointsfls->created) ?></td>
                <td><?= h($entregasblockpointsfls->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Entregasblockpointsfls', 'action' => 'view', $entregasblockpointsfls->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Entregasblockpointsfls', 'action' => 'edit', $entregasblockpointsfls->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entregasblockpointsfls', 'action' => 'delete', $entregasblockpointsfls->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entregasblockpointsfls->id)]) ?>
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
    </section>
