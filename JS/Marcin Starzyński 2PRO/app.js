const btn1 = document.getElementById("btn1")
const btn2 = document.getElementById("btn2")
const btn3 = document.getElementById("btn3")

const sek1 = document.getElementById("sek1")
const sek2 = document.getElementById("sek2")
const sek3 = document.getElementById("sek3")

const obrazy = document.getElementById("obrazy")

for(let i = 1; i <=10; i++){
    let img = document.createElement("img")
    img.src = i + ".jpg"
    img.className = "Wzory"
    img.title = i
    obrazy.appendChild(img)
}

btn1.onmouseover = function kol(){
    sek1.style.display = "block"
    sek2.style.display = "none"
    sek3.style.display = "none"
    btn1.style.backgroundColor = "Salmon"
    btn2.style.backgroundColor = "Crimson"
    btn3.style.backgroundColor = "Crimson"
}
btn2 = function kszt(){
    sek1.style.display = "none"
    sek2.style.display = "block"
    sek3.style.display = "none"
    btn1.style.backgroundColor = "Crimson"
    btn2.style.backgroundColor = "Salmon"
    btn3.style.backgroundColor = "Crimson"
}
btn3 = function wzor(){
    sek1.style.display = "none"
    sek2.style.display = "none"
    sek3.style.display = "block"
    btn1.style.backgroundColor = "Crimson"
    btn2.style.backgroundColor = "Crimson"
    btn3.style.backgroundColor = "Salmon"
}