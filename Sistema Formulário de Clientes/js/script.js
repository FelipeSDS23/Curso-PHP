const cep = document.querySelector("#cep");

const rua = document.querySelector("#rua");
const complemento = document.querySelector("#complemento");
const bairro = document.querySelector("#bairro");
const cidade = document.querySelector("#cidade");
const estado = document.querySelector("#estado");


cep.addEventListener("input", () => {
    const cepLimpo = limpaCpf(cep.value);
    retornarEndereco(cepLimpo);    
});

function limpaCpf(cep) {
    const cepLimpo = cep.replace("-", "").replace(".", "");
    cep.value = cepLimpo;
    return cepLimpo;
}

async function retornarEndereco(cepLimpo) {
    const URL = `https://viacep.com.br/ws/${cepLimpo}/json/`;

    try {
        const response = await fetch(URL);

        const data = await response.json();

        preencheCamposDeEndereco(data);
    }
    catch(err) {
        console.log("Cep inválido");
    }
    
}

function preencheCamposDeEndereco(endereco) {
    rua.value = endereco.logradouro;
    bairro.value = endereco.bairro;
    cidade.value = endereco.localidade;
    estado.value = endereco.uf;
}