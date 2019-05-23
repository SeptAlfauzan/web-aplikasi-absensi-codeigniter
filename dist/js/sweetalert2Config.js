// let flashData = document.querySelector('.flash-data');

// if (flashData == 'Gagal') {
//     Swal.fire({
//         title: 'Absen ' + flashData,
//         text: 'Pastikan Data Anda Benar!',
//         type: 'warning'
//     });
// } else if (flashData == 'Berhasil') {
//     Swal.fire({
//         title: 'Absen ' + flashData,
//         text: 'Selamat Belajar',
//         type: 'success'
//     });
// } else if (flashData == 'Login Berhasil') {
//     Swal.fire({
//         title: flashData,
//         text: 'Sebentar Lagi Anda Akan Dialihkan ke Halaman Dashboard',
//         type: 'success'
//     });
// } else if (flashData == 'Login Gagal') {
//     Swal.fire({
//         title: flashData,
//         text: 'Pastikan Data Anda Benar!',
//         type: 'warning'
//     });
// } else if (flashData == 'Sekolah Berhasil Ditambahkan') {
//     Swal.fire({
//         title: flashData,
//         type: 'success'
//     });
// } else if (flashData == 'Sekolah Gagal Ditambahkan') {
//     Swal.fire({
//         title: flashData,
//         type: 'warning'
//     });
// }

let alertHapus = document.querySelector('.hapus');
alertHapus.addEventListener('click', function(e) {
    e.preventDefault();
    alert();
})