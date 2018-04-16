<?php echo form_open('billing/save_order'); ?>

<div class="form-group">
  <label>Nama</label>
  <input type="text" name="nama" class="form-control">
</div>
<label>Email</label>
<input type="text" name="email" class="form-control">
</div>
<br>
<button type="submit" class="btn btn-info">Order</button>
<?php echo form_close(); ?>
