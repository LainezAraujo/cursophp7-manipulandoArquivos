<?php 
//scaneia o diretório
$images = scandir("images");
//retorna um array

//converter em json
$data=array();

//lendo o array
foreach ($images as $img) {
	if(!in_array($img, array(".",".."))){

		$filename = "images".DIRECTORY_SEPARATOR.$img;

		//obter informações
		$info=pathinfo($filename);
		//tamanho em bytes
		$info["size"]=filesize($filename);
		//Data modificação
		$info["modified"]= date("d/m/Y H.i:s", filemtime($filename));
		//mostrar url, usar replace por causa das barras usa 2 barras invertidas para fazer a leitura WINDOWS
		$info["url"]="http://localhost/dir/".str_replace("\\", "/", $filename);

		array_push($data, $info);
	}
}
echo json_encode($data);
 ?>