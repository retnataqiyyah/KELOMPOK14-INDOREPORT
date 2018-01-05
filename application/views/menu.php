
<!-- content -->
<div class="container jumbotron">
	<div class="row">
		<div class="col-md-8">
			<?php foreach ($berita as $br){ ?>

			<div class="row">
			<div class="col-md-6"><img src="<?php echo base_url(); ?>assets/images/<?php echo $br->image;?>" class="img-thumbnail"></div>
			<div class="col-md-6">
				<a href=""><h3><?php echo $br->judul_berita; ?></h3></a>
				<a href=""><h5><i class="fa fa-user-circle" aria-hidden="true"></i>
				<?php echo $br->penulis; ?></h5></a>
				<p><h5><?php echo word_limiter($br->isi_berita,50); ?></h5></p>
			</div>
			</div>
		<?php
		}?>
		</div>

<!-- content -->
   