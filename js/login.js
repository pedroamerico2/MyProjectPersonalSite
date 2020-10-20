function logar(){
    var email = document.getElementById("email")
    var senha = document.getElementById("senha")
    if(email.value == "site@teste" && senha.value == "site"){
        localStorage.setItem("acesso", true)
        alert("Usuario autenticado")
        window.location.href = "index.html"
    }else{
        alert("usuario invalido")
    }
}