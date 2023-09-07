<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proposta $proposta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proposta'), ['action' => 'edit', $proposta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proposta'), ['action' => 'delete', $proposta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proposta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Propostas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proposta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Propostasalocs'), ['controller' => 'Propostasalocs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Propostasaloc'), ['controller' => 'Propostasalocs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="propostas view large-9 medium-8 columns content">
                <div class="row" >
                    <div class="col-3"> 
                        <?= $this->Form->create($proposta, ['url'=>['controller' => 'Propostasalocs', 'action' => 'addid'],'']) ?>   
                            <?= $this->Form->control('propalocacao',['default'=> $this->Number->format($proposta->id),'type' => 'hidden']); ?>                                  
                             <?= $this->Form->button('Alocar Recursos',['class'=>'btn btn-primary btn-sm btn-block']) ?>
                        <?= $this->Form->end() ?> 
                    </div>
                </div>
    <h3><?= h($proposta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Numerointernoproposta') ?></th>
            <td><?= h($proposta->numerointernoproposta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($proposta->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $proposta->has('empresa') ? $this->Html->link($proposta->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $proposta->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numeropo') ?></th>
            <td><?= h($proposta->numeropo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referenciacliente') ?></th>
            <td><?= h($proposta->referenciacliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $proposta->has('statusfuncional') ? $this->Html->link($proposta->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $proposta->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proposta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valortotal') ?></th>
            <td><?= $this->Number->format($proposta->valortotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horastotal') ?></th>
            <td><?= $this->Number->format($proposta->horastotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Centrocusto Id') ?></th>
            <td><?= $this->Number->format($proposta->centrocusto_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($proposta->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datademanda') ?></th>
            <td><?= h($proposta->datademanda) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($proposta->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($proposta->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetos') ?></h4>
        <?php if (!empty($proposta->projetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Programa Id') ?></th>
                <th scope="col"><?= __('Realizadodatainicio') ?></th>
                <th scope="col"><?= __('Realizadodatafim') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Administrativo') ?></th>
                <th scope="col"><?= __('Prioridade') ?></th>
                <th scope="col"><?= __('Fase Id') ?></th>
                <th scope="col"><?= __('Codenome') ?></th>
                <th scope="col"><?= __('Propostatecnica') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Previstodatainicio') ?></th>
                <th scope="col"><?= __('Previstodatafim') ?></th>
                <th scope="col"><?= __('Datacancelamento') ?></th>
                <th scope="col"><?= __('Datasuspensao') ?></th>
                <th scope="col"><?= __('Arquivo') ?></th>
                <th scope="col"><?= __('Dataaprovacao') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Proposta Id') ?></th>
                <th scope="col"><?= __('Urlreferenciacliente') ?></th>
                <th scope="col"><?= __('Urlreferenciainterno') ?></th>
                <th scope="col"><?= __('Horainicial') ?></th>
                <th scope="col"><?= __('Horafim') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proposta->projetos as $projetos): ?>
            <tr>
                <td><?= h($projetos->id) ?></td>
                <td><?= h($projetos->descricao) ?></td>
                <td><?= h($projetos->programa_id) ?></td>
                <td><?= h($projetos->realizadodatainicio) ?></td>
                <td><?= h($projetos->realizadodatafim) ?></td>
                <td><?= h($projetos->statusfuncional_id) ?></td>
                <td><?= h($projetos->administrativo) ?></td>
                <td><?= h($projetos->prioridade) ?></td>
                <td><?= h($projetos->fase_id) ?></td>
                <td><?= h($projetos->codenome) ?></td>
                <td><?= h($projetos->propostatecnica) ?></td>
                <td><?= h($projetos->created) ?></td>
                <td><?= h($projetos->modified) ?></td>
                <td><?= h($projetos->previstodatainicio) ?></td>
                <td><?= h($projetos->previstodatafim) ?></td>
                <td><?= h($projetos->datacancelamento) ?></td>
                <td><?= h($projetos->datasuspensao) ?></td>
                <td><?= h($projetos->arquivo) ?></td>
                <td><?= h($projetos->dataaprovacao) ?></td>
                <td><?= h($projetos->user_id) ?></td>
                <td><?= h($projetos->nome) ?></td>
                <td><?= h($projetos->proposta_id) ?></td>
                <td><?= h($projetos->urlreferenciacliente) ?></td>
                <td><?= h($projetos->urlreferenciainterno) ?></td>
                <td><?= h($projetos->horainicial) ?></td>
                <td><?= h($projetos->horafim) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetos', 'action' => 'view', $projetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetos', 'action' => 'edit', $projetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetos', 'action' => 'delete', $projetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Propostasalocs') ?></h4>
        <?php if (!empty($proposta->propostasalocs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proposta Id') ?></th>
                <th scope="col"><?= __('Competencia Id') ?></th>
                <th scope="col"><?= __('Grade') ?></th>
                <th scope="col"><?= __('Totalhoras') ?></th>
                <th scope="col"><?= __('Dataprevistainicio') ?></th>
                <th scope="col"><?= __('Dataprevistafim') ?></th>
                <th scope="col"><?= __('Hrinicio') ?></th>
                <th scope="col"><?= __('Hrfim') ?></th>
                <th scope="col"><?= __('Jornadatrabalho') ?></th>
                <th scope="col"><?= __('Tempototalintervalos') ?></th>
                <th scope="col"><?= __('Aprovadohoraextra') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Considerarsabadototal') ?></th>
                <th scope="col"><?= __('Considerardomingo') ?></th>
                <th scope="col"><?= __('Considerarferiado') ?></th>
                <th scope="col"><?= __('Considerarsabadoparcial') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proposta->propostasalocs as $propostasalocs): ?>
            <tr>
                <td><?= h($propostasalocs->id) ?></td>
                <td><?= h($propostasalocs->proposta_id) ?></td>
                <td><?= h($propostasalocs->competencia_id) ?></td>
                <td><?= h($propostasalocs->grade) ?></td>
                <td><?= h($propostasalocs->totalhoras) ?></td>
                <td><?= h($propostasalocs->dataprevistainicio) ?></td>
                <td><?= h($propostasalocs->dataprevistafim) ?></td>
                <td><?= h($propostasalocs->hrinicio) ?></td>
                <td><?= h($propostasalocs->hrfim) ?></td>
                <td><?= h($propostasalocs->jornadatrabalho) ?></td>
                <td><?= h($propostasalocs->tempototalintervalos) ?></td>
                <td><?= h($propostasalocs->aprovadohoraextra) ?></td>
                <td><?= h($propostasalocs->created) ?></td>
                <td><?= h($propostasalocs->modified) ?></td>
                <td><?= h($propostasalocs->considerarsabadototal) ?></td>
                <td><?= h($propostasalocs->considerardomingo) ?></td>
                <td><?= h($propostasalocs->considerarferiado) ?></td>
                <td><?= h($propostasalocs->considerarsabadoparcial) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Propostasalocs', 'action' => 'view', $propostasalocs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Propostasalocs', 'action' => 'edit', $propostasalocs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Propostasalocs', 'action' => 'delete', $propostasalocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propostasalocs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
