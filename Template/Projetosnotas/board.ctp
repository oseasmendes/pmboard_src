<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosnota[]|\Cake\Collection\CollectionInterface $projetosnotas
 */
?>

  <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Project News</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 


 <div class="sistemas index large-9 medium-8 columns content"> 
  
    <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-light p-4">
                <div>
                    <div class="col-sm-8 col-md-7 py-4">                   
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?= $this->Html->link(__('New Projetosnota'), ['action' => 'add'] ,['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Notatipos'), ['controller' => 'Notatipos', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Notatipo'), ['controller' => 'Notatipos', 'action' => 'add'] ,['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index'] ,['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add'] ,['class'=>'dropdown-item'])?>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>
                <div class="col-sm-8 col-md-7 py-4"> 
                    <ul class="nav navbar-nav" role="navigation" >                           
                                    <?= $this->Form->create("",['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                            <?= $this->Form->control('projeto_id', ['options' => $projetos,
                                                                            'empty' => 'Projetos',                                          
                                                                            'class'=>['class'=> 'form-control'],
                                                                            'label' => false                               
                                                                            ]); ?>         
                                                
                                            <div class="input-group">                        
                                                    <?= $this->Form->input('descricao', ['class'=>'form-control mr-sm-2',
                                                                               'style'=>'width:100%',
                                                                               'type'=>'search', 
                                                                               'label'=>['class'=>'col-xs-2 control-label'],
                                                                               'placeholder'=>'Nome',
                                                                               'aria-label'=>'Nome',
                                                                               'label' => false,
                                                                               "autocomplete" => "off",
                                                                               'default'=>$this->request->getQuery('descricao')]); ?>               
                                                  

                                                     <div class="input-group-btn">
                                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar
                                                        </button>
                                                    </div>            
                                    <?= $this->Form->end() ?>
                                </div>

                        </div>
                    </ul>
                </div>              
            </div>
          </div>
          <nav class="navbar navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 
</div>
 <div class="row" > 

<div class="projetos index large-9 medium-8 columns content">
              
      <tbody>
            <?php $x = 1;?>
            <?php foreach ($projetosnotas as $projetosnota): ?>
               
            <?php 
                if ($x == 1) { 
                        $card1 = array();  
                        $card1[0] = $this->Number->format($projetosnota->id); 
                        $card1[1] = strtoupper(h($projetosnota->descricao));
                        $card1[2] = h($projetosnota->created);
                        $card1[3] = $projetosnota->has('notatipo') ? $projetosnota->notatipo->descricao : '';
                        $card1[4] = $projetosnota->has('projeto') ? $projetosnota->projeto->descricao : '';

                        //var_dump($card1);
                        $x = $x + 1;                       
                        echo '<div class="card-deck">';
                        echo '<div class="card bg-light mb-3" style="width: 18rem;">';
                        echo '<img class="card-img-top" src="/img/pmboard_blue.png" alt="Card image cap">';                        
                        echo '<div class="card-body">';
                     //   echo '<h5 class="card-title">Light card title</h5>';
                          if ($card1[3]=='INFORMATIVA') {
                             echo '<div class="badge badge-primary text-wrap" style="width: 6rem;">';
                             echo ''.$card1[3].'';
                             echo '</div>';
                        } elseif ($card1[3]=='IMPORTANTE') {                            
                             echo '<div class="badge badge-dark text-wrap" style="width: 6rem;">';
                             echo ''.$card1[3].'';
                             echo '</div>';
                        } elseif ($card1[3]=='DECISÓRIA') {                            
                             echo '<div class="badge badge-danger text-wrap" style="width: 6rem;">';
                             echo ''.$card1[3].'';
                             echo '</div>';
                        } elseif ($card1[3]=='ADVERTÊNCIA') {                            
                             echo '<div class="badge badge-warning text-wrap" style="width: 6rem;">';
                             echo ''.$card1[3].'';
                             echo '</div>';
                        } elseif ($card1[3]=='GERENCIAL') {                            
                             echo '<div class="badge badge-success text-wrap" style="width: 6rem;">';
                             echo ''.$card1[3].'';
                             echo '</div>';
                        } elseif ($card1[3]=='ATENÇÃO') {                            
                             echo '<div class="badge badge-warning text-wrap" style="width: 6rem;">';
                             echo ''.$card1[3].'';
                             echo '</div>';
                        }                            
                        echo '<div class="row">';
                        echo '<h6 class="card-title"><p class="font-weight-bold text-secondary text-uppercase">'.$card1[4].'</p></h6>';
                        echo '</div>';
                        
                        echo '<h5 class="card-subtitle mb-2 text-muted"><p class="font-weight-bold text-primary" >'.$card1[1].'</p></h5>';
                                            
                        echo '<p class="card-text">Abertura: '.$card1[2].'</p>';
                        echo '<p class="card-text">RefId: '.$card1[0].'</p>';
                        //echo '<a href="#" class="card-link">Card link</a>';
                        //echo '<a href="#" class="card-link">Another link</a>';
                        echo '<td class="actions">';
                        echo $this->Html->link(__('View'), ['action' => 'view', $projetosnota->id], array('class' => 'btn btn-info')); 
                        echo $this->Html->link(__('Edit'), ['action' => 'edit', $projetosnota->id],array('class' => 'btn btn-dark')); 
                    //    echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $projeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->id)]) ;
                        echo '</td>';
                        echo '</div>';
                        echo '</div>';                        
                        } elseif ($x == 2) { 
                            $card2 = array();  
                            $card2[0] = $this->Number->format($projetosnota->id); 
                            $card2[1] = strtoupper(h($projetosnota->descricao)); 
                            $card2[2] = h($projetosnota->created);
                            $card2[3] = $projetosnota->has('notatipo') ? $projetosnota->notatipo->descricao : '';
                             $card2[4] = $projetosnota->has('projeto') ? $projetosnota->projeto->descricao : '';
                        //     var_dump($card2);   
                            $x = $x + 1;
                            echo '<div class="card bg-light mb-3" style="width: 18rem;">';
                            echo '<img class="card-img-top" src="/img/pmboard_blue.png" alt="PmBoard logo">';
                            echo '<div class="card-body">';

                               if ($card2[3]=='INFORMATIVA') {
                             echo '<div class="badge badge-primary text-wrap" style="width: 6rem;">';
                             echo ''.$card2[3].'';
                             echo '</div>';
                        } elseif ($card2[3]=='IMPORTANTE') {                            
                             echo '<div class="badge badge-dark text-wrap" style="width: 6rem;">';
                             echo ''.$card2[3].'';
                             echo '</div>';
                        } elseif ($card2[3]=='DECISÓRIA') {                            
                             echo '<div class="badge badge-danger text-wrap" style="width: 6rem;">';
                             echo ''.$card2[3].'';
                             echo '</div>';
                        } elseif ($card2[3]=='ADVERTÊNCIA') {                            
                             echo '<div class="badge badge-warning text-wrap" style="width: 6rem;">';
                             echo ''.$card2[3].'';
                             echo '</div>';
                        } elseif ($card2[3]=='GERENCIAL') {                            
                             echo '<div class="badge badge-success text-wrap" style="width: 6rem;">';
                             echo ''.$card2[3].'';
                             echo '</div>';
                        } elseif ($card2[3]=='ATENÇÃO') {                            
                             echo '<div class="badge badge-warning text-wrap" style="width: 6rem;">';
                             echo ''.$card2[3].'';
                             echo '</div>';
                        }     
                            echo '<div class="row">';
                            echo '<h6 class="card-title"><p class="font-weight-bold text-secondary text-uppercase">'.$card2[4].'</p></h6>';
                            echo '</div>';
                           
                           // echo '<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>';
                            echo '<h5 class="card-subtitle mb-2 text-muted"><p class="font-weight-bold text-primary" >'.$card2[1].'</p></h5>';
                           
                            echo '<p class="card-text">Abertura: '.$card2[2].'</p>';

                            echo '<p class="card-text">RefId: '.$card2[0].'</p>';
                           // echo '<a href="#" class="card-link">Card link</a>';
                           // echo '<a href="#" class="card-link">Another link</a>';
                            echo '<td class="actions">';
                            echo $this->Html->link(__('View'), ['action' => 'view', $projetosnota->id], array('class' => 'btn btn-info')); 
                            echo $this->Html->link(__('Edit'), ['action' => 'edit', $projetosnota->id],array('class' => 'btn btn-dark')); 

                            echo '</div>';
                            echo '</div>';
                            } elseif  ($x == 3) {
                                $card3 = array();  
                                $card3[0] = $this->Number->format($projetosnota->id); 
                                $card3[1] = strtoupper(h($projetosnota->descricao)); 
                                $card3[2] = h($projetosnota->created);
                                $card3[3] = $projetosnota->has('notatipo') ? $projetosnota->notatipo->descricao : '';
                                $card3[4] = $projetosnota->has('projeto') ? $projetosnota->projeto->descricao : '';
                          //      var_dump($card3);    
                                //$x = 1;
                                $x = $x + 1;
                                echo '<div class="card bg-light mb-3" style="width: 18rem;">';
                                echo '<img class="card-img-top" src="/img/pmboard_blue.png" alt="PmBoard logo">';
                                echo '<div class="card-body">';
                                   if ($card3[3]=='INFORMATIVA') {
                             echo '<div class="badge badge-primary text-wrap" style="width: 6rem;">';
                             echo ''.$card3[3].'';
                             echo '</div>';
                        } elseif ($card3[3]=='IMPORTANTE') {                            
                             echo '<div class="badge badge-dark text-wrap" style="width: 6rem;">';
                             echo ''.$card3[3].'';
                             echo '</div>';
                        } elseif ($card3[3]=='DECISÓRIA') {                            
                             echo '<div class="badge badge-danger text-wrap" style="width: 6rem;">';
                             echo ''.$card3[3].'';
                             echo '</div>';
                        } elseif ($card3[3]=='ADVERTÊNCIA') {                            
                             echo '<div class="badge badge-warning text-wrap" style="width: 6rem;">';
                             echo ''.$card3[3].'';
                             echo '</div>';
                        } elseif ($card3[3]=='GERENCIAL') {                            
                             echo '<div class="badge badge-success text-wrap" style="width: 6rem;">';
                             echo ''.$card3[3].'';
                             echo '</div>';
                        } elseif ($card3[3]=='ATENÇÃO') {                            
                             echo '<div class="badge badge-warning text-wrap" style="width: 6rem;">';
                             echo ''.$card3[3].'';
                             echo '</div>';
                        }     
                                echo '<div class="row">';
                                echo '<h6 class="card-title"><p class="font-weight-bold text-secondary text-uppercase">'.$card3[4].'</p></h6>';
                                echo '</div>';
                                //echo '<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>';
                                
                                echo '<h5 class="card-subtitle mb-2 text-muted"><p class="font-weight-bold text-primary" >'.$card3[1].'</p></h5>';
                               
                                echo '<p class="card-text">Abertura: '.$card3[2].'</p>';
                                echo '<p class="card-text">RefId: '.$card3[0].'</p>';
                                //echo '<a href="#" class="card-link">Card link</a>';
                                //echo '<a href="#" class="card-link">Another link</a>';
                                 echo '<td class="actions">';
                                echo $this->Html->link(__('View'), ['action' => 'view', $projetosnota->id], array('class' => 'btn btn-info')); 
                                echo $this->Html->link(__('Edit'), ['action' => 'edit', $projetosnota->id],array('class' => 'btn btn-dark')); 
                                echo '</div>';
                                echo '</div>';                                
                            } else {
                                $card4 = array();  
                                $card4[0] = $this->Number->format($projetosnota->id); 
                                $card4[1] = strtoupper(h($projetosnota->descricao)); 
                                $card4[2] = h($projetosnota->created);
                                $card4[3] = $projetosnota->has('notatipo') ? $projetosnota->notatipo->descricao : '';
                                 $card4[4] = $projetosnota->has('projeto') ? $projetosnota->projeto->descricao : '';
                          //      var_dump($card3);    
                                $x = 1;
                                //$x = $x + 1;
                                
                                echo '<div class="card bg-light mb-3" style="width: 18rem;">';
                                echo '<img class="card-img-top" src="/img/pmboard_blue.png" alt="PmBoard logo">';
                                echo '<div class="card-body">';
                                  if ($card4[3]=='INFORMATIVA') {
                                 echo '<div class="badge badge-primary text-wrap" style="width: 6rem;">';
                                 echo ''.$card4[3].'';
                                 echo '</div>';
                                } elseif ($card4[3]=='IMPORTANTE') {                            
                                 echo '<div class="badge badge-dark text-wrap" style="width: 6rem;">';
                                 echo ''.$card4[3].'';
                                 echo '</div>';
                                } elseif ($card4[3]=='DECISÓRIA') {                            
                                 echo '<div class="badge badge-danger text-wrap" style="width: 6rem;">';
                                 echo ''.$card4[3].'';
                                 echo '</div>';
                                } elseif ($card4[3]=='ADVERTÊNCIA') {                            
                                 echo '<div class="badge badge-warning text-wrap" style="width: 6rem;">';
                                 echo ''.$card4[3].'';
                                 echo '</div>';
                                } elseif ($card4[3]=='GERENCIAL') {                            
                                     echo '<div class="badge badge-success text-wrap" style="width: 6rem;">';
                                     echo ''.$card4[3].'';
                                     echo '</div>';
                                } elseif ($card4[3]=='ATENÇÃO') {                            
                                     echo '<div class="badge badge-warning text-wrap" style="width: 6rem;">';
                                     echo ''.$card4[3].'';
                                     echo '</div>';
                                }    

                                echo '<div class="row">';    
                                echo '<h6 class="card-title"><p class="font-weight-bold text-secondary text-uppercase">'.$card4[4].'</p></h6>';
                                //echo '<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>';
                                echo '</div>';
                             
                                echo '<h5 class="card-subtitle mb-2 text-muted"><p class="font-weight-bold text-primary" >'.$card4[1].'</p></h5>';
                                
                                echo '<p class="card-text">Abertura: '.$card4[2].'</p>';

                                echo '<p class="card-text">RefId: '.$card4[0].'</p>';
                                //echo '<a href="#" class="card-link">Card link</a>';
                                //echo '<a href="#" class="card-link">Another link</a>';
                                 echo '<td class="actions">';
                                echo $this->Html->link(__('View'), ['action' => 'view', $projetosnota->id], array('class' => 'btn btn-info'));
                                echo $this->Html->link(__('Edit'), ['action' => 'edit', $projetosnota->id],array('class' => 'btn btn-dark'));  
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                                      
                           }
            ?>       
                                 

            <?php endforeach; ?>
          
      </tbody>
      <p>
   </div>
    <div class="row" > 
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
    

</div>

                                    </div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>