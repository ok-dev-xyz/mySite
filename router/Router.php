<?php
class Router {
    public function route() {
        // Определяем текущий путь из URL
        $host = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $route = trim($host, '/');
        
        // Создаем экземпляр контроллера – здесь уже выполняется инициализация языка и загрузка переводов
        $controller = new Controller();

        // Выбор маршрута
        switch($route) {
            case '':
            case 'index.php':
                $controller->startSite();
                break;
            case 'ProjectEvent':
                $controller->projectEvent();
                break;
            case 'ProjectNews':
                $controller->projectNews();
                break;
            default:
                $controller->error404();
                break;
        }
    }
}
