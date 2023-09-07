<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgscript $sistemascfgscript
 */
?>


<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">System Roll</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 





<div class="sistemascfgscripts view large-9 medium-8 columns content">
    <h3><?= h($sistemascfgscript->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemascfgscript->has('sistema') ? $this->Html->link($sistemascfgscript->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgscript->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scriptstipo') ?></th>
            <td><?= $sistemascfgscript->has('scriptstipo') ? $this->Html->link($sistemascfgscript->scriptstipo->id, ['controller' => 'Scriptstipos', 'action' => 'view', $sistemascfgscript->scriptstipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($sistemascfgscript->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autor') ?></th>
            <td><?= h($sistemascfgscript->autor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Palavraschave') ?></th>
            <td><?= h($sistemascfgscript->palavraschave) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documento') ?></th>
            <td><?= $sistemascfgscript->has('documento') ? $this->Html->link($sistemascfgscript->documento->descricao, ['controller' => 'Documentos', 'action' => 'view', $sistemascfgscript->documento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sistemascfgscript->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Versaonumero') ?></th>
            <td><?= $this->Number->format($sistemascfgscript->versaonumero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataroteiro') ?></th>
            <td><?= h($sistemascfgscript->dataroteiro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemascfgscript->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemascfgscript->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $sistemascfgscript->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Scriptaplicado') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemascfgscript->scriptaplicado)); ?>
    </div>
    <div class="row">
        <h4><?= __('Instrucaotecnica') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemascfgscript->instrucaotecnica)); ?>
    </div>
    <div class="row">
        <h4><?= __('Advertencias') ?></h4>
        <?= $this->Text->autoParagraph(h($sistemascfgscript->advertencias)); ?>
    </div>
</div>




</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>