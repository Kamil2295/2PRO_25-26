

const przy1 = document.getElementById("przy1")
const przy2 = document.getElementById("przy2")
const przy3 = document.getElementById("przy3")

const jeden = document.getElementById("jeden")
const dwa = document.getElementById("dwa")
const trzy = document.getElementById("trzy")



przy1.onmouseover = function kolor(){
    jeden.style.display= "block"
    dwa.style.display="none"
    trzy.style.display="none"

    jeden.style.backgroundColor = "salmon"
    dwa.style.backgroundColor="crimson"
    trzy.style.background= "crimson"

}

przy2.onmouseover = function ksztalt(){
    jeden.style.display= "none"
    dwa.style.display="block"
    trzy.style.display="none"

    przy1.style.backgroundColor = "crimson"
    dwa.style.backgroundColor="salmon"
    trzy.style.background= "crimson"



}




przy3.onmouseover = function Wzór(){
    jeden.style.display= "none"
    dwa.style.display="none"
    trzy.style.display="block"

    jeden.style.backgroundColor = "crimson"
    dwa.style.backgroundColor="crimson"
    trzy.style.background= "salmon"

    for(let i = 1; i <10; i++){
    let img = document.createElement("img")
    img.src = 1 + ".jpg"
    img.className = "Wzory"
    img.title = 1
    obrazy.appendchild(img)
}

}


