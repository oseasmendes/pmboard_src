<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
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


<div class="departamentos view large-9 medium-8 columns content">
    <h3><?= h($departamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($departamento->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($departamento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($departamento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($departamento->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Agendaanual') ?></h4>
        <?php if (!empty($departamento->agendaanual)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Atividadetipo Id') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Orgunidade Id') ?></th>
                <th scope="col"><?= __('Tipoagenda') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Dataagenda') ?></th>
                <th scope="col"><?= __('Horainicio') ?></th>
                <th scope="col"><?= __('Horafim') ?></th>
                <th scope="col"><?= __('Local') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Etiquetaadicional') ?></th>
                <th scope="col"><?= __('Diadasemana') ?></th>
                <th scope="col"><?= __('Localdiferente') ?></th>
                <th scope="col"><?= __('Periodicidade') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Referenciadia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departamento->agendaanual as $agendaanual): ?>
            <tr>
                <td><?= h($agendaanual->id) ?></td>
                <td><?= h($agendaanual->atividadetipo_id) ?></td>
                <td><?= h($agendaanual->departamento_id) ?></td>
                <td><?= h($agendaanual->orgunidade_id) ?></td>
                <td><?= h($agendaanual->tipoagenda) ?></td>
                <td><?= h($agendaanual->observacao) ?></td>
                <td><?= h($agendaanual->dataagenda) ?></td>
                <td><?= h($agendaanual->horainicio) ?></td>
                <td><?= h($agendaanual->horafim) ?></td>
                <td><?= h($agendaanual->local) ?></td>
                <td><?= h($agendaanual->created) ?></td>
                <td><?= h($agendaanual->modified) ?></td>
                <td><?= h($agendaanual->etiquetaadicional) ?></td>
                <td><?= h($agendaanual->diadasemana) ?></td>
                <td><?= h($agendaanual->localdiferente) ?></td>
                <td><?= h($agendaanual->Periodicidade) ?></td>
                <td><?= h($agendaanual->referencia) ?></td>
                <td><?= h($agendaanual->referenciadia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Agendaanual', 'action' => 'view', $agendaanual->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Agendaanual', 'action' => 'edit', $agendaanual->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Agendaanual', 'action' => 'delete', $agendaanual->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agendaanual->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Consultores') ?></h4>
        <?php if (!empty($departamento->consultores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Telefone') ?></th>
                <th scope="col"><?= __('Cargo') ?></th>
                <th scope="col"><?= __('Responsabilidade') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Superiorimediato Id') ?></th>
                <th scope="col"><?= __('Consultoria Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departamento->consultores as $consultores): ?>
            <tr>
                <td><?= h($consultores->id) ?></td>
                <td><?= h($consultores->nome) ?></td>
                <td><?= h($consultores->departamento_id) ?></td>
                <td><?= h($consultores->email) ?></td>
                <td><?= h($consultores->telefone) ?></td>
                <td><?= h($consultores->cargo) ?></td>
                <td><?= h($consultores->responsabilidade) ?></td>
                <td><?= h($consultores->created) ?></td>
                <td><?= h($consultores->modified) ?></td>
                <td><?= h($consultores->superiorimediato_id) ?></td>
                <td><?= h($consultores->consultoria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Consultores', 'action' => 'view', $consultores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Consultores', 'action' => 'edit', $consultores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultores', 'action' => 'delete', $consultores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetousuarios') ?></h4>
        <?php if (!empty($departamento->projetousuarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Telefone') ?></th>
                <th scope="col"><?= __('Cargo') ?></th>
                <th scope="col"><?= __('Responsabilidade') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Superiorimediato Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departamento->projetousuarios as $projetousuarios): ?>
            <tr>
                <td><?= h($projetousuarios->id) ?></td>
                <td><?= h($projetousuarios->nome) ?></td>
                <td><?= h($projetousuarios->departamento_id) ?></td>
                <td><?= h($projetousuarios->email) ?></td>
                <td><?= h($projetousuarios->telefone) ?></td>
                <td><?= h($projetousuarios->cargo) ?></td>
                <td><?= h($projetousuarios->responsabilidade) ?></td>
                <td><?= h($projetousuarios->created) ?></td>
                <td><?= h($projetousuarios->modified) ?></td>
                <td><?= h($projetousuarios->superiorimediato_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetousuarios', 'action' => 'view', $projetousuarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetousuarios', 'action' => 'edit', $projetousuarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetousuarios', 'action' => 'delete', $projetousuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetousuarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sistemas') ?></h4>
        <?php if (!empty($departamento->sistemas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Dataregistro') ?></th>
                <th scope="col"><?= __('Codinome') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col"><?= __('Objetivo') ?></th>
                <th scope="col"><?= __('Dataimplantacao') ?></th>
                <th scope="col"><?= __('Dataultimaatualizacao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Bookmarked') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departamento->sistemas as $sistemas): ?>
            <tr>
                <td><?= h($sistemas->id) ?></td>
                <td><?= h($sistemas->dataregistro) ?></td>
                <td><?= h($sistemas->codinome) ?></td>
                <td><?= h($sistemas->descricao) ?></td>
                <td><?= h($sistemas->referencia) ?></td>
                <td><?= h($sistemas->empresa_id) ?></td>
                <td><?= h($sistemas->objetivo) ?></td>
                <td><?= h($sistemas->dataimplantacao) ?></td>
                <td><?= h($sistemas->dataultimaatualizacao) ?></td>
                <td><?= h($sistemas->created) ?></td>
                <td><?= h($sistemas->modified) ?></td>
                <td><?= h($sistemas->departamento_id) ?></td>
                <td><?= h($sistemas->bookmarked) ?></td>
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
    <div class="related">
        <h4><?= __('Related Sistemasareas') ?></h4>
        <?php if (!empty($departamento->sistemasareas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Contato') ?></th>
                <th scope="col"><?= __('Quantidadeusuarios') ?></th>
                <th scope="col"><?= __('Quantidadelicencas') ?></th>
                <th scope="col"><?= __('Tipolicenca') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Papeldocontato') ?></th>
                <th scope="col"><?= __('Contatoramal') ?></th>
                <th scope="col"><?= __('Contatoemail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departamento->sistemasareas as $sistemasareas): ?>
            <tr>
                <td><?= h($sistemasareas->id) ?></td>
                <td><?= h($sistemasareas->sistema_id) ?></td>
                <td><?= h($sistemasareas->departamento_id) ?></td>
                <td><?= h($sistemasareas->contato) ?></td>
                <td><?= h($sistemasareas->quantidadeusuarios) ?></td>
                <td><?= h($sistemasareas->quantidadelicencas) ?></td>
                <td><?= h($sistemasareas->tipolicenca) ?></td>
                <td><?= h($sistemasareas->created) ?></td>
                <td><?= h($sistemasareas->modified) ?></td>
                <td><?= h($sistemasareas->descricao) ?></td>
                <td><?= h($sistemasareas->papeldocontato) ?></td>
                <td><?= h($sistemasareas->contatoramal) ?></td>
                <td><?= h($sistemasareas->contatoemail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasareas', 'action' => 'view', $sistemasareas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasareas', 'action' => 'edit', $sistemasareas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasareas', 'action' => 'delete', $sistemasareas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasareas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sistemasbriefings') ?></h4>
        <?php if (!empty($departamento->sistemasbriefings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Dataregistro') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Objetivo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Classificacao Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departamento->sistemasbriefings as $sistemasbriefings): ?>
            <tr>
                <td><?= h($sistemasbriefings->id) ?></td>
                <td><?= h($sistemasbriefings->sistema_id) ?></td>
                <td><?= h($sistemasbriefings->dataregistro) ?></td>
                <td><?= h($sistemasbriefings->departamento_id) ?></td>
                <td><?= h($sistemasbriefings->objetivo) ?></td>
                <td><?= h($sistemasbriefings->created) ?></td>
                <td><?= h($sistemasbriefings->modified) ?></td>
                <td><?= h($sistemasbriefings->classificacao_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasbriefings', 'action' => 'view', $sistemasbriefings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasbriefings', 'action' => 'edit', $sistemasbriefings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasbriefings', 'action' => 'delete', $sistemasbriefings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasbriefings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">        
        <?php if (!empty($departamento->participantes)): ?>
        <h4><?= __('Membros/Participantes') ?></h4>
        <table class="table table-striped table-responsive"> 
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Email') ?></th>                
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departamento->participantes as $obj): ?>
            <tr>
                <td><?= h($obj->id) ?></td>
                <td><?= h($obj->nome) ?></td>
                <td><?= h($obj->email) ?></td>                
                <td><?= h($obj->created) ?></td>
                <td><?= h($obj->modified) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Participantes', 'action' => 'view', $obj->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Participantes', 'action' => 'edit', $obj->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Participantes', 'action' => 'delete', $obj->id], ['confirm' => __('Are you sure you want to delete # {0}?', $obj->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

    <div class="related">        
        <?php if (!empty($departamento->projetosprodutosentregas)): ?>
        <h4><?= __('Entregas') ?></h4>
        <table class="table table-striped table-responsive"> 
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Canal') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>   
                <th scope="col"><?= __('Comentario') ?></th>   
                <th scope="col"><?= __('Atendidopor') ?></th>   
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departamento->projetosprodutosentregas as $obj): ?>
            <tr>
                <td><?= h($obj->id) ?></td>
                <td><?= h($obj->canal) ?></td>
                <td><?= h($obj->referencia) ?></td>                
                <td><?= h($obj->descricao) ?></td>  
                <td><?= h($obj->comentario) ?></td>
                <td><?= h($obj->atendidopor) ?></td>
                <td><?= h($obj->created) ?></td>
                <td><?= h($obj->modified) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $obj->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregas', 'action' => 'edit', $obj->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregas', 'action' => 'delete', $obj->id], ['confirm' => __('Are you sure you want to delete # {0}?', $obj->id)]) ?>
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