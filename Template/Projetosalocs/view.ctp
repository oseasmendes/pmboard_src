<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosaloc $projetosaloc
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
                          <?= $this->Html->link(__('Edit Projetosaloc'), ['action' => 'edit', $projetosaloc->id],['class'=>'dropdown-item'])?> 
                            <?= $this->Form->postLink(__('Delete Projetosaloc'), ['action' => 'delete', $projetosaloc->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosaloc->id)],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('List Projetosalocs'), ['action' => 'index'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('New Projetosaloc'), ['action' => 'add'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('List Projetosalocsnotas'), ['controller' => 'Projetosalocsnotas', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('New Projetosalocsnota'), ['controller' => 'Projetosalocsnotas', 'action' => 'add'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('List Projetosalocsprofiles'), ['controller' => 'Projetosalocsprofiles', 'action' => 'index'],['class'=>'dropdown-item'])?> 
                            <?= $this->Html->link(__('New Projetosalocsprofile'), ['controller' => 'Projetosalocsprofiles', 'action' => 'add'],['class'=>'dropdown-item'])?>
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
            <div class="row" >
                    <div class="col-3"> 
                        <?= $this->Form->create($projetosaloc, ['url'=>['controller' => 'Projetosalocsprofiles', 'action' => 'add'],'']) ?>   
                            <?= $this->Form->control('Profile',['default'=> $this->Number->format($projetosaloc->id),'type' => 'hidden']); ?>
                                  
                             <?= $this->Form->button('Definir Perfil',['class'=>'btn btn-info btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>                            
            </div>



           
<div class="projetosalocs view large-9 medium-8 columns content">
    <h3><?= h($projetosaloc->id) ?></h3>
    <table class="table table-info table-responsive-sm">
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $projetosaloc->has('projeto') ? $this->Html->link($projetosaloc->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $projetosaloc->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $projetosaloc->has('consultore') ? $this->Html->link($projetosaloc->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosaloc->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipoaloc') ?></th>
            <td><?= $projetosaloc->has('tipoaloc') ? $this->Html->link($projetosaloc->tipoaloc->descricao, ['controller' => 'Tipoalocs', 'action' => 'view', $projetosaloc->tipoaloc->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projetosaloc->has('statusfuncional') ? $this->Html->link($projetosaloc->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosaloc->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosaloc->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosaloc->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Percentual') ?></th>
            <td><?= $this->Number->format($projetosaloc->percentual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosaloc->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosaloc->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataalocacao') ?></th>
            <td><?= h($projetosaloc->dataalocacao) ?></td>
        </tr>
         <tr>
            <th scope="row"><?= __('Desalocacaoprevista') ?></th>
            <td><?= h($projetosaloc->Desalocacaoprevista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desalocacaorealizada') ?></th>
            <td><?= h($projetosaloc->Desalocacaorealizada) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosalocsnotas') ?></h4>
        <?php if (!empty($projetosaloc->projetosalocsnotas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Notatipo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Projetosaloc Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosaloc->projetosalocsnotas as $projetosalocsnotas): ?>
            <tr>
                <td><?= h($projetosalocsnotas->id) ?></td>
                <td><?= h($projetosalocsnotas->notatipo_id) ?></td>
                <td><?= h($projetosalocsnotas->descricao) ?></td>
                <td><?= h($projetosalocsnotas->historico) ?></td>
                <td><?= h($projetosalocsnotas->projetosaloc_id) ?></td>
                <td><?= h($projetosalocsnotas->created) ?></td>
                <td><?= h($projetosalocsnotas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosalocsnotas', 'action' => 'view', $projetosalocsnotas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosalocsnotas', 'action' => 'edit', $projetosalocsnotas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosalocsnotas', 'action' => 'delete', $projetosalocsnotas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosalocsnotas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosalocsprofiles') ?></h4>
        <?php if (!empty($projetosaloc->projetosalocsprofiles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosaloc Id') ?></th>
                <th scope="col"><?= __('Percentual') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Dataalocacao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Competencia Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projetosaloc->projetosalocsprofiles as $projetosalocsprofiles): ?>
            <tr>
                <td><?= h($projetosalocsprofiles->id) ?></td>
                <td><?= h($projetosalocsprofiles->projetosaloc_id) ?></td>
                <td><?= h($projetosalocsprofiles->percentual) ?></td>
                <td><?= h($projetosalocsprofiles->statusfuncional_id) ?></td>
                <td><?= h($projetosalocsprofiles->dataalocacao) ?></td>
                <td><?= h($projetosalocsprofiles->created) ?></td>
                <td><?= h($projetosalocsprofiles->modified) ?></td>
                <td><?= h($projetosalocsprofiles->competencia_id) ?></td>
                <td><?= h($projetosalocsprofiles->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosalocsprofiles', 'action' => 'view', $projetosalocsprofiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosalocsprofiles', 'action' => 'edit', $projetosalocsprofiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosalocsprofiles', 'action' => 'delete', $projetosalocsprofiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosalocsprofiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
