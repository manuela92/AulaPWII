function logar(event){
    //impede o envio normal do formulário
    //força a chamada a passar pelo "modal"
    event.preventDefault();

    var usuario = document.getElementById('usuario').value;
    var senha = document.getElementById('senha').value;

    if(usuario == 'admin' && senha == '12345'){
        Swal.fire({
            title: 'Login realizado!',
            text: 'Bem-vindo, ' + usuario + '!',
            icon: 'success', 
            confirmButtonText: 'OK'
        }).then(() => {
            setTimeout(() =>{
                location.href="../html/home.html";
            }, 100);
        });

    }else{
        Swal.fire({ 
            title: 'Erro!',
            text: 'Usuário ou senha incorretos.',
            icon: 'error',
            confirmButtonText: 'Tentar novamente'
        });
       
    }

} 