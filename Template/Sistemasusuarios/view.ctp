<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemasusuario $sistemasusuario
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">User</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>



<div class="sistemasusuarios view large-9 medium-8 columns content">
    <h3><?= h($sistemasusuario->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Sistema') ?></th>
            <td><?= $sistemasusuario->has('sistema') ? $this->Html->link($sistemasusuario->sistema->descricao, ['controller' => 'Sistemas', 'action' => 'view', $sistemasusuario->sistema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $sistemasusuario->has('usuario') ? $this->Html->link($sistemasusuario->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $sistemasusuario->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $sistemasusuario->has('usuariostipo') ? $this->Html->link($sistemasusuario->usuariostipo->descricao, ['controller' => 'Usuariostipos', 'action' => 'view', $sistemasusuario->usuariostipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($sistemasusuario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ramal') ?></th>
            <td><?= h($sistemasusuario->ramal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsabilidade') ?></th>
            <td><?= $sistemasusuario->has('responsabilidade') ? $this->Html->link($sistemasusuario->responsabilidade->descricao, ['controller' => 'Responsabilidades', 'action' => 'view', $sistemasusuario->responsabilidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= h($sistemasusuario->empresa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statususuario') ?></th>
            <td><?= h($sistemasusuario->statususuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Knowhow') ?></th>
            <td><?= $sistemasusuario->has('knowhow') ? $this->Html->link($sistemasusuario->knowhow->descricao, ['controller' => 'Knowhows', 'action' => 'view', $sistemasusuario->knowhow->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autenticacao') ?></th>
            <td><?= h($sistemasusuario->autenticacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login') ?></th>
            <td><?= h($sistemasusuario->login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Passwordapp') ?></th>
            <td><?= h($sistemasusuario->passwordapp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statususuario') ?></th>
            <td><?= h($sistemasusuario->statususuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statususuario') ?></th>
            <td><?= h($sistemasusuario->statususuario) ?></td>
        </tr>

     
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($sistemasusuario->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($sistemasusuario->modified) ?></td>
        </tr>
    </table>
</div>


</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
