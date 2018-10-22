<div class="row">

    <div class="col-2">
    </div>

    <div class="col-8" id="panel">
        <div class="detail-panel">
            <form action="<?php echo $base_url.'home/adddetails'; ?>" method="POST">
	            <div class="row fcenter">
	            	<div class="col-3"><span>Image Url: </span></div>
	                <div class="col-8">
	                	<input class="fw100" type="text" id="img_url" name="img_url" />
	                </div>
	            </div>
	            <div class="row fcenter">
	            	<div class="col-3"><span>Repost Text: </span></div>
	                <div class="col-8">
	                	<input class="fw100" type="text" id="reposted_text" name="reposted_text" />
	                </div>
	            </div>
	            <div class="row fcenter">
	            	<div class="col-3"><span>Post url: </span></div>
	                <div class="col-8">	                	
	                	<input class="fw100" type="text" id="posted_url" name="posted_url" />
	                </div>
	            </div>
	            <div class="row fcenter">
	            	<div class="col-3"><span>Post Content: </span></div>
	                <div class="col-8">
	                	<input class="fw100" type="text" id="contents" name="contents" />
	                </div>
	            </div>
	            <div class="row fcenter">
	            	<div class="col-3"><span>Posted by: </span></div>
	                <div class="col-8">
	                	<input class="fw100" type="text" id="posted_by" name="posted_by" />
	                </div>
	            </div>
	            <div class="row fcenter">
	            	<div class="col-3"><span>Original Post Url: </span></div>
	                <div class="col-8">
	                	<input class="fw100" type="text" id="original_url" name="original_url" />
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
	                	<input type="submit" value="Submit" />
	                </div>
	            </div>
            </form>
        </div>
    </div>

    <div class="col-2" id="widget-panel">

    </div>
</div>
<!--Comment Section-->
<div class="row">

    <div class="col-12">
        <div class="comment-section">
            <div id="comments-list">
                <div class="comment">
                    <h5>Hopefocus:</h5>
                    <p>The lighting of this photo is great!</p>
                    <div class="comment-reply">
                        <h5>JohnHBerry3:</h5>
                        <p>Yes, You are right. It's a great example for well lit photos.</p>
                    </div>
                </div>
                <div class="comment">
                    <h5>MacMikePL:</h5>
                    <p>Love this shot. Can anyone tell what were the specs on the camera?</p>
                </div>
                <div class="comment">
                    <h5>nikudango230:</h5>
                    <p>Focus is on point here. </p>
                </div>
            </div>
            <div>
                <input type="button" id="comment" value="add a comment"> <input id="comment-value" type="text" placeholder="Leave a Comment..">
            </div>
        </div>
    </div>

</div>