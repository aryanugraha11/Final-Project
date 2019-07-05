// nama bulan
var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
// nama hari
var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
// tanggal
var date = new Date();
// hari
var day = date.getDate();
// bulan
var month = date.getMonth();
// hari ini
var thisDay = date.getDay(),

thisDay = myDays[thisDay];

var yy = date.getYear();

//tahus
var year = (yy < 1000) ? yy + 1900 : yy;
// menampilkan data hari sekarang,tanggal ,bulan dan tahun 
document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
