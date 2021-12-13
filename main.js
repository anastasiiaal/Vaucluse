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
const hidetextBtn = document.querySelectorAll('.hidetext');
const readmoreDots = document.querySelectorAll('.dots');
const readmoreTxt = document.querySelectorAll('.p-hidden');
let arrayElem = [];


for (let i = 0; i < readmoreBtn.length; i++) {
    arrayElem.push(readmoreBtn[i]);
    readmoreBtn[i].addEventListener('click', (e) => {
        // console.log(arrayElem.indexOf(e.target));
        e.preventDefault();
        readmoreDots[i].classList.add('hidden');
        readmoreTxt[i].classList.remove('hidden');
        hidetextBtn[i].classList.remove('hidden');
        readmoreBtn[i].classList.add('hidden');
    });
}


for (let i = 0; i < hidetextBtn.length; i++) {
    arrayElem.push(hidetextBtn[i]);
    hidetextBtn[i].addEventListener('click', function(e){
        // console.log(arrayElem.indexOf(e.target));
        e.preventDefault();
        readmoreDots[i].classList.remove('hidden');
        readmoreTxt[i].classList.add('hidden');
        hidetextBtn[i].classList.add('hidden');
        readmoreBtn[i].classList.remove('hidden');
    });
}























// const testBtn = document.getElementById('test-btn');
// const testDots = document.getElementById('test-dots');
// const testPar = document.getElementById('test-p');

// testBtn.addEventListener('click', (e) => {
//     e.preventDefault();
//     testDots.classList.toggle('hidden');
//     testPar.classList.toggle('hidden');
// });



// readmoreBtn.forEach(e => {
//     e.addEventListener
// })










