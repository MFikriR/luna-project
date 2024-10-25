const allDropdown = document.querySelectorAll('#sidebar .side-dropdown'); // Menggunakan querySelectorAll
allDropdown.forEach(item => {
    const a = item.parentElement.querySelector('a:first-child');
    a.addEventListener('click', function(e) {
        e.preventDefault();
        

        this.classList.toggle('active');
        item.classList.toggle('show');
    });
});

// Ambil elemen sidebar dan tombol toggle
const toggleButton = document.querySelector('.toggle-sidebar');
const sidebar = document.getElementById('sidebar');

// Tambahkan event listener untuk toggle sidebar
toggleButton.addEventListener('click', function() {
    sidebar.classList.toggle('hide'); // Menambahkan/menghapus class 'hide' pada sidebar
});
