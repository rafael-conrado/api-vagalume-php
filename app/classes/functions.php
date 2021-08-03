<?



function ValidacaoMusicaArtista($music,$artist){
   
   $key = 'c4bf167e20e65e645f0e6ef7c811df62';
   //receber a resposta json da api do vagalume

   $json_file = file_get_contents("https://api.vagalume.com.br/search.php?art=$artist&mus=$music&apikey={$key}");
   // decodificar a resposta json para string, a propriedade true transforma o objeto json em array;
   $json_str = json_decode($json_file, true);

   if ($json_str['type'] == 'notfound') {
      return false;
     
  } 
   if ($json_str['type'] != 'notfound') {
     $resultado = $json_str['mus'][0]['text'];
     return $resultado;
  } 
}