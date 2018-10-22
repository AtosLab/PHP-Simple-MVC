<div class="row">

    <div class="col-2">
    </div>

    <div class="col-8" id="panel">
        <div class="detail-panel">
            <img alt=''  id="post-image" src="<?php echo $result['img_url']; ?>" class="detail-panel-image">
            <p id="post-context">
                <a id="arepost" href="<?php echo $base_url.'user/profile'; ?>"><?php echo isset($result['reposted_by']) ? $result['reposted_by'] : ''; ?></a><span id="spanrepost"><?php echo isset($result['reposted_text']) ? ':'.$result['reposted_text'] : ''; ?></span>
                <span id="post-text"><?php echo $result['contents']; ?></span> - <a id="post-user" href="<?php echo $result['posted_url']; ?>"><?php echo $result['posted_by']; ?></a> - <a id="post-original" href="<?php echo $result['original_url']; ?>">Original Post</a></p>
        </div>
    </div>

    <div class="col-2" id="widget-panel">
        <a id="repost-wid" title="Repost" href="javascript:edit_details(<?php echo $result['nIndex']; ?>)"><img alt=''  src="<?php echo $base_url; ?>assets/loop.png" class="loop-widget"></a>
        <a id="addInspire-wid" title="Add To Inspire" href="javascript:void(0)"><img alt=''  src="<?php echo $base_url; ?>assets/inspiredplus-0.png" class="inspire-widget"></a>
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