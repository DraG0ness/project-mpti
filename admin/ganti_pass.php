<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Password</h3>
<br/><br/>
<?php 
if(isset($_GET['pesan'])){
	$pesan=mysqli_real_escape_string($x, $_GET['pesan']);
	if($pesan=="gagal"){
		echo "<div class='alert alert-danger'>Password gagal di ganti !!     Periksa Kembali Password yang anda masukkan !!</div>";
	}else if($pesan=="tidaksama"){
		echo "<div class='alert alert-warning'> konfirmasi password baru tidak sama </div>";
	}else if($pesan=="oke"){
		echo "<div class='alert alert-success'> Berhasil Ganti Password! </div>";
	}
}
?>

<br/>
<div class="col-md-5 col-md-offset-3">
	<form action="proses/p_update_pass.php" method="post">
		<div class="form-group">
			<input name="id" type="hidden" value="<?php echo $_SESSION['id']; ?>">
		</div>
		<div class="form-group">
			<label>Password Lama</label>
			<input name="lama" type="password" class="form-control" placeholder="Password Lama ..">
		</div>
		<div class="form-group">
			<label>Password Baru</label>
			<input name="baru" type="password" class="form-control" placeholder="Password Baru ..">
		</div>
		<div class="form-group">
			<label>Ulangi Password</label>
			<input name="ulang" type="password" class="form-control" placeholder="Ulangi Password ..">
		</div>	
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" value="Simpan">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>
</div>


<?php 
include 'footer.php';

?>