<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flag $flag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Flag'), ['action' => 'edit', $flag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Flag'), ['action' => 'delete', $flag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Flags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Kronusitems'), ['controller' => 'Kronusitems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kronusitem'), ['controller' => 'Kronusitems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="flags view large-9 medium-8 columns content">
    <h3><?= h($flag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($flag->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($flag->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($flag->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($flag->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Kronusitems') ?></h4>
        <?php if (!empty($flag->kronusitems)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Kronusplan Id') ?></th>
                <th scope="col"><?= __('Kickoff') ?></th>
                <th scope="col"><?= __('Seq') ?></th>
                <th scope="col"><?= __('Ordem') ?></th>
                <th scope="col"><?= __('Edt') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col"><?= __('Categoria') ?></th>
                <th scope="col"><?= __('Nometarefa') ?></th>
                <th scope="col"><?= __('Etapa') ?></th>
                <th scope="col"><?= __('Percconcluido') ?></th>
                <th scope="col"><?= __('Duracao') ?></th>
                <th scope="col"><?= __('Unidademedida') ?></th>
                <th scope="col"><?= __('Inicio') ?></th>
                <th scope="col"><?= __('Termino') ?></th>
                <th scope="col"><?= __('Predecessora') ?></th>
                <th scope="col"><?= __('Nomerecurso') ?></th>
                <th scope="col"><?= __('Idexclusivo') ?></th>
                <th scope="col"><?= __('Dataatualizacao') ?></th>
                <th scope="col"><?= __('Versao') ?></th>
                <th scope="col"><?= __('Nivel1') ?></th>
                <th scope="col"><?= __('Nivel2') ?></th>
                <th scope="col"><?= __('Nivel3') ?></th>
                <th scope="col"><?= __('Nivel4') ?></th>
                <th scope="col"><?= __('Nivel5') ?></th>
                <th scope="col"><?= __('Nivel6') ?></th>
                <th scope="col"><?= __('Nivel7') ?></th>
                <th scope="col"><?= __('Nivel8') ?></th>
                <th scope="col"><?= __('Nivel9') ?></th>
                <th scope="col"><?= __('Nivel10') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Projetosprodutosentrega Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Apontamento') ?></th>
                <th scope="col"><?= __('Pareto Id') ?></th>
                <th scope="col"><?= __('Milestone') ?></th>
                <th scope="col"><?= __('Decisorio') ?></th>
                <th scope="col"><?= __('Selecao') ?></th>
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Objetivo') ?></th>
                <th scope="col"><?= __('Referencia') ?></th>
                <th scope="col"><?= __('Flagname') ?></th>
                <th scope="col"><?= __('Flag Id') ?></th>
                <th scope="col"><?= __('Fase Id') ?></th>
                <th scope="col"><?= __('Responsavel') ?></th>
                <th scope="col"><?= __('Atividade') ?></th>
                <th scope="col"><?= __('Comentario') ?></th>
                <th scope="col"><?= __('Criticidade') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Fasenome') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($flag->kronusitems as $kronusitems): ?>
            <tr>
                <td><?= h($kronusitems->id) ?></td>
                <td><?= h($kronusitems->kronusplan_id) ?></td>
                <td><?= h($kronusitems->kickoff) ?></td>
                <td><?= h($kronusitems->seq) ?></td>
                <td><?= h($kronusitems->ordem) ?></td>
                <td><?= h($kronusitems->edt) ?></td>
                <td><?= h($kronusitems->consultore_id) ?></td>
                <td><?= h($kronusitems->categoria) ?></td>
                <td><?= h($kronusitems->nometarefa) ?></td>
                <td><?= h($kronusitems->etapa) ?></td>
                <td><?= h($kronusitems->percconcluido) ?></td>
                <td><?= h($kronusitems->duracao) ?></td>
                <td><?= h($kronusitems->unidademedida) ?></td>
                <td><?= h($kronusitems->inicio) ?></td>
                <td><?= h($kronusitems->termino) ?></td>
                <td><?= h($kronusitems->predecessora) ?></td>
                <td><?= h($kronusitems->nomerecurso) ?></td>
                <td><?= h($kronusitems->idexclusivo) ?></td>
                <td><?= h($kronusitems->dataatualizacao) ?></td>
                <td><?= h($kronusitems->versao) ?></td>
                <td><?= h($kronusitems->nivel1) ?></td>
                <td><?= h($kronusitems->nivel2) ?></td>
                <td><?= h($kronusitems->nivel3) ?></td>
                <td><?= h($kronusitems->nivel4) ?></td>
                <td><?= h($kronusitems->nivel5) ?></td>
                <td><?= h($kronusitems->nivel6) ?></td>
                <td><?= h($kronusitems->nivel7) ?></td>
                <td><?= h($kronusitems->nivel8) ?></td>
                <td><?= h($kronusitems->nivel9) ?></td>
                <td><?= h($kronusitems->nivel10) ?></td>
                <td><?= h($kronusitems->projetosproduto_id) ?></td>
                <td><?= h($kronusitems->projetosprodutosentrega_id) ?></td>
                <td><?= h($kronusitems->projeto_id) ?></td>
                <td><?= h($kronusitems->apontamento) ?></td>
                <td><?= h($kronusitems->pareto_id) ?></td>
                <td><?= h($kronusitems->milestone) ?></td>
                <td><?= h($kronusitems->decisorio) ?></td>
                <td><?= h($kronusitems->selecao) ?></td>
                <td><?= h($kronusitems->resumo) ?></td>
                <td><?= h($kronusitems->objetivo) ?></td>
                <td><?= h($kronusitems->referencia) ?></td>
                <td><?= h($kronusitems->flagname) ?></td>
                <td><?= h($kronusitems->flag_id) ?></td>
                <td><?= h($kronusitems->fase_id) ?></td>
                <td><?= h($kronusitems->responsavel) ?></td>
                <td><?= h($kronusitems->atividade) ?></td>
                <td><?= h($kronusitems->comentario) ?></td>
                <td><?= h($kronusitems->criticidade) ?></td>
                <td><?= h($kronusitems->created) ?></td>
                <td><?= h($kronusitems->modified) ?></td>
                <td><?= h($kronusitems->fasenome) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Kronusitems', 'action' => 'view', $kronusitems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Kronusitems', 'action' => 'edit', $kronusitems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Kronusitems', 'action' => 'delete', $kronusitems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kronusitems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
