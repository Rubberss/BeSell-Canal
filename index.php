<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Canal de atendimento do Cliente">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="author" content="Ruber Rodriguez ">
  <title>BeSell Canal - Cliente</title>
  <!-- Favicon -->
  <link rel="icon" href="./_assets/img/bemol.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="./_assets/css/bootstrap.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="./_assets/css/mdb.css">
  <link rel="stylesheet" type="text/css" href="./_assets/css/addons/datatables.min.css">
  <link rel="stylesheet" href="./_assets/css/addons/datatables-select.min.css">
  <link rel="stylesheet" href="../_assets/css/style.css">

</head>

<body class="fixed-sn white-skin">
  <?php include "./_layouts/dashboard.php" ?>
  <main>
    <div class="container-fluid mt-5 ">
      <section class="  " style="background-image:url(./_assets/img/header.png); ">
        <div class="card-body text-white justify-content-end py-5 px-5 ">
          <h1 class=" display-3 font-weight-bold">
            <strong>Bem vindo ao <br>BeSell Canal</strong>
          </h1>
          <p class="subtext-header mt-2 mb-4">
            <strong>Sua busca começa e termina conosco, nosso canal de atendimento, atendendo sua necessidade em compras, pagamentos e duvidas.
            </strong>
          </p>
        </div>
      </section>
      <div class="resultado"></div>
      <h4 class="mb-2 mb-sm-0 pt-1 m-3 palavra">
        <a target="_blank">Canais de Atendimento</a>
      </h4>
      <div class="row mt-3">
        <div class="col-md-3 mb-3">
          <section>
            <!-- Card -->
            <div class="card testimonial-card" style="max-width: 22rem;">
              <div class="card-up aqua-gradient">
              </div>
              <!-- Avatar -->
              <div class="avatar mx-auto white"><img src="./_assets/img/site.png" class="rounded-circle img-fluid">
              </div>
              <div class="card-body">
                <!-- Name -->
                <h4 class="card-title dark-grey-text"><strong>Site</strong></h4>
                <hr>
                <!-- Quotation -->
                <p class="card-text pt-2"> Nosso site atende todo o Brasil e disponibiliza os produtos oferecidos
                  em nossas lojas físicas e diversos outros serviços.</p>
                <a href="https://www.bemol.com.br/" class="btn btn-primary btn-rounded">Acessar</a>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card testimonial-card" style="max-width: 22rem;">
            <div class="card-up aqua-gradient">
            </div>
            <div class="avatar mx-auto white"><img src="./_assets/img/chatbot.png" class="rounded-circle img-fluid">
            </div>
            <div class="card-body">
              <h4 class="card-title dark-grey-text"><strong>Chatbot</strong></h4>
              <hr>
              <p class="card-text pt-2"> Conheça o Chatbot Bemol. Rápido, confiável e onde você precisar!
                ACESSAR. Bot Bemol Online. O B.O.B deixa sua vida mais simples!</p>
              <a href="https://chat.bemol.com.br/" class="btn btn-primary btn-rounded">Acessar</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <section>
            <div class="card testimonial-card" style="max-width: 22rem;">
              <!-- Bacground color -->
              <div class="card-up aqua-gradient">
              </div>
              <!-- Avatar -->
              <div class="avatar mx-auto white"><img src="./_assets/img/whatsapp.png" class="rounded-circle img-fluid">
              </div>
              <div class="card-body">
                <!-- Name -->
                <h4 class="card-title dark-grey-text"><strong>Whatsapp</strong></h4>
                <hr>
                <!-- Quotation -->
                <p class="card-text pt-2"> Mesmo com as portas fechadas, a Bemol quer continuar conectada com o seu cliente.
                  No WhatsApp é muito fácil! </p>
                <a href="https://api.whatsapp.com/send?phone=5592984522238&text=&source=&data=&app_absent=" class="btn btn-primary btn-rounded">Acessar</a>
              </div>
            </div>
            <!-- Card -->
          </section>
        </div>
        <div class="col-md-3 mb-3">
          <!-- Section: Live preview -->
          <section>
            <!-- Card -->
            <div class="card testimonial-card" style="max-width: 22rem;">
              <!-- Bacground color -->
              <div class="card-up aqua-gradient">
              </div>
              <!-- Avatar -->
              <div class="avatar mx-auto white"><img src="./_assets/img/cadastro.png" class="rounded-circle img-fluid">
              </div>
              <div class="card-body">
                <!-- Name -->
                <h4 class="card-title dark-grey-text"><strong>Cadastre-se</strong></h4>
                <hr>
                <!-- Quotation -->
                <p class="card-text pt-2"> Siga o passo a passo, realize o cadastro e pronto! Com seu cadastro Bemol você acumula pontos todos os dias. </p>
                <a href="./cadastro.php" class="btn btn-primary btn-rounded"> Cadastrar </a>
              </div>
            </div>
          </section>
        </div>
  </main>
  <?php include "./_layouts/footer.php" ?>
  <script src="./_assets/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="./_assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="./_assets/js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="./_assets/js/mdb.min.js"></script>
  <script type="text/javascript" src="./_assets/js/addons/datatables.min.js"></script>

  <script>
    function inputHandler(masks, max, event) {
      var c = event.target;
      var v = c.value.replace(/\D/g, '');
      var m = c.value.length > max ? 1 : 0;
      VMasker(c).unMask();
      VMasker(c).maskPattern(masks[m]);
      c.value = VMasker.toPattern(v, masks[m]);
    }

    var telMask = ['99 99999-9999', '99999-9999'];
    var tel = document.querySelector('input[attrname=telephone1]');
    VMasker(tel).maskPattern(telMask[0]);
    tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);

    var docMask = ['999.999.999-99'];
    var doc = document.querySelector('input[attrname=doc]');
    VMasker(doc).maskPattern(docMask[0]);
    doc.addEventListener('input', inputHandler.bind(undefined, docMask, 14), false);

    var docMask = ['99'];
    var doc = document.querySelector('input[attrname=ddd]');
    VMasker(doc).maskPattern(docMask[0]);
    doc.addEventListener('input', inputHandler.bind(undefined, docMask, 14), false);
  </script>

</body>

</html>