<script>
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