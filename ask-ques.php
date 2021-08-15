<?php require_once 'components/header.php'; ?>
<?php if (!isset($_SESSION['user_login'])): ?>
<script>
	window.location.href="login.php";
</script>
<?php endif ?>
<div class="content">
        <div class="content-body">
            <div class="row">
               <div class="col-sm-2 col-md-2 mb-none">
                <?php require_once 'components/left-sitebar.php';?>
               </div>
               <div class="col-sm-7 col-md-7">
                    <form action="app/ask.php" method="post" class="mb-3">
                    	Select a subject or category:
                    	<select name="sub-id" class="form-control">
                    		<?php
							 $result = mysqli_query($conn,"SELECT * FROM `subjects`");
							 if (mysqli_num_rows($result)>0)
							 {
						 		while ($sub_row = mysqli_fetch_assoc($result)) {
						 			?>
						 			<option value="<?= $sub_row['id']; ?>"><?= $sub_row['name']; ?></option>
						 			<?php
						 		}
						 	}	
							?>
                    	</select>
                    	Your Question:
                    	<textarea name="ques" class="form-control mb-3" cols="30" rows="5"></textarea>
                    	Offer points for answer:
                    	<select name="point">
                    		<option value="1">1 point</option>
                    		<option value="2">2 points</option>
                    		<option value="3">3 points</option>
                    		<option value="4">4 points</option>
                    		<option value="5">5 points</option>
                    		<option value="6">6 points</option>
                    		<option value="7">7 points</option>
                    		<option value="8">8 points</option>
                    		<option value="9">9 points</option>
                    		<option value="10">10 points</option>
                    	</select>
                    	<button type="submit" name="ask" class="btn btn-danger pull-right">Ask</button>
                    </form>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="left-sitebar">
                        <?php require_once 'components/right-sitebar.php';?>
                    </div>
                </div> 
            </div>
        </div>                  
    </div>
<?php require_once 'components/footer.php';?>
