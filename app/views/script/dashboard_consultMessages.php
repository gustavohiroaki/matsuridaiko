<script>
deleteList();
queryMessage();


function queryMessage(){
    $("tr td:nth-child(1)").click(function(e){
        e.preventDefault();

        var id = $(this).parent().attr("title");
        console.log(id);
        $.ajax({
            type:"POST",
            url:"http://localhost/matsuridaiko/consult/specificMessage",
            data:"id="+id
        }).done(function(e){
            var message = JSON.parse(e);
            $("#complete_message").html("<h1>Mensagem</h1><p>"+message.message+"</p>");
        })
    })
}

function deleteList(){
    $(".delete").click(function(e){
    e.preventDefault();

    var id = $(this).attr("title");
    var exclude = $(this).parent().parent();


    $.ajax({
        type:"POST",
        data:"id="+id,
        url:"http://localhost/matsuridaiko/delete/deleteMessage"
    }).done(function(){
        exclude.fadeOut();
    })
    
    })
}
</script>