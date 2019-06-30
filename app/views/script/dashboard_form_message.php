<script>
    $("#input-message").submit(function(e){
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
            url: "<?php echo BASE_URL ?>register/sendMessage",

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
            url: "<?php echo BASE_URL ?>update/updateMessage",

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