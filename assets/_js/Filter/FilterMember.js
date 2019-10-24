let post = new Post;
let help = new Helpers;

$("#filter_member").submit(function(e){
		e.preventDefault();
		var form = $(this);
		filter_member(form);
})

function filter_member(d){



	let urlSend = help.getUrlOrigin('/users/filter');


		post.postForm(urlSend,d.serialize()).then(success,fail)

		function success(data){

				var obj = JSON.parse(data);

				$("tbody").empty();

				let updateUrl = help.getUrlOrigin('/users/updateForm/');

				obj.forEach(function(e){


						$("tbody").append('<tr>'+'<td>'+e["name_member"]+'</td>'
						+'<td>'+e["name_type"]+'</td>'
						+'<td>'+e["name_branch"]+'</td>'
						+'<td>'+e["entrydate_member"]+'</td>'
						+'<td>'+e["birth_member"]+'</td>'
						+'<td><a href="'+updateUrl+e["id_member"]+'"><i class="material-icons">create</i></a></td>'
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

$(document).ready(()=>{

	$(".delete").click(function(e){
		e.preventDefault();

		var id = $(this).attr("title");
		var exclude = $(this).parent().parent();
		let deleteUrl = help.getUrlOrigin('/users/delete');

		post.postForm(deleteUrl,"id="+id).then(()=>{
			exclude.fadeOut();
		});


	})

});