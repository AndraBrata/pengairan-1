<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Data Dosen</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('edit-dosen/'.$rows['id_dosen'],$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id_dosen' value='$rows[id_dosen]'>
                    <tr><th width='120px' scope='row'>Nama Dosen</th>   <td><input type='text' class='form-control' name='name' value='$rows[nm_dosen]'></td></tr>
                    <tr><th scope='row'>Golongan & Pangkat</th>   <td><input type='text' class='form-control' name='golpang' value='$rows[golpang]'></td></tr>";
                    echo "</td></tr>
                    <tr><th width='120px' scope='row'>NIP/NIK</th>   <td><input type='text' class='form-control' name='nipnik' value='$rows[nipnik]'></td></tr>
                    <tr><th scope='row'>NIDN</th>   <td><input type='text' class='form-control' name='nidn' value='$rows[nidn]'></td></tr>
                    <tr><th scope='row'>Bidang Ilmu</th>   <td><input type='text' class='form-control' name='bidang' value='$rows[bidang]'></td></tr>
                    <tr><th scope='row'>Blog Dosen</th>   <td><input type='text' class='form-control' name='blog' value='$rows[blog]'></td></tr>
                    <tr><th scope='row'>Ganti Foto</th>          <td><input type='file' class='form-control' name='d'>";
                                                                   if ($rows['gbr_dosen']!=''){ echo " Gambar Saat ini : <a target='_BLANK' href='".base_url()."asset/img_galeri/$rows[gbr_dosen]'>$rows[gbr_dosen]</a>"; } echo "</td></tr>
                    <tr><th scope='row'>Background Pendidikan</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='pendidikan'>$rows[pendidikan]</textarea></td></tr>
                    <tr><th scope='row'>Penghargaan</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='penghargaan'>$rows[penghargaan]</textarea></td></tr>
                    <tr><th scope='row'>Penelitian</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='penelitian'>$rows[penelitian]</textarea></td></tr>
                    <tr><th scope='row'>Publikasi</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='publikasi'>$rows[publikasi]</textarea></td></tr>
                    <tr><th scope='row'>Link Publikasi</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='linkpub'>$rows[linkpub]</textarea></td></tr>
                    <tr><th scope='row'>Buku</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='buku'>$rows[buku]</textarea></td></tr>
                    <tr><th scope='row'>Pengabdian</th>                 <td><textarea id='editor1' class='ckeditor form-control' name='pengabdian'>$rows[pengabdian]</textarea></td></tr>  
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url('dosen')."'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();