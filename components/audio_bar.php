<div id="audio-bar">
    <div class="left"></div>
    <div class="right">
        <div class="audio-play">
        <div class="play-controls">
            <span class='icon-play-controls'><i class="fa-solid fa-shuffle"  id="random-icon"></i></span>
            <span class='icon-play-controls'><i class="fa-solid fa-backward" id="backward-icon"></i></span>
            <span class='icon-play-controls'><i class="fa-solid fa-play" id="playpause-icon"></i></span>
            <span class='icon-play-controls'><i class="fa-solid fa-forward" id="forward-icon"></i></span>
            <span class='icon-play-controls'><i class="fa-solid fa-repeat" id="repeat-icon"></i></span>
        </div>
        <div class="time-controls">
            <input type="range" id="time-range" min="0" max="100" step="0.1" value="0">
            <span id="current-time">0:00</span>
            /
            <span id="total-duration">0:00</span>
        </div>
        </div>
        <div class="volume-controls">
            <span class='volume-control-icon'><i class="fa-solid fa-volume-high" id="volume-icon"></i></span>
            <input type="range" id="volume-range" min="0" max="100" value="100">
        </div>
    </div>
</div>