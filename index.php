
<?php
include 'kepala.php';

?>


<nav class="navbar navbar-default"><?php include("item.php"); ?></nav>

        <article>

            <div class="container wrap">
                <div class="row">
                    <div class="col-md-12">
                        <?php
						    $q4 = $sql->query("select * from tbl_artikel");
						     while ($t = mysqli_fetch_array($q4)) {
						     	?>
								  <div class="content-kop">
								  	<div id="judul">
								  		<b><h2><?php echo $t['1']; ?></h2></b>
								  		<p class="artikel-penulis">Oleh <?php echo $t['3']; ?></p>
								  	</div>
								  </div>
								  <div class="content-isi">
								  	<?php echo substr($t['2'], 0, 50); ?>...[<a href="content.php?id=<?php echo $t['0']; ?>">Selengkapnya</a>]
								  </div>
								  <hr/>
						     	<?php
						     }
						    ?>

                    </div>
                </div>
            </div>
        </article>


<?php
include 'footer.php';
?>

