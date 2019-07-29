<script src="<?php echo BASE_URL ?>assets/_js/class/Helpers.js"></script>
<script src="<?php echo BASE_URL ?>assets/_js/class/Post.js"></script>
<script src="<?php echo BASE_URL ?>assets/_js/class/Get.js"></script>
<!-- <script src="../assets/_js/class/Check.js"></script> -->

<script>
        let help = new Helpers;
        let post = new Post;

    // Zip
    $("#zip_member").blur(function(e){
        var cep = $(this).val();
        let get = new Get;
        get.getZip(cep).then(data=>{
          
            $("#state_member").val(data.uf);
            $("#city_member").val(data.localidade);
            $("#neighboorhood_member").val(data.bairro);
            $("#street_member").val(data.logradouro);
            M.updateTextFields();
          
        });

    })


    // Function to update those id's
    $("#entrydate_member,#birth_member").blur(function(e){
        setTimeout(() => {
            M.updateTextFields();
        }, 160);
    })


    //POST to insert/

    $("#input-member").submit(function(e){
        
        e.preventDefault();

        var form = $(this);
        var uri = (window.location.pathname).split("/");


        uri.find(checkType);

        function checkType(type){

            if(type=="register"){
                console.log("register");
                insertForm(form);
            }
            if(type=="updateForm"){
                console.log("updateForm");
                updateForm(form);
            }
            
        }
            

    })
    


    function insertForm(d){

           let urlSend = help.getUrlOrigin('/users/filterAndInsert');

           post.postForm(urlSend,d.serialize()).then(info=>{
             
             alert(info);
             
           });

    }

    function updateForm(d){
      
       let urlSend = help.getUrlOrigin('/users/filterAndUpdate');

       post.postForm(urlSend,d.serialize()).then(info=>{

         alert(info);

       });
      
    }

    
</script>