<div class="container">
  <div class="header">
    <a class="btn btn-secondary" href="<?php echo base_url(); ?>wedd" role="button">Home</a> 
  </div>
  <div class="content">
      <?php echo form_open('wedd/update')?>
          <input type="hidden" name="IdPaket" value="<?php echo $wedding['id_package']?>">
        <div class="form-group">
          <label>Nama Paket</label>
          <input type="text" name="NamaPaket" class="form-control" value="<?php echo $wedding['nama_package']?>">
        </div>
        <div class="form-group">
          <label>Harga Paket</label>
          <input type="text" name="Harga" class="form-control" value="<?php echo $wedding['harga']?>">
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea class="form-control" name="Deskripsi" rows="3" ><?php echo $wedding['descript']?></textarea>
        </div>
        <div align="center">
          <input class="btn btn-secondary" type="submit" value="edit">
        </div>
      </form>
  </div>
</div>