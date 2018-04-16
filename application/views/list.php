<div class="col-md-3">
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Keranjang Belanja</h3>
  </div>
  <div class="panel-body">
    <?php $cart = $this->cart->contents();
          $grand_total = 0;
          ?>
          <?php if(empty($cart)) { ?>
            <p>Keranjang Kosong</p>
          <?php }else{ ?>
            <?php foreach($cart as $item) : ?>
              <a class="list-group-item"><?php echo $item['name']; ?> (<?php echo $item['qty']; ?> x <?php echo number_format($item['price'],0,",","."); ?>) = <?php echo number_format($item['subtotal'],0,",","."); ?></a>
            <?php endforeach;} ?>
  </div>
</div>
</div>


<div class="col-md-9">

<?php foreach($produk as $product) : ?>
  <div class="col-md-3">
<?php echo form_open('shop/tambah'); ?>

<div class="well dash-box">
  <img width="50px" height="50px"  src="<?php echo site_url(); ?>assets/images/produk/<?php echo $product['gambar']; ?>">
  <h5><?php echo $product['nama']; ?></h5>
  <p><?php echo $product['harga']; ?></p>
  <button type="submit" class="btn btn-info">Beli</button>
</div>
   <input type="hidden" name="id" value="<?php echo $product['id']; ?>" />
   <input type="hidden" name="nama" value="<?php echo $product['nama']; ?>" />
   <input type="hidden" name="harga" value="<?php echo $product['harga']; ?>" />
   <input type="hidden" name="gambar" value="<?php echo $product['gambar']; ?>" />
   <input type="hidden" name="qty" value="1" />

<?php echo form_close(); ?>
</div>
<?php endforeach; ?>

</div>
