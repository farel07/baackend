// ambil element yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombol_cari = document.getElementById('tombol-cari');
var container = document.getElementById('container');


// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function(){

    // buat object ajax
    var ajax = new XMLHttpRequest();

    // cek kesiapan ajax
    ajax.onreadystatechange = function(){

        if ( ajax.readyState == 4 && ajax.status == 200 ){

            container.innerHTML = ajax.responseText;

        }

    }

    // eksekusi ajax
    ajax.open('GET','ajax/produk.php?keyword=' + keyword.value, true);
    ajax.send(); 

})