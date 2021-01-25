<h2> Registrarse </h2>

  <?php if(isset($_SESSION['registro']) && $_SESSION['registro'] == 'complete'): ?>
<strong class="alert_green">Registro completado correctamente</strong>
  <?PHP elseif(isset($_SESSION['registro']) && $_SESSION['registro'] == 'failed'):?>
        <strong class="alert_red">Registro fallido, Introduce bien los datos</strong> 
  <?PHP endif; ?>
    <?PHP Utils::deleteSession('registro'); ?> 

<form action="<?=base_url?>usuario/save" method="POST">
    
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required/>
    
    <label for="apellidos">Apellido</label>
    <input type="text" name="apellidos" required />
    
    <label for="email">Email</label>
    <input type="email" name="email"required />
    
    <label for="password">Contraseña</label>
    <input type="password" name="password" required />
    
    <button type="submit" value="Registrate">Resgistrate</button>
</form>
