    let post = new Post;
    let help = new Helpers;  
deleteList();
queryMessage();


function queryMessage(){
    $("tr td:nth-child(1)").click(function(e){
        e.preventDefault();

        var id = $(this).parent().attr("title");
        let urlSend = help.getUrlOrigin('/messages/selectSpecificMessage');
      
        post.postForm(urlSend,`id=${id}`).then(function(e){
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

    let urlSend = help.getUrlOrigin('/messages/delete');
      
    post.postForm(urlSend,`id=${id}`).then(function(){
        exclude.fadeOut();
    })
    
    })
}