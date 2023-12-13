    <script>
        document.getElementById('playButton').addEventListener('click', function() {
            var audioPlayer = document.getElementById('audioPlayer');

            // Memeriksa apakah audio sedang diputar atau tidak
            if (audioPlayer.paused) {
                audioPlayer.play(); // Memulai pemutaran audio
            } else {
                audioPlayer.pause(); // Menghentikan pemutaran audio
                audioPlayer.currentTime = 0; // Mengatur posisi audio kembali ke awal
            }
        });
    </script>
     <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="atribut/main.js"></script>