<script>
$(".delete").click(function(e){
    e.preventDefault();

    var id = $(this).attr("title");
    var exclude = $(this).parent().parent();

    $.ajax({
        type:"POST",
        data:"id="+id,
        url:"<?php echo BASE_URL ?>users/delete"
    }).done(function(){
        exclude.fadeOut();
    })


    
})
</script>