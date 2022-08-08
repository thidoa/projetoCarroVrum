function teste(vl){
    return document.querySelectorAll(vl)
}

var circles = teste(".circle");

circles.forEach(val=>{
    var numDots = val.getAttribute("dots");
    var valueDots = val.getAttribute("valueDot")
    var point = '';
    var deg = 360/numDots;
    for(var a = 1; a <= numDots; a++){
        var vd = a <= valueDots?"<div></div>":'';
        point+=`<div class="points" style="--i: ${a}; --r: ${deg}deg;">${vd}</div>`
    }
    val.innerHTML = point;
})
