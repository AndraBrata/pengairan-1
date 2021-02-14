<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Berita Baru ".$this->session->disabled." </h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart('administrator/tambah_listberita',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <input type='hidden' name='f' value='N'>
                    <input type='hidden' name='g' value='N'>

                    <tr><th width='120px' scope='row'>Judul</th>    <td><input type='text' class='form-control' name='b' required></td></tr>
                    <tr><th scope='row'>Sub Judul</th>              <td><input type='text' class='form-control' name='c'></td></tr>
                    <tr><th scope='row'>Video Youtube</th>          <td><input type='text' class='form-control' name='d' placeholder='Contoh link: http://www.youtube.com/embed/xbuEmoRWQHU'></td></tr>
                    <tr><th scope='row'>Kategori Prodi</th>         <td><select name='kategori-prodi' class='form-control' required>
                                                                            <option value='' selected>- Pilih Kategori Prodi -</option>";
                                                                            foreach ($prodi->result_array() as $row){
                                                                                echo "<option value='$row[id_prodi]'>$row[nm_prodi]</option>";
                                                                            }
                    echo "</td></tr>
                    <tr><th scope='row'>Kategori Berita</th>               <td><select name='a' class='form-control' required>
                                                                            <option value='' selected>- Pilih Kategori Berita -</option>";
                                                                            foreach ($record->result_array() as $row){
                                                                                echo "<option value='$row[id_kategori]'>$row[nama_kategori]</option>";
                                                                            }
                    echo "</td></tr>
                    <tr><th scope='row'>Tanggal</th>            <td><input type='date' class='form-control' name='date'></td></tr>
                    <tr><th scope='row'>Headline</th>               <td><input type='radio' name='e' value='Y'> Ya &nbsp; <input type='radio' name='e' value='N' checked> Tidak</td></tr>";
                    echo "
                    <tr><th scope='row'>Daftar Foto</th>               <td><select name='foto' id='foto' class='form-control'>
                                                                            <option value='' selected>- Pilih Foto -</option>";
                                                                            foreach ($foto as $row){
                                                                              echo "<option value='$row[name_gmbr]'>$row[name]</option>";
                                                                            }
                    echo " </td>
                    </tr>
                    <tr><th scope='row'>URL Foto</th>               <td><input type='text' id='urlfoto' class='form-control' readonly></td></tr>                                                  
                    <tr><th scope='row'>Isi Berita</th>             <td><textarea id='editor1' class='ckeditor form-control' name='h' style='height:260px' required></textarea></td></tr>
                    <tr><th scope='row'>Thumbnail</th>                 <td><input type='file' class='form-control' name='k' accept=\"image/*\"></td></tr>
                    <tr><th scope='row'>Ket. Gambar</th>            <td><input type='text' class='form-control' name='i'></td></tr>
                    <tr><th scope='row'>Tag</th>                    <td>";
                                                                            foreach ($tag->result_array() as $tag){
                                                                                echo "<span style='display:inline-block;'><input type=checkbox value='$tag[tag_seo]' name=j[]>$tag[nama_tag] &nbsp; &nbsp; &nbsp; </span>";
                                                                            }
                    echo "</td></tr>
                  </tbody>
                  </table>
                </div>
              </div>
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url('administrator/listberita')."'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div>";
?>
      <script type="text/javascript"> 
        $('#foto').on('change', function() {
          var nameImg = document.getElementById("foto").value;
          document.getElementById("urlfoto").value = '<?php echo base_url('asset/foto/'); ?>'+'/'+nameImg;
        });
      </script>
