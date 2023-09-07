<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pareto $pareto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pareto'), ['action' => 'edit', $pareto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pareto'), ['action' => 'delete', $pareto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pareto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paretos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pareto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paretosmestres'), ['controller' => 'Paretosmestres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paretosmestre'), ['controller' => 'Paretosmestres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosentregasparetos'), ['controller' => 'Projetosentregasparetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosentregaspareto'), ['controller' => 'Projetosentregasparetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosparetos'), ['controller' => 'Projetosparetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetospareto'), ['controller' => 'Projetosparetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosparetos'), ['controller' => 'Projetosprodutosparetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutospareto'), ['controller' => 'Projetosprodutosparetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List View Kanbanentregas'), ['controller' => 'ViewKanbanentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New View Kanbanentrega'), ['controller' => 'ViewKanbanentregas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paretos view large-9 medium-8 columns content">
    <h3><?= h($pareto->Kanban) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Kanban') ?></th>
            <td><?= h($pareto->Kanban) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidade') ?></th>
            <td><?= h($pareto->Unidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cor') ?></th>
            <td><?= h($pareto->cor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rotulo') ?></th>
            <td><?= h($pareto->rotulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Semaforo') ?></th>
            <td><?= h($pareto->semaforo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsabilidade') ?></th>
            <td><?= h($pareto->responsabilidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fechamento') ?></th>
            <td><?= h($pareto->fechamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prefechamento') ?></th>
            <td><?= h($pareto->prefechamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paretosmestre') ?></th>
            <td><?= $pareto->has('paretosmestre') ? $this->Html->link($pareto->paretosmestre->descricao, ['controller' => 'Paretosmestres', 'action' => 'view', $pareto->paretosmestre->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pareto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Workload') ?></th>
            <td><?= $this->Number->format($pareto->Workload) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prioridade') ?></th>
            <td><?= $this->Number->format($pareto->prioridade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $this->Number->format($pareto->ativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projeto Id') ?></th>
            <td><?= $this->Number->format($pareto->projeto_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pareto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pareto->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Projetosentregasparetos') ?></h4>
        <?php if (!empty($pareto->projetosentregasparetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Pareto Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Motivo Id') ?></th>
                <th scope="col"><?= __('Responsabilidade Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Projetosprodutossprint Id') ?></th>
                <th scope="col"><?= __('Entregastipo Id') ?></th>
                <th scope="col"><?= __('Dataorigem') ?></th>
                <th scope="col"><?= __('Canal') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pareto->projetosentregasparetos as $projetosentregasparetos): ?>
            <tr>
                <td><?= h($projetosentregasparetos->id) ?></td>
                <td><?= h($projetosentregasparetos->projetosprodutosentrega_id) ?></td>
                <td><?= h($projetosentregasparetos->pareto_id) ?></td>
                <td><?= h($projetosentregasparetos->descricao) ?></td>
                <td><?= h($projetosentregasparetos->historico) ?></td>
                <td><?= h($projetosentregasparetos->created) ?></td>
                <td><?= h($projetosentregasparetos->modified) ?></td>
                <td><?= h($projetosentregasparetos->motivo_id) ?></td>
                <td><?= h($projetosentregasparetos->responsabilidade_id) ?></td>
                <td><?= h($projetosentregasparetos->user_id) ?></td>
                <td><?= h($projetosentregasparetos->projetosprodutossprint_id) ?></td>
                <td><?= h($projetosentregasparetos->entregastipo_id) ?></td>
                <td><?= h($projetosentregasparetos->dataorigem) ?></td>
                <td><?= h($projetosentregasparetos->canal) ?></td>
                <td><?= h($projetosentregasparetos->statusfuncional_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosentregasparetos', 'action' => 'view', $projetosentregasparetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosentregasparetos', 'action' => 'edit', $projetosentregasparetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosentregasparetos', 'action' => 'delete', $projetosentregasparetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosentregasparetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosparetos') ?></h4>
        <?php if (!empty($pareto->projetosparetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Pareto Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pareto->projetosparetos as $projetosparetos): ?>
            <tr>
                <td><?= h($projetosparetos->id) ?></td>
                <td><?= h($projetosparetos->projeto_id) ?></td>
                <td><?= h($projetosparetos->pareto_id) ?></td>
                <td><?= h($projetosparetos->descricao) ?></td>
                <td><?= h($projetosparetos->historico) ?></td>
                <td><?= h($projetosparetos->created) ?></td>
                <td><?= h($projetosparetos->modified) ?></td>
                <td><?= h($projetosparetos->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosparetos', 'action' => 'view', $projetosparetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosparetos', 'action' => 'edit', $projetosparetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosparetos', 'action' => 'delete', $projetosparetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosparetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosprodutosentregas') ?></h4>
        <?php if (!empty($pareto->projetosprodutosentregas)): ?>
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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pareto->projetosprodutosentregas as $projetosprodutosentregas): ?>
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
        <h4><?= __('Related Projetosprodutosparetos') ?></h4>
        <?php if (!empty($pareto->projetosprodutosparetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Pareto Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pareto->projetosprodutosparetos as $projetosprodutosparetos): ?>
            <tr>
                <td><?= h($projetosprodutosparetos->id) ?></td>
                <td><?= h($projetosprodutosparetos->projetosproduto_id) ?></td>
                <td><?= h($projetosprodutosparetos->pareto_id) ?></td>
                <td><?= h($projetosprodutosparetos->descricao) ?></td>
                <td><?= h($projetosprodutosparetos->historico) ?></td>
                <td><?= h($projetosprodutosparetos->created) ?></td>
                <td><?= h($projetosprodutosparetos->modified) ?></td>
                <td><?= h($projetosprodutosparetos->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projetosprodutosparetos', 'action' => 'view', $projetosprodutosparetos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projetosprodutosparetos', 'action' => 'edit', $projetosprodutosparetos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projetosprodutosparetos', 'action' => 'delete', $projetosprodutosparetos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosparetos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related View Kanbanentregas') ?></h4>
        <?php if (!empty($pareto->view_kanbanentregas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Produto Id') ?></th>
                <th scope="col"><?= __('Produto') ?></th>
                <th scope="col"><?= __('Prioproduto') ?></th>
                <th scope="col"><?= __('Entrega Id') ?></th>
                <th scope="col"><?= __('Entrega') ?></th>
                <th scope="col"><?= __('Prioentrega') ?></th>
                <th scope="col"><?= __('Entregapareto Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Pareto Id') ?></th>
                <th scope="col"><?= __('Kanban') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Motivo') ?></th>
                <th scope="col"><?= __('Tmpprevisto') ?></th>
                <th scope="col"><?= __('Dataprevista') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pareto->view_kanbanentregas as $viewKanbanentregas): ?>
            <tr>
                <td><?= h($viewKanbanentregas->produto_id) ?></td>
                <td><?= h($viewKanbanentregas->produto) ?></td>
                <td><?= h($viewKanbanentregas->prioproduto) ?></td>
                <td><?= h($viewKanbanentregas->entrega_id) ?></td>
                <td><?= h($viewKanbanentregas->entrega) ?></td>
                <td><?= h($viewKanbanentregas->prioentrega) ?></td>
                <td><?= h($viewKanbanentregas->entregapareto_id) ?></td>
                <td><?= h($viewKanbanentregas->projetosprodutosentrega_id) ?></td>
                <td><?= h($viewKanbanentregas->pareto_id) ?></td>
                <td><?= h($viewKanbanentregas->Kanban) ?></td>
                <td><?= h($viewKanbanentregas->created) ?></td>
                <td><?= h($viewKanbanentregas->motivo) ?></td>
                <td><?= h($viewKanbanentregas->tmpprevisto) ?></td>
                <td><?= h($viewKanbanentregas->dataprevista) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ViewKanbanentregas', 'action' => 'view', $viewKanbanentregas->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ViewKanbanentregas', 'action' => 'edit', $viewKanbanentregas->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ViewKanbanentregas', 'action' => 'delete', $viewKanbanentregas->], ['confirm' => __('Are you sure you want to delete # {0}?', $viewKanbanentregas->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
