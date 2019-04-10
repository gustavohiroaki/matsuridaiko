<script>

    $("#zip_member").blur(function(e){
        var cep = $(this).val();

        cepComplement(cep);
    })
    $("#entrydate_member,#birth_member").blur(function(e){
        setTimeout(() => {
            M.updateTextFields();
        }, 120);
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
            if(type=="update"){
                console.log("update");
                updateForm(form);
            }
            
        }
            

    })

    function insertForm(d){
        $.ajax({
            type:"POST",
            data:d.serialize(),
            url: "http://localhost/matsuridaiko/register/sendMember",

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
            url: "http://localhost/matsuridaiko/update/updateMember"
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