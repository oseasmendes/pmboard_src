  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= $this->Url->build('/admin', ['fullBase'=>true]) ?>" class="brand-link">

    <?= 
      $this->Html->image("/dist/img/AdminLTELogo.png",[
                      "alt"=>"AdminLTE Logo",
                      "class"=>"brand-image img-circle elevation-3",
                      "style"=>"opacity: .8"
      ])
    ?>
     
      <span class="brand-text font-weight-light">ProjectOMBoard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

            <?= 
             /* $this->Html->image("/dist/img/user2-160x160.jpg",[
                              "alt"=>"User Image",
                              "class"=>"img-circle elevation-2",                             
              ]) */

              $this->Html->image("/dist/img/user_2.jpg",[
                              "alt"=>"User Image",
                              "class"=>"img-circle elevation-2",                             
              ])
            ?>
          
        </div>
        <div class="info">
          <a href="#" class="d-block">OnLine User</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= $this->Url->build('/dashboards', ["fullBase" => true]) ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Dados Básicos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $this->Url->build('/empresas', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empresas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/empresasunidades', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Filiais</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/programas', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Programas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/projetos', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projetos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/projetosprodutos', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produtos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/projetosprodutosentregas', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entregas</p>
                </a>
              </li>             
              <li class="nav-item">
                <a href="<?= $this->Url->build('/consultores', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultores</p>
                </a>
              </li>   
              <li class="nav-item">
                <a href="<?= $this->Url->build('/sistemas', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sistemas</p>
                </a>
              </li>             
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Recursos Humanos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $this->Url->build('/consultores', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Colaboradores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/competencias', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Competências</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/consultoresausenciastipos', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ausências Tipos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/consultoresausencias', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ausências Planejadas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/consultoresnotas', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notificações</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/consultoresvrstecnologias', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Colaboradores X Tecnologia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/ocorrencias', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ocorrencias</p>
                </a>
              </li>             
            </ul>
          </li> 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-arrow-circle-right"></i>
              <p>
                Parceiros
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $this->Url->build('/consultorias', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/participantes', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Participantes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/consultoresnotas', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notificações</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/consultoresvrstecnologias', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Colaboradores X Tecnologia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/ocorrencias', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ocorrencias</p>
                </a>
              </li>             
            </ul>
          </li> 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-university"></i>              
              <p>
                Organização
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $this->Url->build('/portfolios', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Portfolios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/programas', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Programas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/projetos', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projetos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/projetosprodutos', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produtos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/projetosprodutosentregas', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entregas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/consultores', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultores</p>
                </a>
              </li>             
            </ul>
          </li>                 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>              
              <p>
                Parâmetros
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $this->Url->build('/statusfuncionals', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Status Funcional</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/unidademedidas', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unidade de Medidas</p>
                </a>
              </li>              
            </ul>
          </li> 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>              
              <p>
                ETL-Jira     
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $this->Url->build('/jiraetlagentes', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jira x Agentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/jiraetlcomponentes', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jira x Componentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/jiraetlparetos', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jira x Paretos</p>
                </a>
              </li>                            
            </ul>
          </li>
          <li class="nav-item has-treeview">
             <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i> 
              <p>
                Comercial
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $this->Url->build('/clientes', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/peoples', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Membros</p>
                </a>
              </li>              
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Organização
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $this->Url->build('/bussinessunits', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Congregação</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/peoples', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Membros</p>
                </a>
              </li>              
            </ul>
          </li>          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>              
              <p>
                Eventos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $this->Url->build('/agendas', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agenda</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/todos', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ToDo List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/fivewthreehs', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Open Points</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/projetosblockpoints', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Impedimentos de Projetos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/entregasblockpoints', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Impedimentos de Entregas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/projetosprodutosentregasflws', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entregas Follows</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/programasnotas', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notícias do Programa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $this->Url->build('/projetosnotas', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notícias de Projetos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Comunicados</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="<?= $this->Url->build('/logbooks', ["fullBase" => true]) ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diário de Bordo</p>
                </a>
              </li>                            
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Relatórios                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout                
              </p>
            </a>
          </li>                
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>