const autoBtn = document.getElementById('auto');
const manualBtn = document.getElementById('manual');
const lightBtn = document.getElementById('light');
const darkBtn = document.getElementById('dark');
const customBtn = document.getElementById('custom');

autoBtn.addEventListener('click',()=>{
    autoBtn.classList.add("activbBtn");
    manualBtn.classList.remove("activbBtn");
    lightBtn.disabled = true;
    darkBtn.disabled = true;
    customBtn.disabled = true;
})

manualBtn.addEventListener('click',()=>{
    autoBtn.classList.remove("activbBtn");
    manualBtn.classList.add("activbBtn");
    lightBtn.disabled = false;
    darkBtn.disabled = false;
    customBtn.disabled = false;
})

lightBtn.addEventListener('click',()=>{
    lightBtn.classList.add("activbBtn");
    darkBtn.classList.remove("activbBtn");
    customBtn.classList.remove("activbBtn");
})

darkBtn.addEventListener('click',()=>{
    lightBtn.classList.remove("activbBtn");
    darkBtn.classList.add("activbBtn");
    customBtn.classList.remove("activbBtn");
})

customBtn.addEventListener('click',()=>{
    lightBtn.classList.remove("activbBtn");
    darkBtn.classList.remove("activbBtn");
    customBtn.classList.add("activbBtn");
})









/*
localStorage.setItem('lightColor', "#eee")

window.onload = () => {
    const lightColors = localStorage.getItem('lightColor')
    lightBtn.style.backgroundColor = lightColors
}
*/
