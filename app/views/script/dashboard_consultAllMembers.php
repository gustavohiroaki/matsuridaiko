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
            var obj = jQuery.parseJSON(data);

            // console.log(obj[0]["name_member"]);
            $("tbody").empty();

            obj.forEach(function(e){
                $("tbody").append('<tr>');
                $("tbody").append('<td>'+e["name_member"]+'</td>');
                $("tbody").append('<td>'+e["name_member"]+'</td>');
                $("tbody").append('<td>'+e["name_member"]+'</td>');
                $("tbody").append('<td>'+e["name_member"]+'</td>');
                $("tbody").append('</tr>');
            })
        }
        function fail(data){
            console.log(data);
            alert("Falha na inclusão");
        }
    }
</script>