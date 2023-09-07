<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasqueue $sistemasqueue
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Nova Entrega</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>



<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemasqueue'), ['action' => 'edit', $sistemasqueue->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemasqueue'), ['action' => 'delete', $sistemasqueue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasqueue->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasqueues'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasqueue'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sistemasqueues view large-9 medium-8 columns content">
    <h3><?= h($sistemasqueue->id)." - ".h($sistemasqueue->descricao)  ?></h3>
    <table class="table">        
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasqueue->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasqueue->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistemasqueue->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Selectedflag') ?></th>
            <td><?= $sistemasqueue->selectedflag ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Sistemas Relacionados') ?></h4>
        <?php if (!empty($sistemasqueue->sistemas)): ?>
        <table class="table">
            <tr>                
                <th scope="col"><?= __('Dataregistro') ?></th>
                <th scope="col"><?= __('Codenome') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>                
                <th scope="col"><?= __('Objetivo') ?></th>                
                <th scope="col"><?= __('Created') ?></th>            
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemasqueue->sistemas as $sistemas): ?>
            <tr>                
                <td><?= h($sistemas->dataregistro) ?></td>
                <td><?= h($sistemas->codenome) ?></td>
                <td><?= h($sistemas->descricao) ?></td>
                <td><?= h($sistemas->referencia) ?></td>                
                <td><?= h($sistemas->objetivo) ?></td>                
                <td><?= h($sistemas->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemas', 'action' => 'view', $sistemas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemas', 'action' => 'edit', $sistemas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemas', 'action' => 'delete', $sistemas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemas->id)]) ?>
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
        </div>      
    </section>