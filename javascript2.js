// digunakan untuk mencari sesuatu di google
function google() {
var cari = document.formcari.keyword.value;
var hasil = "http://www.google.com/search?q=" + cari ;
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes')
}