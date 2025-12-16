<?php

namespace Classes;

use Classes\Viewer;

/**
 * Контролер сторінки "About Me"
 *
 * @package Classes
 */
class AboutMeController {

    /**
     * Метод для відображення сторінки About Me
     *
     * @return void
     */
    public static function action(): void {
        // Дані, які передаємо в шаблон
        $data = [
            'title' => 'Про мене',            // Заголовок сторінки
            'name' => 'Крістіна',            // інформація про імя
            'age' => 18,                       //  про вік
            'bio' => 'Вивчаю компютені науки',   //  про себе
            'hobbies' => ['Програмування', 'Спорт'] // Хобі
        ];

        // Викликаємо Viewer для рендеру шаблону aboutme.latte
        Viewer::show('aboutme', $data);
    }
}
