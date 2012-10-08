<div id="main">
    <?php if(isset($_REQUEST['error']))
    {
    if($_REQUEST['error'] == "error")
    {
    ?>
    <div class="error">
        Las credenciales introducidas son incorrectas. Revise las correctas en la <a href="index.php">pagina de inicio</a>
    </div>
    <?php
    }}
    ?>
    <h2>Autentificarse</h2>
        <form action="<?php echo basepath(); ?>/auth.php" method="post">
            <fieldset>
            <legend>Datos de usuario</legend>
            <ol>
                <li>
                    <label for="username">Nombre de usuario:</label>
                    <input type="text" name="username" value="" id="username" />
                </li>
                <li>
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" value="" id="password" />
                </li>
            </ol>
            <input type="submit" name="sent" value="Iniciar Sesion" />
            <p>
                <a href="<?php echo basepath(); ?>/index.php">Volver</a>
            </p>
        </fieldset>
    </form>
</div>