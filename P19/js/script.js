// Ambil element yg dibutuhkan

var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
    // buat object AJAX
    var xhr = new XMLHttpRequest();

    // cek kediapan AJAX
    xhr.onreadystatechange = function() {
        if ( xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }

    // Ekselusi AJAX
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();
});


// Contoh
// tombolCari.addEventListener('click', function(){
//     alert('Berhasil')
// });