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
                M.updateTextFields();
            });

    } 


    $("#input-member").submit(function(e){
        e.preventDefault();
        var form = $(this);
        var uri = (window.location.pathname).split("/");
        switch(uri[2]){
            case "register":
                insertForm(form);
                // console.log(form);
                break;
            
        }
            

        // insertForm(form);
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
            alert("Houve uma falha de inserção de dados, contato o administrador do sistema.");
        }
    }

    
</script>