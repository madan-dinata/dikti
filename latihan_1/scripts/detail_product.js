function openImg(imgs) {
    // mengambil gambar 
    var expan_img = document.getElementById("expanded_img");
    // menggunakan beberapa gambar ketika di klik
    expan_img.src = imgs.src;

    // show container element (hident with css)
    expan_img.parentElement.style.display = "block";
}