let post = new Post;
let help = new Helpers;
   
  
    $("#input-training").submit(function(e){
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

        let urlSend = help.getUrlOrigin('/training/filterAndInsert');
      
        post.postForm(urlSend,d.serialize()).then(success,fail);

        function success(data){
            console.log(data);
            alert("Dados Inseridos com Sucesso");
        }
        function fail(data){
            console.log(data);
            alert("Houve uma falha de inserção de dados, contate o administrador do sistema.");
        }
    }

    function updateForm(d){

        let urlSend = help.getUrlOrigin('/training/filterAndUpdate');
      
        post.postForm(urlSend,d.serialize()).then(success,fail);

        function success(data){
            console.log(data);
            alert("Dados Inseridos com Sucesso");
        }
        function fail(data){
            console.log(data);
            alert("Houve uma falha de inserção de dados, contate o administrador do sistema.");
        }
    }