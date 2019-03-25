        var login_user = document.getElementById("login_user");


        login_user.addEventListener('blur',function(){

                if(login_user.value!=""){
                var login_pass = document.getElementById("login_pass");

                login_pass.style.transition = "1s";
                login_pass.style.opacity = "1";

                
                login_pass.addEventListener('blur',function(){

                    if(login_pass.value!=""){
                    var login_submit = document.getElementById("login_submit");

                    login_submit.style.transition = "1s";
                    login_submit.style.opacity = "1";
                }
                })

            }



        })
