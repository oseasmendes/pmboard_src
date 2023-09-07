<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasupdate $sistemasupdate
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Update Catalog</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasupdate'), ['action' => 'edit', $sistemasupdate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasupdate'), ['action' => 'delete', $sistemasupdate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasupdate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasupdates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasupdate'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="row no-gutters" >
        <div class="col-3"> 
            <?= $this->Form->create($sistemasupdate, ['url'=>['controller' => 'Sistemasupdatesflows', 'action' => 'addid'],'']) ?>   
                <?= $this->Form->control('follow',['default'=> $this->Number->format($sistemasupdate->id),'type' => 'hidden']); ?>
                <?= $this->Form->button('Follow',['class'=>'btn btn-primary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?> 
        </div>
</div>
<div class="sistemasupdates view large-9 medium-8 columns content">
    <h3><?= h($sistemasupdate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasupdate->has('sistema') ? $this->Html->link($sistemasupdate->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemasupdate->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modulo') ?></th>
            <td><?= $sistemasupdate->has('sistemasmodulos') ? $this->Html->link($sistemasupdate->sistemasmodulos->nome, ['controller' => 'Sistemasmodulos', 'action' => 'view', $sistemasupdate->sistemasmodulos->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemasupdate->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Executavel') ?></th>
            <td><?= h($sistemasupdate->executavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $sistemasupdate->has('statusfuncional') ? $this->Html->link($sistemasupdate->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $sistemasupdate->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemasupdate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataupdate') ?></th>
            <td><?= h($sistemasupdate->dataupdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasupdate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasupdate->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Liberadoparaaplicacao') ?></th>
            <td><?= $sistemasupdate->liberadoparaaplicacao ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricaotecnica') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemasupdate->descricaotecnica)); ?>
    </div>
</div>


<div class="related">
        
        <?php if (!empty($sistemasupdate->sistemasupdatesflows)): ?>
            <h5><?= __('Updates') ?></h5>
            <table class="table table-responsive">   
            <tr>
                <th scope="col"><?= __('Id') ?></th>                
                <th scope="col"><?= __('Descrição','descricao') ?></th>  
                <th scope="col"><?= __('Referencia','referencia') ?></th>  
                <th scope="col"><?= __('Data','data') ?></th>  
                <th scope="col"><?= __('Data Realização','Datarealizadaoficial') ?></th>  
                <th scope="col"><?= __('Atualizado','Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemasupdate->sistemasupdatesflows as $supflow): ?>
            <tr>
                <td><?= h($supflow->id) ?></td>                                    
                <td><?= h($supflow->descricao) ?></td>  
                <td><?= h($supflow->referencia) ?></td>  
                <td><?= h($supflow->data) ?></td>  
                <td><?= h($supflow->datarealizadaoficial) ?></td>  
                <td><?= h($supflow->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasupdatesflows', 'action' => 'view', $supflow->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasupdatesflows', 'action' => 'edit', $supflow->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasupdatesflows', 'action' => 'delete', $supflow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supflow->id)]) ?>
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
