<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logbook $logbook
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">TO DO List</h3>
                        </div>
                            <div class="card-body">
                                
            <div class="row" >
                    <div class="col-2"> 
                        <?= $this->Form->create($logbook, ['url'=>['controller' => 'Logbooksitems', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('item',['default'=> $this->Number->format($logbook->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Inserir Item',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
            </div>
                            <div class="row" >

</div>
<div class="row" >
<div class="logbooks view large-9 medium-8 columns content">
    <h3><?= "Board: #".h($logbook->id) ?></h3>
    <table class="table">
        <tr>            
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($logbook->data) ?></td>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($logbook->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Programa') ?></th>
            <td><?= $logbook->has('programa') ? $this->Html->link($logbook->programa->descricao, ['controller' => 'Programas', 'action' => 'view', $logbook->programa->id]) : '' ?></td>
            <th scope="row"><?= __('Atividadetipo') ?></th>
            <td><?= $logbook->has('atividadetipo') ? $this->Html->link($logbook->atividadetipo->descricao, ['controller' => 'Atividadetipos', 'action' => 'view', $logbook->atividadetipo->id]) : '' ?></td>
        </tr>                
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($logbook->created) ?></td>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($logbook->modified) ?></td>
        </tr>        
    </table>
    <div class="related">
        <h5><?= __('Atividades') ?></h5>
        <?php if (!empty($logbook->logbooksitems)): ?>
         <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>                                                
                <th scope="col"><?= __('Hora') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>                                
                <th scope="col"><?= __('Descricao') ?></th>                                
                <th scope="col"><?= __('Responsavel') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($logbook->logbooksitems as $logbooksitems): ?>
            <tr>
                <td><?= h($logbooksitems->id) ?></td>                                                
                <td><?= h($logbooksitems->hora) ?></td>
                <td><?= h($logbooksitems->referencia) ?></td>                                
                <td><?= h($logbooksitems->descricao) ?></td>                                
                <td><?= h($logbooksitems->responsavel) ?></td>
                <td><?= h($logbooksitems->created) ?></td>
                <td><?= h($logbooksitems->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Logbooksitems', 'action' => 'view', $logbooksitems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Logbooksitems', 'action' => 'edit', $logbooksitems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Logbooksitems', 'action' => 'delete', $logbooksitems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logbooksitems->id)]) ?>
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