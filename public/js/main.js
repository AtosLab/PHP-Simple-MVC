function edit_profile()
{
    $(".readmode").hide(1000);
    $(".editmode").show(1000);
}
function edit_details(id)
{
    var text = prompt("Repost-Text:", "input");
    $.ajax({
        type: 'POST',
        url: "<?php echo $base_url; ?>" + "home/detailsdo",
        data: {id: id, dtext: text},
        dataType: "json",
        success: function(res) {
            if(res.msg == "success"){
                $("#arepost").text(res.repostedby);
                $("#spanrepost").text(":" + res.dtext);
            }
        }
    });

}