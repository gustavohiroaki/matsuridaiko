    let post = new Post;
    let help = new Helpers;  
  
  
    $("#input-message").submit(function(e){
        e.preventDefault();
        var form = $(this);

        var uri = (window.location.pathname).split("/");

        uri.find(checkType);

        function checkType(type){

            if(type=="register"){
                console.log("register");
                insertForm(form);
            }
            if(type=="updateForm"){
                console.log("updateForm");
                updateForm(form);
            }
            
        }

    })

    function insertForm(d){

        let urlSend = help.getUrlOrigin('/messages/filterAndInsert');
      
        post.postForm(urlSend,d.serialize()).then(success,fail)


    }

    function updateForm(d){
      
        let urlSend = help.getUrlOrigin('/messages/filterAndUpdate');
      
        post.postForm(urlSend,d.serialize()).then(success,fail)


    }
  
    function success(data){
        alert(data);
    }
    function fail(data){
        alert(data);
    }