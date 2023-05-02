<?php 

class Route{

    public static function Map(string $route, string $view){

        $uri = str_replace($route,"",$_SERVER["REQUEST_URI"]);
        // $uri = explode("/",$uri);
        // $uri=array_filter($uri,function ($el){
        //     return $el!="";
        // });

        var_dump($_SERVER['REQUEST_URI']);
        var_dump($_SERVER['PHP_SELF']);
        var_dump($uri);
    }
}
?>