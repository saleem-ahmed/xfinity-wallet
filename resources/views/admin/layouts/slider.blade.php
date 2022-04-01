<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>
<style>
    .gallery {
        padding: 1rem;
        display: grid;
        grid-template-columns: repeat(10, 20vw);
        grid-template-rows: 1fr;
        grid-column-gap: 1rem;
        grid-row-gap: 1rem;
        overflow-x: scroll;
        /* height: 20vh; */
        scroll-snap-type: both mandatory;
        scroll-padding: 1rem;
    }

    .active {
        scroll-snap-type: unset;
    }

    li {
        scroll-snap-align: center;
        display: inline-block;
        border-radius: 3px;
        font-size: 0;
        /* width: 30%; */
    }

</style>

<body>
    <ul class="gallery">
        <li style="background: #f6bd60">
            <img src="{{ asset('assets/images/banner4x1.jpg') }}" alt="">
        </li>
        <li style="background: #f7ede2">
            <img src="{{ asset('assets/images/banner4x1.jpg') }}" alt="">
        </li>
        <li style="background: #f5cac3">
            <img src="{{ asset('assets/images/banner4x1.jpg') }}" alt="">
        </li>
        <li style="background: #84a59d">
            <img src="{{ asset('assets/images/banner4x1.jpg') }}" alt="">
        </li>
        <li style="background: #f28482">
            <img src="{{ asset('assets/images/banner4x1.jpg') }}" alt="">
        </li>
    </ul>
    <script>
        const slider = document.querySelector(".gallery");
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener("mousedown", (e) => {
            isDown = true;
            slider.classList.add("active");
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });
        slider.addEventListener("mouseleave", (_) => {
            isDown = false;
            slider.classList.remove("active");
        });
        slider.addEventListener("mouseup", (_) => {
            isDown = false;
            slider.classList.remove("active");
        });
        slider.addEventListener("mousemove", (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const SCROLL_SPEED = 3;
            const walk = (x - startX) * SCROLL_SPEED;
            slider.scrollLeft = scrollLeft - walk;
        });
    </script>
</body>

</html>
