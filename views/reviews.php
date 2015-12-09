 <script>
        // rating script
        $(function(){ 
            $('.rate-btn').click(function(){    
                var therate = $(this).attr('id');
               $('#rating').val(therate);
                 $(this).parent().find('.rate-btn').removeClass('rate-btn-active');
                for (var i = therate; i >= 0; i--) {
                    $(this).parent().find('.rate-btn-'+i).addClass('rate-btn-active');
                };
                            });
        });
    </script>
<script>
      $(document).ready(function(e){
         $('.panel').each(function(e){
             var countid=$(this).find('.rate-ex1-cnt').attr("countid");
             for(var i=0;i<=countid;i++){
                   $(this).find('.rate-ex1-cnt .rate-btn-'+i).addClass('rate-btn-active');
             }
         })   
        });
</script>
<div class="container">
	<?php
		if((isset($_SESSION['login_user']) && isset($_SESSION['login_user_name'])) || isset($_SESSION['localUser'])){
	?>
		<h3 style="color:white">Post Your comment Below:</h3>
		<div class="row">
			<form action="postReview.php" method="POST">
				<input type="text" value="
				<?php
					if(isset($_SESSION['login_user'])){
						echo $_SESSION['login_user'];
					}else if(isset($_SESSION['localUser'])){
						echo $_SESSION['localUser'];
					}
				?>
				" name="username" hidden>
				<input type="text" value="
					<?php
						if(isset($_SESSION['login_user'])){
							echo $_SESSION['login_user'];
						}else if(isset($_SESSION['localUser'])){
							echo $_SESSION['localUser'];
						}
					?>
				" name="name" hidden>
				<input type="text" value="<?php echo $service;?>" name="product" hidden>
				<input id="rating" type="text" hidden="" name="rating" value="">
				<div class="col-md-12" >
					<div class="rate-ex1-cnt">
						<div id="1" class="rate-btn-1 rate-btn"></div>
						<div id="2" class="rate-btn-2 rate-btn"></div>
						<div id="3" class="rate-btn-3 rate-btn"></div>
						<div id="4" class="rate-btn-4 rate-btn"></div>
						<div id="5" class="rate-btn-5 rate-btn"></div>
					</div>
					<textarea name="review" type="text" style="width:100%;height:100px"></textarea>
				</div>
				<input class="btn-success" type="submit" value="Post Review">
			</form>
		</div>
	<?php
		}	
	?>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php include('fetchReviews.php');?>
		</div>
	</div>
</div>
