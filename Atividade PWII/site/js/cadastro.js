function logar(event){
    //impede o envio normal do formulário
    //força a chamada a passar pelo "modal"
    event.preventDefault();

    var usuario = document.getElementById('usuario').value;
    var senha = document.getElementById('senha').value;

    if(usuario == 'admin' && senha == '12345'){
        Swal.fire({
            title: 'Cadastro realizado!',
            icon: 'success', 
            confirmButtonText: 'OK'
        }).then(() => {
            setTimeout(() =>{
                location.href="../html/Login.html";
            }, 100);
        });

    }else{
        Swal.fire({ 
            title: 'Erro!',
            text: 'Cadastro não realizado corretamente',
            icon: 'error',
            confirmButtonText: 'Tentar novamente'
        });
       
    }

} 