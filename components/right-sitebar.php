<div class="mb-4">
	<a class="ask-a-ques" href="ask-ques.php">Ask a question</a>
</div>
<div class="best-users">
    <p>BEST USERS</p>
    <ul>	
    <?php
	$result = mysqli_query($conn,"SELECT * FROM `users` ORDER BY `points` DESC");
	 if (mysqli_num_rows($result)>0) {
	 		while ($user_row = mysqli_fetch_assoc($result)) {
	 			?>
	 			<li  class="post-info mt-3">
	 				<div class="mr-1">
	 				<img src="uploads/<?= $user_row['photo']; ?>" height="50" width="50" alt="photo">
	 				</div>
	 				<div>
	 				<p><a href="profile.php?id=<?= base64_encode($user_row['id']);?>"><?= $user_row['name']; ?></a>
	 				<?php
	 				if($user_row['points']>=200){
	 					?>
	 					<i class="fa fa-trophy" style="color: #fdad1b;"></i>
	 					<?php
	 				}elseif($user_row['points']>=150){
	 					?>
	 					<i class="fa fa-trophy" style="color: silver;"></i>
	 					<?php
	 				}elseif($user_row['points']>=101){
	 					?>
	 					<i class="fa fa-trophy" style="color: #7d6329"></i>
	 					<?php
	 				}else{
	 					?>
	 					<span style="font-size: 10px; border:1px solid black;">NEW</span>
	 					<?php
	 				} 
	 				?>
	 				</p>
	 				<span class="p-time">Points : <?= $user_row['points']; ?></span>
	 				</div>
	 			</li>
	 			<?php
	 		}
	 	}	
	?>
    </ul>
</div>