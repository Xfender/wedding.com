  <div class="container">
    <div class="header">
      <a class="btn btn-secondary" href="<?php echo base_url(); ?>wedd" role="button">Home</a> 
    </div>
    <div class="content">
        <?php echo form_open('wedd/create')?>
          <div class="form-group">
            <label>ID Paket</label>
            <input type="text" name="IdPaket" class="form-control">
          </div>
          <div class="form-group">
            <label>Nama Paket</label>
            <input type="text" name="NamaPaket" class="form-control">
          </div>
          <div class="form-group">
            <label>Harga Paket</label>
            <input type="text" name="Harga" class="form-control">
          </div>
          <div class="form-group">
            <label>Example textarea</label>
            <textarea class="form-control" name="Deskripsi" rows="3"></textarea>
          </div>
          <div align="center">
            <input class="btn btn-secondary" type="submit" value="Save">
          </div>
        </form>
    </div>
  </div>