<div class="subjects">
	<p>SUBJECTS</p>
	<ul>
		<?php
		 $result = mysqli_query($conn,"SELECT * FROM `subjects`");
		 if (mysqli_num_rows($result)>0) {
		 		while ($sub_row = mysqli_fetch_assoc($result)) {
		 			?>
		 			<li><i class="fa fa-book"></i> <a href="subjective.php?id=<?= base64_encode($sub_row['id']);?>"><?= $sub_row['name']; ?></a></li>
		 			<?php
		 		}
		 	}	
		?>
	</ul>
</div>