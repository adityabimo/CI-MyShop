
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aditya Shop</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="<?php echo base_url(); ?>shop/tampil_cart">Cart</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br>
    <div class="container">
      <div class="row">




<?php echo form_open('shop/update'); ?>


<table class="table table-striped">
  <thead>
  <tr>
    <th>Nama</th>
    <th>Jumlah</th>
    <th>Total Harga</th>
    <th>Aksi</th>
  </tr>
 </thead>
 <tbody>
<?php //$i = 1; ?>
<?php foreach($this->cart->contents() as $item) : ?>
  <tr>

    <?php echo form_hidden('rowid[]', $item['rowid']); ?>

    <td><?php echo $item['name']; ?></td>
    <td> <input type="text" name="jmlh[]" value="<?php echo $item['qty']; ?>"> </td>
    <?php $item['subtotal'] = $item['qty'] * $item['price']; ?>
    <td><?php echo $item['subtotal']; ?></td>
    <td> <a class="btn btn-danger" href="<?php echo base_url();?>shop/delete/<?php echo $item['rowid']  ?>">Hapus</a> </td>
    <?php //$i++; ?>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
<button type="submit" class="btn btn-default pull-left">Update Cart</button>
<?php echo form_close(); ?>
<?php echo form_open('shop/clear'); ?>
<button type="submit" style="margin-left:15px" class="btn btn-default pull-left ">Clear Cart</button>
<?php echo form_close(); ?>
<a class="btn btn-default pull-left" style="margin-left:15px" href="<?php echo base_url();?>billing">Order Now!</a>
</div><!-- /.row -->
</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
