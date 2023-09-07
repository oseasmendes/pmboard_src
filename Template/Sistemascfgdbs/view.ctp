<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgdb $sistemascfgdb
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sistemascfgdb'), ['action' => 'edit', $sistemascfgdb->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sistemascfgdb'), ['action' => 'delete', $sistemascfgdb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgdb->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgdbs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgdb'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bancos'), ['controller' => 'Bancos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banco'), ['controller' => 'Bancos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sistemascfgdbdets'), ['controller' => 'Sistemascfgdbdets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sistemascfgdbdet'), ['controller' => 'Sistemascfgdbdets', 'action' => 'add']) ?> </li>
    </ul>
</nav>

<div class="row no-gutters" >
        <div class="col-3"> 
            <?= $this->Form->create($sistemascfgdb, ['url'=>['controller' => 'Sistemascfgdbdets', 'action' => 'add'],'']) ?>   
                <?= $this->Form->control('Det',['default'=> $this->Number->format($sistemascfgdb->id),'type' => 'hidden']); ?>
                      
                 <?= $this->Form->button('Inserir Detalhes da Base',['class'=>'btn btn-primary btn-sm btn-block']) ?>
            <?= $this->Form->end() ?> 
        </div>                
</div>    


<div class="sistemascfgdbs view large-9 medium-8 columns content">
    <h3><?= h($sistemascfgdb->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemascfgdb->has('sistema') ? $this->Html->link($sistemascfgdb->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgdb->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Banco') ?></th>
            <td><?= $sistemascfgdb->has('banco') ? $this->Html->link($sistemascfgdb->banco->descricao, ['controller' => 'Bancos', 'action' => 'view', $sistemascfgdb->banco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemascfgdb->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contato') ?></th>
            <td><?= h($sistemascfgdb->contato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ipaddress') ?></th>
            <td><?= h($sistemascfgdb->ipaddress) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conn') ?></th>
            <td><?= h($sistemascfgdb->conn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Versao') ?></th>
            <td><?= h($sistemascfgdb->versao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemascfgdb->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemascfgdb->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemascfgdb->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sistemascfgdbdets') ?></h4>
        <?php if (!empty($sistemascfgdb->sistemascfgdbdets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sistemascfgdb Id') ?></th>
                <th scope="col"><?= __('Datainventario') ?></th>
                <th scope="col"><?= __('Tamanho') ?></th>
                <th scope="col"><?= __('Qtetabelas') ?></th>
                <th scope="col"><?= __('Qtecolunas') ?></th>
                <th scope="col"><?= __('Qteregistros') ?></th>
                <th scope="col"><?= __('Qtestoreprocedures') ?></th>
                <th scope="col"><?= __('Qtetriggers') ?></th>
                <th scope="col"><?= __('Espacoemdisco') ?></th>
                <th scope="col"><?= __('Responsavelinventario') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sistemascfgdb->sistemascfgdbdets as $sistemascfgdbdets): ?>
            <tr>
                <td><?= h($sistemascfgdbdets->id) ?></td>
                <td><?= h($sistemascfgdbdets->sistemascfgdb_id) ?></td>
                <td><?= h($sistemascfgdbdets->datainventario) ?></td>
                <td><?= h($sistemascfgdbdets->tamanho) ?></td>
                <td><?= h($sistemascfgdbdets->qtetabelas) ?></td>
                <td><?= h($sistemascfgdbdets->qtecolunas) ?></td>
                <td><?= h($sistemascfgdbdets->qteregistros) ?></td>
                <td><?= h($sistemascfgdbdets->qtestoreprocedures) ?></td>
                <td><?= h($sistemascfgdbdets->qtetriggers) ?></td>
                <td><?= h($sistemascfgdbdets->espacoemdisco) ?></td>
                <td><?= h($sistemascfgdbdets->responsavelinventario) ?></td>
                <td><?= h($sistemascfgdbdets->created) ?></td>
                <td><?= h($sistemascfgdbdets->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sistemascfgdbdets', 'action' => 'view', $sistemascfgdbdets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sistemascfgdbdets', 'action' => 'edit', $sistemascfgdbdets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sistemascfgdbdets', 'action' => 'delete', $sistemascfgdbdets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgdbdets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
