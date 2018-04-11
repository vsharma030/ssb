function show_image(src) {
    var img=document.createElement("img");
    img.src=src;
    img.width="100";
    img.height="100";
    document.body.appendChild(img);
}