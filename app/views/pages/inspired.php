<?php $i = 0; foreach ($result as $item) { ?>
<div class="row">

    <div class="col-1">
    </div>

    <div class="col-9">
        <div class="post-panel">
<!-- each item in the post panel reperesents a post that shows the post image,
tweet text from original tweet, original tweet link, username and hyperlink to
original tweet author.

If a user is logged on #PortraitPhotography Web app, then they are also able
to see the repost and add to inspired buttons. -->
            <div class="row">

                <div class="col-11">
                    <a href="<?php echo $base_url.'home/details/'.$i; ?>" class="show-detail">
                        <img alt=''  src="<?php echo $item['img_url']; ?>" class="post-images"></a> <p class="post-row"><span class="context"><?php echo $item['contents']; ?></span> <br> Posted by: <a class="post-user-name" href="<?php echo $item['posted_url']; ?>"><?php echo $item['posted_by']; ?></a><br><a href="<?php echo $item['original_url']; ?>"><?php echo $item['original_by']; ?></a></p>
                </div>

                <div class="col-1 options">
                </div>
            </div>
        </div>

    </div>
    <div class="col-1">
    </div>
</div>
<?php $i++; } ?>