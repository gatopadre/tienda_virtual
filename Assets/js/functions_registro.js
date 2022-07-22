var divLoading = document.querySelector("#divLoading");
document.addEventListener('DOMContentLoaded', function () {

	if(document.querySelector("#formRegister")){
		let formRegister = document.querySelector("#formRegister");
		formRegister.onsubmit = function(e) {

			e.preventDefault();
			let strNombre = document.querySelector('#txtNombre').value;
			let strApellido = document.querySelector('#txtApellido').value;
			let strEmail = document.querySelector('#txtEmail').value;
			let intTelefono = document.querySelector('#intTelefono').value;
			let strIdentificacion = document.querySelector('#txtIdentificacion').value;
			let strPassword = document.querySelector('#txtPassword').value;
			if(strApellido == '' || strNombre == '' || strEmail == '' || intTelefono == '' || strIdentificacion == '' || strPassword == '' )
			{
				swal("Atención", "Todos los campos son obligatorios." , "error");
				return false;
			}
	
			let elementsValid = document.getElementsByClassName("valid");
			for (let i = 0; i < elementsValid.length; i++) { 
				if(elementsValid[i].classList.contains('is-invalid')) { 
					swal("Atención", "Por favor verifique los campos en rojo." , "error");
					return false;
				} 
			} 
			divLoading.style.display = "flex";
			let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
			let ajaxUrl = base_url+'/Usuarios/registrarUsuario'; 
			let formData = new FormData(formRegister);
			request.open("POST",ajaxUrl,true);
			request.send(formData);
			request.onreadystatechange = function(){
				if(request.readyState == 4 && request.status == 200){
					let objData = JSON.parse(request.responseText);
					if(objData.status)
					{
						swal("Usuario creado", objData.msg , "success");
						// aqui hacer redireccion cuando ok
					}else{
						swal("Error", objData.msg , "error");
					}
				}
				divLoading.style.display = "none";
				return false;
			}		
		}
	}
	
})
