<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Natureza $natureza
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Natureza'), ['action' => 'edit', $natureza->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Natureza'), ['action' => 'delete', $natureza->id], ['confirm' => __('Are you sure you want to delete # {0}?', $natureza->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Naturezas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Natureza'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Todos'), ['controller' => 'Todos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Todo'), ['controller' => 'Todos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="naturezas view large-9 medium-8 columns content">
    <h3><?= h($natureza->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($natureza->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($natureza->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($natureza->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($natureza->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Todos') ?></h4>
        <?php if (!empty($natureza->todos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Programa Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Requisitante') ?></th>
                <th scope="col"><?= __('Assunto') ?></th>
                <th scope="col"><?= __('Resumotecnico') ?></th>
                <th scope="col"><?= __('Nrorequisicao') ?></th>
                <th scope="col"><?= __('Dataprevistaentrega') ?></th>
                <th scope="col"><?= __('Dataapresentacao') ?></th>
                <th scope="col"><?= __('Patrocinador') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Prioridade') ?></th>
                <th scope="col"><?= __('Observacao') ?></th>
                <th scope="col"><?= __('Natureza Id') ?></th>
                <th scope="col"><?= __('Atribuidopara') ?></th>
                <th scope="col"><?= __('Pareto Id') ?></th>
                <th scope="col"><?= __('Dataexecucao') ?></th>
                <th scope="col"><?= __('Dataentrega') ?></th>
                <th scope="col"><?= __('Participante Id') ?></th>
                <th scope="col"><?= __('Datareconhecimento') ?></th>
                <th scope="col"><?= __('Requisitante Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($natureza->todos as $todos): ?>
            <tr>
                <td><?= h($todos->id) ?></td>
                <td><?= h($todos->programa_id) ?></td>
                <td><?= h($todos->projeto_id) ?></td>
                <td><?= h($todos->projetosproduto_id) ?></td>
                <td><?= h($todos->requisitante) ?></td>
                <td><?= h($todos->assunto) ?></td>
                <td><?= h($todos->resumotecnico) ?></td>
                <td><?= h($todos->nrorequisicao) ?></td>
                <td><?= h($todos->dataprevistaentrega) ?></td>
                <td><?= h($todos->dataapresentacao) ?></td>
                <td><?= h($todos->patrocinador) ?></td>
                <td><?= h($todos->created) ?></td>
                <td><?= h($todos->modified) ?></td>
                <td><?= h($todos->prioridade) ?></td>
                <td><?= h($todos->observacao) ?></td>
                <td><?= h($todos->natureza_id) ?></td>
                <td><?= h($todos->atribuidopara) ?></td>
                <td><?= h($todos->pareto_id) ?></td>
                <td><?= h($todos->dataexecucao) ?></td>
                <td><?= h($todos->dataentrega) ?></td>
                <td><?= h($todos->participante_id) ?></td>
                <td><?= h($todos->datareconhecimento) ?></td>
                <td><?= h($todos->requisitante_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Todos', 'action' => 'view', $todos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Todos', 'action' => 'edit', $todos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Todos', 'action' => 'delete', $todos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $todos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
