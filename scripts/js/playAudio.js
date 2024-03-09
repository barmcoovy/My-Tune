const audioPlayers = document.getElementsByClassName('song-audio');
const songDiv = document.getElementsByClassName('song');
const playAudioIcon = document.querySelectorAll(".play-audio i");
for(let i =0;i<playAudioIcon.length;i++){
    playAudioIcon[i].addEventListener("click", function(){
        if(playAudioIcon[i].classList.contains('fa-play') ){
            playAudioIcon[i].classList.remove('fa-play');
            playAudioIcon[i].classList.add('fa-pause');
            audioPlayers[i].play();
        }
        else if(playAudioIcon[i].classList.contains('fa-pause')){
            playAudioIcon[i].classList.remove('fa-pause');
            playAudioIcon[i].classList.add('fa-play');
            audioPlayers[i].pause();
            audioPlayers[i].currentTime = 0;

        }
    })
}
