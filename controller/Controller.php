<?php
class Controller {
    protected $language;      // Язык по умолчанию
    protected $translations;      // Массив переводов

    // Конструктор выполняет инициализацию языка и загрузку переводов
    public function __construct() {
        $this->initLanguage();
        $this->loadTranslations();
    }

    // Определяем язык по куки или по заголовку браузера
    protected function initLanguage() {
        $supported = ['ru', 'en', 'et'];

        if (!empty($_GET['lang']) && in_array($_GET['lang'], $supported)) {
            $lang = $_GET['lang'];
        }

        elseif (!empty($_COOKIE['lang']) && in_array($_COOKIE['lang'], $supported)) {
            $lang = $_COOKIE['lang'];
        }

        elseif (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            if (!in_array($lang, $supported)) {
                $lang = 'en';
            }
        }

        else {
            $lang = 'en';
        }

        $this->language = $lang;

        setcookie('lang', $lang, time() + 86400 * 30, '/');
    }

    // Загружаем файл переводов, соответствующий выбранному языку
    protected function loadTranslations() {
        $file = __DIR__ . '/../lang/' . $this->language . '.php';
        if (file_exists($file)) {
            $this->translations = include $file;
        } else {
            $this->translations = [];
        }
    }


    // Методы для отображения разных страниц
    public function startSite() {
        include_once 'view/main.php';
    }

    public function error404() {
        include_once 'view/error404.php';
    }

    public function projectEvent() {
        include_once 'ProjectEvent/index.php';
    }

    public function projectNews() {
        include_once 'ProjectNews/index.php';
    }
}
