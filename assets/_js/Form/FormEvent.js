
    let post = new Post;
    let help = new Helpers;
  
    $("#date_init,#hour_init,#date_fin,#hour_fin").blur(function(e){
        setTimeout(() => {
            M.updateTextFields();
        }, 160);
    })



    $("#zip_event").blur(function(e){
        var cep = $(this).val();
        let get = new Get;
        get.getZip(cep).then(data=>{
          
            $("#state_event").val(data.uf);
            $("#city_event").val(data.localidade);
            $("#neighboorhood_event").val(data.bairro);
            $("#street_event").val(data.logradouro);
            M.updateTextFields();
          
        });

    })


    $("#input-member").submit(function(e){
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
        
        let urlSend = help.getUrlOrigin('/events/filterAndInsert');

        post.postForm(urlSend,d.serialize()).then(success,fail)

        function success(a){
            console.log(a);
            alert("Incluido com sucesso!");
        }
        function fail(data){
            console.log(data);
            alert("Falha na inclusão");
        }
      
    }

    function updateForm(d){
          
        let urlSend = help.getUrlOrigin('/events/filterAndUpdate');

        post.postForm(urlSend,d.serialize()).then(success,fail)

        function success(a){
            console.log(a);
            alert("Incluido com sucesso!");
        }
        function fail(data){
            console.log(data);
            alert("Falha na inclusão");
        }
    }