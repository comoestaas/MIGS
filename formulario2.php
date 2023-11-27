<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario2.css">
    <title>Formulario</title>
    <link rel="icon" href="imagens/balao-sem-fundo.png" type="image/x-icon">
  
</head>
<body>
  <nav>
    <div class="nav-logo">
        <a href="sobre_nos.html">
            <img src="imagens/migs1-sem-fundo.png">
        </a>
    </div>
    <ul class="nav-links">
        <li class="link"><a href="sobre_nos.html">Home</a></li>
        <li id="link1" class="link"><a href="sobre.html">Sobre Nós</a></li>
        <li id="link2" class="link"><a href="galeria.php">Galeria</a></li>
        <li id="link3" class="link"><a href="formulario2.html">Formulário</a></li>
    </ul>
    <button class="btn-festa1"><a href="login3.php">Login</a></button>
</nav>
    <div class="contactUs">
        <div class="title">
            <h2>Formulario</h2>    
        </div>
        <div class="box">
             <!-- form-->
           <div class="contact form">
            <h3>Enviar Mensagem</h3>
            <form method="POST" action="salvar_dados.php">
                <div class="formBox">
                  <div class="row50">
                    <div class="inputBox">
                      <span>Nome Aniversariante</span> 
                      <input type="text" name="primeiro_nome" placeholder="Nome">
                    </div>
                    <div class="inputBox">
                        <span>Tema</span> 
                        <input type="text" name="sobrenome" placeholder="Tema">
                      </div>  
                  </div>  

                  <div class="row50">
                    <div class="inputBox">
                      <span>Quantidade de Pessoas</span> 
                      <input type="text" name="email" placeholder="Quantide Max=100">
                    </div>
                    <div class="inputBox">
                        <span>Email</span> 
                        <input type="email" name="telefone" placeholder="Seu email">
                      </div>  
                  </div>  

                  <div class="row100">
                    <div class="inputBox">
                      <span>Descrição</span> 
                        <textarea name="mensagem" placeholder="Escreva sua mensagem aqui..."></textarea>
                    </div>
                  </div>    

                  <div class="row100">
                    <div class="inputBox">
                        <input type="submit" name="submit" value="Enviar">
                    </div>
                  </div>    
                </div>
            </form>

            <div class="message">
            <?php
            if (isset($_GET['status'])) {
                if ($_GET['status'] === 'success') {
                    echo "Dados inseridos com sucesso!";
                } elseif ($_GET['status'] === 'error') {
                    echo "Erro ao inserir dados.";
                }
            }
            ?>
        </div>
           </div> 

            <!-- info Box-->
           <div class="contact info">
                <h3>Informações de Contato</h3>
                <div class="infoBox">
                    <div>
                   <span><ion-icon name="location"></ion-icon></span>
                   <p>R. Marcos Bertoldi, 507 - Campo de Santana, Curitiba - PR, 81490-530</p>
                    </div>
                <div>
                 <span><ion-icon name="mail"></ion-icon></span>
                    <a href="#">migseventtoskids@outlook.com</a>
                </div>
                <div>
                    <span><ion-icon name="call"></ion-icon></span>
                       <a href="#">+55 (41) 99570-6938</a>
                   </div>
                  </div>
                   <!--social media links-->
                   <ul class="sci">
                    <li><a href="https://www.facebook.com/migseventoskids?mibextid=LQQJ4d"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="https://www.instagram.com/migseventoskids/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="https://wa.me/5541995706938"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                   </ul>
                </div>
                <div class="contact map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.5425170329913!2d-49.34074722464185!3d-25.586882839117457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcfd31f8da0b21%3A0x1ada664cc69bff29!2sMIGS%20EVENTOS%20KIDS!5e0!3m2!1spt-BR!2sbr!4v1700157391980!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>    
           </div>
           
        </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>