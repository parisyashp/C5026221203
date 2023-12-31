<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETS PWEB Landing Page</title>
    <link rel="stylesheet" href="{{asset('/css-pic_welcome/style.css')}}">
    <script src="{{asset('/css-pic_welcome/script.js')}}"></script>
</head>

<body>
    <div class="navbar flex perfect_center" >
        <a href="#home">Home</a>
        <a href="#profile">Profile</a>
        <a href="#hobby">Hobby</a>
        <a href="#movie">Movie</a>
        <a href="#contact">Contact</a>
    </div>

    <div class="Home flex col align-end justify-center" id="home">
        <h1>Parisya <br> Saniya <br> Hendi Putri</h1>
        <button class="btn_home">Let's get to know me more!</button>
    </div>

    <div class="profile flex col align-center " id="profile">
        <div class="profile1 flex justify-center ">
            <div class="profile1_1 col justify-center align-center">
                <h2>Age</h2>
                <h1>19</h1>
            </div>

            <div class="profile1_1 col justify-center align-center">
                <img src="{{asset('/css-pic_welcome/png-transparent-location-map-pin-place-position-essential-web-1-icon-removebg-preview.png')}}" alt="">
                <p>Surabaya</p>
            </div>
            <div class="profile1_1 col perfect_center">
                <img class="img_instagram" src="{{asset('/css-pic_welcome/png-transparent-instagram-vector-brand-logos-icon-removebg-preview.png')}}" alt="">
                <p class="p_instagram">instagram.com/<br>parisyashp</p>
            </div>

        </div>
        <div class="profile1 flex justify-center">
            <div class="profile1_1 col justify-center align-center">
                <h2>MBTI</h2>
                <h1>INFP</h1>
            </div>
            <div class="profile1_1 col justify-center align-center">
                <img src="{{asset('/css-pic_welcome/PNG-TR_3-removebg-preview.png')}}" alt="">
                <p>Hufflepuff</p>
            </div>
            <div class="profile1_1 col perfect_center">
                <img src="{{asset('/css-pic_welcome/857681.png')}}" alt="">
                <p>Pasta</p>
            </div>

        </div>

    </div>

    <div class="hobby flex justify-between" id="hobby">
        <div class="hobby_content flex col ">
            <h1>I like to go<br>to places!</h1>
            <p>My no.1 hobby beside being a movie <br> geek is probably traveling. I like<br>spending time with people in outdoor<br>space. These photos are places i have<br>visited this year. From the top, it's<br> Paralayang hill in Jogja, Bundaran HI<br>in Jakarta. and then Plaosan complex<br>in Klaten </p>
        </div>
        <div class="hobby_image flex col justify-center">
            <img src="{{asset('/css-pic_welcome/WhatsApp Image 2023-10-19 at 00.10.18_c364ce5e.jpg')}}" alt="">
            <img src="{{asset('/css-pic_welcome/WhatsApp Image 2023-10-19 at 00.18.25_58c2ae1d.jpg')}}" alt="">
            <img src="{{asset('/css-pic_welcome/WhatsApp Image 2023-10-19 at 00.21.36_92b69838.jpg')}}" alt="">
        </div>
    </div>
    <div class="movie flex col align-center" id="movie">
        <h1>Here are my top 5 movies<br>recommendation!</h1>
        <div class="movie_image flex justify-between">
            <img src="{{asset('/css-pic_welcome/217c326a9b15557266420a86aeb2f9dc.jpg')}}" alt="">
            <img src="{{asset('/css-pic_welcome/MV5BYjYzOGE1MjUtODgyMy00ZDAxLTljYTgtNzk0Njg2YWQwMTZhXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg')}}" alt="">
            <img src="{{asset('/css-pic_welcome/s-l1200.jpg')}}" alt="">
            <img src="{{asset('/css-pic_welcome/images-1-23-620e200351d76421d9267392.jpeg')}}" alt="">
            <img src="{{asset('/css-pic_welcome/MV5BOTE3NzkyMjAyNF5BMl5BanBnXkFtZTgwMDc5MTE0MDE@._V1_.jpg')}}" alt="">
        </div>
    </div>
    <div class="contact flex align-center justify-center" id="contact">
        <div class="form_contact flex col align-center">
            <h1>Write me a message</h1>
            <input id="nameInput" placeholder="Your name" type="text">
            <input id="emailInput" placeholder="Your email" type="email">
            <input id="subjectInput" placeholder="Subject" type="text">
            <div class="message">
                <textarea id="messageInput" name="" placeholder="Your message" class="message_input" cols="30" rows="4"></textarea>
            </div>
            <button id="submitButton">Send Message</button>
        </div>
        <div class="social_media">
            <a href="https://www.instagram.com/parisyashp/">
                <div class="social_media_1 flex">
                <img src="{{asset('/css-pic_welcome/png-transparent-instagram-vector-brand-logos-icon-removebg-preview.png')}}" alt="">
                <div class="social_media_content flex col">
                    <h1>Instagram</h1>
                    <p>parisyashp</p>
                </div>
            </div>
        </a>
            <a>
                <div class="social_media_1 flex">
                    <img class="email" src="{{asset('/css-pic_welcome/64774-computer-gmail-email-icons-png-image-high-quality-removebg-preview.png')}}" alt="">
                    <div class="social_media_content flex col">
                        <h1>Email</h1>
                        <p>saniyahendi@gmail.com</p>
                    </div>
                </div>
            </a>
           <a href="https://www.google.com/maps/place/Ketintang,+Gayungan,+Surabaya,+East+Java/@-7.3189297,112.7140988,14.52z/data=!4m6!3m5!1s0x2dd7fb6551205733:0x32a9d1800d0cfc47!8m2!3d-7.3154135!4d112.7301098!16s%2Fg%2F122zkcyz?entry=ttu">
            <div class="social_media_1 flex">
                <img src="{{asset('/css-pic_welcome/address-svgrepo-com.png')}}" alt="">
                <div class="social_media_content flex col">
                    <h1>Address</h1>
                    <p>Ketintang, Surabaya</p>
                </div>
            </div>
           </a>

        </div>
    </div>
    <div style="font-size: 30px">
        <a href="hello" target="_blank" style="color: black">Hello</a>
        <a href="js1" target="_blank" style="color: black">JS1</a>
        <a href="js2" target="_blank" style="color: black">JS2</a>
        <a href="landingPage" target="_blank" style="color: black">landingPage</a>
        <a href="linktree_indomie" target="_blank" style="color: black">Indomie</a>
        <a href="responsive" target="_blank" style="color: black">Responsive</a>
        <a href="logo" target="_blank" style="color: black">Logo</a>
        <a href="style" target="_blank" style="color: black">Style</a>
    </div>

</body>

</html>
