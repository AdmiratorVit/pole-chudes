"use strict"

const wheelPreview = document.querySelector("#wheelPreview");
const wheel = document.querySelector("#wheel");
const modalLuck = document.querySelector("#modalLuck");
const tryRotate = document.querySelector("#modalTryRotate");
const timeToRotate = 5000;
const modalWin = document.querySelector("#modalWin");


modalWin.addEventListener("click", (event) => {
    const sendPrize = modalWin.querySelector('#sendPrize');
    const email = document.querySelector('#input-email-forPrize');
    const prize = localStorage.getItem('prize');
    if (event.target === sendPrize) {
        let myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/json; charset=utf-8");
        myHeaders.append("Accept", "application/json");
        myHeaders.append("Authorization", "Mindbox secretKey=\"MFrUJPCg7RFie5A6guBA7okt97G4eMNz\"");

        let raw = `{\r
 "customer": {\r
 "email": "${email.value}",\r
 "customFields": {\r
 "FortuneWheelBonusValue": ${prize},\r
 "PromocodeFortuneWheel1": ${prize}\r
 },\r
 "subscriptions": [ {\r
 "brand": "Author24new",\r
 "pointOfContact": "Email",\r
 "topic": "LandingPageFortuneWheel",\r
 "isSubscribed": "true"\r
 } ] }\r
}`;
        // console.log(raw);

        let requestOptions = {
            method: 'POST',
            headers: myHeaders,
            body: raw,
            redirect: 'follow'
        };

        fetch("https://api.mindbox.ru/v3/operations/async?endpointId=Author24new.LendingPageSubs&operation=PodpiskaKoleso1", requestOptions)
            .then(response => response.text())
            .then(result => console.log(result))
            .catch(error => console.log('error', error));
        const modalWrapper = document.querySelector('.modalWrapper');
        modalWrapper.classList.add('hidden');
        alert('Письмо с призом отправлено');
    }

})

modalLuck.addEventListener("click", (event) => {
    const startRotate = modalLuck.querySelector('.modalButton');
    const winMode = document.querySelector('#mode').value;
    if (event.target === startRotate) {
        const modalWin = document.querySelector("#modalWin");
        const degrees = [360, 330, 300, 270, 240, 210, 180, 150, 120, 90, 60, 30];
        let deg = 0;
        if (winMode == 1) {
            deg = degrees[Math.floor(Math.random() * degrees.length)];
        } else {
            deg = 60;
        }
        let degToRotate = deg + 1440;
        startRotate.style.visibility = 'hidden';
        localStorage.setItem('rotateBtnVisibility', 'hidden');
        wheel.style.animation = '';
        wheel.style.transform = 'rotate(0deg)';
        wheel.style.transform = `rotate(${degToRotate}deg)`;

        switch (deg) {
            case 60:
                setTimeout(() => {
                    tryRotate.classList.add('hidden');
                    modalWin.classList.remove('hidden');
                    modalWin.querySelector('.modalTitle').innerHTML = 'Куда отправить приз 1000 руб.?';
                    localStorage.setItem('prize', 1000);
                }, timeToRotate);
                break;
            case 120:
                setTimeout(() => {
                    tryRotate.classList.add('hidden');
                    modalWin.classList.remove('hidden');
                    modalWin.querySelector('.modalTitle').innerHTML = 'Куда отправить приз 700 руб.?';
                    localStorage.setItem('prize', 700);
                }, timeToRotate);
                break;
            case 180:
                setTimeout(() => {
                    tryRotate.classList.add('hidden');
                    modalWin.classList.remove('hidden');
                    modalWin.querySelector('.modalTitle').innerHTML = 'Куда отправить приз 600 руб.?';
                    localStorage.setItem('prize', 600);
                }, timeToRotate);
                break;
            case 240:
                setTimeout(() => {
                    tryRotate.classList.add('hidden');
                    modalWin.classList.remove('hidden');
                    modalWin.querySelector('.modalTitle').innerHTML = 'Куда отправить приз 500 руб.?';
                    localStorage.setItem('prize', 500);
                }, timeToRotate);
                break;
            case 300:
                setTimeout(() => {
                    tryRotate.classList.add('hidden');
                    modalWin.classList.remove('hidden');
                    modalWin.querySelector('.modalTitle').innerHTML = 'Куда отправить приз 300 руб.?';
                    localStorage.setItem('prize', 300);
                }, timeToRotate);
                break;
            case 360:
                setTimeout(() => {
                    tryRotate.classList.add('hidden');
                    modalWin.classList.remove('hidden');
                    modalWin.querySelector('.modalTitle').innerHTML = 'Куда отправить приз 100 руб.?';
                    localStorage.setItem('prize', 100);
                }, timeToRotate);
                break;
            default:
                setTimeout(() => {
                    const tryRotate = document.querySelector('#modalTryRotate');
                    tryRotate.querySelector('.modalText').innerHTML = 'Не отчаивайся, раз ты уже на Автор24 – удача определенно на твоей стороне!';
                }, timeToRotate);
        }
        setTimeout(() => {
            wheel.style.animation = `decelerate ${timeToRotate / 1000}s  ease-out forwards`;
            startRotate.disabled = false;
        }, 0);
    }

    if (event.target.tagName === 'IMG') {
        modalLuck.classList.add('hidden');
    }
});

wheelPreview.addEventListener('mouseover', () => {
    const isHidden = localStorage.getItem('rotateBtnVisibility');
    if (isHidden !== 'hidden') {
        modalLuck.classList.remove('hidden');
        const startRotate = modalLuck.querySelector('.modalButton');
        if (isHidden === 'hidden') {
            startRotate.style.visibility = 'hidden';
        }
    }
});

setInterval(() => {
    const wheelPreview = document.getElementById("wheelPreview");
    wheelPreview.style.transition = "transform 3s";
    wheelPreview.style.transform = "rotate(720deg)";
    setTimeout(() => {
        wheelPreview.style.transition = "none";
        wheelPreview.style.transform = "rotate(0deg)";
    }, 5000);
}, 30000);

