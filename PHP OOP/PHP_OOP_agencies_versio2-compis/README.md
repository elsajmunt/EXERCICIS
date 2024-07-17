### 1. Login.php
### 2. Home.php
### 3. NewPostForm.php

-----------------------------------

### Login.php (VISTA) --------

#### Solicitud d'autenticació
POST [usuari, passowrd] => 'http://localhost/blog/Includes/login.php

#### Resposta servidor 
GET 'error'

*Accés a les dades*
```php
$_GET['error'];
```

### Home.php (VISTA) -----------

#### Solicitud de vista de creació de post (BOTÓ AL FORMULARI)
GET => 'http://localhost/blog/Includes/new-post.php

#### Solicitud de logout (BOTÓ)
GET => 'http://localhost/blog/Includes/logout.php'

#### Resposta servidor
SESSION 'posts'

*Estructura de les dades*
```php
$posts = [
    id1 => [
        titol => 'asdasd',
        descripcio => 'asdadas',
        img_url => 'adada',
        data => 'adasd'
    ], 
    id2 => [
        titol => 'asdasd',
        descripcio => 'asdadas',
        img_url => 'adada',
        data => 'adasd'
    ],
]
```

*Accés a les dades*
```php
$_SESSION['posts'];
```

*Exemple de codi per a la vista*
```php
<ul>
    <?php foreach($_SESSION['posts'] as $post)> ?>
        <div>
            <img src= <?= $post->img_url ?>></img>
            <span><?= $post->titol ?></span>
            <p><?= $post->descripcio ?></p>
            <span><? $post->data ?></span>
        </div>
    <?php endforach ?>
</ul>
```

### NewPostForm.php (VISTA) -------

#### Solicitud de creació de post
POST [titol, descripcio, imatge] => 'http://localhost/blog/Includes/create-post.php'

#### Resposta servidor 
GET 'error'

*Accés a les dades*
```php
$_GET['error'];
```

```php
<span> <?= $_GET['error'] ?> </span>
```


-----------------------------------

### Errores
#### User.php
- La función verifyLoginUser() no es accesible porque está protegida.
- En la función verifyLoginUser() el password_verify() no debería funcionar porque los passwords almacenados en la base de datos no están hasheados y la función solo funciona con hashs https://www.php.net/manual/en/function.password-verify.php
- Parece que el segundo *if* de la función verifyLoginUser() siempre va a modificar el error a 1 o 2 y no puede permanecer en 0.
- En la misma función, el $_SESSION["username"] no funcionará porque no se ha hecho session_start(), de todos modos creo que debería ser responsabilidad del controlador manejar las variables globales del servidor y el modelo debería ceñirse a interactuar con la BBDD y devolver los datos solicitados.
- Me iría mejor recuperar el *id* o *null* de la función verifyLoginUser() y que maneje los errores de la base de datos de manera interna.

-----------------------------------

### POST MOCK DATA

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
]