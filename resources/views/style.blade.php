<html>

<head>
    <title>Anton Lee</title>
    <link rel="stylesheet" href="mystyle.css">
    <style>
        body {

            color: blue;
        }

        p,
        div {
            text-align: right;
        }

        .salam {
            font-size: 35;
            color: palevioletred;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
        }

        .anton {
            text-decoration: line-through;

            color: wheat;
        }
    </style>
</head>

<body>
    <!-- Inline CSS, digunakan jika hanya 1 bag. di 1 hal. yg berbeda-->
    Halo <b
        style="color: rgb(17, 102, 38);text-decoration: solid; font-size: 30; text-shadow: 2px 2px 5px grey;">Apa</b>
    Kabar?
    <!--Inpage CSS, digunakan jika yg beda hanya di 1 halaman-->
    <div class="salam">Halo Apa Kabar?</div>
    <!-- External File, duganakan untuk global 1 situs-->
    <span class="sembunyi">Halo Apa Kabar?</span>
    <p class="salam anton">Halo Apa Kabar?</p>
</body>

</html>
