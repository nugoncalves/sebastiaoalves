<?php

  $footer = selectSQLUnico("SELECT * FROM settings");

?>


  <!-- LINHA SEPARADORA (APENAS APARECE QUANDO NÃO APARECE O MENU) -->
  <div class="row separador d-lg-none"></div>

  <!-- FOOTER -->
  <footer>

    <!-- MENU FOOTER -->
    <div class="container-fluid d-none d-lg-block menu">            
      <div class="row mx-5">
        <div class="col-12 nav-footer">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link <?= ($url=='index') ? 'active' : '' ?>" aria-current="page" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= ($url=='autor') ? 'active' : '' ?>" href="autor.php">AUTOR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= ($url=='livro') ? 'active' : '' ?>" href="#" onclick="menuLivroTimeOut()">LIVROS</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link <?= ($url=='imprensa') ? 'active' : '' ?>" href="imprensa.php">IMPRENSA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= ($url=='contactos') ? 'active' : '' ?>" href="contactos.php">CONTACTOS</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- FOOTER CONTENT -->
    <div class="container text-center">
      <div class="row offset-xl-1">
        <!-- CONTACTOS -->
        <div class="col-12 col-lg-6 mt-5">
          <!-- LINHA DO TÍTULO -->
          <div class="col-12 mb-5">
            <h3 class="title-text text-lg-start">Contactos</h3>
          </div>

          <!-- LINHA DOS CONTEÚDOS -->
          <div class="col col-lg-12 d-lg-flex flex-direction-lg-row justify-content-lg-between text-lg-start">
            <div class="col col-lg-auto mb-3">
              <h3 class="footer-sub-title">Morada</h3>
              <p><?= $footer["morada"]; ?></p>
            </div>
            <div class="col col-lg-auto mb-3">
              <h3 class="footer-sub-title">Telefone</h3>
              <p><?= $footer["telefone"]; ?></p>
            </div>
            <div class="col col-lg-auto mb-3">
              <h3 class="footer-sub-title">Email</h3>
              <p><?= $footer["email"]; ?></p>
            </div>
          </div>
        </div>


        <!-- REDES -->
        <div class="col-12 col-lg-5 mt-5">
          <!-- LINHA DO TÍTULO --> 
          <h3 class="title-text">Siga-me nas Redes Sociais</h3>
          <!-- LINHA DOS CONTEÚDOS -->
          <div class="col mt-5">
            <a href="<?= $footer["facebook_link"]; ?>"><span class="rd-icon rd-icon-fb"></span></a>
            <a href="<?= $footer["instagram_link"]; ?>"><span class="rd-icon rd-icon-inst"></span></a>
            <a href="<?= $footer["linkedin_link"]; ?>"><span class="rd-icon rd-icon-ld"></span></a>
          </div>
        </div>
      </div>

      <!-- LINHA DAS AUTORIDADES OFICIAIS -->
      <div class="row align-items-center offset-xl-1">
        <div class="col-12 col-lg-6 mt-5 mt-lg-0 d-flex flex-direction-lg-row justify-content-center justify-content-lg-start">
            <a href="#">
              <img class="img-autoridades d-block mx-3" src="img/desktop/livroreclamacoes.svg" alt="Livro de Reclamações">
            </a>
            <a href="#">
              <img class="img-autoridades d-block" src="img/desktop/ralc.svg" alt="RALC">
            </a>
        </div>

        <!-- LINHA COPYRIGHT & COOKIES -->
        <div class="col-12 col-lg-5 text-center cookies">
            <p>
              <a class="cookies" href="#">Política de Cokies</a>
              <br>
              Copyright ©2023 Grupo Media Master. Todos os direitos reservados.
            </p>
        </div>
      </div>
    </div>
  </footer>

  </body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" 
      crossorigin="anonymous">
  </script>

  <script src="js/main.js"></script>


</html>

