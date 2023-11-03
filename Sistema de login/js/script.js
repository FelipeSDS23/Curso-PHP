const email = document.querySelector("#exampleInputEmail1");
const senha = document.querySelector("#exampleInputPassword1");
const loginBtn = document.querySelector("#loginBtn");
const msgAlerta = document.querySelector("#msgAlerta");

email.addEventListener("keyup", validaDadosPreenchidos);
senha.addEventListener("keyup", validaDadosPreenchidos);

function validaDadosPreenchidos() {
    if(email.value === "" || senha.value === "") {
        loginBtn.setAttribute("disabled", "disabled");
    } else {
        loginBtn.removeAttribute("disabled", "disabled");
    }
}
