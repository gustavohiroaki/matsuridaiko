<script>
$(".delete").click(function(e){
    e.preventDefault();

    var id = $(this).attr("title");
    var exclude = $(this).parent().parent();

    $.ajax({
        type:"POST",
        data:"id="+id,
        url:"http://localhost/matsuridaiko/delete/deleteMember"
    }).done(function(){
        exclude.fadeOut();
    })


    
})
</script>