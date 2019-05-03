<script>
    $("#input-training").submit(function(e){
        e.preventDefault();
        var form = $(this);
        insertForm(form);
    })

    function insertForm(d){
        $.ajax({
            type:"POST",
            data:d.serialize(),
            url: "http://localhost/matsuridaiko/register/sendTraining",

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
</script>