  
let post = new Post;
let help = new Helpers;
  
$(document).ready(deleteList());

function deleteList(){
    $(".delete").click(function(e){
    e.preventDefault();

    var id = $(this).attr("title");
    var exclude = $(this).parent().parent();


    $.ajax({
        type:"POST",
        data:"id="+id,
        url:"<?php echo BASE_URL ?>"
    })
      
    let urlSend = help.getUrlOrigin('/training/delete');
      
    post.postForm(urlSend,`id=${id}`).then(function(){
        exclude.fadeOut();
    })
    
    })
}