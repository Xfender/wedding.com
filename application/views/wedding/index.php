  <div class="container">
    <div class="header">
      <a class="btn btn-secondary" href="<?php echo base_url(); ?>wedd/Vcreate" role="button">Tambah Data</a> 
    </div>
    <div class="content">
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Harga</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($wedding as $wedding): ?>
            <tr>
              <th scope="row"><?php echo $wedding['id_package']?></th>
              <td><?php echo $wedding['nama_package']?></td>
              <td><?php echo $wedding['harga']?></td>
              <td><?php echo $wedding['descript']?></td>
              <td>
                <a class="btn btn-secondary" href="<?php echo base_url().'wedd/edit/' . $wedding['id_package'];?>">Edit</a>
                <a class="btn btn-secondary" href="<?php echo base_url().'wedd/delete/' . $wedding['id_package'];?>">Delete</a>
              </td>
            </tr>
          <?php endforeach ?>
          </tbody>
        </table>  
    </div>
    
  </div>