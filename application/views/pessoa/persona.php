      <div class="row">


          <!-- right column -->
          <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title"> <?php echo "Usuario :" . $this->session->userdata('s_usuario'); ?></h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->

                  <form action="<?= base_url() ?>pessoa/atualizar" class="form-horizontal" method="post">
                      <div class="box-body">

                          <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nome" id="inputEmail3" placeholder="Digite o seu nome">
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Sobrenome</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="sobrenome" id="inputEmail3" placeholder="Digite o seu sobrenome">
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Apelido</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="apelido" id="inputEmail3" placeholder="Digite o seu apelido">
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Digite o seu email">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-sm-10 pull-right">

                                  <button type="submit" class="btn btn-primary">Atualizar</button>
                              </div>
                          </div>

                      </div>
                  </form>

                  <form class="form-horizontal" action="<?= base_url() ?>pessoa/delete" method="post">
                      <div class="box-body">

                          <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">ID</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="idPessoa" placeholder="ID">
                              </div>
                          </div>

                          <div class="form-group">
                          <div class="col-sm-10 pull-right">

                                  <button type="submit" class="btn btn-danger">Eliminar</button>
                              </div>
                          </div>

                      </div>
                  </form>
              </div>
              <!-- /.box -->
          </div>
      </div>