
window.onload = function(){
    var formulario = document.getElementById("cadastro")
    formulario.addEventListener("submit", validaFormulario);
    formulario.addEventListener("submit", validaSenha);
    formulario.nomeusuario.addEventListener("keypress",validaNome);
    formulario.cidade.addEventListener("keypress",validaCidade);
    formulario.cep.addEventListener("keypress",validaCEP);
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
            if(email.value == ""){
                alert('Preencher Email')
                event.preventDefault()
            }
            if(cep.value == ""){
                alert('Preencher Email')
                event.preventDefault()
            }	
            if(cidade.value == ""){
                alert('Preencher Email')
                event.preventDefault()
            }	
            if(mensagem.value == ""){
                alert('Preencher mensagem')
                event.preventDefault()
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
   
    function validaCidade (event){
    
        if(event.keyCode > 47 && event.keyCode < 58){
            event.preventDefault();
        }
            
    }

    function validaCEP (event){
    
        if(event.keyCode < 48 || event.keyCode > 57){
            event.preventDefault()
        }
            
    }