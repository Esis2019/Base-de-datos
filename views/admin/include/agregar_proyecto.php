<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Proyectos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">RSU</a></li>
              <li class="breadcrumb-item active">Proyectos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Formulario Productos</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputNombreProyecto">Nombre del Proyecto</label>
                    <input type="text" class="form-control" id="exampleInputNombreProyecto" placeholder="Ingrese Nombre del Proyecto">
                </div>
                <!-- /.form-group -->

                <div class="card-body pad">
                    <label for="exampleInputNombreProyecto">Población objetivo</label>
                    <div class="mb-3">
                        <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 400px; font-size: 14px; line-height: 38px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Date masks:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input id="party" type="datetime-local" class="form-control" name="partydate" min="2017-06-01T08:30" max="2017-06-30T16:30">
                  </div>
                  <!-- /.input group -->
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPresupuestoProyecto">Presupuesto del Proyecto</label>
                    <input type="text" class="form-control" id="exampleInputPresupuestoProyecto" placeholder="Ingrese Presupuesto del Proyecto">
                </div>
                <!-- /.form-group -->
                <div class="card-body pad">
                    <label for="exampleInputNombreProyecto">Diagnostico del Proyecto</label>
                    <div class="mb-3">
                        <textarea class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 400px; font-size: 14px; line-height: 38px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
