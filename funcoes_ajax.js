window.onload = function(){
    let cep=document.getElementById("cep")
    
    cep.addEventListener("blur",carregaAjax)
    }
    
    
    // evento disparado quando a requisição for completa
       function buscaDados(event) {
            if(this.status == 200 && this.readyState==4) {
               
               var dados = JSON.parse(this.responseText);
                if (dados) {
                     document.getElementById("cidade").value=dados.localidade
                }
    
                } else {
                    console.log('Erro:',this.status);
                    } 
            }
    
    function carregaAjax(event){
            const ajax = new XMLHttpRequest();
            ajax.addEventListener('load', buscaDados);
            ajax.open('GET', 'https://viacep.com.br/ws/'+this.value+'/json');
            ajax.send(); 
    }


    function carregaEnvioDados(event){
        event.preventDefault()
        carrega = document.getElementById("carrega")
        carrega.innerHTML=""
        carrega_ajax=event.target.action
        var formData = new FormData(event.target);
        const ajax = new XMLHttpRequest()
        ajax.open('POST', carrega_ajax)
        ajax.send(formData)
        ajax.addEventListener('load', BuscaConteudo) 
}

function BuscaConteudo() {
        if(this.status == 200 && this.readyState==4) {
           var pagina = this.responseText;
           var carrega = document.getElementById("carrega")
            if (pagina) {
                carrega.innerHTML=pagina
            }

            } else {
                if(this.status == 404)
                    alert("Arquivo Não encontrado")
                     console.log('Somthing wrong happen:',this.status)
                } 
        }
    
    
    
    
    