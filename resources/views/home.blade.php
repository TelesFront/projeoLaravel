<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>CMK</title>
      <link rel="stylesheet" href="../../public/css/app.css" />
      <link rel="stylesheet" href="../../public/css/cssForm.css">
      
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
      
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Rajdhani&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;600&display=swap" rel="stylesheet">
  </head>

  <body>
    <header>
      <nav>
        <a class="logo" href="/">Logo</a>

        <!-- construção do icone menu mobile -->
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>

        <ul class="nav-list">
          <li><a href="#">Inícioo</a></li>
          <li><a href="#">Serviços</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <!-- BLOCO DOS SERVIÇOS -->

      <div class="servicos">
        <div class="tituloServicos">
          <h1>Nossos Serviços</h1>
          <hr size="2" width="25%" color="purple">
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta magnam iusto nulla. Dolorem ullam delectus, laborum reiciendis veniam aperiam eius sequi quas? Dolores assumenda provident error dolorum quod, sunt ut? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi dignissimos itaque atque vitae consequuntur? Totam quae in magnam dolorum vel molestias nisi adipisci, perspiciatis quidem, ratione voluptatem sequi neque possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo perferendis quasi totam, obcaecati officia tempore porro neque ipsum unde cum dolore fugiat expedita mollitia eum nam, distinctio libero ipsam fugit?</p>
      </div>

      <!-- BLOCO SOBRE A EMPRESA -->

      <div class="sobreNos">
        <div class="tituloSobre">
          <h1>Sobre Nós</h1>
          <hr size="2" width="25%" color="purple">
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta magnam iusto nulla. Dolorem ullam delectus, laborum reiciendis veniam aperiam eius sequi quas? Dolores assumenda provident error dolorum quod, sunt ut? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi dignissimos itaque atque vitae consequuntur? Totam quae in magnam dolorum vel molestias nisi adipisci, perspiciatis quidem, ratione voluptatem sequi neque possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo perferendis quasi totam, obcaecati officia tempore porro neque ipsum unde cum dolore fugiat expedita mollitia eum nam, distinctio libero ipsam fugit?</p>
      </div>

      <!-- BLOCO FORMULÁRIO DE CONTATO -->

      <div class="contato">
        <div class="tituloContato">
          <h1>Entre em Contato</h1>
          <hr size="2" width="25%" color="purple">
        </div>

        <form action="/Formulario" method="POST">
          @csrf
          
          <div class="half">
            <div class="item">
              <label for="name">NOME</label>
              <input type="text" name="nome" id = "name">
            </div>
            <div class="item">
              <label for="email">EMAIL</label>
              <input type="text" name="email" id = "email">
            </div>
          </div>
          <div class="full">
            <label for="message">MENSSAGEM</label>
            <textarea name="mensagem" id = "menssagem"></textarea>
          </div>
          <div class="action">
            <input type="submit" value = "ENVIAR">
            <input type="reset" value = "LIMPAR">
          </div>
          <div class="icons">
            <a href="" class = "fa fa-facebook"></a>
            <a href="" class = "fa fa-instagram"></a>
          </div>
        </form>

      </div>

    </main>

    <footer class="rodape">
      <h3><i> 2021 - 2022 Copyright ©  </i> — por Teles D.A  </h3>
    </footer>
    <script src="../../public/js/app.js"></script>
  </body>
</html> 
