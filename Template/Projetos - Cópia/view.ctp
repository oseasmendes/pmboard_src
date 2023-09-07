<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto $projeto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Projeto'), ['action' => 'edit', $projeto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Projeto'), ['action' => 'delete', $projeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agendaanual'), ['controller' => 'Agendaanual', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosparetos'), ['controller' => 'Projetosparetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetospareto'), ['controller' => 'Projetosparetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosstatus'), ['controller' => 'Projetosstatus', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projetos view large-9 medium-8 columns content">
    <h3><?= h($projeto->id) ?></h3>
     <?= $this->Form->create($projeto, ['url'=>['controller' => 'Projetosprodutos', 'action' => 'add'],'']) ?>
    
        <!-- <?= $idTicket = $this->Number->format($ticket->id); ?> -->
        <!-- <?= $this->Form->control('keyword',['default'=> $this->request->getParam('keyword')]); ?> -->
        <?= $this->Form->control('keyword',['default'=> $this->Number->format($projeto->id),'type' => 'hidden']); ?>
        <button>Inserir Produto</button>        
    <?= $this->Form->end() ?>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projeto->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Programa') ?></th>
            <td><?= $projeto->has('programa') ? $this->Html->link($projeto->programa->descricao, ['controller' => 'Programas', 'action' => 'view', $projeto->programa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusfuncional') ?></th>
            <td><?= $projeto->has('statusfuncional') ? $this->Html->link($projeto->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projeto->statusfuncional->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fase') ?></th>
            <td><?= $projeto->has('fase') ? $this->Html->link($projeto->fase->descricao, ['controller' => 'Fases', 'action' => 'view', $projeto->fase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codenome') ?></th>
            <td><?= h($projeto->codenome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projeto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prioridade') ?></th>
            <td><?= $this->Number->format($projeto->prioridade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datainicio') ?></th>
            <td><?= h($projeto->datainicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datafim') ?></th>
            <td><?= h($projeto->datafim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Administrativo') ?></th>
            <td><?= $projeto->administrativo ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Propostatecnica') ?></th>
            <td><?= $projeto->propostatecnica ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Agendaanual') ?></h4>
        <?php if (!empty($projeto->agendaanual)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Atividadetipo Id') ?></th>
                <th scope="col"><?= __('Departamento Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
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
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->agendaanual as $agendaanual): ?>
            <tr>
                <td><?= h($agendaanual->id) ?></td>
                <td><?= h($agendaanual->atividadetipo_id) ?></td>
                <td><?= h($agendaanual->departamento_id) ?></td>
                <td><?= h($agendaanual->projeto_id) ?></td>
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
                <td><?= h($agendaanual->projetosproduto_id) ?></td>
                <td><?= h($agendaanual->projetosprodutosentrega_id) ?></td>
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
        <h4><?= __('Related Projetosalocs') ?></h4>
        <?php if (!empty($projeto->projetosalocs)): ?>
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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->projetosalocs as $projetosalocs): ?>
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
        <h4><?= __('Related Projetosparetos') ?></h4>
        <?php if (!empty($projeto->projetosparetos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Pareto Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Historico') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->projetosparetos as $projetosparetos): ?>
            <tr>
                <td><?= h($projetosparetos->id) ?></td>
                <td><?= h($projetosparetos->projeto_id) ?></td>
                <td><?= h($projetosparetos->pareto_id) ?></td>
                <td><?= h($projetosparetos->descricao) ?></td>
                <td><?= h($projetosparetos->historico) ?></td>
                <td><?= h($projetosparetos->created) ?></td>
                <td><?= h($projetosparetos->modified) ?></td>
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
        <h4><?= __('Related Projetosprodutos') ?></h4>
        <?php if (!empty($projeto->projetosprodutos)): ?>
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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($projeto->projetosprodutos as $projetosprodutos): ?>
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
        <h4><?= __('Related Projetosstatus') ?></h4>
        <?php if (!empty($projeto->projetosstatus)): ?>
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
            <?php foreach ($projeto->projetosstatus as $projetosstatus): ?>
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
</div>
