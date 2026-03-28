
for(let i=0;i<20;i++){
let bubble=document.createElement("div")
bubble.className="bubble"
document.body.appendChild(bubble)
bubble.style.left=Math.random()*100+"vw"
bubble.style.animationDuration=5+Math.random()*5+"s"
}


gsap.registerPlugin(ScrollTrigger);

/* cap open */

gsap.to(".bottle-cap",{

y:-60,
rotation:20,

scrollTrigger:{
trigger:".bottle-animation",
start:"top center",
end:"bottom center",
scrub:true
}

});

/* water droplets */

gsap.to(".water-drops span",{

y:200,
opacity:1,
stagger:0.1,

scrollTrigger:{
trigger:".bottle-animation",
start:"top center",
end:"bottom center",
scrub:true
}

});




