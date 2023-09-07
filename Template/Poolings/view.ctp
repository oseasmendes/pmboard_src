<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pooling $pooling
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pooling'), ['action' => 'edit', $pooling->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pooling'), ['action' => 'delete', $pooling->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pooling->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Poolings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pooling'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Poolingsmembers'), ['controller' => 'Poolingsmembers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poolingsmember'), ['controller' => 'Poolingsmembers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="poolings view large-9 medium-8 columns content">
    <h3><?= h($pooling->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($pooling->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pooling->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pooling->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pooling->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Poolingsmembers') ?></h4>
        <?php if (!empty($pooling->poolingsmembers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Pooling Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pooling->poolingsmembers as $poolingsmembers): ?>
            <tr>
                <td><?= h($poolingsmembers->id) ?></td>
                <td><?= h($poolingsmembers->consultore_id) ?></td>
                <td><?= h($poolingsmembers->pooling_id) ?></td>
                <td><?= h($poolingsmembers->descricao) ?></td>
                <td><?= h($poolingsmembers->created) ?></td>
                <td><?= h($poolingsmembers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Poolingsmembers', 'action' => 'view', $poolingsmembers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Poolingsmembers', 'action' => 'edit', $poolingsmembers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Poolingsmembers', 'action' => 'delete', $poolingsmembers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poolingsmembers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosprodutosentregas') ?></h4>
        <?php if (!empty($pooling->projetosprodutosentregas)): ?>
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
                <th scope="col"><?= __('Servidor') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Prevdatainicio') ?></th>
                <th scope="col"><?= __('Prevdatafim') ?></th>
                <th scope="col"><?= __('Site') ?></th>
                <th scope="col"><?= __('Faseprevista') ?></th>
                <th scope="col"><?= __('Predecessora') ?></th>
                <th scope="col"><?= __('Administrativa') ?></th>
                <th scope="col"><?= __('Escoporemocaodata') ?></th>
                <th scope="col"><?= __('Escoporemocao') ?></th>
                <th scope="col"><?= __('Escoporemocaodescricao') ?></th>
                <th scope="col"><?= __('Sprintprevista Id') ?></th>
                <th scope="col"><?= __('Sprintoriginal') ?></th>
                <th scope="col"><?= __('Sprintentrega') ?></th>
                <th scope="col"><?= __('Atendidopor') ?></th>
                <th scope="col"><?= __('Sistemasmodulo Id') ?></th>
                <th scope="col"><?= __('Sprintrealizada Id') ?></th>
                <th scope="col"><?= __('Entregastipo Id') ?></th>
                <th scope="col"><?= __('Labels') ?></th>
                <th scope="col"><?= __('Storypoints') ?></th>
                <th scope="col"><?= __('Referenciaid') ?></th>
                <th scope="col"><?= __('Imagensanexadas') ?></th>
                <th scope="col"><?= __('Datacriacaooriginal') ?></th>
                <th scope="col"><?= __('Datatultimaalteracao') ?></th>
                <th scope="col"><?= __('Subtasks') ?></th>
                <th scope="col"><?= __('Canal') ?></th>
                <th scope="col"><?= __('Taskprincipal') ?></th>
                <th scope="col"><?= __('Storypointsreview') ?></th>
                <th scope="col"><?= __('Sprintanterior') ?></th>
                <th scope="col"><?= __('Archivestatus') ?></th>
                <th scope="col"><?= __('Archivedate') ?></th>
                <th scope="col"><?= __('Archivereason') ?></th>
                <th scope="col"><?= __('Storypointsbug') ?></th>
                <th scope="col"><?= __('Frente Id') ?></th>
                <th scope="col"><?= __('Taskmain') ?></th>
                <th scope="col"><?= __('Tasksub') ?></th>
                <th scope="col"><?= __('Who') ?></th>
                <th scope="col"><?= __('Comentario') ?></th>
                <th scope="col"><?= __('Ultimostatus') ?></th>
                <th scope="col"><?= __('Selecionada') ?></th>
                <th scope="col"><?= __('Kronusplan Id') ?></th>
                <th scope="col"><?= __('Businessunit') ?></th>
                <th scope="col"><?= __('Complexidade') ?></th>
                <th scope="col"><?= __('Cenario') ?></th>
                <th scope="col"><?= __('Gestorrequisitante') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Dataatribuicao') ?></th>
                <th scope="col"><?= __('Kpi') ?></th>
                <th scope="col"><?= __('Alteradopor') ?></th>
                <th scope="col"><?= __('Empresasunidade Id') ?></th>
                <th scope="col"><?= __('Requisitante Id') ?></th>
                <th scope="col"><?= __('Beneficios') ?></th>
                <th scope="col"><?= __('Developer Id') ?></th>
                <th scope="col"><?= __('Checkin') ?></th>
                <th scope="col"><?= __('Checkindata') ?></th>
                <th scope="col"><?= __('Pooling Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pooling->projetosprodutosentregas as $projetosprodutosentregas): ?>
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
                <td><?= h($projetosprodutosentregas->servidor) ?></td>
                <td><?= h($projetosprodutosentregas->departamento_id) ?></td>
                <td><?= h($projetosprodutosentregas->prevdatainicio) ?></td>
                <td><?= h($projetosprodutosentregas->prevdatafim) ?></td>
                <td><?= h($projetosprodutosentregas->site) ?></td>
                <td><?= h($projetosprodutosentregas->faseprevista) ?></td>
                <td><?= h($projetosprodutosentregas->predecessora) ?></td>
                <td><?= h($projetosprodutosentregas->administrativa) ?></td>
                <td><?= h($projetosprodutosentregas->escoporemocaodata) ?></td>
                <td><?= h($projetosprodutosentregas->escoporemocao) ?></td>
                <td><?= h($projetosprodutosentregas->escoporemocaodescricao) ?></td>
                <td><?= h($projetosprodutosentregas->sprintprevista_id) ?></td>
                <td><?= h($projetosprodutosentregas->sprintoriginal) ?></td>
                <td><?= h($projetosprodutosentregas->sprintentrega) ?></td>
                <td><?= h($projetosprodutosentregas->atendidopor) ?></td>
                <td><?= h($projetosprodutosentregas->sistemasmodulo_id) ?></td>
                <td><?= h($projetosprodutosentregas->sprintrealizada_id) ?></td>
                <td><?= h($projetosprodutosentregas->entregastipo_id) ?></td>
                <td><?= h($projetosprodutosentregas->labels) ?></td>
                <td><?= h($projetosprodutosentregas->storypoints) ?></td>
                <td><?= h($projetosprodutosentregas->referenciaid) ?></td>
                <td><?= h($projetosprodutosentregas->imagensanexadas) ?></td>
                <td><?= h($projetosprodutosentregas->datacriacaooriginal) ?></td>
                <td><?= h($projetosprodutosentregas->datatultimaalteracao) ?></td>
                <td><?= h($projetosprodutosentregas->subtasks) ?></td>
                <td><?= h($projetosprodutosentregas->canal) ?></td>
                <td><?= h($projetosprodutosentregas->taskprincipal) ?></td>
                <td><?= h($projetosprodutosentregas->storypointsreview) ?></td>
                <td><?= h($projetosprodutosentregas->sprintanterior) ?></td>
                <td><?= h($projetosprodutosentregas->archivestatus) ?></td>
                <td><?= h($projetosprodutosentregas->archivedate) ?></td>
                <td><?= h($projetosprodutosentregas->archivereason) ?></td>
                <td><?= h($projetosprodutosentregas->storypointsbug) ?></td>
                <td><?= h($projetosprodutosentregas->frente_id) ?></td>
                <td><?= h($projetosprodutosentregas->taskmain) ?></td>
                <td><?= h($projetosprodutosentregas->tasksub) ?></td>
                <td><?= h($projetosprodutosentregas->who) ?></td>
                <td><?= h($projetosprodutosentregas->comentario) ?></td>
                <td><?= h($projetosprodutosentregas->ultimostatus) ?></td>
                <td><?= h($projetosprodutosentregas->selecionada) ?></td>
                <td><?= h($projetosprodutosentregas->kronusplan_id) ?></td>
                <td><?= h($projetosprodutosentregas->businessunit) ?></td>
                <td><?= h($projetosprodutosentregas->complexidade) ?></td>
                <td><?= h($projetosprodutosentregas->cenario) ?></td>
                <td><?= h($projetosprodutosentregas->gestorrequisitante) ?></td>
                <td><?= h($projetosprodutosentregas->consultore_id) ?></td>
                <td><?= h($projetosprodutosentregas->dataatribuicao) ?></td>
                <td><?= h($projetosprodutosentregas->kpi) ?></td>
                <td><?= h($projetosprodutosentregas->alteradopor) ?></td>
                <td><?= h($projetosprodutosentregas->empresasunidade_id) ?></td>
                <td><?= h($projetosprodutosentregas->requisitante_id) ?></td>
                <td><?= h($projetosprodutosentregas->beneficios) ?></td>
                <td><?= h($projetosprodutosentregas->developer_id) ?></td>
                <td><?= h($projetosprodutosentregas->checkin) ?></td>
                <td><?= h($projetosprodutosentregas->checkindata) ?></td>
                <td><?= h($projetosprodutosentregas->pooling_id) ?></td>
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
</div>
