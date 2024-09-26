// custom.js
document.getElementById('sidebarToggle').addEventListener('click', function () {
    var sidebar = document.getElementById('sidebar');
    var content = document.querySelector('.content');
    var toggleBtn = document.getElementById('sidebarToggle');

    sidebar.classList.toggle('active');
    content.classList.toggle('active');
    toggleBtn.classList.toggle('active');
});
