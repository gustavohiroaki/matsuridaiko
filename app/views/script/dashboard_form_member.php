<script src="../assets/_js/class/Helpers.js"></script>
<script src="../assets/_js/class/Post.js"></script>
<script src="../assets/_js/class/Get.js"></script>
<!-- <script src="../assets/_js/class/Check.js"></script> -->

<script>
    let help = new Helpers;


    // Zip
    $("#zip_member").blur(function(e){
        var cep = $(this).val();
        let get = new Get;
        get.getZip(cep).then(data=>{
          
            $("#state_member").val(data.uf);
            $("#city_member").val(data.localidade);
            $("#neighboorhood_member").val(data.bairro);
            $("#street_member").val(data.logradouro);
            M.updateTextFields();
          
        });

    })


    // Function to update those id's
    $("#entrydate_member,#birth_member").blur(function(e){
        setTimeout(() => {
            M.updateTextFields();
        }, 160);
    })




    //POST to insert/

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
           console.log('insert');
      
           let post = new Post;
           let urlSend = help.getUrlOrigin()+'/users/filterAndInsert';
           console.log(d.serialize());
           post.postForm(urlSend,d.serialize());

//         $.ajax({
//             type:"POST",
//             data:d.serialize(),
//             url: urlSend

//         }).then(success,fail)

//         function success(data){
//             console.log(data);
//             alert("Dados Inseridos com Sucesso");
//         }
//         function fail(data){
//             console.log(data);
//             alert("Houve uma falha de inserção de dados, contate o administrador do sistema.");
//         }
    }

    function updateForm(d){
        $.ajax({
            type:"POST",
            data:d.serialize(),
            url: urlSend
        }).then(success,fail)

        function success(data){
            console.log(data);
            alert("Dados Atualizados com Sucesso");
        }
        function fail(data){
            console.log(data);
            alert("Houve uma falha de atualização de dados, contate o administrador do sistema.");
        }
    }

    
</script>