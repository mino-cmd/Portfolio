<script>
        var Cards = document.getElementById('Cards');

        function showDiv(Cards) {
            Cards.style.display = "inherit";
        }

        function closeDiv(Cards) {
            Cards.style.display = "none";
        }

        function hideThecard(Cards) {
            if (Cards.style.display === "inherit") {
                closeDiv(Cards),
                    /*change to second slide*/
                    showDiv(Cardz)
            } else {
                showDiv(Cards),
                    /*change to second slide*/
                    closeDiv(Cardz)
            }

        }

        var controls = document.querySelectorAll('.controls');
        for (var i = 0; i < controls.length; i++) {
            controls[i].style.display = 'inline-block';
        }

        var slides = document.querySelectorAll('#slides .slide');
        var currentSlide = 0;
        var slideInterval = setInterval(nextSlide, 5000);

        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        function previousSlide() {
            goToSlide(currentSlide - 1);
        }

        function goToSlide(n) {
            slides[currentSlide].className = 'slide';
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].className = 'slide showing';
        }


        var playing = true;
        var pauseButton = document.getElementById('pause');

        function pauseSlideshow() {
            pauseButton.innerHTML = '&#9658;'; // play character
            playing = false;
            clearInterval(slideInterval, );
        }

        function playSlideshow() {
            pauseButton.innerHTML = '&#10074;&#10074;'; // pause character
            playing = true;
            slideInterval = setInterval(nextSlide, );
        }

        pauseButton.onclick = function() {
            if (playing) {
                pauseSlideshow();
            } else {
                playSlideshow();
            }
        };
        var next = document.getElementById('next');
        var previous = document.getElementById('previous');

        next.onclick = function() {
            pauseSlideshow();
            nextSlide(nextSlide, );
        };
        previous.onclick = function() {
            pauseSlideshow();
            previousSlide();
        };

        //Control By JS Activation on Browser         
        var controls = document.querySelectorAll('.controls');
        for (var i = 0; i < controls.length; i++) {
            controls[i].style.display = 'inline-block';
        }
        //Slids wont be ListedOut in case of JS isnt Acivated
        for (var i = 0; i < slides.length; i++) {
            slides[i].style.position = 'absolute';
        }
        document.getElementById("Displaybeneath").innerHTML = "This slide was made with javascript"
    </script>