// // Ambil semua elemen link dalam navbar
// var navLinks = document.querySelectorAll('.nav-link');

// // Tambahkan event listener ke setiap link
// navLinks.forEach(function(link) {
//     link.addEventListener('click', function(event) {
//         // Menghapus kelas 'active' dari link yang sedang aktif
//         var activeLink = document.querySelector('.nav-link.active');
//         if (activeLink && activeLink !== this) {
//             activeLink.classList.remove('active');
//             activeLink.style.color = ''; // Mengembalikan warna teks ke default
//         }

//         // Menambahkan kelas 'active' ke link yang diklik
//         this.classList.add('active');
//         this.style.color = '#33D8D8'; // Mengubah warna teks menjadi #33D8D8

//         // Jika yang diklik adalah link "Home", atur ulang warna teksnya ke #33D8D8
//         if (this.id === 'home-link') {
//             this.style.color = '#33D8D8';
//         }
//     });
// });

// Ambil semua elemen link dalam navbar
var navLinks = document.querySelectorAll('.nav-link');

// Atur warna teks untuk link yang aktif
function setTextColor() {
    navLinks.forEach(function(link) {
        if (link.classList.contains('active')) {
            link.style.color = '#33D8D8'; // Ubah warna teks menjadi #33D8D8 untuk link yang aktif
        } else {
            link.style.color = ''; // Kembalikan warna teks ke default untuk link yang tidak aktif
        }
    });
}

// Tambahkan event listener ke setiap link
navLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
        // Hapus kelas 'active' dari semua link
        navLinks.forEach(function(navLink) {
            navLink.classList.remove('active');
        });

        // Tambahkan kelas 'active' ke link yang diklik
        this.classList.add('active');

        // Atur ulang warna teks
        setTextColor();
    });
});

// Panggil fungsi setTextColor() saat halaman dimuat
window.addEventListener('load', setTextColor);

document.addEventListener("DOMContentLoaded", function() {
const dropdownItemsNumber = document.querySelectorAll('.dropdown-menu#w-100 .dropdown-item');
const dropdownMenuButtonNumber = document.getElementById('dropdownMenuButtonNumber');

    dropdownItemsNumber.forEach(item => {
        item.addEventListener('click', function() {
            // Menghapus kelas active dari semua item dropdown number
            dropdownItemsNumber.forEach(item => {
                item.classList.remove('active');
            });
            // Menambahkan kelas active ke item dropdown number yang baru dipilih
            this.classList.add('active');
            // Memperbarui teks pada tombol toggle dropdown number
            const selectedValue = this.getAttribute('data-value');
            dropdownMenuButtonNumber.textContent = selectedValue;
        });
    });

    const dropdownItemsText = document.querySelectorAll('.dropdown-menu:not(#w-100) .dropdown-item');

    dropdownItemsText.forEach(item => {
        item.addEventListener('click', function() {
            // Menghapus kelas active dari semua item dropdown text
            dropdownItemsText.forEach(item => {
                item.classList.remove('active');
            });
            // Menambahkan kelas active ke item dropdown text yang baru dipilih
            this.classList.add('active');
            // Memperbarui teks pada tombol toggle dropdown text
            const selectedValue = this.getAttribute('data-value');
            this.closest('.dropdown').querySelector('.dropdown-toggle').textContent = selectedValue;
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
const scrollContainer = document.getElementById("scrollContainer");
const scrollProgressBar = document.getElementById("scrollProgressBar");


scrollContainer.addEventListener("scroll", function() {
    const scrollTop = this.scrollTop;
    const scrollHeight = this.scrollHeight - this.clientHeight;
    const progress = (scrollTop / scrollHeight) * 100;
    scrollProgressBar.style.width = progress + "%";
    scrollProgressBarBackground.style.width = progress + "%";
    });
});


// background
// Mendapatkan semua elemen yang ingin diklik, kecuali "Favorite"
var listItems = document.querySelectorAll('.list-group-item:not(.favorite)');

// Menambahkan event listener untuk setiap elemen
listItems.forEach(function(item) {
    item.addEventListener('click', function() {
        // Menghapus semua gaya pada elemen lain
        listItems.forEach(function(prevItem) {
            prevItem.style.backgroundColor = '';
            prevItem.style.color = '';
        });

        // Mengatur gaya elemen yang diklik
        this.style.backgroundColor = '#33D8D8';
        this.style.color = 'white';
    });
});

// Menetapkan konten pertama di bawah elemen "Favorite" sebagai aktif secara default saat halaman dimuat
window.onload = function() {
    var firstItem = document.querySelector('.list-group-item:not(.favorite)');
    firstItem.classList.add('active');
};

// Mendapatkan semua elemen yang ingin diklik, kecuali "Favorite"
var listItems = document.querySelectorAll('.list-group-item:not(.favorite)');

// Menambahkan event listener untuk setiap elemen
listItems.forEach(function(item) {
    item.addEventListener('click', function() {
        // Menghapus semua gaya pada elemen lain
        listItems.forEach(function(prevItem) {
            prevItem.classList.remove('active');
        });

        // Mengatur konten yang diklik sebagai aktif
        this.classList.add('active');
    });
});

// Mendapatkan elemen path hati dalam SVG
var heartPath = document.getElementById('heart-path');

// Menambahkan event listener untuk klik
document.getElementById('heart-icon').addEventListener('click', function() {
    // Memeriksa warna fill saat ini
    if (heartPath.getAttribute('fill') === 'red') {
        // Mengubah warna fill menjadi warna aslinya
        heartPath.setAttribute('fill', 'white');
    } else {
        // Mengubah warna fill menjadi merah
        heartPath.setAttribute('fill', 'red');
    }
});

// account setting
// Menyimpan nilai-nilai input awal
var initialValues = {};
document.querySelectorAll('form input').forEach(function(input) {
    initialValues[input.id] = input.value;
});

document.getElementById('editBtn').addEventListener('click', function() {
    var inputs = document.querySelectorAll('form input');
    inputs.forEach(function(input) {
        input.removeAttribute('readonly');
        // Mengisi kembali nilai input dengan nilai awal
        input.value = initialValues[input.id];
    });
    document.getElementById('saveBtn').style.display = 'block';
    this.style.display = 'none'; // Menyembunyikan tombol "Edit"
    document.getElementById('logoutBtn').style.display = 'none'; // Menyembunyikan tombol "Logout"
});

document.getElementById('saveBtn').addEventListener('click', function(event) {
    var editBtn = document.getElementById('editBtn');
    if (!editBtn.classList.contains('clicked')) {
        event.preventDefault();
        alert('Harap klik tombol "Edit" terlebih dahulu');
    } else {
        var inputs = document.querySelectorAll('form input');
        inputs.forEach(function(input) {
            // Menyimpan nilai baru dari input ke dalam initialValues
            initialValues[input.id] = input.value;
            // Mengembalikan atribut readonly setelah disimpan
            input.setAttribute('readonly', true);
        });
        document.getElementById('saveBtn').style.display = 'none';
        editBtn.style.display = 'block'; // Menampilkan kembali tombol "Edit"
        document.getElementById('logoutBtn').style.display = 'block'; // Menampilkan kembali tombol "Logout"
    }
});

document.getElementById('editBtn').addEventListener('click', function() {
    this.classList.add('clicked');
});