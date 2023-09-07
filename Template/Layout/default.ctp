<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Saes: development for life';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

   
   
   <?= $this->Html->css(['bootstrap-datetimepicker.css']) ?> 
    <?= $this->Html->script(['script.min.js']) ?>
     <?= $this->Html->script(['bootstrap-datetimepicker']) ?> 
    <?= $this->Html->script(['bootstrap.bundle.min.js']) ?>
    <?= $this->Html->css(['bootstrap.min.css']) ?>
    <?= $this->Html->script(['bootstrap.min.js']) ?>
    



 


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<header>
    <div class="bg-dark collapse" id="navbarHeadder" style>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">                   
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?= $this->Html->link(__('Sistemas'), ['controller' => 'Sistemas', 'action' => 'index'],['class'=>'dropdown-item']) ?> 
                            <?= $this->Html->link(__('Portfolios'), ['controller' => 'Portfolios', 'action' => 'index'],['class'=>'dropdown-item']) ?> 
                            <?= $this->Html->link(__('Projetos'),['controller' => 'Projetos', 'action' => 'index'],['class'=>'dropdown-item']) ?>          
                            <?= $this->Html->link(__('Produtos'), ['controller' => 'Produtos', 'action' => 'index'],['class'=>'dropdown-item']) ?>                    
                            <?= $this->Html->link(__('Consultores'), ['controller' => 'Consultores', 'action' => 'index'],['class'=>'dropdown-item']) ?>
                            <?= $this->Html->link(__('Projetos - Notas'), ['controller' => 'Projetosnotas', 'action' => 'index'],['class'=>'dropdown-item']) ?> 
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
            <div class="col-sm-4 offset-md py-4">
                    <h4 class="text-white">Contato</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="text-white">Twitter</a>
                        </li>                        
                        <li>
                         <?= $this->Html->link(__('Logout'),['controller'=>'Users','action'=> 'logout'],['class'=>'text-white']) ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<div class="navbar navbar-dark bg-dark box-shadow">
    <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>pmSaesO'S Track</strong>
          </a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeadder" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>           
    </div>
</div>
</header>

<body class="bg-light"> <!-- class= "bg-dark" -->    
    
    <?= $this->Flash->render() ?>    
    <div class="container clearfix">             
        <div>
            <!-- <?= $this->Html->image('fameccanica_logo.png', ['alt' => 'CakePHP','width'=>'250px']); ?>  -->             
        </div>  
        <div>  
            <?= $this->fetch('content') ?>              
        </div>
    </div>    
    <footer>        
    </footer>

</body>
</html>
