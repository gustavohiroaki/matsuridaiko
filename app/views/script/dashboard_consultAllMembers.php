<script>

    function returnUpdate(number){
        switch(number){
            case '1':
                return 'update/shinjin/';
                break;
            case '2':
                return 'update/junior/';
                break;
            case '3':
                return 'update/member/';
                break;
        }
    }


    $("#filter_member").submit(function(e){
        e.preventDefault();
        var form = $(this);
        filter_member(form);
    })

    function filter_member(d){

        $.ajax({
            type:"POST",
            data:d.serialize(),
            url: "http://localhost/matsuridaiko/consult/filterAllMembers",

        }).then(success,fail)

        function success(data){

            var obj = jQuery.parseJSON(data);

            // console.log(obj[0]["name_member"]);
            $("tbody").empty();

            obj.forEach(function(e){


                $("tbody").append('<tr>'+'<td>'+e["name_member"]+'</td>'
                +'<td>'+e["name_type"]+'</td>'
                +'<td>'+e["name_branch"]+'</td>'
                +'<td>'+e["entrydate_member"]+'</td>'
                +'<td>'+e["birth_member"]+'</td>'
                +'<td><a href="http://localhost/matsuridaiko/'+returnUpdate(e["id_type"])+e["id_member"]+'"><i class="material-icons">create</i></a></td>'
                +'<td><a href="#" title="'+e["id_member"]+'" class="delete"><i class="material-icons">delete</i></a></td>'
                +'</tr>');

            })

            deleteList();
        }
        function fail(data){
            console.log(data);
            alert("Falha na inclusão");
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
        url:"http://localhost/matsuridaiko/delete/deleteMember"
    }).done(function(){
        exclude.fadeOut();
    })
    
    })
}
</script>