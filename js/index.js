const frm = document.querySelector("form")
const message = document.getElementById("message")
    frm.addEventListener("submit", (e) => {
        e.preventDefault();

        //Verifica se o campo nome foi preenchido e
        //contém no mínimo três caracteres.
        if (frm.nome.value == "" || 
            frm.nome.value == null || 
            frm.nome.value.lenght < 3) {
            //É mostrado um alerta, caso o campo esteja vazio.
            alert("Por favor, indique o seu nome.");
            //Foi definido um focus no campo.
            frm.nome.focus();
            //o form não é enviado.
            return false;
        }
        // o campo e-mail precisa de conter: "@", "." e não pode estar vazio
        if(frm.email.value.indexOf("@") == -1 ||
           frm.email.value.indexOf(".") == -1 ||
           frm.email.value == "" ||
           frm.email.value == null) {
            alert("Por favor, indique um e-mail válido.");
            frm.email.focus();
            return false;
        }

        if(message.value == "" || 
            message.value == null) {
           alert("Por favor, escreva sua mensagem.");
           message.focus();
           return false;
        }

        alert("Mensagem enviada com sucesso!")
});