<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Scriptstipo $scriptstipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Scriptstipo'), ['action' => 'edit', $scriptstipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Scriptstipo'), ['action' => 'delete', $scriptstipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $scriptstipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Scriptstipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Scriptstipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgscripts'), ['controller' => 'Sistemascfgscripts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgscript'), ['controller' => 'Sistemascfgscripts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="scriptstipos view large-9 medium-8 columns content">
    <h3><?= h($scriptstipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($scriptstipo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($scriptstipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($scriptstipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($scriptstipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sistemascfgscripts') ?></h4>
        <?php if (!empty($scriptstipo->sistemascfgscripts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistema Id') ?></th>
                <th scope="col"><?= __('Scriptstipo Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Scriptaplicado') ?></th>
                <th scope="col"><?= __('Versaonumero') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col"><?= __('Autor') ?></th>
                <th scope="col"><?= __('Dataroteiro') ?></th>
                <th scope="col"><?= __('Instrucaotecnica') ?></th>
                <th scope="col"><?= __('Advertencias') ?></th>
                <th scope="col"><?= __('Palavraschave') ?></th>
                <th scope="col"><?= __('Documento Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($scriptstipo->sistemascfgscripts as $sistemascfgscripts): ?>
            <tr>
                <td><?= h($sistemascfgscripts->id) ?></td>
                <td><?= h($sistemascfgscripts->sistema_id) ?></td>
                <td><?= h($sistemascfgscripts->scriptstipo_id) ?></td>
                <td><?= h($sistemascfgscripts->descricao) ?></td>
                <td><?= h($sistemascfgscripts->scriptaplicado) ?></td>
                <td><?= h($sistemascfgscripts->versaonumero) ?></td>
                <td><?= h($sistemascfgscripts->ativo) ?></td>
                <td><?= h($sistemascfgscripts->autor) ?></td>
                <td><?= h($sistemascfgscripts->dataroteiro) ?></td>
                <td><?= h($sistemascfgscripts->instrucaotecnica) ?></td>
                <td><?= h($sistemascfgscripts->advertencias) ?></td>
                <td><?= h($sistemascfgscripts->palavraschave) ?></td>
                <td><?= h($sistemascfgscripts->documento_id) ?></td>
                <td><?= h($sistemascfgscripts->created) ?></td>
                <td><?= h($sistemascfgscripts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemascfgscripts', 'action' => 'view', $sistemascfgscripts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemascfgscripts', 'action' => 'edit', $sistemascfgscripts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemascfgscripts', 'action' => 'delete', $sistemascfgscripts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgscripts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
