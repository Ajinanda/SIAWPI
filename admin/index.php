<?php
  $content = '<div class="row">
                <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Dostors List</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="doctors" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>CNIC</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>CNIC</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
            </div>';

  include('../template/t_dashboard.php');
?>