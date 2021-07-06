<?php
namespace Bank;


class App {

    public static function start(){

        ob_start();
        self::router();
        ob_end_flush();
    }

    public static function view($file, $data = []){
        extract($data);
        require DIR.'views/'.$file.'.php';
    }

    public static function redirect($path = ''){
        header('Location: '.URL.$path);
        die;
    }

    private static function router(){

        $uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
        $uri = explode('/', $uri);

        if ('create-acc' == $uri[0]) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                return (new BankController) -> create();
            } else {
                return (new BankController) -> save();
            }
        }

        if ('add' == $uri[0] && isset($uri[1])) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                return (new BankController) -> add($uri[1]);
            } else {
                return (new BankController) -> doAdd($uri[1]);
            }
        }

        if ('rem' == $uri[0] && isset($uri[1])) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                return (new BankController) -> remove($uri[1]);
            } else {
                return (new BankController) -> doRemove($uri[1]);
            }
        }

        if ('delete' == $uri[0] && isset($uri[1]) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            return (new BankController) -> delete($uri[1]);
        }

        // ROUTER

        if ($uri[0]== 'testas' && isset($uri[1])) {
            return (new BankController) -> fundTest($uri[1]);
        }elseif ($uri[0] === '' && count($uri) === 1){
            return (new BankController) -> index();
        }
        
        self::view('404');
        http_response_code(404);
    }
}