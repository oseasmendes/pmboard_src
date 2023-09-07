<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemaproaction $sistemaproaction
 */
?>


<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">System Roll</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 

                                    


<div class="sistemaproactions view large-9 medium-8 columns content">

<div class="row no-gutters" >
            <div class="col-3"> 
                <?= $this->Form->create($sistemaproaction, ['url'=>['controller' => 'Sistemaprosteps', 'action' => 'addid'],'']) ?>   
                    <?= $this->Form->control('Sistemaproaction',['default'=> $this->Number->format($sistemaproaction->id),'type' => 'hidden']); ?>
                        
                    <?= $this->Form->button('Insert Step',['class'=>'btn btn-primary btn-sm btn-block']) ?>
                <?= $this->Form->end() ?> 
            </div>
    </div>
<div>
    <h3><?= h($sistemaproaction->id) ?></h3>
    <table class="table table-responsive">
        <tr>
            <th scope="row"><?= __('Sistemasprocesso') ?></th>
            <td><?= $sistemaproaction->has('sistemasprocesso') ? $this->Html->link($sistemaproaction->sistemasprocesso->id, ['controller' => 'Sistemasprocessos', 'action' => 'view', $sistemaproaction->sistemasprocesso->id]) : '' ?></td>
        </tr>               
        <th scope="row"><?= __('Evento') ?></th>
            <td><?= $sistemaproaction->has('evento') ? $this->Html->link($sistemaproaction->evento->descricao, ['controller' => 'Eventos', 'action' => 'view', $sistemaproaction->evento->id]) : '' ?></td>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemaproaction->descricao) ?></td>
        </tr>      
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemaproaction->created) ?></td>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemaproaction->modified) ?></td>
        </tr>        
    </table>
</div>
</div>
</div>
    <div class="related">
        <h4><?= __('Actions') ?></h4>
        <?php if (!empty($sistemaproaction->sistemaprosteps)): ?>
            <table class="table table-striped table-responsive">
            <tr>
                <th scope="col"><?= __('Id') ?></th>              
                <th scope="col"><?= __('Stepaction') ?></th>
                <th scope="col"><?= __('Description') ?></th>              
                <th scope="col"><?= __('Participante Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemaproaction->sistemaprosteps as $sistemaprosteps): ?>
            <tr>
                <td><?= h($sistemaprosteps->id) ?></td>                
                <td><?= h($sistemaprosteps->stepaction) ?></td>
                <td><?= h($sistemaprosteps->description) ?></td>              
                <td><?= h($sistemaprosteps->participante_id) ?></td>
                <td><?= h($sistemaprosteps->consultore_id) ?></td>
                <td><?= h($sistemaprosteps->created) ?></td>
                <td><?= h($sistemaprosteps->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemaprosteps', 'action' => 'view', $sistemaprosteps->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemaprosteps', 'action' => 'edit', $sistemaprosteps->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemaprosteps', 'action' => 'delete', $sistemaprosteps->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemaprosteps->id)]) ?>
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
