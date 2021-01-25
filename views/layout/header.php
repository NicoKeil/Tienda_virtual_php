<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Tienda de Camisetas</title>
        <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css"/>
    </head>
    <body>
    <div id="container">
        <div id="buscadorr">
            <input type='text' value='Buscar'/>
            </div>
        
        <header id="header">
            <div id="logo">
                <img src="<?=base_url?>assets/img/vslogo.png" alt="camiseta logo"/>
            </div>

           
            <div id="registro">
                <?php if(!isset($_SESSION['identity'])): ?>
                <a href="<?=base_url?>usuario/registro" class="border-right p-right-quarter">Crear cuenta</a> | <a href="/account/login/" class="p-left-quarter">Iniciar sesión</a>
                <?php endif;?>
            </div>
            
        </header>
      
    <?php $categorias = Utils::showCategorias(); ?>
        
        <nav id="menu">
            <ul>
                        <li><a href="<?=base_url?>">Inicio</a></li>
                
                <?php while($cat = $categorias->fetch_object()):?>
                        <li><a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a></li>
                <?php endwhile;?>
            </ul>    
        </nav>
        
    <div id="content">