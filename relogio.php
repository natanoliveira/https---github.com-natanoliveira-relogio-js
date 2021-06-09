<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relogio-js com background</title>
    <style>
        html {
            background: #f9f9f9;
        }

        h1#txt {
            text-align: center;
            color: #fff;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: radial-gradient(ellipse at bottom, #0d1d31 0%, #0c0d13 100%);
            overflow: hidden;
        }

        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 120%;
            transform: rotate(-45deg);
        }

        .star {
            --star-color: var(--primary-color);
            --star-tail-length: 6em;
            --star-tail-height: 2px;
            --star-width: calc(var(--star-tail-length) / 6);
            --fall-duration: 9s;
            --tail-fade-duration: var(--fall-duration);
            position: absolute;
            top: var(--top-offset);
            left: 0;
            width: var(--star-tail-length);
            height: var(--star-tail-height);
            color: var(--star-color);
            background: linear-gradient(45deg, currentColor, #f3eec2);
            border-radius: 50%;
            filter: drop-shadow(0 0 6px currentColor);
            transform: translate3d(104em, 0, 0);
            animation: fall var(--fall-duration) var(--fall-delay) linear infinite, tail-fade var(--tail-fade-duration) var(--fall-delay) ease-out infinite;
        }

        @media screen and (max-width: 750px) {
            .star {
                animation: fall var(--fall-duration) var(--fall-delay) linear infinite;
            }
        }

        .star:nth-child(1) {
            --star-tail-length: 5.59em;
            --top-offset: 0vh;
            --fall-duration: 6.143s;
            --fall-delay: 8.867s;
        }

        .star:nth-child(2) {
            --star-tail-length: 6.9em;
            --top-offset: 53.75vh;
            --fall-duration: 10.373s;
            --fall-delay: 3.307s;
        }

        .star:nth-child(3) {
            --star-tail-length: 7.36em;
            --top-offset: 53.71vh;
            --fall-duration: 10.346s;
            --fall-delay: 4.022s;
        }

        .star:nth-child(4) {
            --star-tail-length: 6.51em;
            --top-offset: 4.17vh;
            --fall-duration: 7.37s;
            --fall-delay: 9.693s;
        }

        .star:nth-child(5) {
            --star-tail-length: 6.81em;
            --top-offset: 13.9vh;
            --fall-duration: 9.07s;
            --fall-delay: 6.259s;
        }

        .star:nth-child(6) {
            --star-tail-length: 6.52em;
            --top-offset: 97.02vh;
            --fall-duration: 10.385s;
            --fall-delay: 9.968s;
        }

        .star:nth-child(7) {
            --star-tail-length: 7.37em;
            --top-offset: 22.52vh;
            --fall-duration: 9.154s;
            --fall-delay: 6.73s;
        }

        .star:nth-child(8) {
            --star-tail-length: 6.82em;
            --top-offset: 10.03vh;
            --fall-duration: 10.07s;
            --fall-delay: 1.751s;
        }

        .star:nth-child(9) {
            --star-tail-length: 6.58em;
            --top-offset: 59.12vh;
            --fall-duration: 8.528s;
            --fall-delay: 1.453s;
        }

        .star:nth-child(10) {
            --star-tail-length: 6.99em;
            --top-offset: 20.7vh;
            --fall-duration: 6.309s;
            --fall-delay: 3.531s;
        }

        .star:nth-child(11) {
            --star-tail-length: 5.8em;
            --top-offset: 28.88vh;
            --fall-duration: 11.025s;
            --fall-delay: 4.14s;
        }

        .star:nth-child(12) {
            --star-tail-length: 5.5em;
            --top-offset: 99.82vh;
            --fall-duration: 9.17s;
            --fall-delay: 1.474s;
        }

        .star:nth-child(13) {
            --star-tail-length: 7.19em;
            --top-offset: 28.94vh;
            --fall-duration: 10.916s;
            --fall-delay: 5.341s;
        }

        .star:nth-child(14) {
            --star-tail-length: 5.31em;
            --top-offset: 23.12vh;
            --fall-duration: 10.843s;
            --fall-delay: 3.488s;
        }

        .star:nth-child(15) {
            --star-tail-length: 6.19em;
            --top-offset: 44.82vh;
            --fall-duration: 6.987s;
            --fall-delay: 0.872s;
        }

        .star:nth-child(16) {
            --star-tail-length: 6.96em;
            --top-offset: 53.71vh;
            --fall-duration: 10.229s;
            --fall-delay: 4.508s;
        }

        .star:nth-child(17) {
            --star-tail-length: 6.23em;
            --top-offset: 20.37vh;
            --fall-duration: 7.996s;
            --fall-delay: 7.212s;
        }

        .star:nth-child(18) {
            --star-tail-length: 6.04em;
            --top-offset: 86.52vh;
            --fall-duration: 9.137s;
            --fall-delay: 4.325s;
        }

        .star:nth-child(19) {
            --star-tail-length: 6.15em;
            --top-offset: 34.99vh;
            --fall-duration: 8.007s;
            --fall-delay: 6.883s;
        }

        .star:nth-child(20) {
            --star-tail-length: 7.49em;
            --top-offset: 54.96vh;
            --fall-duration: 7.533s;
            --fall-delay: 6.055s;
        }

        .star:nth-child(21) {
            --star-tail-length: 5.45em;
            --top-offset: 75.26vh;
            --fall-duration: 10.845s;
            --fall-delay: 4.046s;
        }

        .star:nth-child(22) {
            --star-tail-length: 5.11em;
            --top-offset: 14.1vh;
            --fall-duration: 11.427s;
            --fall-delay: 4.618s;
        }

        .star:nth-child(23) {
            --star-tail-length: 7.29em;
            --top-offset: 34.1vh;
            --fall-duration: 6.155s;
            --fall-delay: 2.665s;
        }

        .star:nth-child(24) {
            --star-tail-length: 5.33em;
            --top-offset: 76.93vh;
            --fall-duration: 7.257s;
            --fall-delay: 0.128s;
        }

        .star:nth-child(25) {
            --star-tail-length: 5.15em;
            --top-offset: 28.16vh;
            --fall-duration: 6.678s;
            --fall-delay: 3.852s;
        }

        .star:nth-child(26) {
            --star-tail-length: 5.28em;
            --top-offset: 32.41vh;
            --fall-duration: 6.524s;
            --fall-delay: 7.882s;
        }

        .star:nth-child(27) {
            --star-tail-length: 6.78em;
            --top-offset: 85.13vh;
            --fall-duration: 9.939s;
            --fall-delay: 2.034s;
        }

        .star:nth-child(28) {
            --star-tail-length: 6.66em;
            --top-offset: 25.76vh;
            --fall-duration: 8.607s;
            --fall-delay: 3.067s;
        }

        .star:nth-child(29) {
            --star-tail-length: 5.37em;
            --top-offset: 6.43vh;
            --fall-duration: 9.266s;
            --fall-delay: 7.783s;
        }

        .star:nth-child(30) {
            --star-tail-length: 6.63em;
            --top-offset: 16.38vh;
            --fall-duration: 6.499s;
            --fall-delay: 8.15s;
        }

        .star:nth-child(31) {
            --star-tail-length: 5.02em;
            --top-offset: 30.05vh;
            --fall-duration: 6.427s;
            --fall-delay: 3.992s;
        }

        .star:nth-child(32) {
            --star-tail-length: 5.94em;
            --top-offset: 60.05vh;
            --fall-duration: 9.254s;
            --fall-delay: 4.058s;
        }

        .star:nth-child(33) {
            --star-tail-length: 5.31em;
            --top-offset: 15.26vh;
            --fall-duration: 9.145s;
            --fall-delay: 9.197s;
        }

        .star:nth-child(34) {
            --star-tail-length: 5.41em;
            --top-offset: 75.03vh;
            --fall-duration: 9.958s;
            --fall-delay: 8.05s;
        }

        .star:nth-child(35) {
            --star-tail-length: 5.62em;
            --top-offset: 31.26vh;
            --fall-duration: 11.655s;
            --fall-delay: 5.671s;
        }

        .star:nth-child(36) {
            --star-tail-length: 5.73em;
            --top-offset: 53.67vh;
            --fall-duration: 11.3s;
            --fall-delay: 8.549s;
        }

        .star:nth-child(37) {
            --star-tail-length: 6.08em;
            --top-offset: 79.26vh;
            --fall-duration: 7.202s;
            --fall-delay: 6.556s;
        }

        .star:nth-child(38) {
            --star-tail-length: 6.59em;
            --top-offset: 35.1vh;
            --fall-duration: 10.824s;
            --fall-delay: 2.397s;
        }

        .star:nth-child(39) {
            --star-tail-length: 6.77em;
            --top-offset: 43.12vh;
            --fall-duration: 7.925s;
            --fall-delay: 2.88s;
        }

        .star:nth-child(40) {
            --star-tail-length: 7.11em;
            --top-offset: 31.11vh;
            --fall-duration: 6.484s;
            --fall-delay: 8.215s;
        }

        .star:nth-child(41) {
            --star-tail-length: 6.41em;
            --top-offset: 45.13vh;
            --fall-duration: 6.153s;
            --fall-delay: 3.445s;
        }

        .star:nth-child(42) {
            --star-tail-length: 5.24em;
            --top-offset: 6.78vh;
            --fall-duration: 9.362s;
            --fall-delay: 0.283s;
        }

        .star:nth-child(43) {
            --star-tail-length: 6.74em;
            --top-offset: 37.45vh;
            --fall-duration: 10.199s;
            --fall-delay: 8.848s;
        }

        .star:nth-child(44) {
            --star-tail-length: 5.97em;
            --top-offset: 85.28vh;
            --fall-duration: 9.097s;
            --fall-delay: 6.249s;
        }

        .star:nth-child(45) {
            --star-tail-length: 7.3em;
            --top-offset: 45.5vh;
            --fall-duration: 8.203s;
            --fall-delay: 9.201s;
        }

        .star:nth-child(46) {
            --star-tail-length: 6.71em;
            --top-offset: 36.46vh;
            --fall-duration: 11.029s;
            --fall-delay: 0.876s;
        }

        .star:nth-child(47) {
            --star-tail-length: 6.6em;
            --top-offset: 79.41vh;
            --fall-duration: 8.456s;
            --fall-delay: 9.391s;
        }

        .star:nth-child(48) {
            --star-tail-length: 7.1em;
            --top-offset: 89.35vh;
            --fall-duration: 10.938s;
            --fall-delay: 7.793s;
        }

        .star:nth-child(49) {
            --star-tail-length: 5.26em;
            --top-offset: 82.58vh;
            --fall-duration: 8.892s;
            --fall-delay: 1.182s;
        }

        .star:nth-child(50) {
            --star-tail-length: 6.6em;
            --top-offset: 72.9vh;
            --fall-duration: 6.157s;
            --fall-delay: 6.941s;
        }

        .star::before,
        .star::after {
            position: absolute;
            content: "";
            top: 0;
            left: calc(var(--star-width) / -2);
            width: var(--star-width);
            height: 100%;
            background: linear-gradient(45deg, transparent, currentColor, transparent);
            border-radius: inherit;
            animation: blink 2s linear infinite;
        }

        .star::before {
            transform: rotate(45deg);
        }

        .star::after {
            transform: rotate(-45deg);
        }

        @keyframes fall {
            to {
                transform: translate3d(-30em, 0, 0);
            }
        }

        @keyframes tail-fade {

            0%,
            50% {
                width: var(--star-tail-length);
                opacity: 1;
            }

            70%,
            80% {
                width: 0;
                opacity: 0.4;
            }

            100% {
                width: 0;
                opacity: 0;
            }
        }

        @keyframes blink {
            50% {
                opacity: 0.6;
            }
        }
    </style>
    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            // ADD A ZERO IN FRONT OF NUMBERS < 10
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById("txt").innerHTML = h + ":" + m + ":" + s;
            var t = setTimeout(function() {
                startTime()
            }, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    </script>
</head>

<body onload="startTime()">
    <h1 id="txt"></h1>
    <div class="stars">
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
    </div>
</body>

</html>