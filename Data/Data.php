<?php
$dados = file("dados.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$curriculo = [
    "nome" => "",
    "email" => "",
    "telefone" => "",
    "resumo" => "",
    "experiencia" => [],
    "educacao" => [],
    "habilidades" => []
];

$secao = "";
foreach ($dados as $linha) {
    $linha = trim($linha);

    if (strpos($linha, "[Experiencia]") !== false) {
        $secao = "experiencia";
        continue;
    } elseif (strpos($linha, "[Educacao]") !== false) {
        $secao = "educacao";
        continue;
    } elseif (strpos($linha, "[Habilidades]") !== false) {
        $secao = "habilidades";
        continue;
    }

    if ($secao === "") {
        list($chave, $valor) = explode(": ", $linha, 2);
        $curriculo[strtolower($chave)] = $valor;
    } elseif ($secao === "experiencia" || $secao === "educacao") {
        if (strpos($linha, "Empresa:") !== false || strpos($linha, "Instituicao:") !== false) {
            $item = [];
        }
        list($chave, $valor) = explode(": ", $linha, 2);
        $item[strtolower($chave)] = $valor;

        if (isset($item['descricao']) || isset($item['periodo'])) {
            $curriculo[$secao][] = $item;
        }
    } elseif ($secao === "habilidades") {
        $curriculo["habilidades"][] = $linha;
    }
}
?>