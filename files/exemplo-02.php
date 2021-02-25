<?php

$images=scandir("images");  //retorna um array
$data=array();
//var_dump($images);

/*
$c = 1; //counter

foreach ($images as $key => $value) {
    
     //se for . ou .., ignora
    if($value == "." || $value == "..") {
        //
    } else {
        //echo "=> ".$value."<br/>";
        echo "$c) ".$value."<br/>";
        $c = $c+1; //incrementa
    } 
} */
    
foreach ($images as $img) { //percorre o array $imagens, e cada elemento será $img
    if(!in_array($img, array(".",".."))) {  //se os elementos no array não foram . nem ..

        $filename = "images".DIRECTORY_SEPARATOR.$img;
        $info = pathinfo($filename);
        $info["size"]=filesize($filename);
        $info["modified"]=date("d/m/Y H:i:s", filemtime($filename));    //coloque em formato data([specs], [o que])
        $info["url"]="http://localvictor/files/". str_replace("\\","/",$filename);
        //var_dump($info);
        array_push($data,$info);

    }
}

echo json_encode($data);

?>