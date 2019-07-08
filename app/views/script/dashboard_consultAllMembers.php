<script>

    $("#filter_member").submit(function(e){
        e.preventDefault();
        var form = $(this);
        filter_member(form);
    })

    function filter_member(d){

        $.ajax({
            type:"POST",
            data:d.serialize(),
            url: "<?php echo BASE_URL ?>users/filter",

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
                +'<td><a href="<?php echo BASE_URL."users/updateForm/" ?>'+e["id_member"]+'"><i class="material-icons">create</i></a></td>'
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
        url:"<?php echo BASE_URL ?>users/delete"
    }).done(function(){
        exclude.fadeOut();
    })
    
    })
}
</script>