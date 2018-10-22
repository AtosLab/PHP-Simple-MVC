<div class="row">

    <div class="col-2">
    </div>

    <div class="col-6">
        <div class="post-panel">
        	<form action="<?php echo $base_url.'user/signup'; ?>" method="POST">
	            <div class="row fcenter">
	                <div class="col-3"><span>Username: </span></div>
                	<div class="col-8">
	                	<input class="fw100" type="text" id="username" name="username" />
	                </div>
	            </div>
	            <div class="row fcenter">
	            	<div class="col-3"><span>Password: </span></div>
                	<div class="col-8">
	                	<input class="fw100" type="password" id="userpwd" name="userpwd" />
	                </div>
	            </div>
	            <div class="row fcenter">
	            	<div class="col-3"><span>Email: </span></div>
                	<div class="col-8">
	                	<input class="fw100" type="email" id="email" name="email" />
	                </div>
	            </div>
	            <div class="row fcenter">
	            	<div class="col-3"><span>Phone Number: </span></div>
                	<div class="col-8">
	                	<input class="fw100" type="text" id="phoneno" name="phoneno" />
	                </div>
	            </div>
	            <div class="row fcenter">
	            	<div class="col-3"><span>Address: </span></div>
                	<div class="col-8">
	                	<input class="fw100" type="text" id="address" name="address" />
	                </div>
	            </div>
	            <div class="row fcenter">
	            	<div class="col-3"><span>Profile Image: </span></div>
                	<div class="col-8">
	                	<input class="fw100" type="text" id="avatar" name="avatar" />
	                </div>
	            </div>
	            <div class="row fcenter">
	            	<div class="col-3"><span>Description: </span></div>
                	<div class="col-8">
	                	<input class="fw100" type="text" id="description" name="description" />
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
	                	<input type="submit" value="SignUp" />
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