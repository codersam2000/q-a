<?php require_once 'components/header.php'; ?>
	<div class="profile">
			<?php
			if (isset($_GET['id'])) {
			$id = base64_decode($_GET['id']);
			$result = mysqli_query($conn,"SELECT * FROM `users` WHERE `id`='$id'");
			$profile = mysqli_fetch_assoc($result);
			?>
			<div class="card">
			  <img src="uploads/<?= $profile['photo']; ?>" alt="profile" style="width:100%">
			  <h1><?=$profile['name'] ; ?></h1> <span class="p-time mb-3">Points : <?= $profile['points']; ?></span>
			  <?php
	 				if($profile['points']>=200){
	 					?>
	 					<i class="fa fa-trophy" style="color: #fdad1b;"></i>
	 					<p class="title">Gold User</p>
	 					<?php
	 				}elseif($profile['points']>=150){
	 					?>
	 					<i class="fa fa-trophy" style="color: silver;"></i>
	 					<p class="title">Silver User</p>
	 					<?php
	 				}elseif($profile['points']>=101){
	 					?>
	 					<i class="fa fa-trophy" style="color: #7d6329"></i>
	 					<p class="title">Bronze User</p>
	 					<?php
	 				}else{
	 					?>
	 					<span style="font-size: 10px; border:1px solid black;">NEW</span>
	 					<p class="title">Standerd User</p>
	 					<?php
	 				} 
	 				?>
			  <div style="margin: 24px 0;">
			    <a href="#"><i class="fa fa-dribbble"></i></a> 
			    <a href="#"><i class="fa fa-twitter"></i></a>  
			    <a href="#"><i class="fa fa-linkedin"></i></a>  
			    <a href="#"><i class="fa fa-facebook"></i></a> 
			  </div>
			  <p><a href="<?= isset($profile) ? 'mailto:'.$profile['email'] : '' ?>"><button>Contact</button></a></p>
			  <?php
			}else{
				?>
				<script>
					window.location.href="index.php";
				</script>
				<?php
			}
			  ?>

		</div>
	</div>
<?php require_once 'components/footer.php';?>	