//pobranie wszystkich zmiennych z id, klas, lub selektorów jakichś tam

const audioBar = document.getElementById('audio-bar');
const randomIcon = document.getElementById('random-icon');
const playpauseIcon = document.getElementById('playpause-icon');
const repeatIcon = document.getElementById('repeat-icon');
const volumeIcon = document.getElementById('volume-icon');
const volumeRange = document.getElementById('volume-range');
const timeRange = document.getElementById('time-range');

const audioPlayers = document.getElementsByClassName('song-audio');
const playAudioIcon = document.querySelectorAll('.play-audio i');

let currentVolume = 1;
//pierwsze funcjonalności, odtwarzanie i stopowanie utworu
for (let i = 0; i < playAudioIcon.length; i++) {
    playAudioIcon[i].addEventListener('click', function () {
        if (playAudioIcon[i].classList.contains('fa-play')) {
            playAudioIcon[i].classList.remove('fa-play');
            playAudioIcon[i].classList.add('fa-pause');
            audioPlayers[i].play();
            audioBar.style.display = 'flex';
        } else if (playAudioIcon[i].classList.contains('fa-pause')) {
            playAudioIcon[i].classList.remove('fa-pause');
            playAudioIcon[i].classList.add('fa-play');
            audioPlayers[i].pause();
            audioPlayers[i].currentTime = 0;
        }
    });
}
//narazie tylko zmiana wyglądu ikony
randomIcon.addEventListener('click', function () {
    const randomIconStyle = getComputedStyle(randomIcon);
    const randomIconColor = randomIconStyle.color;

    if (randomIconColor === 'rgb(255, 255, 255)' || randomIconColor === 'white') {
        randomIcon.style.color = 'green';
    } else if (randomIconColor === 'rgb(0, 128, 0)' || randomIconColor === 'green') {
        randomIcon.style.color = 'white';
    }
});
//narazie tylko zmiana wyglądu ikony
playpauseIcon.addEventListener('click', function () {
    if (playpauseIcon.classList.contains('fa-play')) {
        playpauseIcon.classList.remove('fa-play');
        playpauseIcon.classList.add('fa-pause');
    } else if (playpauseIcon.classList.contains('fa-pause')) {
        playpauseIcon.classList.remove('fa-pause');
        playpauseIcon.classList.add('fa-play');
    }
});
//po kliknieciu przycisku od loopu zmienia on kolor i ustawia loop na true lub false
repeatIcon.addEventListener('click', function () {
    const repeatIconStyle = getComputedStyle(repeatIcon);
    const repeatIconColor = repeatIconStyle.color;

    if (repeatIconColor === 'rgb(255, 255, 255)' || repeatIconColor === 'white') {
        repeatIcon.style.color = 'green';
        const isLoop = true;
        IsAudioLoop(isLoop);
    } else if (repeatIconColor === 'rgb(0, 128, 0)' || repeatIconColor === 'green') {
        repeatIcon.style.color = 'white';
        const isLoop = false;
        IsAudioLoop(isLoop);
    }
});
//zmienianie wyglądu po kliknięciu ikony oraz zmiana głośności z ustawionej na 0 oraz z 0 na wcześniej ustawioną wartość
volumeIcon.addEventListener('click', function () {
    if (currentVolume > 0) {
        volumeIcon.classList.remove('fa-volume-high');
        volumeIcon.classList.remove('fa-volume-low');
        volumeIcon.classList.add('fa-volume-xmark');
        volumeRange.value = 0;
        setVolume(0);
        currentVolume = 0;
    } else {
        volumeIcon.classList.remove('fa-volume-xmark');
        volumeRange.value = currentVolume * 100;
        setVolume(currentVolume);
        currentVolume = currentVolume;
        if (currentVolume > 0.5) {
            volumeIcon.classList.add('fa-volume-high');
        } else {
            volumeIcon.classList.add('fa-volume-low');
        }
    }
});
//zmiana głośności wraz z ikonami z fontAwesome, generalnie prościzna tego typu
volumeRange.addEventListener('input', function () {
    const volume = volumeRange.value / 100;
    currentVolume = volume;
    setVolume(volume);

    if (volume === 0) {
        volumeIcon.classList.remove('fa-volume-low', 'fa-volume-high');
        volumeIcon.classList.add('fa-volume-xmark');
    } else if (volume < 0.5) {
        volumeIcon.classList.remove('fa-volume-high', 'fa-volume-xmark');
        volumeIcon.classList.add('fa-volume-low');
    } else {
        volumeIcon.classList.remove('fa-volume-low', 'fa-volume-xmark');
        volumeIcon.classList.add('fa-volume-high');
    }
});

//timeRange ma za zadanie aktualizować obecny czas utworu
timeRange.addEventListener('input', function () {
    //progressTime to pasek postępu utworu, jest to input range 
    const progressTime = timeRange.value;
//pętla żeby przejść przez wszystkie elementy tablicy z piosenkami
    for (let i = 0; i < audioPlayers.length; i++) {
        //długość czasu piosenki
        const duration = audioPlayers[i].duration;
        //dodanie obecnego czasu piosenki, jest to wartośc inputa range podzielona przez 100 i pomnożona przez czas trwania utworu
        const currentTime = (progressTime / 100) * duration;
        //aktualizacja obecnego czasu piosenki
        audioPlayers[i].currentTime = currentTime;
    }
});



//pętla żeby przejść przez wszystkie elementy tablicy z piosenkami
for (let i = 0; i < audioPlayers.length; i++) {
    //dodanie funkcjonalności przycisku od czasu(chodzi o przewijanie czasu)
    //time update aktualizuję obecny czasu utworu, robię to dla podanego elementu tablicy piosenki
    audioPlayers[i].addEventListener('timeupdate', function () {
        //currentTime bierze aktualny czas odtwarzania utworu
        const currentTime = audioPlayers[i].currentTime;
        //duration bierzę długość utworu (chodzi o czas)
        const duration = audioPlayers[i].duration;

        // pasek akutalizuje się na bierząco, poprzez zmianę czasu
        timeRange.value = (currentTime / duration) * 100;
    });
}
//dodanie funkcjonalności przycisku od volumu(teraz się volumuje)
function setVolume(volume) {
    for (let i = 0; i < audioPlayers.length; i++) {
        audioPlayers[i].volume = volume;
    }
}

//dodanie funkcjonalności przycisku od loopu(teraz się loopuje)
function IsAudioLoop(isLoop) {
    for (let i = 0; i < audioPlayers.length; i++) {
        audioPlayers[i].loop = isLoop;
    }
}
