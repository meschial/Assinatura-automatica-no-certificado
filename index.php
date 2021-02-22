<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="assets/css/style.css" rel="stylesheet" >

    <title>Certificado</title>
  </head>
  <body>

    <div class="container mt-3">
        <div class="row">

            <div class="col-sm-6">
                <img id="photo" src="assets/img/certificado.png"></img>
                <div id="spaceText">
                    <p class="nameText" id="nameText"></p>
                </div>
            </div>

            <div class="col-sm-6">
                <form action="nome.php" method="post">
                <input type="text" hidden id="width" name="width">
                <input type="text" hidden id="height" name="height">
                <input type="text" hidden id="fontSize" name="fontSize">
                <div class="row">
                    <div class="col-sm-5">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
                    </div>
                    <div class="col-sm-3">
                        <label class="form-label">Fonte</label>
                        <select class="form-select" id="font" name="font">
                            <option value="brushsci">Brushsci</option>
                            <option value="cream_cake">Cream Cake</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label class="form-label">Tamanho</label>
                        <input type="number" class="form-control" value="40" id="size" name="size" >
                    </div>
                    <div class="col-sm-2">
                        <label class="form-label">Cor</label>
                        <input type="color" class="sel_cor" id="color" name="color" >
                    </div>
                </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Eixo X</label>
                        <input type="range" class="form-range" name="eixoX" id="eixoX" oninput="moveX()" step="1" value="0" min="0" max="1500">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Eixo Y</label>
                        <input type="range" name="eixoY" id="eixoY" class="form-range" oninput="moveY()" step="1" value="0" min="0" max="1060">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
     </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
