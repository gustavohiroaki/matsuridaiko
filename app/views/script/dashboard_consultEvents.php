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
            var obj = jQuery.parseJSON(data);

            // console.log(obj[0]["name_member"]);
            $("tbody").empty();

            obj.forEach(function(e){
                $("tbody").append('<tr>'
                +'<td>'+e["name_event"]+'</td>'
                +'<td>'+e["date_init"]+'</td>'
                +'<td>'+e["city_event"]+'</td>'
                +'<td>'+e["responsible_event"]+'</td>'
                +'<td>'+e["annotation_event"]+'</td>'
                +'<td><a href="http://localhost/matsuridaiko/update/event/'+e["id_event"]+'"><i class="material-icons">create</i></a></td>'
                +'<td><a href="#" title="'+e["id_event"]+'" class="delete"><i class="material-icons">delete</i></a></td>'
                +'</tr>');
            })
            deleteList();
        }

        function fail(data){
            console.log(data);

            alert("Falha na consulta");
        }

    }
$(document).ready(deleteList());

    function deleteList(){
        $(".delete").click(function(e){
        e.preventDefault();

        var id = $(this).attr("title");
        var exclude = $(this).parent().parent();


        $.ajax({
            type:"POST",
            data:"id="+id,
            url:"http://localhost/matsuridaiko/delete/deleteEvent"
        }).done(function(){
            exclude.fadeOut();
        })
        
        })
    }
</script>