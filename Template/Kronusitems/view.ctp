<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kronusitem $kronusitem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Kronusitem'), ['action' => 'edit', $kronusitem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kronusitem'), ['action' => 'delete', $kronusitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kronusitem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Kronusitems'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kronusitem'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Kronusplans'), ['controller' => 'Kronusplans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kronusplan'), ['controller' => 'Kronusplans', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flags'), ['controller' => 'Flags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flag'), ['controller' => 'Flags', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="kronusitems view large-9 medium-8 columns content">
    <h3><?= h($kronusitem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Kronusplan') ?></th>
            <td><?= $kronusitem->has('kronusplan') ? $this->Html->link($kronusitem->kronusplan->id, ['controller' => 'Kronusplans', 'action' => 'view', $kronusitem->kronusplan->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edt') ?></th>
            <td><?= h($kronusitem->edt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Consultore') ?></th>
            <td><?= $kronusitem->has('consultore') ? $this->Html->link($kronusitem->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $kronusitem->consultore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($kronusitem->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nometarefa') ?></th>
            <td><?= h($kronusitem->nometarefa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etapa') ?></th>
            <td><?= h($kronusitem->etapa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidademedida') ?></th>
            <td><?= h($kronusitem->unidademedida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nomerecurso') ?></th>
            <td><?= h($kronusitem->nomerecurso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosproduto') ?></th>
            <td><?= $kronusitem->has('projetosproduto') ? $this->Html->link($kronusitem->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $kronusitem->projetosproduto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projetosprodutosentrega') ?></th>
            <td><?= $kronusitem->has('projetosprodutosentrega') ? $this->Html->link($kronusitem->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $kronusitem->projetosprodutosentrega->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Projeto') ?></th>
            <td><?= $kronusitem->has('projeto') ? $this->Html->link($kronusitem->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $kronusitem->projeto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pareto') ?></th>
            <td><?= $kronusitem->has('pareto') ? $this->Html->link($kronusitem->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $kronusitem->pareto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Milestone') ?></th>
            <td><?= h($kronusitem->milestone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resumo') ?></th>
            <td><?= h($kronusitem->resumo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Referencia') ?></th>
            <td><?= h($kronusitem->referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flagname') ?></th>
            <td><?= h($kronusitem->flagname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flag') ?></th>
            <td><?= $kronusitem->has('flag') ? $this->Html->link($kronusitem->flag->id, ['controller' => 'Flags', 'action' => 'view', $kronusitem->flag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fase') ?></th>
            <td><?= $kronusitem->has('fase') ? $this->Html->link($kronusitem->fase->descricao, ['controller' => 'Fases', 'action' => 'view', $kronusitem->fase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel') ?></th>
            <td><?= h($kronusitem->responsavel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Atividade') ?></th>
            <td><?= h($kronusitem->atividade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comentario') ?></th>
            <td><?= h($kronusitem->comentario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criticidade') ?></th>
            <td><?= h($kronusitem->criticidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fasenome') ?></th>
            <td><?= h($kronusitem->fasenome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($kronusitem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seq') ?></th>
            <td><?= $this->Number->format($kronusitem->seq) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= $this->Number->format($kronusitem->ordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Percconcluido') ?></th>
            <td><?= $this->Number->format($kronusitem->percconcluido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duracao') ?></th>
            <td><?= $this->Number->format($kronusitem->duracao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Predecessora') ?></th>
            <td><?= $this->Number->format($kronusitem->predecessora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idexclusivo') ?></th>
            <td><?= $this->Number->format($kronusitem->idexclusivo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Versao') ?></th>
            <td><?= $this->Number->format($kronusitem->versao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel1') ?></th>
            <td><?= $this->Number->format($kronusitem->nivel1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel2') ?></th>
            <td><?= $this->Number->format($kronusitem->nivel2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel3') ?></th>
            <td><?= $this->Number->format($kronusitem->nivel3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel4') ?></th>
            <td><?= $this->Number->format($kronusitem->nivel4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel5') ?></th>
            <td><?= $this->Number->format($kronusitem->nivel5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel6') ?></th>
            <td><?= $this->Number->format($kronusitem->nivel6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel7') ?></th>
            <td><?= $this->Number->format($kronusitem->nivel7) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel8') ?></th>
            <td><?= $this->Number->format($kronusitem->nivel8) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel9') ?></th>
            <td><?= $this->Number->format($kronusitem->nivel9) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivel10') ?></th>
            <td><?= $this->Number->format($kronusitem->nivel10) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apontamento') ?></th>
            <td><?= $this->Number->format($kronusitem->apontamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Decisorio') ?></th>
            <td><?= $this->Number->format($kronusitem->decisorio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Selecao') ?></th>
            <td><?= $this->Number->format($kronusitem->selecao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kickoff') ?></th>
            <td><?= h($kronusitem->kickoff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inicio') ?></th>
            <td><?= h($kronusitem->inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Termino') ?></th>
            <td><?= h($kronusitem->termino) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataatualizacao') ?></th>
            <td><?= h($kronusitem->dataatualizacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($kronusitem->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($kronusitem->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Objetivo') ?></h4>
        <?= $this->Text->autoParagraph(h($kronusitem->objetivo)); ?>
    </div>
</div>
