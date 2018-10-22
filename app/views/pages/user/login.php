<div class="row">

    <div class="col-2">
    </div>

    <div class="col-6">
        <div class="post-panel">
        	<form action="<?php echo $base_url.'user'; ?>" method="POST">
	            <div class="row fcenter">
	                <div class="col-12">
	                	<span>Username: </span>
	                	<input type="text" id="username" name="username" />
	                </div>
	            </div>
	            <div class="row fcenter">
	                <div class="col-12">
	                	<span>Password: </span>
	                	<input type="password" id="userpwd" name="userpwd" />
	                </div>
	            </div>
	            <?php if(isset($res['msg']) && $res['msg'] != "success") { ?>
		            <div class="row fcenter alert-msg">
		                <div class="col-12">
		                	<span class="alert-text"><?php echo $res['msg']; ?></span>
		                </div>
		            </div>
	            <?php } ?>
	            <div class="row fcenter">
	                <div class="col-12">
	                	<input type="submit" value="Login" />
	                </div>
	            </div>
            </form>
        </div>
    </div>
    <div class="col-2">
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
	    setTimeout(function(){
			$(".alert-msg").hide(1000);
		}, 3000);
	});
</script>