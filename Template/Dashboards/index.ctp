 <?php
  // if (!empty($title)) {
  //  $this->assign("title",$title);
 //}
 ?>
 
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">WorkSpace Projects</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $openProject ?></h3>

                <p>Projetos Ativos</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= $this->Url->build('/projetos', ["fullBase" => true]) ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <!-- <h3>0<sup style="font-size: 20px">%</sup></h3> -->
                <h3><?= $openPoint ?></h3>

                <p>Open Points</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>              
              <a href="<?= $this->Url->build('/5w3h', ["fullBase" => true]) ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $openEsupport ?></h3>

                <p>Entregas Em Andamento</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?= $this->Url->build('/entregas', ["fullBase" => true]) ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">

                <h3><?= $numberBlockpoints ?></h3>

                <p>Impedimentos</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?= $this->Url->build('/projetosblockpoints', ["fullBase" => true]) ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">

                <h3><?= $followToday ?></h3>

                <p>Follow-Up</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?= $this->Url->build('/fup', ["fullBase" => true]) ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->