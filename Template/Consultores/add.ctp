<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultore $consultore
 */
?>
<div class="sistemas index large-9 medium-8 columns content"> 


    <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <div>
                    <div class="col-sm-8 col-md-7 py-4">                   
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?= $this->Html->link(__('List Consultores'), ['action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Superiorimediatos'), ['controller' => 'Superiorimediatos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Superiorimediato'), ['controller' => 'Superiorimediatos', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Consultorias'), ['controller' => 'Consultorias', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Consultoria'), ['controller' => 'Consultorias', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Projetosapontamentos'), ['controller' => 'Projetosapontamentos', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Projetosapontamento'), ['controller' => 'Projetosapontamentos', 'action' => 'add'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('List Sistemasconsultores'), ['controller' => 'Sistemasconsultores', 'action' => 'index'],['class'=>'dropdown-item'])?>
<?= $this->Html->link(__('New Sistemasconsultore'), ['controller' => 'Sistemasconsultores', 'action' => 'add'],['class'=>'dropdown-item'])?>

                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>                              
            </div>
          </div>
          <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 

</div>
<div class="consultores form large-9 medium-8 columns content">
    <?= $this->Form->create($consultore) ?>
    <fieldset>
        <legend><p class="text-primary"><?= __('Inserir Dados de Novo Consultor') ?></p></legend>
        <?php
            echo $this->Form->control('nome',['class'=> "form-control"]);           
            echo $this->Form->control('email',['class'=> "form-control"]);
            echo $this->Form->control('telefone',['class'=> "form-control"]);
            echo $this->Form->control('cargo',['class'=> "form-control"]);
            echo $this->Form->control('codenome',['class'=> "form-control"]);
            echo $this->Form->control('sigla',['class'=> "form-control"]);
            echo $this->Form->control('responsabilidade',['class'=> "form-control"]);
            echo $this->Form->control('consultoria_id', ['options' => $consultorias, 'empty' => true,'class'=>['class'=> 'form-control']]);
             echo $this->Form->control('departamento_id', ['options' => $departamentos, 'empty' => true,'class'=>['class'=> 'form-control']]);            
            echo $this->Form->control('superiorimediato_id', ['options' => $superiorimediatos, 'empty' => true,'class'=>['class'=> 'form-control']]);            
            echo $this->Form->control('chapa',['class'=> "form-control"]);
            echo $this->Form->control('rg',['class'=> "form-control"]);
            echo $this->Form->control('cpf',['class'=> "form-control"]);
            
            echo $this->Form->control('endereco',['class'=> "form-control"]);
            echo $this->Form->control('complemento',['class'=> "form-control"]);
            echo $this->Form->control('bairro',['class'=> "form-control"]);
            echo $this->Form->control('cidade',['class'=> "form-control"]);
            echo $this->Form->control('cep',['class'=> "form-control"]);
            echo $this->Form->control('duplacidadania');
            echo $this->Form->control('cidadania1',['class'=> "form-control"]);
            echo $this->Form->control('cidadania2',['class'=> "form-control"]);
            echo $this->Form->control('cidadania3',['class'=> "form-control"]);
            
            
             echo $this->Form->control('regimecontratacao', ['options' => ['FLEX'=>'FLEX','CLT'=>'CLT','FULLPJ'=>'FULLPJ'],'class'=>['class'=> 'form-control'] , 'empty' => true]);

            echo $this->Form->control('login',['class'=> "form-control"]);
            echo $this->Form->control('datanascimento',[                            
                     'minYear' => date('Y')-50,
                     'maxYear' => date('Y')+5,                       
                    ] , ['empty' => true]);
            echo $this->Form->control('dataengajamento',[                            
                     'minYear' => date('Y')-50,
                     'maxYear' => date('Y')+5,                       
                    ] , ['empty' => true]);
            
            echo $this->Form->control('dataengajamento', ['empty' => true]);
            echo $this->Form->control('datadesligamento', ['empty' => true]);
            echo $this->Form->control('dataliberacaoacessos', ['empty' => true]);
            echo $this->Form->control('datacontratacao', ['empty' => true]);
            echo $this->Form->control('dataintegracao', ['empty' => true]);
            
            echo $this->Form->control('selecionar');
            echo $this->Form->control('engajado');             
            echo $this->Form->control('prio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=> "btn btn-primary"]) ?>
    <?= $this->Form->end() ?>
</div>
