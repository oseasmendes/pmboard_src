<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosrisco $projetosprodutosrisco
 */
?>

<div class="sistemas index large-9 medium-8 columns content"> 
    <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <div>
                    <div class="col-sm-8 col-md-7 py-4">                   
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<?= $this->Html->link(__('Edit Projetosprodutosrisco'), ['action' => 'edit', $projetosprodutosrisco->id],['class'=>'dropdown-item'])?>
<?= $this->Form->postLink(__('Delete Projetosprodutosrisco'), ['action' => 'delete', $projetosprodutosrisco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosrisco->id)],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Projetosprodutosriscos'), ['action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Projetosprodutosrisco'), ['action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Riscos'), ['controller' => 'Riscos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Risco'), ['controller' => 'Riscos', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Aplicabilidades'), ['controller' => 'Aplicabilidades', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Aplicabilidade'), ['controller' => 'Aplicabilidades', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Projetosprodutosriscosimpactos'), ['controller' => 'Projetosprodutosriscosimpactos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Projetosprodutosriscosimpacto'), ['controller' => 'Projetosprodutosriscosimpactos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>                              
            </div>
          </div>
          <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 



    <div class="row no-gutters" >
               
                    <div class="col-3"> 
                        <?= $this->Form->create($projetosprodutosrisco, ['url'=>['controller' => 'Projetosprodutosriscoseventos', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Eventos',['default'=> $this->Number->format($projetosprodutosrisco->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Inserir Eventos',['class'=>'btn btn-primary btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>                                    
    </div>
    
</div>  


<div class="projetosprodutosriscos view large-9 medium-8 columns content">
    <h3><?= h($projetosprodutosrisco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $projetosprodutosrisco->has('projetosproduto') ? $this->Html->link($projetosprodutosrisco->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosrisco->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Risco') ?></th>
            <td><?= $projetosprodutosrisco->has('risco') ? $this->Html->link($projetosprodutosrisco->risco->descricao, ['controller' => 'Riscos', 'action' => 'view', $projetosprodutosrisco->risco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aplicabilidade') ?></th>
            <td><?= $projetosprodutosrisco->has('aplicabilidade') ? $this->Html->link($projetosprodutosrisco->aplicabilidade->descricao, ['controller' => 'Aplicabilidades', 'action' => 'view', $projetosprodutosrisco->aplicabilidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel') ?></th>
            <td><?= h($projetosprodutosrisco->nivel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosprodutosrisco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Probabilidade') ?></th>
            <td><?= $this->Number->format($projetosprodutosrisco->probabilidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tempoprevistoimpacto') ?></th>
            <td><?= $this->Number->format($projetosprodutosrisco->tempoprevistoimpacto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pessoasafetadas') ?></th>
            <td><?= $this->Number->format($projetosprodutosrisco->pessoasafetadas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estimativafinanceiradorisco') ?></th>
            <td><?= $this->Number->format($projetosprodutosrisco->estimativafinanceiradorisco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosprodutosrisco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosprodutosrisco->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Resumo') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosprodutosrisco->resumo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Impactos') ?></h4>
        <?php if (!empty($projetosprodutosrisco->projetosprodutosriscosimpactos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosrisco Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Detalhamento') ?></th>
                <th scope="col"><?= __('Tipo') ?></th>
                <th scope="col"><?= __('Nivel') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosprodutosrisco->projetosprodutosriscosimpactos as $projetosprodutosriscosimpactos): ?>
            <tr>
                <td><?= h($projetosprodutosriscosimpactos->id) ?></td>
                <td><?= h($projetosprodutosriscosimpactos->projetosprodutosrisco_id) ?></td>
                <td><?= h($projetosprodutosriscosimpactos->descricao) ?></td>
                <td><?= h($projetosprodutosriscosimpactos->detalhamento) ?></td>
                <td><?= h($projetosprodutosriscosimpactos->tipo) ?></td>
                <td><?= h($projetosprodutosriscosimpactos->nivel) ?></td>
                <td><?= h($projetosprodutosriscosimpactos->created) ?></td>
                <td><?= h($projetosprodutosriscosimpactos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosriscosimpactos', 'action' => 'view', $projetosprodutosriscosimpactos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosriscosimpactos', 'action' => 'edit', $projetosprodutosriscosimpactos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosriscosimpactos', 'action' => 'delete', $projetosprodutosriscosimpactos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosriscosimpactos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
     <div class="related">
        <h4><?= __('Eventos') ?></h4>
        <?php if (!empty($projetosprodutosrisco->projetosprodutosriscoseventos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosrisco Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Historico') ?></th>                
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosprodutosrisco->projetosprodutosriscoseventos as $projetosprodutosriscoseventos): ?>
            <tr>
                <td><?= h($projetosprodutosriscoseventos->id) ?></td>
                <td><?= h($projetosprodutosriscoseventos->projetosprodutosrisco_id) ?></td>
                <td><?= h($projetosprodutosriscoseventos->data) ?></td>
                <td><?= h($projetosprodutosriscoseventos->resumo) ?></td>
                <td><?= h($projetosprodutosriscoseventos->historico) ?></td>             
                <td><?= h($projetosprodutosriscoseventos->created) ?></td>
                <td><?= h($projetosprodutosriscoseventos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosriscoseventos', 'action' => 'view', $projetosprodutosriscoseventos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosriscoseventos', 'action' => 'edit', $projetosprodutosriscoseventos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosriscoseventos', 'action' => 'delete', $projetosprodutosriscoseventos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosriscoseventos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
