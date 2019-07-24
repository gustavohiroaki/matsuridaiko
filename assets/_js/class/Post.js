class Post {
	
	constructor(){
		
	}
	

	postForm(url, data){


		
		
			return new Promise((resolve,reject)=>{
			var ajax = new XMLHttpRequest();
			

			
			ajax.onerror = event=>{
				
				reject(event);
				
			}
			
			ajax.open('POST', url);
				
			ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

			ajax.send(data);

			
			
			ajax.onreadystatechange = ()=>{
				
				if (ajax.readyState == 4 && ajax.status == 200) {

					resolve(ajax.responseText);

				}
				
			}
			
			
			
		})
		
		
		
		
	}

	
}