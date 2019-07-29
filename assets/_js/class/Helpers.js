class Helpers {

	
	getUrlOrigin(pageLocation=""){

		if(pageLocation!==""){
			
			return window.location.origin+`/matsuridaiko${pageLocation}`;
			
		}
		
// 		return window.location.origin+'/matsuridaiko';
	}
	
}