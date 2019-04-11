<script>
    $("#zip_event").blur(function(e){
        var cep = $(this).val();

        cepComplement(cep);
    })


    function cepComplement(cep){
        $.ajax({
                type:"GET",
                url:"https://viacep.com.br/ws/"+cep+"/json/"

            }).done(function(data){
                console.log(data);
                $("#state_event").val(data.uf);
                $("#city_event").val(data.localidade);
                $("#neighboorhood_event").val(data.bairro);
                $("#street_event").val(data.logradouro);
                M.updateTextFields();
            });

    } 


    $("#input-member").submit(function(e){
        e.preventDefault();
        var form = $(this);
        insertForm(form);
    })

    function insertForm(d){
        $.ajax({
            type:"POST",
            data:d.serialize(),
            url: "http://localhost/matsuridaiko/register/sendEvent",

        }).then(success,fail)

        function success(data){
            console.log(data);
            alert("Incluido com sucesso!");
        }
        function fail(data){
            console.log(data);
            alert("Falha na inclusão");
        }
    }
</script>