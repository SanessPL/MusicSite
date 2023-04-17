<!DOCTYPE html>
<html>
<head>
    <title>Odtwarzacz muzyczny</title>
    <!-- Dodaj linki do bibliotek CSS i JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Dodaj link do stylów CSS do odtwarzacza -->
    <link rel="stylesheet" href="style.css">
    <!-- Dodaj link do biblioteki Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="music-player">
            <div class="music-player-controls">
                <button class="btn btn-primary btn-light" id="playPauseBtn"><i class="fas fa-play"></i></button>
            </div>
            <div class="music-player-progress">
                <div class="progress">
                    <div class="progress-bar" id="progressBar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>


    <script>

        var playPauseBtn = document.getElementById("playPauseBtn");
        var progressBar = document.getElementById("progressBar");
        var musicPlayer = new Audio("../../Music/rap/rapartbrut2.mp3");

  
        playPauseBtn.addEventListener("click", function() {
            if (musicPlayer.paused) {
                musicPlayer.play(); 
                playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>'; 
            } else {
                musicPlayer.pause(); 
                playPauseBtn.innerHTML = '<i class="fas fa-play"></i>'; 
            }
        });

        musicPlayer.addEventListener("timeupdate", function() {
            var progress = (musicPlayer.currentTime / musicPlayer.duration) * 100;
            progressBar.style.width = progress + "%";
        });
    </script>
</body>
</html>