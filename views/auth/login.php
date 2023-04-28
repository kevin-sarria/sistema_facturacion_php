<main class="auth">

    <div class="formulario__container">
        <h2 class="formulario__heading"><?php echo $titulo; ?></h2>

        <form method="POST" class="formulario">

            <div class="formulario__campo">
                <input type="email" name="correo" placeholder="Correo Electronico" required />
            </div>

            <div class="formulario__campo">
                <input type="password" name="password" placeholder="Contraseña" required />
            </div>

            <div class="formulario__links">
                <a href="#">¿Has olvidado tu contraseña?</a>
            </div>

            <input type="submit" value="Iniciar Sesion" class="formulario__submit">

        </form>
    </div>

</main>