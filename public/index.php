
<!DOCTYPE html>
<html lang="PT-BR">

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consumo API vagalume</title>
    </head>

    <body>

        <h3>Pesquise a letra de sua música preferida, apenas inserindo o nome dela e do artista ou banda</h3>
        <div class="search-music">
            <form id="form" method="POST" class="d-grid gap-1 col-6 mx-auto" action="../app/controllers/search.php">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <label for="exampleFormControlInput1" class="form-label ">Insira o nome da Música</label>
                    <input type="text" class="form-control form-control-lg input-music" name="music"
                        placeholder="Medo da chuva">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <label for="exampleFormControlInput1" class="form-label">Insira o nome do Artista</label>
                    <input type="text" class="form-control form-control-lg input-artist" name="artist"
                        placeholder="Raul seixas">
                </div>
                <button name="send" id="btn-send" type="submit"
                    class="btn btn-light d-grid gap-2 col-3 mx-auto">PESQUISAR</button>
            </form>
        </div>
        





    </body>

</html>