<script>
$(document).ready(deleteList());

function deleteList(){
    $(".delete").click(function(e){
    e.preventDefault();

    var id = $(this).attr("title");
    var exclude = $(this).parent().parent();


    $.ajax({
        type:"POST",
        data:"id="+id,
        url:"<?php echo BASE_URL ?>training/delete"
    }).done(function(){
        exclude.fadeOut();
    })
    
    })
}
</script>