<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Data User</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/tambah_manajemenuser',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <tr><th width='120px' scope='row'>Username <span style=\"color: red;\">*</span></th>   <td><input type='text' class='form-control' name='a' required></td></tr>
                    <tr><th scope='row'>Password <span style=\"color: red;\">*</span></th>                 <td><input type='password' class='form-control' name='b' required></td></tr>
                    <tr><th scope='row'>Nama Lengkap <span style=\"color: red;\">*</span></th>             <td><input type='text' class='form-control' name='c' required></td></tr>
                    <tr><th scope='row'>Email <span style=\"color: red;\">*</span></th>                    <td><input type='email' class='form-control' name='d' required></td></tr>
                    <tr><th scope='row'>No Telp <span style=\"color: red;\">*</span></th>                  <td><input type='number' class='form-control' name='e' required></td></tr>
                    <tr><th scope='row'>Level</th>                    <td><input type='radio' name='g' value='admin' checked> Admin &nbsp; <input type='radio' name='g' value='superadmin'> Super Admin </td></tr>
                    <tr><th scope='row'>Blokir</th>                   <td><input type='radio' name='h' value='Y'> Ya &nbsp; <input type='radio' name='h' value='N' checked> Tidak</td></tr>
                    <tr><th scope='row'>Foto</th>                     <td><input type='file' class='form-control' name='f' accept=\"image/*\"></td></tr>
                  </tbody>
                  </table></div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info pull-right'>Tambahkan</button>
                    <a href='".base_url('administrator/manajemenuser')."'><button type='button' class='btn btn-default'>Batal</button></a>
                    
                  </div>
            </div>";