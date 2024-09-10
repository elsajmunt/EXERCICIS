<header>
    <nav class="navbar"> <!-- BARRA MENÚ PRINCIPAL ---------- -->
        <div><a href="/ceroresiduo/index.php"> <img src="/ceroresiduo/public/images/header/Logo-cero-residuo-250-125c.webp" alt="Logo Cero Residuo" class="brand-title"></a></div>
        <a href="#" class="toggle-button"> <!-- MENÚ Desplegable Format MÒBILS... -->
            <span class="bar"></span> <!-- Línia/Simbol Menú Mobil -->
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links"> <!--Format PANTALLA AMPLA -->
            <ul>
                <li><a href="/ceroresiduo/view/productos.php">Productos</a></li>
                <li><a href="/ceroresiduo/view/tiendas.php">Tiendas</a></li>
                <li><a href="/ceroresiduo/view/mispedidos.php">Mis pedidos</a></li>
                <li><a href="/ceroresiduo/view/misdatos.php">Mis datos</a></li>
                <li><a href="/ceroresiduo/index.php">Cierra Sesión</a></li>
                <li>Hola Marta!</li>
            </ul>
        </div>
    </nav>
    <nav class="navbarcategories"> <!-- BARRA MENÚ CATEGORIES ----------  -->
        <a href="#" class="toggle-buttoncategories"> <!-- MENÚ Desplegable Format MÒBILS... -->
            <span class="barcateg"></span> 
            <span class="barcateg"></span>
            <span class="barcateg"></span>
        </a> 
        <div class="navbarcategories-links"> <!--Format PANTALLA AMPLA -->
            
        <?php 
          include_once (BASE_PROJECTE."/includes/header-inc.php"); // BASE_PROJECTE està a constants.php
        ?>
            <ul>
            <?php if($categoriasMenu!=0){?>                 
            <?php foreach($categoriasMenu as $categoria): ?>
                <div>
                <li><a href="/ceroresiduo/view/categoria_productos.php?id=<?= $categoria["ID"] ?>"><?= $categoria["Nombre"] ?></a></li>
                </div>
            <?php endforeach ?>
            <?php }?>  
            </ul>
        </div>        
    </nav>
</header>  


                
