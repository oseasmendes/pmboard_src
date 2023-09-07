<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosentregasoppresposta $projetosentregasoppresposta
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



<div class="projetosentregasopprespostas view large-9 medium-8 columns content">
    <h3><?= h($projetosentregasoppresposta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Projetosentregasopenpoint') ?></th>
            <td><?= $projetosentregasoppresposta->has('projetosentregasopenpoint') ? $this->Html->link($projetosentregasoppresposta->projetosentregasopenpoint->id, ['controller' => 'Projetosentregasopenpoints', 'action' => 'view', $projetosentregasoppresposta->projetosentregasopenpoint->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Respondidopor') ?></th>
            <td><?= h($projetosentregasoppresposta->respondidopor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Respondidopara') ?></th>
            <td><?= h($projetosentregasoppresposta->respondidopara) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($projetosentregasoppresposta->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Docreferencia') ?></th>
            <td><?= h($projetosentregasoppresposta->docreferencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doccanal') ?></th>
            <td><?= h($projetosentregasoppresposta->doccanal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Docassunto') ?></th>
            <td><?= h($projetosentregasoppresposta->docassunto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusprojeto') ?></th>
            <td><?= h($projetosentregasoppresposta->statusprojeto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($projetosentregasoppresposta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Docdata') ?></th>
            <td><?= h($projetosentregasoppresposta->docdata) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($projetosentregasoppresposta->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($projetosentregasoppresposta->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Planoacao') ?></th>
            <td><?= $projetosentregasoppresposta->planoacao ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Validado') ?></th>
            <td><?= $projetosentregasoppresposta->validado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Resumo') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosentregasoppresposta->resumo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Conclusao') ?></h4>
        <?= $this->Text->autoParagraph(h($projetosentregasoppresposta->conclusao)); ?>
    </div>
</div>



</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>