<header>
    <div class="content-wrapper">
        <div class="float-left">
            <p class="site-title">
                <a href="/index.php">
                    Ejemplo basico de Request y Response en PHP + HTML + CSS
                </a>
            </p>
        </div>
        <div class="float-right">
            <section id="login">
                <ul id="login">
                    <?php
                    if ( islogged() )
                    {
                        echo '<li><a href="/logoff.php">Cerrar Sesion</a></li>' . "\n";
                    }
                    else
                    {
                        echo '<li><a href="/logon.php">Iniciar Sesion</a></li>' . "\n";
                    }
                    ?>
                </ul>
                <?php if( islogged() )
                {
                    $usuario = $_SESSION['username'];
                    echo "<div class=\"welcomeMessage\">Bienvenido, <strong>" . $usuario . "</strong></div>\n";
                }
                else
                    echo "<div class=\"welcomeMessage\">No se ha autenticado</div>\n";
                ?>
            </section>
        </div>
        <div class="clear-fix"></div>
    </div>
    <?php render("navbar"); ?>
</header>