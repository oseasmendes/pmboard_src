<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Participante $participante
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Participante'), ['action' => 'edit', $participante->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Participante'), ['action' => 'delete', $participante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $participante->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Participantes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participante'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="participantes view large-9 medium-8 columns content">
    <h3><?= h($participante->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($participante->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apelido') ?></th>
            <td><?= h($participante->apelido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($participante->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= h($participante->company) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cargo') ?></th>
            <td><?= h($participante->cargo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sigla') ?></th>
            <td><?= h($participante->sigla) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $participante->has('departamento') ? $this->Html->link($participante->departamento->descricao, ['controller' => 'Departamentos', 'action' => 'view', $participante->departamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $participante->has('empresa') ? $this->Html->link($participante->empresa->fantasia, ['controller' => 'Empresas', 'action' => 'view', $participante->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefonecelular') ?></th>
            <td><?= h($participante->telefonecelular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefonefixo') ?></th>
            <td><?= h($participante->telefonefixo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($participante->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ramal') ?></th>
            <td><?= $this->Number->format($participante->ramal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tecnico') ?></th>
            <td><?= $this->Number->format($participante->tecnico) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($participante->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($participante->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Fivewthreehs') ?></h4>
        <?php if (!empty($participante->fivewthreehs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Programa Id') ?></th>
                <th scope="col"><?= __('Projeto Id') ?></th>
                <th scope="col"><?= __('Projetosproduto Id') ?></th>
                <th scope="col"><?= __('Participante Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Who') ?></th>
                <th scope="col"><?= __('When') ?></th>
                <th scope="col"><?= __('What') ?></th>
                <th scope="col"><?= __('Where') ?></th>
                <th scope="col"><?= __('Why') ?></th>
                <th scope="col"><?= __('How') ?></th>
                <th scope="col"><?= __('Howmany') ?></th>
                <th scope="col"><?= __('Howmuch') ?></th>
                <th scope="col"><?= __('Howlong') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Consultore Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($participante->fivewthreehs as $fivewthreehs): ?>
            <tr>
                <td><?= h($fivewthreehs->id) ?></td>
                <td><?= h($fivewthreehs->programa_id) ?></td>
                <td><?= h($fivewthreehs->projeto_id) ?></td>
                <td><?= h($fivewthreehs->projetosproduto_id) ?></td>
                <td><?= h($fivewthreehs->participante_id) ?></td>
                <td><?= h($fivewthreehs->description) ?></td>
                <td><?= h($fivewthreehs->who) ?></td>
                <td><?= h($fivewthreehs->when) ?></td>
                <td><?= h($fivewthreehs->what) ?></td>
                <td><?= h($fivewthreehs->where) ?></td>
                <td><?= h($fivewthreehs->why) ?></td>
                <td><?= h($fivewthreehs->how) ?></td>
                <td><?= h($fivewthreehs->howmany) ?></td>
                <td><?= h($fivewthreehs->howmuch) ?></td>
                <td><?= h($fivewthreehs->howlong) ?></td>
                <td><?= h($fivewthreehs->created) ?></td>
                <td><?= h($fivewthreehs->modified) ?></td>
                <td><?= h($fivewthreehs->statusfuncional_id) ?></td>
                <td><?= h($fivewthreehs->consultore_id) ?></td>
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
</div>
