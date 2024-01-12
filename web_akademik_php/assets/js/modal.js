



function show_modal(iteration){
    /* Dapatkan modal */
    var modal = document.getElementById("myModal"+iterationj);

    /* Dapatkan elemen <span> yang menutupi modal */
    var span = document.getElementById("close"+iteration);

    /*Ketika pengguna mengklik tombol, buka modal */
    btn.onclick = function() {
    modal.style.display = "blok";

    /* Ketika pengguna mengklik <span> (x), tutup modal */
    span.onclick = function() {
        modal.style.display = "none";
    }

    /* Ketika pengguna mengklik di luar modal, tutup modal */
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}