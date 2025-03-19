function printCurriculo() {
    window.print();
}

// Função para carregar os dados do JSON e inserir no HTML
async function carregarDados() {
    try {
        const response = await fetch("Data/data.json");
        const dados = await response.json();

        document.getElementById("nome").textContent = dados.nome;
        document.getElementById("endereco").textContent = dados.endereco;
        document.getElementById("telefone").textContent = dados.telefone;
        document.getElementById("email").textContent = dados.email;
        document.getElementById("github").textContent = dados.github;
        document.getElementById("github").href = dados.github;
        document.getElementById("linkedin").textContent = dados.linkedin;
        document.getElementById("linkedin").href = dados.linkedin;
        document.getElementById("resumo").textContent = dados.resumo;

        preencherLista("passatempos", dados.passatempos);
        preencherLista("educacao", dados.educacao.map(e => `${e.instituicao} - ${e.curso} (${e.periodo})`));
        preencherLista("cursos", dados.cursos);
        preencherLista("habilidades", dados.habilidades);
    } catch (error) {
        console.error("Erro ao carregar dados:", error);
    }
}

// Função auxiliar para preencher listas no HTML
function preencherLista(id, itens) {
    const lista = document.getElementById(id);
    lista.innerHTML = ""; 
    itens.forEach(item => {
        const li = document.createElement("li");
        li.textContent = item;
        lista.appendChild(li);
    });
}

// Chamar a função ao carregar a página
document.addEventListener("DOMContentLoaded", carregarDados);