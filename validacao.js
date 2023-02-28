
window.onload = function(){
    var formulario = document.getElementById("cadastro")
    formulario.addEventListener("submit", validaFormulario);
    formulario.addEventListener("submit", validaSenha);
    formulario.nomeusuario.addEventListener("keypress",validaNome);
    formulario.sexo.addEventListener("keypress",validaSexo);
    formulario.cidade.addEventListener("keypress",validaCidade);
    formulario.telefone.addEventListener("keypress",mascaraTelefone);
    formulario.idade.addEventListener("keypress",validaIdade);
    formulario.cep.addEventListener("keypress",validaCEP);
    formulario.cpf.addEventListener("keypress", validaCPF);
    formulario.cpf.addEventListener("keypress", mascaraCPF);
    formulario.email.addEventListener("keypress",validaEmail);	
    }
    
    function validaFormulario(event){
        let formulario = document.getElementById("cadastro")
        const numElementos = formulario.elements.length
        let submeter=true
    
        for(let i=0; i < numElementos; i++){
            let controle = formulario.elements[i];
            
            if(controle.value == ""){
                controle.style.border="1px solid red"
                submeter=false
            }
        }
            if(submeter==false){
                alert('Preencher campos obrigatorios')
                event.preventDefault()
            }
    
            if(nome.value == ""){
                alert('Preencher nome!')		
                event.preventDefault()
            }
            if(telefone.value == ""){
                alert('Preencher telefone!')
                event.preventDefault()
            }

            if(sexo.value == ""){
                alert('Preencher sexo!')
                event.preventDefault()
            }
            if(idade.value == ""){
                alert('Preencher idade!')
                event.preventDefault()
            } 
            if(cpf.value == ""){
                alert('Preencher CPF')
                event.preventDefault()
            }	
            if(email.value == ""){
                alert('Preencher Email')
                event.preventDefault()
            }	
            if(senha.value == ""){
                alert('Preencher Senha')
                event.preventDefault()
            }		
    
    }
    
    function validaSenha(event){
    
            var senha = document.getElementById("senha").value
               var conf  = document.getElementById("conf").value
    
        if(senha.length<6 || senha.lenght>9 ){
              alert("Senha deve ter entre 6 a 9 caracteres!")
                  event.preventDefault()
         }
    
        if(senha !== conf){
             alert("Problemas com a confirmacao de senha")
                    event.preventDefault()
         }	
     
        
    
    }	
    
    
    function validaCPF (event){
    
        if(event.keyCode < 48 || event.keyCode > 57){
            event.preventDefault()
        }
            
    }
    
    
    function mascaraCPF(event){
        
        if(this.value.length == 3){
            this.value = this.value + ".";
        }
        if(this.value.length == 7){
            this.value = this.value + ".";
        }
        if(this.value.length == 11){
            this.value = this.value + "-";
        }
        if(this.value.length >= 14){
            event.preventDefault();
        }
    }	
    
    
    
    function validaEmail(event){
        
    if(document.forms.email.value.indexOf('@')==-1 || document.forms.email.value.indexOf('.')==-1 )
        {
          alert( "Por favor, informe um E-MAIL válido!" );
          return false;
        }
    
    
    
    
    }
    function validaNome (event){
    
        if(event.keyCode > 47 && event.keyCode < 58){
            event.preventDefault();
        }
            
    }

    function validaSexo (event){
    
        if(event.keyCode > 47 && event.keyCode < 58){
            event.preventDefault();
        }
            
    }

    function validaCidade (event){
    
        if(event.keyCode > 47 && event.keyCode < 58){
            event.preventDefault();
        }
            
    }


   function mascaraTelefone(event){
    
	if(event.keyCode < 48 || event.keyCode > 57){
		event.preventDefault();
	}
	if(this.value.length == 0){
		this.value = this.value + "(";
	}
	if(this.value.length == 3){
		this.value = this.value + ")";
	}
	if(this.value.length ==9){
		this.value = this.value + "-";
		
	}
	if(this.value.length>=14){
			event.preventDefault();


	}
}
    function validaIdade (event){
    
        if(event.keyCode < 48 || event.keyCode > 57){
            event.preventDefault()
        }
            
    }

    function validaCEP (event){
    
        if(event.keyCode < 48 || event.keyCode > 57){
            event.preventDefault()
        }
            
    }