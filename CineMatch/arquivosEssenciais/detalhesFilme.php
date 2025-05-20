<?php 
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('ID do filme inválido.');
}

$id = intval($_GET['id']);


// Detalhes do filme
$url = "https://api.themoviedb.org/3/movie/$id?api_key=$api_key&language=pt-BR";
$resposta = file_get_contents($url);
if ($resposta === false) {
    die("Erro ao acessar a API.");
}
$filme = json_decode($resposta, true);

// Vídeos (trailers)
$video_url = "https://api.themoviedb.org/3/movie/$id/videos?api_key=$api_key&language=pt-BR";
$video_resposta = file_get_contents($video_url);
$video_dados = json_decode($video_resposta, true);
$trailer = null;
foreach ($video_dados['results'] as $video) {
    if ($video['site'] === 'YouTube' && $video['type'] === 'Trailer') {
        $trailer = $video['key'];
        break;
    }
}

// Elenco (atores principais)
$creditos_url = "https://api.themoviedb.org/3/movie/$id/credits?api_key=$api_key&language=pt-BR";
$creditos_resposta = file_get_contents($creditos_url);
$creditos = json_decode($creditos_resposta, true);
$atores = array_slice($creditos['cast'], 0, 5); // 5 principais
?>