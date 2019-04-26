<script>
    $("#filter_events").submit(function(e){
        e.preventDefault();
        var form = $(this);
        filter_event(form);
    })

    function filter_event(d){
        // console.log(d);
        $.ajax({
            type:"POST",
            data:d.serialize(),
            url:'http://localhost/matsuridaiko/consult/filterAllEvents',
        }).then(success,fail)

        function success(data){
            console.log(data);
            alert("");
            var obj = jQuery.parseJSON(data);

            // console.log(obj[0]["name_member"]);
            $("tbody").empty();

            obj.forEach(function(e){
                $("tbody").append('<tr>');
                $("tbody").append('<td>'+e["name_event"]+'</td>');
                $("tbody").append('<td>'+e["date_init"]+'</td>');
                $("tbody").append('<td>'+e["city_event"]+'</td>');
                $("tbody").append('<td>'+e["responsible_event"]+'</td>');
                $("tbody").append('<td>'+e["annotation_event"]+'</td>');
                $("tbody").append('<td><a href="http://localhost/matsuridaiko/update/event/'+e["id_event"]+'"><i class="material-icons">create</i></a></td>');
                $("tbody").append('</tr>');
            })
        }

        function fail(data){
            console.log(data);

            alert("Falha na consulta");
        }

    }
</script>