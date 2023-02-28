
window.onload = function(){
    var formulario = document.getElementById("cadastro")
    formulario.addEventListener("submit", validaFormulario);
    formulario.nomepet.addEventListener("keypress",validaNome);
    formulario.raça.addEventListener("keypress",validaRaça)
    formulario.sexo.addEventListener("keypress",validaSexo);
    formulario.cidadepet.addEventListener("keypress",validaCidade);
    formulario.porte.addEventListener("keypress",validaPorte);
    formulario.idade.addEventListener("keypress",validaIdade)
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
    
            if(nomepet.value == ""){
                alert('Preencher nome!')		
                event.preventDefault()
            }
            if(raça.value == ""){
                alert('Preencher raça!')
                event.preventDefault()
            }

            if(sexo.value == ""){
                alert('Preencher sexo do pet!')
                event.preventDefault()
            }
            if(idade.value == ""){
                alert('Preencher idade!')
                event.preventDefault()
            } 
            if(cidadepet.value == ""){
                alert('Preencher cidade')
                event.preventDefault()
            }	
            if(porte.value == ""){
                alert('Preencher porte')
                event.preventDefault()
            }	
            if(arquivo.value == ""){
                alert('Insira uma imagem')
                event.preventDefault()
            }
            		
    
    }	
    
    function validaNome (event){
    
        if(event.keyCode > 47 && event.keyCode < 58){
            event.preventDefault();
        }
            
    }

    function validaRaça (event){
    
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

    function validaPorte (event){
    
        if(event.keyCode > 47 && event.keyCode < 58){
            event.preventDefault();
        }
            
    }

    function validaIdade (event){
    
        if(event.keyCode < 48 || event.keyCode > 57){
            event.preventDefault()
        }
            
    }
