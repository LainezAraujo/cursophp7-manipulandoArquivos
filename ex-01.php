<?php 

//ver se diretório existe
$name = "images";

if (!is_dir($name)) {
//criando diretório
	mkdir($name);	
	echo "Diretório $name criado com sucesso.";
}else{
	rmdir($name);//remove
	echo "Já existe o diretório: $name foi removido";
}



 ?>