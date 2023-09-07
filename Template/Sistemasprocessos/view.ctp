<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasprocesso $sistemasprocesso
 */
?>





<section class="content">
        <div class="container-fluid">
            <div class="row"> 
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Processos</h3>
                        </div>
                            <div class="card-body">
                                <div class="row" > 
                  

<div class="sistemasprocessos view large-9 medium-8 columns content">
<div class="row no-gutters" >
            <div class="col-3"> 
                <?= $this->Form->create($sistemasprocesso, ['url'=>['controller' => 'Sistemaproactions', 'action' => 'addid'],'']) ?>   
                    <?= $this->Form->control('Sistemaprocesso',['default'=> $this->Number->format($sistemasprocesso->id),'type' => 'hidden']); ?>
                        
                    <?= $this->Form->button('Insert Action',['class'=>'btn btn-primary btn-sm btn-block']) ?>
                <?= $this->Form->end() ?> 
            </div>
        </div>
  

    <h3><?= h($sistemasprocesso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasprocesso->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasprocesso->has('sistema') ? $this->Html->link($sistemasprocesso->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemasprocesso->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Processo') ?></th>
            <td><?= $sistemasprocesso->has('processo') ? $this->Html->link($sistemasprocesso->processo->descricao, ['controller' => 'Processos', 'action' => 'view', $sistemasprocesso->processo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descontinuadomotivo') ?></th>
            <td><?= h($sistemasprocesso->descontinuadomotivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Motivo') ?></th>
            <td><?= h($sistemasprocesso->motivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasprocesso->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descontinuadoem') ?></th>
            <td><?= h($sistemasprocesso->descontinuadoem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasprocesso->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasprocesso->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistemasprocesso->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
</div>
<div>

<div class="related">
        
        <?php if (!empty($sistemasprocesso->sistemaproactions)): ?>
            <h5><?= __('Actions') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Evento_id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemasprocesso->sistemaproactions as $sistemaproaction): ?>
            <tr>
                <td><?= h($sistemaproaction->id) ?></td>                    
                <td><?= h($sistemaproaction->evento_id) ?></td>                 
                <td><?= h($sistemaproaction->descricao) ?></td>                
                <td><?= h($sistemaproaction->created) ?></td>
                <td><?= h($sistemaproaction->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemaproactions', 'action' => 'view', $sistemaproaction->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemaproactions', 'action' => 'edit', $sistemaproaction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemaproactions', 'action' => 'delete', $sistemaproaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemaproaction->id)]) ?>
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
