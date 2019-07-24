class Get {
	
	constructor(){
		
	}
	

	getZip(zip){
		
		return new Promise((resolve,reject)=>{

			let ajax = new XMLHttpRequest();
			
			ajax.open("GET",`https://viacep.com.br/ws/${zip}/json/`);
			ajax.send();
			ajax.onerror = event => {
				reject(event);
			}
			
			ajax.onreadystatechange = ()=>{

				if (ajax.readyState == 4 && ajax.status == 200){

					var data = JSON.parse(ajax.responseText);

					resolve(data);

				}
				
			}
			
			
			

		})
	
		
	}
	
		
	
	
}