/* code permettant de faire défiler les images*/
const slide = ["image-tablette.jpg", "image-slide.jpg", "image-slide2.jpg"]
let numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero > 2)
        numero = 0;
    if (numero < 0)
        numero = 2;
    document.getElementById("slide").src = "images/" + slide[numero];
    document.getElementById("slide").style.transitionTimingFunction = "linear";
}
/* Si l'utilisateur ne clique pas sur l'une des fleches, l'image change au bout de 4 seconde */
setInterval("ChangeSlide(1)", 4000);