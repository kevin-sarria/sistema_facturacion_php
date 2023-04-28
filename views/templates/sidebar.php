<aside class="dashboard-sidebar">
    
    <div class="icon-close-menu">
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <div class="dashboard-sidebar__user">
        <img src="/img/user.png" alt="Icono Usuario">
        <p>Bienvenido/a, <?php echo $_SESSION['nombre'] ?? 'Desconocido/a'; ?></p>
    </div>

    <hr>

    <div class="dashboard-sidebar__links">

        <div class="dashboard-sidebar__links--link <?php echo pagina_actual('/admin/dashboard') ? 'link-active' : ''; ?>">
            <img src="/img/sidebar/icon-dashboard.png" alt="Icono Dashboard">
            <a href="/admin/dashboard">Dashboard</a>
        </div>

        <div class="dashboard-sidebar__links--link <?php echo pagina_actual('/admin/inventario') ? 'link-active' : ''; ?>">
            <img src="/img/sidebar/icon-inventario.png" alt="Icono Inventario">
            <a href="/admin/inventario">Inventario</a>
        </div>

        <div class="dashboard-sidebar__links--link <?php echo pagina_actual('/admin/entradas') ? 'link-active' : ''; ?>">
            <img src="/img/sidebar/icon-entradas.png" alt="Icono Entradas">
            <a href="/admin/entradas">Entradas</a>
        </div>

        <div class="dashboard-sidebar__links--link <?php echo pagina_actual('/admin/salidas') ? 'link-active' : ''; ?>">
            <img src="/img/sidebar/icon-salidas.png" alt="Icono Salidas">
            <a href="/admin/salidas">Salidas</a>
        </div>

        <div class="dashboard-sidebar__links--link <?php echo pagina_actual('/admin/proveedores') ? 'link-active' : ''; ?>">
            <img src="/img/sidebar/icon-proveedores.png" alt="Icono Proveedores">
            <a href="/admin/proveedores">Proveedores</a>
        </div>
        

    </div>

</aside>