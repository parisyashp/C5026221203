<html>
    <head>
        <title>Responsive web</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function showalert(){
            alert("Selamat datang di Camp Half Blood!");
        }

        function changeText() {
            //var tulisanlama = document.getElementById("");
            var span = document.getElementById("output"); //membaca isi tulisan lama di span
            var textBox = document.getElementById("textbox"); //membaca tulisan baru

            textbox.style.color = "red";
            span.innerHTML = textBox.value;
            //innerhtml -> mengubah .. secara runtime
            console.log("Horee sudah di sini");
            console.log("isinya text box adalah " + textBox.value);

        }
    </script>
    <script src="operasi.js"></script>
    </head>

    <body>
        <div class="container">
        <center> <button class="btn btn-primary" onclick="showalert();">Klik di sini!</button></center>
        <br>
        <span id="output">Replace me!</span>
        <input id="textbox" type="text" class="form-control"/>
        <button onclick="changeText();" class="btn btn-success">Click me!</button>
        <br>
        <div class="form-group">
            <label for="bil1">Bilangan 1</label>
            <input type="number" id="bil1" placeholder="Masuan bilangan pertama" class="form-control">
        </div>
        <div class="form-group">
            <label for="bil2">Bilangan 2</label>
            <input type="number" id="bil2" placeholder="Masuan bilangan kedua" class="form-control">
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-primary" onclick="tambah();">
                Tambah
            </button>
            <button type="button" class="btn btn-primary" onclick="kali();">
                Perkalian
            </button>
        </div>
        <h3>Hasil operasi: <div id="Hasil"></div></h3>
        </div>
    </body>
</html>
