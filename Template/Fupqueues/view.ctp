<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupqueue $fupqueue
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                       
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>

<div class="fupqueues view large-9 medium-8 columns content">
    <h3><?= h($fupqueue->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($fupqueue->descricao) ?></td>
        </tr>        
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fupqueue->created) ?></td>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fupqueue->modified) ?></td>        
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $fupqueue->ativo ? __('Yes') : __('No'); ?></td>                    
        </tr>
        <tr>
            <th scope="row"><?= __('Tickets') ?></th>
            <td><?= $fupqueue->tickets ? __('Yes') : __('No'); ?></td>
            <th scope="row"><?= __('Improvements') ?></th>
            <td><?= $fupqueue->improvements ? __('Yes') : __('No'); ?></td>
            <th scope="row"><?= __('Projects') ?></th>
            <td><?= $fupqueue->projects ? __('Yes') : __('No'); ?></td>
            <th scope="row"><?= __('Fup') ?></th>
            <td><?= $fupqueue->fup ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observacao') ?></th>
            <td><?= h($fupqueue->observacao) ?></td>
        </tr>       
    </table>
    <div class="related">
        <h4><?= __('Related Fupagendas') ?></h4>
        <?php if (!empty($fupqueue->fupagendas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fupqueue Id') ?></th>
                <th scope="col"><?= __('Checkpointdata') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Statusfuncional Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fupqueue->fupagendas as $fupagendas): ?>
            <tr>
                <td><?= h($fupagendas->id) ?></td>
                <td><?= h($fupagendas->fupqueue_id) ?></td>
                <td><?= h($fupagendas->checkpointdata) ?></td>
                <td><?= h($fupagendas->descricao) ?></td>
                <td><?= h($fupagendas->statusfuncional_id) ?></td>
                <td><?= h($fupagendas->created) ?></td>
                <td><?= h($fupagendas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fupagendas', 'action' => 'view', $fupagendas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fupagendas', 'action' => 'edit', $fupagendas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fupagendas', 'action' => 'delete', $fupagendas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupagendas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fupqueuesdistributions') ?></h4>
        <?php if (!empty($fupqueue->fupqueuesdistributions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fupqueue Id') ?></th>
                <th scope="col"><?= __('Participante Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fupqueue->fupqueuesdistributions as $fupqueuesdistributions): ?>
            <tr>
                <td><?= h($fupqueuesdistributions->id) ?></td>
                <td><?= h($fupqueuesdistributions->fupqueue_id) ?></td>
                <td><?= h($fupqueuesdistributions->participante_id) ?></td>
                <td><?= h($fupqueuesdistributions->created) ?></td>
                <td><?= h($fupqueuesdistributions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fupqueuesdistributions', 'action' => 'view', $fupqueuesdistributions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fupqueuesdistributions', 'action' => 'edit', $fupqueuesdistributions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fupqueuesdistributions', 'action' => 'delete', $fupqueuesdistributions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupqueuesdistributions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projetosprodutos') ?></h4>
        <?php if (!empty($fupqueue->projetosprodutos)): ?>
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
                <th scope="col"><?= __('Prioridade') ?></th>
                <th scope="col"><?= __('Dataprevistafim') ?></th>
                <th scope="col"><?= __('Datarealizada') ?></th>
                <th scope="col"><?= __('Frente Id') ?></th>
                <th scope="col"><?= __('Facilitador Id') ?></th>
                <th scope="col"><?= __('Dataprevistainicio') ?></th>
                <th scope="col"><?= __('Datarealinicio') ?></th>
                <th scope="col"><?= __('Gerenteprojetocliente Id') ?></th>
                <th scope="col"><?= __('Datacancelamento') ?></th>
                <th scope="col"><?= __('Datasuspensao') ?></th>
                <th scope="col"><?= __('Escopomacro') ?></th>
                <th scope="col"><?= __('Comentarios') ?></th>
                <th scope="col"><?= __('Selecionado') ?></th>
                <th scope="col"><?= __('Ativo') ?></th>
                <th scope="col"><?= __('Kpi') ?></th>
                <th scope="col"><?= __('Canal') ?></th>
                <th scope="col"><?= __('Fupqueue Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fupqueue->projetosprodutos as $projetosprodutos): ?>
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
                <td><?= h($projetosprodutos->prioridade) ?></td>
                <td><?= h($projetosprodutos->dataprevistafim) ?></td>
                <td><?= h($projetosprodutos->datarealizada) ?></td>
                <td><?= h($projetosprodutos->frente_id) ?></td>
                <td><?= h($projetosprodutos->facilitador_id) ?></td>
                <td><?= h($projetosprodutos->dataprevistainicio) ?></td>
                <td><?= h($projetosprodutos->datarealinicio) ?></td>
                <td><?= h($projetosprodutos->gerenteprojetocliente_id) ?></td>
                <td><?= h($projetosprodutos->datacancelamento) ?></td>
                <td><?= h($projetosprodutos->datasuspensao) ?></td>
                <td><?= h($projetosprodutos->escopomacro) ?></td>
                <td><?= h($projetosprodutos->comentarios) ?></td>
                <td><?= h($projetosprodutos->selecionado) ?></td>
                <td><?= h($projetosprodutos->ativo) ?></td>
                <td><?= h($projetosprodutos->kpi) ?></td>
                <td><?= h($projetosprodutos->canal) ?></td>
                <td><?= h($projetosprodutos->fupqueue_id) ?></td>
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
</div>





</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div> 
        </div>      
    </section>