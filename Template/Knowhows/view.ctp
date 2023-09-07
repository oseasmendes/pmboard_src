<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Knowhow $knowhow
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Knowhow'), ['action' => 'edit', $knowhow->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Knowhow'), ['action' => 'delete', $knowhow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $knowhow->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Knowhows'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Knowhow'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consultoresvrstecnologias'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Consultoresvrstecnologia'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasconsultores'), ['controller' => 'Sistemasconsultores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasconsultore'), ['controller' => 'Sistemasconsultores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemasusuarios'), ['controller' => 'Sistemasusuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemasusuario'), ['controller' => 'Sistemasusuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="knowhows view large-9 medium-8 columns content">
    <h3><?= h($knowhow->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($knowhow->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($knowhow->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peso') ?></th>
            <td><?= $this->Number->format($knowhow->peso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($knowhow->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($knowhow->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Consultoresvrstecnologias') ?></h4>
        <?php if (!empty($knowhow->consultoresvrstecnologias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Consultor Id') ?></th>
                <th scope="col"><?= __('Tecnologia Id') ?></th>
                <th scope="col"><?= __('Knowhow Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($knowhow->consultoresvrstecnologias as $consultoresvrstecnologias): ?>
            <tr>
                <td><?= h($consultoresvrstecnologias->id) ?></td>
                <td><?= h($consultoresvrstecnologias->consultor_id) ?></td>
                <td><?= h($consultoresvrstecnologias->tecnologia_id) ?></td>
                <td><?= h($consultoresvrstecnologias->knowhow_id) ?></td>
                <td><?= h($consultoresvrstecnologias->created) ?></td>
                <td><?= h($consultoresvrstecnologias->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'view', $consultoresvrstecnologias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'edit', $consultoresvrstecnologias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultoresvrstecnologias', 'action' => 'delete', $consultoresvrstecnologias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultoresvrstecnologias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sistemasconsultores') ?></h4>
        <?php if (!empty($knowhow->sistemasconsultores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Consultor Id') ?></th>
                <th scope="col"><?= __('Knowhow Id') ?></th>
                <th scope="col"><?= __('Principalfuncao') ?></th>
                <th scope="col"><?= __('Atividadeexecutada') ?></th>
                <th scope="col"><?= __('Dataatividade') ?></th>
                <th scope="col"><?= __('Consultoria') ?></th>
                <th scope="col"><?= __('Alocacao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($knowhow->sistemasconsultores as $sistemasconsultores): ?>
            <tr>
                <td><?= h($sistemasconsultores->id) ?></td>
                <td><?= h($sistemasconsultores->consultor_id) ?></td>
                <td><?= h($sistemasconsultores->knowhow_id) ?></td>
                <td><?= h($sistemasconsultores->principalfuncao) ?></td>
                <td><?= h($sistemasconsultores->atividadeexecutada) ?></td>
                <td><?= h($sistemasconsultores->dataatividade) ?></td>
                <td><?= h($sistemasconsultores->consultoria) ?></td>
                <td><?= h($sistemasconsultores->alocacao) ?></td>
                <td><?= h($sistemasconsultores->created) ?></td>
                <td><?= h($sistemasconsultores->modified) ?></td>
                <td><?= h($sistemasconsultores->sistema_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasconsultores', 'action' => 'view', $sistemasconsultores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasconsultores', 'action' => 'edit', $sistemasconsultores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasconsultores', 'action' => 'delete', $sistemasconsultores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasconsultores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sistemasusuarios') ?></h4>
        <?php if (!empty($knowhow->sistemasusuarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Ramal') ?></th>
                <th scope="col"><?= __('Responsabilidade Id') ?></th>
                <th scope="col"><?= __('Empresa') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Statususuario') ?></th>
                <th scope="col"><?= __('Knowhow Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($knowhow->sistemasusuarios as $sistemasusuarios): ?>
            <tr>
                <td><?= h($sistemasusuarios->id) ?></td>
                <td><?= h($sistemasusuarios->sistema_id) ?></td>
                <td><?= h($sistemasusuarios->usuario_id) ?></td>
                <td><?= h($sistemasusuarios->nome) ?></td>
                <td><?= h($sistemasusuarios->ramal) ?></td>
                <td><?= h($sistemasusuarios->responsabilidade_id) ?></td>
                <td><?= h($sistemasusuarios->empresa) ?></td>
                <td><?= h($sistemasusuarios->created) ?></td>
                <td><?= h($sistemasusuarios->modified) ?></td>
                <td><?= h($sistemasusuarios->statususuario) ?></td>
                <td><?= h($sistemasusuarios->knowhow_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemasusuarios', 'action' => 'view', $sistemasusuarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemasusuarios', 'action' => 'edit', $sistemasusuarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemasusuarios', 'action' => 'delete', $sistemasusuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemasusuarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
