<script>

    // Zip
    $("#zip_member").blur(function(e){
        var cep = $(this).val();

        cepComplement(cep);
    })

    function cepComplement(cep){
        $.ajax({
                type:"GET",
                url:"https://viacep.com.br/ws/"+cep+"/json/"

            }).done(function(data){
                console.log(data);
                $("#state_member").val(data.uf);
                $("#city_member").val(data.localidade);
                $("#neighboorhood_member").val(data.bairro);
                $("#street_member").val(data.logradouro);
                M.updateTextFields();
            });

    } 

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

    function validateForm(){
        var name_member = document.getElementById("name_member");
        var username_member = document.getElementById("username_member");
        var permission_member = document.getElementById("permission_member");
        var entrydate_member = document.getElementById("entrydate_member");
        var birth_member = document.getElementById("birth_member");

    }

    function insertForm(d){
        $.ajax({
            type:"POST",
            data:d.serialize(),
            url: "<?php echo BASE_URL ?>users/filterAndInsert",

        }).then(success,fail)

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
        $.ajax({
            type:"POST",
            data:d.serialize(),
            url: "<?php echo BASE_URL ?>users/filterAndUpdate"
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