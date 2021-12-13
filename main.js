// const testBtn = document.getElementById('test-btn');
// const testDots = document.getElementById('test-dots');
// const testPar = document.getElementById('test-p');

// testBtn.addEventListener('click', (e) => {
//     e.preventDefault();
//     testDots.classList.toggle('hidden');
//     testPar.classList.toggle('hidden');
// });


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



// readmoreBtn.forEach(e => {
//     e.addEventListener
// })
