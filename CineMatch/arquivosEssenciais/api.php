<?php
$api_key = '21dec357c0687cd7f184a1e554bb897e';

// Obter gêneros
$generos_url = "https://api.themoviedb.org/3/genre/movie/list?api_key=$api_key&language=pt-BR";
$generos_dados = json_decode(file_get_contents($generos_url), true);
$generos = $generos_dados['genres'];

// Verifica se um gênero foi clicado
$genero = $_GET['genero'] ?? null;

// Carregar filmes
$filmes = [];
for ($pagina = 1; $pagina <= 2; $pagina++) {
    $url = $genero
        ? "https://api.themoviedb.org/3/discover/movie?api_key=$api_key&language=pt-BR&sort_by=popularity.desc&page=$pagina&with_genres=$genero"
        : "https://api.themoviedb.org/3/movie/popular?api_key=$api_key&language=pt-BR&page=$pagina";

    $resposta = file_get_contents($url);
    if ($resposta === false) {
        die("Erro ao acessar a API.");
    }

    $dados = json_decode($resposta, true);
    $filmes = array_merge($filmes, $dados['results']);
}

// Mapeia os gêneros pela ID
$generos_map = array_column($generos, 'name', 'id');


?>