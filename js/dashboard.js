(() => {

    window.addEventListener('DOMContentLoaded', () => {

        const iconMenu = document.querySelector('.icon-menu');
        const iconCloseMenu = document.querySelector('.icon-close-menu');
        const sidebar = document.querySelector('.dashboard-sidebar');

        iconMenu.addEventListener('click', toggleSidebar);
        iconCloseMenu.addEventListener('click', toggleSidebar);

        function toggleSidebar() {
            sidebar.classList.toggle('sidebar-active');
        }

    });

})();