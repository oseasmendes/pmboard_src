<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Processo $processo
 */
?>


<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Lista de Projetos</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Processo'), ['action' => 'edit', $processo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Processo'), ['action' => 'delete', $processo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $processo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Processos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Processo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Processostipos'), ['controller' => 'Processostipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Processostipo'), ['controller' => 'Processostipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atasdetalhes'), ['controller' => 'Atasdetalhes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atasdetalhe'), ['controller' => 'Atasdetalhes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="processos view large-9 medium-8 columns content">
    <h3><?= h($processo->descricao) ?></h3>
    <table class="table table-responsive">  
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($processo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($processo->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Movimento') ?></th>
            <td><?= h($processo->movimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Processostipo') ?></th>
            <td><?= $processo->has('processostipo') ? $this->Html->link($processo->processostipo->descricao, ['controller' => 'Processostipos', 'action' => 'view', $processo->processostipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($processo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($processo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($processo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Atasdetalhes') ?></h4>
        <?php if (!empty($processo->atasdetalhes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ata Id') ?></th>
                <th scope="col"><?= __('Resumo') ?></th>
                <th scope="col"><?= __('Detalhamento') ?></th>
                <th scope="col"><?= __('Responsavel Id') ?></th>
                <th scope="col"><?= __('Dataprevista') ?></th>
                <th scope="col"><?= __('Statusacao') ?></th>
                <th scope="col"><?= __('Dataexecutada') ?></th>
                <th scope="col"><?= __('Atadetallheordem') ?></th>
                <th scope="col"><?= __('Horaexecutada') ?></th>
                <th scope="col"><?= __('Etapa Id') ?></th>
                <th scope="col"><?= __('Atividade Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Horainicio') ?></th>
                <th scope="col"><?= __('Horafim') ?></th>
                <th scope="col"><?= __('Fivewthreeh Id') ?></th>
                <th scope="col"><?= __('Processo Id') ?></th>
                <th scope="col"><?= __('Proposta') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($processo->atasdetalhes as $atasdetalhes): ?>
            <tr>
                <td><?= h($atasdetalhes->id) ?></td>
                <td><?= h($atasdetalhes->ata_id) ?></td>
                <td><?= h($atasdetalhes->resumo) ?></td>
                <td><?= h($atasdetalhes->detalhamento) ?></td>
                <td><?= h($atasdetalhes->responsavel_id) ?></td>
                <td><?= h($atasdetalhes->dataprevista) ?></td>
                <td><?= h($atasdetalhes->statusacao) ?></td>
                <td><?= h($atasdetalhes->dataexecutada) ?></td>
                <td><?= h($atasdetalhes->atadetallheordem) ?></td>
                <td><?= h($atasdetalhes->horaexecutada) ?></td>
                <td><?= h($atasdetalhes->etapa_id) ?></td>
                <td><?= h($atasdetalhes->atividade_id) ?></td>
                <td><?= h($atasdetalhes->created) ?></td>
                <td><?= h($atasdetalhes->modified) ?></td>
                <td><?= h($atasdetalhes->horainicio) ?></td>
                <td><?= h($atasdetalhes->horafim) ?></td>
                <td><?= h($atasdetalhes->fivewthreeh_id) ?></td>
                <td><?= h($atasdetalhes->processo_id) ?></td>
                <td><?= h($atasdetalhes->proposta) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Atasdetalhes', 'action' => 'view', $atasdetalhes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Atasdetalhes', 'action' => 'edit', $atasdetalhes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Atasdetalhes', 'action' => 'delete', $atasdetalhes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atasdetalhes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>



</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>