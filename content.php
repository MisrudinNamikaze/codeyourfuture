
<?php
include 'kepala.php';
session_start();
?>


<nav class="navbar navbar-default"><?php include("item.php"); ?></nav>

        <article>

            <div class="container wrap">
                <div class="row">
                    <div class="col-md-12">
                        <?php
						    if (isset($_GET['id'])) {
						    	$_SESSION['id'] = $_GET['id'];
						    	$id= $_GET['id'];
						    	$q6 = $sql->query("select * from tbl_artikel where id='$id' LIMIT 1");
						     	while ($t = mysqli_fetch_array($q6)) {
						     	?>
								  <div class="artikel-kop">
								  	<div id="judul">
								  		<b><h2><?php echo $t['1']; ?></h2></b>
								  		<p class="artikel-penulis">Oleh <?php echo $t['3']; ?></p>
								  	</div>
								  </div>
								  <div class="artikel-isi">
								  	<?php echo $t['2']; ?>
								  </div>
								  <hr/>
						     	<?php
						     }
						   }

						    if (isset($_GET['komen'])) {
						    	$nama = $_GET['nama'];
						    	$komentar = $_GET['komenpost'];
						    	$idpost = $_SESSION['id'];

						    	$q7 = $sql->query("insert into tbl_komentar(nama, comment, postId)values('$nama', '$komentar', '$idpost')");

						    	if ($q7==TRUE) {
						    		echo "<script>swal('Komentar Berhasil Dikirim')</script>";
						    	}else{
						    		echo "gagal";
						    	}
						    }

						?>


					   <div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title"><center>Komentar</center></h4>
							</div>
							<div class="modal-body">
								<form action="" method="get">
								<div class="form-group">
									<input class="form-control" type="text" name="nama" placeholder="Masukan Nama"><br>
									<input class="form-control" type="text" name="komenpost" placeholder="Masukan komentar anda">
								</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-default" name="komen">Kirim</a>
								</form>
							</div>
						</div>
					   </div>

					   <!-- Start Komentar -->
					   <?php
					   $postid = $_SESSION['id'];
					   $q9 = $sql->query("select * from tbl_komentar where postId='$postid'");
						     while ($ps = mysqli_fetch_array($q9)) {
						 ?>
						<div class="container">
						  <div class="row">
						    <div class="col-md-8">
						      <h2 class="page-header">Comments</h2>
						        <section class="comment-list">
						          <!-- First Comment -->
						          <article class="row">
						            <div class="col-md-2 col-sm-2 hidden-xs">
						              <figure class="thumbnail">
						                <figcaption class="text-center"><?php echo $ps['1']; ?></figcaption>
						              </figure>
						            </div>
						            <div class="col-md-10 col-sm-10">
						              <div class="panel panel-default arrow left">
						                <div class="panel-body">
						                  <div class="comment-post">
						                    <p>
						                      <?php echo $ps['2']; ?>
						                    </p>
						                  </div>
						                </div>
						              </div>
						            </div>
						        </section>
						    </div>
						  </div>
						</div>
						<?php
						}
						?>

					   <!-- End Komentar -->

                    </div>
                </div>
            </div>
        </article>


<?php
include 'footer.php';
?>

