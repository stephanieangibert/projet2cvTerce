const actua=document.querySelectorAll('.itemActualite');
const encartGa=document.getElementById('encartGauche');

 window.onload=function(){

    const TL= new TimelineMax({paused : true});


    TL
    .staggerTo(actua,0.8,{x:0,ease: Back.easeOut.config(1.7), stagger : 0.1});
    
    
     window.onscroll=function(){
        if(document.documentElement.scrollTop>1290){
            TL.play();
    } 
    
    
    }
        
            TweenMax.to(encartGa,0.8,{x:0,ease: Back.easeOut.config(1.7)});
            TweenMax.to('.encartDroite',1,{x:0,ease: Back.easeOut.config(1.7)})




} 





let largeur=window.innerWidth;
if(largeur>739){
    const item=document.querySelectorAll('.item');
for (let i=0;i<item.length;i++){
    charming(item[i]);
}
const menu=document.querySelectorAll('.menuItem');
menu.forEach(item =>item.addEventListener('mouseenter',(e)=>{
let lettre=Array.from(e.target.childNodes[1].querySelectorAll('span'));
for (let j=0; j<lettre.length;j++){
TweenMax.to(lettre[j],1,{
x:Math.floor(Math.random()*100-70),
y:Math.floor(Math.random()*100-70),
z:Math.floor(Math.random()*100-70),
rotation:Math.floor(Math.random()*100-70),
// opacity:0.3,
ease:Circ.easeOut
})
}

menu.forEach(item =>item.addEventListener('mouseleave',()=>{
for(k=0;k<lettre.length;k++){
   
    TweenMax.to(lettre[k],1,{
        x:0,       
y:0,
z:0,
rotation:0,
// opacity:1,
ease:Circ.easeOut
    })
}

}))
}))

 }

