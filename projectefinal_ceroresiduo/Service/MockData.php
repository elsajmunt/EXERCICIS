<?php

class MockData {
    public static function postListInSession() {
        session_start();
        $_SESSION['posts'] = [
            [
                'id' => 1,
                'titol' => 'Post 1',
                'descripcio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare justo in odio faucibus vestibulum. Vestibulum mollis urna vel vestibulum mollis.',
                'imatge_url' => 'http://localhost/mvc-blog/assets/images/posts/desert-7970677_1280.jpg',
                'data' => '2024-07-08',
                'autor' => 'Juanito',
                'imatge_autor_url' => 'http://localhost/mvc-blog/assets/images/users/user-1.jpg'
            ],
            [
                'id' => 2,
                'titol' => 'Post 2',
                'descripcio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare justo in odio faucibus vestibulum. Vestibulum mollis urna vel vestibulum mollis.',
                'imatge_url' => 'http://localhost/mvc-blog/assets/images/posts/kingfisher-8705377_1280.jpg',
                'data' => '2024-06-09',
                'autor' => 'Elsa',
                'imatge_autor_url' => 'http://localhost/mvc-blog/assets/images/users/user-2.jpg'
            ],
            [
                'id' => 3,
                'titol' => 'Post 3',
                'descripcio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare justo in odio faucibus vestibulum. Vestibulum mollis urna vel vestibulum mollis.',
                'imatge_url' => 'http://localhost/mvc-blog/assets/images/posts/elephant-8663016_1280.jpg',
                'data' => '2023-07-02',
                'autor' => 'Pere',
                'imatge_autor_url' => 'http://localhost/mvc-blog/assets/images/users/user-4.jpg'
            ]
        ];
    }
}