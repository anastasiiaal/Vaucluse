//*** burger mobile ***//

const burger = document.getElementById('burger');
const cross = document.getElementById('cross');
const nav = document.getElementById('navigation');
const lang = document.getElementById('lang');
const overlay = document.getElementById('overlay');

burger.addEventListener('click', () => {
    nav.style.display = 'flex';
    lang.style.display = 'flex';
    cross.style.display = 'flex';
    overlay.style.display = 'block';
})

const close = () => {
    nav.style.display = 'none';
    lang.style.display = 'none';
    cross.style.display = 'none';
    overlay.style.display = 'none';
};

cross.addEventListener('click', () => {
    close();
});
overlay.addEventListener('click', () => {
    close();
});



//*** actualites.html > read more button ***//
const readmoreBtn = document.querySelectorAll('.readmore');
const readmoreDots = document.querySelectorAll('.dots');
const readmoreTxt = document.querySelectorAll('.p-hidden');
let readText;
let hideText;

if (document.getElementById("read")) {
    readText = document.getElementById("read").innerHTML;
    hideText = document.getElementById("hide").innerHTML;
}

for (let i = 0; i < readmoreBtn.length; i++) {
    readmoreBtn[i].addEventListener('click', (e) => {
        e.preventDefault();
        if(!readmoreBtn[i].classList.contains("displayed")) {
            readmoreBtn[i].classList.add("displayed")
            readmoreDots[i].classList.add('hidden');
            readmoreTxt[i].classList.remove('hidden');
            readmoreBtn[i].innerHTML = hideText;
        } else {
            readmoreBtn[i].classList.remove("displayed")
            readmoreDots[i].classList.remove('hidden');
            readmoreTxt[i].classList.add('hidden');
            readmoreBtn[i].innerHTML = readText;
        }
    });
}