<script>

$(document).ready(function(){
    $("#table-events").click(function(){
        $.ajax({
            type:'POST',
            dataType:'json',
            url:'http://localhost/matsuridaiko/dashboard/tableEvents'
        }).done(function(d){
            console.log(d);
            $("thead").empty();
            $("tbody").empty();
            $("thead").append("<tr><th>Nome do Evento</th><th>Data do Evento</th><th>Numero de pessoas</th></tr>");
            
            
            $.each(d,function(index,item){
                $("tbody").append("<tr><td>"+item.name_event+"</td><td>"+item.date_init+"</td><td>"+item.numbermember_event+"</td></tr>");
            });
        })
    })

    $("#table-messages").click(function(){
        $.ajax({
            type:'POST',
            dataType:'json',
            url:'http://localhost/matsuridaiko/dashboard/tableMessages'
        }).done(function(d){
            console.log(d);
            $("thead").empty();
            $("tbody").empty();
            $("thead").append("<tr><th>Mensagem</th><th>Mensagem de</th><th>Mensagem até</th></tr>");

            $.each(d,function(index,item){
                $("tbody").append("<tr><td>"+item.message+"</td><td>"+item.message_by+"</td><td>"+item.date_fin+"</td></tr>");
            });
        })
    })

    $("#table-training").click(function(){
        $.ajax({
            type:'POST',
            dataType:'json',
            url:'http://localhost/matsuridaiko/dashboard/tableTraining'
        }).done(function(d){
            console.log(d);
            $("thead").empty();
            $("tbody").empty();
            $("thead").append("<tr><th>Lugar do Treino</th><th>Data</th><th>Organizador</th><th>Anotações</th></tr>");

            $.each(d,function(index,item){
                $("tbody").append("<tr><td>"+item.place_training+"</td><td>"+item.date_training+"</td><td>"+item.organizer_training+"</td><td>"+item.annotation_training+"</td></tr>");
            });
        })
    })
})


</script>
