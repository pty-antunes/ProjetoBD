<!DOCTYPE html>
<html lang="Pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Box icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/style.css" />
    <title>Login</title>
  </head>
  <body>
    <!-- Navigation -->
    <div class="top-nav">
      <div class="container d-flex">
        <p>Entre em contato conosco: (41) 99999-9999</p>
        <ul class="d-flex">
          <li><a href="#">Sobre Nós</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </div>
    </div>
    <div class="navigation">
      <div class="nav-center container d-flex">
        <a href="index.php" class="logo"><h1>Streetwalk</h1></a>

        <ul class="nav-list d-flex">
          <li class="nav-item">
            <a href="/" class="nav-link">Início</a>
          </li>
          <li class="nav-item">
            <a href="product.html" class="nav-link">Compras</a>
          </li>
          <li class="nav-item">
            <a href="#terms" class="nav-link">Termos</a>
          </li>
          <li class="nav-item">
            <a href="#about" class="nav-link">Sobre</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contato</a>
          </li>
          <li class="icons d-flex">
            <a href="login.html" class="icon">
              <i class="bx bx-user"></i>
            </a>
            <div class="icon">
              <i class="bx bx-search"></i>
            </div>
            <div class="icon">
              <i class="bx bx-heart"></i>
              <span class="d-flex">0</span>
            </div>
            <a href="cart.html" class="icon">
              <i class="bx bx-cart"></i>
              <span class="d-flex">0</span>
            </a>
          </li>
        </ul>

        <div class="icons d-flex">
          <a href="login.html" class="icon">
            <i class="bx bx-user"></i>
          </a>
          <div class="icon">
            <i class="bx bx-search"></i>
          </div>
          <div class="icon">
            <i class="bx bx-heart"></i>
            <span class="d-flex">0</span>
          </div>
          <a href="cart.html" class="icon">
            <i class="bx bx-cart"></i>
            <span class="d-flex">0</span>
          </a>
        </div>

        <div class="hamburger">
          <i class="bx bx-menu-alt-left"></i>
        </div>
      </div>
    </div>
    <!-- Cadastro -->
    <div class="container">
      <div class="login-form">
          <form method="POST" action="insere_cliente.php"> 
          <h1>Login</h1>
          <p>
            Já tem uma conta? Faça 
            <a href="login.php">Login</a>
          </p>

          <label for="Nome">Nome</label>
          <input type="text" placeholder="Insira o Nome" name="Nome" required />
 
          <label for="CPF">CPF</label>
          <input type="text" placeholder="Insira o CPF" name="CPF" required />

          <label for="CEP">CEP</label>
          <input type="text" placeholder="Insira o CEP" name="CEP" required />

         <label for="Telefone">Telefone</label>
          <input type="text" placeholder="Insira o Telefone" name="Telefone" required />

         <label for="Email">Email</label>
          <input type="text" placeholder="Insira o Email" name="Email" required />

          <label for="Senha">Senha</label>
          <input
            type="password"
            placeholder="Insira uma Senha"
            name="Senha"
            required
          />


          <label>
            <input
              type="checkbox"
              checked="checked"
              name="Lembrar"
              style="margin-bottom: 15px"
            />
            Lembre-se de Mim
          </label>

          <p>
           Ao criar uma conta você concorda com os
            <a href="#">Termos e Privacidade</a>.
          </p>
          <input type="submit" value="Cadastrar">
          <div class="buttons">

           </form>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <div class="row">
        <div class="col d-flex">
          <h4>INFORMAÇÕES</h4>
          <a href="">Sobre Nós</a>
          <a href="">Nos Contate</a>
          <a href="">Termos &e Condições</a>
          <a href="">Guia de Envio</a>
        </div>
        <div class="col d-flex">
          <h4>LINKS ÚTEIS</h4>
y>
</html>

          <a href="">Loja Online</a>
          <a href="">Serviço ao Cliente</a>
          <a href="">Promoções</a>
          <a href="">Marcas em Alta</a>
        </div>
        <div class="col d-flex">
          <span><i class="bx bxl-facebook-square"></i></span>
          <span><i class="bx bxl-instagram-alt"></i></span>
          <span><i class="bx bxl-github"></i></span>
          <span><i class="bx bxl-twitter"></i></span>
          <span><i class="bx bxl-pinterest"></i></span>
        </div>
      </div>
    </footer>

    <!-- Custom Script -->
    <script src="./js/index.js"></script>
  </body>
</html>
