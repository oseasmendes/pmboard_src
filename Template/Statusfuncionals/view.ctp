<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statusfuncional $statusfuncional
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Statusfuncional'), ['action' => 'edit', $statusfuncional->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Statusfuncional'), ['action' => 'delete', $statusfuncional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusfuncional->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosalocsprofiles'), ['controller' => 'Projetosalocsprofiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosalocsprofile'), ['controller' => 'Projetosalocsprofiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosapontamentos'), ['controller' => 'Projetosapontamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosapontamento'), ['controller' => 'Projetosapontamentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosfinances'), ['controller' => 'Projetosprodutosfinances', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosfinance'), ['controller' => 'Projetosprodutosfinances', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosruns'), ['controller' => 'Projetosprodutosruns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosrun'), ['controller' => 'Projetosprodutosruns', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="statusfuncionals view large-9 medium-8 columns content">
    <h3><?= h($statusfuncional->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($statusfuncional->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($statusfuncional->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($statusfuncional->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($statusfuncional->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Fivewthreehs') ?></h4>
        <?php if (!empty($statusfuncional->fivewthreehs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Programa Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Participante Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Wwho') ?></th>
                <th scope="col"><?= __('Wwhen') ?></th>
                <th scope="col"><?= __('Wwhat') ?></th>
                <th scope="col"><?= __('Wwhere') ?></th>
                <th scope="col"><?= __('Wwhy') ?></th>
                <th scope="col"><?= __('Hhow') ?></th>
                <th scope="col"><?= __('Hhowmany') ?></th>
                <th scope="col"><?= __('Hhowmuch') ?></th>
                <th scope="col"><?= __('Hhowlong') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Fivewthreehpredecessor') ?></th>
                <th scope="col"><?= __('Acao') ?></th>
                <th scope="col"><?= __('Resolvido') ?></th>
                <th scope="col"><?= __('Ata Id') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($statusfuncional->fivewthreehs as $fivewthreehs): ?>
            <tr>
                <td><?= h($fivewthreehs->id) ?></td>
                <td><?= h($fivewthreehs->programa_id) ?></td>
                <td><?= h($fivewthreehs->projeto_id) ?></td>
                <td><?= h($fivewthreehs->projetosproduto_id) ?></td>
                <td><?= h($fivewthreehs->participante_id) ?></td>
                <td><?= h($fivewthreehs->description) ?></td>
                <td><?= h($fivewthreehs->wwho) ?></td>
                <td><?= h($fivewthreehs->wwhen) ?></td>
                <td><?= h($fivewthreehs->wwhat) ?></td>
                <td><?= h($fivewthreehs->wwhere) ?></td>
                <td><?= h($fivewthreehs->wwhy) ?></td>
                <td><?= h($fivewthreehs->hhow) ?></td>
                <td><?= h($fivewthreehs->hhowmany) ?></td>
                <td><?= h($fivewthreehs->hhowmuch) ?></td>
                <td><?= h($fivewthreehs->hhowlong) ?></td>
                <td><?= h($fivewthreehs->created) ?></td>
                <td><?= h($fivewthreehs->modified) ?></td>
                <td><?= h($fivewthreehs->statusfuncional_id) ?></td>
                <td><?= h($fivewthreehs->consultore_id) ?></td>
                <td><?= h($fivewthreehs->fivewthreehpredecessor) ?></td>
                <td><?= h($fivewthreehs->acao) ?></td>
                <td><?= h($fivewthreehs->resolvido) ?></td>
                <td><?= h($fivewthreehs->ata_id) ?></td>
                <td><?= h($fivewthreehs->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fivewthreehs', 'action' => 'view', $fivewthreehs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fivewthreehs', 'action' => 'edit', $fivewthreehs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fivewthreehs', 'action' => 'delete', $fivewthreehs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fivewthreehs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetos') ?></h4>
        <?php if (!empty($statusfuncional->projetos)): ?>
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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($statusfuncional->projetos as $projetos): ?>
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
        <h4><?= __('Related Projetosalocs') ?></h4>
        <?php if (!empty($statusfuncional->projetosalocs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Dataalocacao') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Percentual') ?></th>
                <th scope="col"><?= __('Tipoaloc Id') ?></th>
                <th scope="col"><?= __('Desalocacaoprevista') ?></th>
                <th scope="col"><?= __('Desalocacaorealizada') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($statusfuncional->projetosalocs as $projetosalocs): ?>
            <tr>
                <td><?= h($projetosalocs->id) ?></td>
                <td><?= h($projetosalocs->projeto_id) ?></td>
                <td><?= h($projetosalocs->consultore_id) ?></td>
                <td><?= h($projetosalocs->created) ?></td>
                <td><?= h($projetosalocs->modified) ?></td>
                <td><?= h($projetosalocs->dataalocacao) ?></td>
                <td><?= h($projetosalocs->statusfuncional_id) ?></td>
                <td><?= h($projetosalocs->descricao) ?></td>
                <td><?= h($projetosalocs->percentual) ?></td>
                <td><?= h($projetosalocs->tipoaloc_id) ?></td>
                <td><?= h($projetosalocs->desalocacaoprevista) ?></td>
                <td><?= h($projetosalocs->desalocacaorealizada) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosalocs', 'action' => 'view', $projetosalocs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosalocs', 'action' => 'edit', $projetosalocs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosalocs', 'action' => 'delete', $projetosalocs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosalocs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosalocsprofiles') ?></h4>
        <?php if (!empty($statusfuncional->projetosalocsprofiles)): ?>
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
                <th scope="col"><?= __('Horasdia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($statusfuncional->projetosalocsprofiles as $projetosalocsprofiles): ?>
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
                <td><?= h($projetosalocsprofiles->horasdia) ?></td>
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
    <div class="related">
        <h4><?= __('Related Projetosapontamentos') ?></h4>
        <?php if (!empty($statusfuncional->projetosapontamentos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Horainicio') ?></th>
                <th scope="col"><?= __('Horafim') ?></th>
                <th scope="col"><?= __('Temporealizado') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Canal') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($statusfuncional->projetosapontamentos as $projetosapontamentos): ?>
            <tr>
                <td><?= h($projetosapontamentos->id) ?></td>
                <td><?= h($projetosapontamentos->consultore_id) ?></td>
                <td><?= h($projetosapontamentos->projetosprodutosentrega_id) ?></td>
                <td><?= h($projetosapontamentos->data) ?></td>
                <td><?= h($projetosapontamentos->horainicio) ?></td>
                <td><?= h($projetosapontamentos->horafim) ?></td>
                <td><?= h($projetosapontamentos->temporealizado) ?></td>
                <td><?= h($projetosapontamentos->statusfuncional_id) ?></td>
                <td><?= h($projetosapontamentos->descricao) ?></td>
                <td><?= h($projetosapontamentos->historico) ?></td>
                <td><?= h($projetosapontamentos->canal) ?></td>
                <td><?= h($projetosapontamentos->created) ?></td>
                <td><?= h($projetosapontamentos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosapontamentos', 'action' => 'view', $projetosapontamentos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosapontamentos', 'action' => 'edit', $projetosapontamentos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosapontamentos', 'action' => 'delete', $projetosapontamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosapontamentos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosprodutos') ?></h4>
        <?php if (!empty($statusfuncional->projetosprodutos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Produto') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Codenome') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Prioridade') ?></th>
                <th scope="col"><?= __('Dataprevista') ?></th>
                <th scope="col"><?= __('Datarealizada') ?></th>
                <th scope="col"><?= __('Frente Id') ?></th>
                <th scope="col"><?= __('Facilitador Id') ?></th>
                <th scope="col"><?= __('Dataprevistainicio') ?></th>
                <th scope="col"><?= __('Datarealinicio') ?></th>
                <th scope="col"><?= __('Gerenteprojetocliente Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($statusfuncional->projetosprodutos as $projetosprodutos): ?>
            <tr>
                <td><?= h($projetosprodutos->id) ?></td>
                <td><?= h($projetosprodutos->produto) ?></td>
                <td><?= h($projetosprodutos->projeto_id) ?></td>
                <td><?= h($projetosprodutos->created) ?></td>
                <td><?= h($projetosprodutos->modified) ?></td>
                <td><?= h($projetosprodutos->codenome) ?></td>
                <td><?= h($projetosprodutos->referencia) ?></td>
                <td><?= h($projetosprodutos->statusfuncional_id) ?></td>
                <td><?= h($projetosprodutos->descricao) ?></td>
                <td><?= h($projetosprodutos->prioridade) ?></td>
                <td><?= h($projetosprodutos->dataprevista) ?></td>
                <td><?= h($projetosprodutos->datarealizada) ?></td>
                <td><?= h($projetosprodutos->frente_id) ?></td>
                <td><?= h($projetosprodutos->facilitador_id) ?></td>
                <td><?= h($projetosprodutos->dataprevistainicio) ?></td>
                <td><?= h($projetosprodutos->datarealinicio) ?></td>
                <td><?= h($projetosprodutos->gerenteprojetocliente_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutos', 'action' => 'edit', $projetosprodutos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutos', 'action' => 'delete', $projetosprodutos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosprodutosentregas') ?></h4>
        <?php if (!empty($statusfuncional->projetosprodutosentregas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Pareto Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Tmpprevisto') ?></th>
                <th scope="col"><?= __('Unidademedida Id') ?></th>
                <th scope="col"><?= __('Dataprevista') ?></th>
                <th scope="col"><?= __('Datarealizada') ?></th>
                <th scope="col"><?= __('Prioridade') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Justificativa') ?></th>
                <th scope="col"><?= __('Responsavel') ?></th>
                <th scope="col"><?= __('Ordenacao') ?></th>
                <th scope="col"><?= __('Planolinha') ?></th>
                <th scope="col"><?= __('Fase Id') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col"><?= __('Ambiente Id') ?></th>
                <th scope="col"><?= __('Ordem') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($statusfuncional->projetosprodutosentregas as $projetosprodutosentregas): ?>
            <tr>
                <td><?= h($projetosprodutosentregas->id) ?></td>
                <td><?= h($projetosprodutosentregas->referencia) ?></td>
                <td><?= h($projetosprodutosentregas->descricao) ?></td>
                <td><?= h($projetosprodutosentregas->projetosproduto_id) ?></td>
                <td><?= h($projetosprodutosentregas->sistema_id) ?></td>
                <td><?= h($projetosprodutosentregas->statusfuncional_id) ?></td>
                <td><?= h($projetosprodutosentregas->pareto_id) ?></td>
                <td><?= h($projetosprodutosentregas->created) ?></td>
                <td><?= h($projetosprodutosentregas->modified) ?></td>
                <td><?= h($projetosprodutosentregas->tmpprevisto) ?></td>
                <td><?= h($projetosprodutosentregas->unidademedida_id) ?></td>
                <td><?= h($projetosprodutosentregas->dataprevista) ?></td>
                <td><?= h($projetosprodutosentregas->datarealizada) ?></td>
                <td><?= h($projetosprodutosentregas->prioridade) ?></td>
                <td><?= h($projetosprodutosentregas->historico) ?></td>
                <td><?= h($projetosprodutosentregas->justificativa) ?></td>
                <td><?= h($projetosprodutosentregas->responsavel) ?></td>
                <td><?= h($projetosprodutosentregas->ordenacao) ?></td>
                <td><?= h($projetosprodutosentregas->planolinha) ?></td>
                <td><?= h($projetosprodutosentregas->fase_id) ?></td>
                <td><?= h($projetosprodutosentregas->empresa_id) ?></td>
                <td><?= h($projetosprodutosentregas->ambiente_id) ?></td>
                <td><?= h($projetosprodutosentregas->ordem) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosentregas', 'action' => 'edit', $projetosprodutosentregas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosentregas', 'action' => 'delete', $projetosprodutosentregas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosprodutosfinances') ?></h4>
        <?php if (!empty($statusfuncional->projetosprodutosfinances)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Referenciaproposta') ?></th>
                <th scope="col"><?= __('Datapropostaelaborada') ?></th>
                <th scope="col"><?= __('Datapropostapublicada') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Totalhoras') ?></th>
                <th scope="col"><?= __('Valortotal') ?></th>
                <th scope="col"><?= __('Validadeproposta') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($statusfuncional->projetosprodutosfinances as $projetosprodutosfinances): ?>
            <tr>
                <td><?= h($projetosprodutosfinances->id) ?></td>
                <td><?= h($projetosprodutosfinances->referenciaproposta) ?></td>
                <td><?= h($projetosprodutosfinances->datapropostaelaborada) ?></td>
                <td><?= h($projetosprodutosfinances->datapropostapublicada) ?></td>
                <td><?= h($projetosprodutosfinances->projetosproduto_id) ?></td>
                <td><?= h($projetosprodutosfinances->totalhoras) ?></td>
                <td><?= h($projetosprodutosfinances->valortotal) ?></td>
                <td><?= h($projetosprodutosfinances->validadeproposta) ?></td>
                <td><?= h($projetosprodutosfinances->statusfuncional_id) ?></td>
                <td><?= h($projetosprodutosfinances->created) ?></td>
                <td><?= h($projetosprodutosfinances->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosfinances', 'action' => 'view', $projetosprodutosfinances->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosfinances', 'action' => 'edit', $projetosprodutosfinances->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosfinances', 'action' => 'delete', $projetosprodutosfinances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosfinances->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosprodutosruns') ?></h4>
        <?php if (!empty($statusfuncional->projetosprodutosruns)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Partnumber') ?></th>
                <th scope="col"><?= __('Codigo') ?></th>
                <th scope="col"><?= __('Datainicioprevisto') ?></th>
                <th scope="col"><?= __('Datafimprevisto') ?></th>
                <th scope="col"><?= __('Tempototalprevisto') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Resultado') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Responsavel') ?></th>
                <th scope="col"><?= __('Datainicioexecucao') ?></th>
                <th scope="col"><?= __('Datafimexecucao') ?></th>
                <th scope="col"><?= __('Tempototalexecucao') ?></th>
                <th scope="col"><?= __('Processo Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($statusfuncional->projetosprodutosruns as $projetosprodutosruns): ?>
            <tr>
                <td><?= h($projetosprodutosruns->id) ?></td>
                <td><?= h($projetosprodutosruns->projetosproduto_id) ?></td>
                <td><?= h($projetosprodutosruns->descricao) ?></td>
                <td><?= h($projetosprodutosruns->partnumber) ?></td>
                <td><?= h($projetosprodutosruns->codigo) ?></td>
                <td><?= h($projetosprodutosruns->datainicioprevisto) ?></td>
                <td><?= h($projetosprodutosruns->datafimprevisto) ?></td>
                <td><?= h($projetosprodutosruns->tempototalprevisto) ?></td>
                <td><?= h($projetosprodutosruns->statusfuncional_id) ?></td>
                <td><?= h($projetosprodutosruns->resultado) ?></td>
                <td><?= h($projetosprodutosruns->observacao) ?></td>
                <td><?= h($projetosprodutosruns->responsavel) ?></td>
                <td><?= h($projetosprodutosruns->datainicioexecucao) ?></td>
                <td><?= h($projetosprodutosruns->datafimexecucao) ?></td>
                <td><?= h($projetosprodutosruns->tempototalexecucao) ?></td>
                <td><?= h($projetosprodutosruns->processo_id) ?></td>
                <td><?= h($projetosprodutosruns->created) ?></td>
                <td><?= h($projetosprodutosruns->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosruns', 'action' => 'view', $projetosprodutosruns->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosruns', 'action' => 'edit', $projetosprodutosruns->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosruns', 'action' => 'delete', $projetosprodutosruns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosruns->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosstatus') ?></h4>
        <?php if (!empty($statusfuncional->projetosstatus)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Motivo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Responsabilidade Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($statusfuncional->projetosstatus as $projetosstatus): ?>
            <tr>
                <td><?= h($projetosstatus->id) ?></td>
                <td><?= h($projetosstatus->projeto_id) ?></td>
                <td><?= h($projetosstatus->statusfuncional_id) ?></td>
                <td><?= h($projetosstatus->motivo_id) ?></td>
                <td><?= h($projetosstatus->descricao) ?></td>
                <td><?= h($projetosstatus->historico) ?></td>
                <td><?= h($projetosstatus->created) ?></td>
                <td><?= h($projetosstatus->modified) ?></td>
                <td><?= h($projetosstatus->responsabilidade_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosstatus', 'action' => 'view', $projetosstatus->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosstatus', 'action' => 'edit', $projetosstatus->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosstatus', 'action' => 'delete', $projetosstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosstatus->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sistemas') ?></h4>
        <?php if (!empty($statusfuncional->sistemas)): ?>
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
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($statusfuncional->sistemas as $sistemas): ?>
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
                <td><?= h($sistemas->statusfuncional_id) ?></td>
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
