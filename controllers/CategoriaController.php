<?php

require_once 'models/categorias.php';
require_once 'models/producto.php';

class categoriaController{
    
    public function index() {
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        
        require_once 'views/categorias/index.php';
    }
    
    public function ver(){
        if(isset($_GET['id'])){
            $id= $_GET['id'];
            
            //Conseguir la categoria
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();
            
            //conseguir productos
            $producto = new Producto();
            $producto->setCategoria_id($id);
            $productos = $producto->getAllCategory(); 
        }
        
        require_once 'views/categorias/ver.php';
    }


    public function crear(){
        Utils::isAdmin();
        require_once 'views/categorias/crear.php';
    }
    public function save(){
      Utils::isAdmin();
    //guardar las categorias en la base de datos
      if(isset($_POST) && isset($_POST['nombre'])){
      $categoria = new Categoria();
      $categoria->setNombre($_POST['nombre']);
      $save = $categoria->save();
      
      }
      header('Location:'.base_url."categoria/index");
    }
    
    
}

