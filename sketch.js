const btnSalvar = document.querySelector("#btnSalvar");

btnSalvar.addEventListener("click", () => {
    // 1. Coleta os valores dos campos
    const nome = document.getElementById("conteudo1").value;
    const email = document.getElementById("conteudo2").value;
    const senha = document.getElementById("conteudo3").value;
    const nascimento = document.getElementById("conteudo4").value;

    // Para o rádio (gênero), verificamos qual está marcado
    const generoMasc = document.getElementById("conteudo5").checked ? "Masculino" : "";
    const generoFem = document.getElementById("conteudo6").checked ? "Feminino" : "";
    const genero = generoMasc || generoFem || "Não informado";

    const mensagem = document.getElementById("conteudo7").value;

    // 2. Formata o texto que irá dentro do arquivo
    const textoFinal = `
Nome: ${nome}
E-mail: ${email}
Senha: ${senha}
Nascimento: ${nascimento}
Gênero: ${genero}
-------------------------------
Mensagem adicional:
${mensagem}
`.trim();

    // 3. Cria o arquivo (Blob) e dispara o download
    const blob = new Blob([textoFinal], { type: "text/plain" });
    const link = document.createElement("a");

    link.href = URL.createObjectURL(blob);
    link.download = "cadastro.txt"; // Nome do arquivo que será baixado
    link.click();

    // Limpa o link da memória
    URL.revokeObjectURL(link.href);
});
             