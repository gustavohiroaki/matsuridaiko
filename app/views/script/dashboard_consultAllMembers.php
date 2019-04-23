<script>



    $("#filter_member").submit(function(e){
        e.preventDefault();
        var form = $(this);
        filter_member(form);
    })

    function filter_member(d){
        console.log(d);
        $.ajax({
            type:"POST",
            data:d.serialize(),
            url: "http://localhost/matsuridaiko/consult/filterAllMembers",

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