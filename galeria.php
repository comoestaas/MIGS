<?php
// Adicione o código de conexão aqui
include("conexao.php");

// Restante do seu código PHP para a galeria...
// Aqui você pode realizar consultas ao banco de dados para obter as informações das imagens a serem exibidas na galeria
$sql_query = $mysqli->query("SELECT * FROM arquivos") or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="css/galeria.css">
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
            <li id="link3" class="link"><a href="formulario2.php">Formulário</a></li>
        </ul>
        <button class="btn-festa"><a href="login3.php">Login</a></button>
    </nav>
     <div class="titulo">
         <h1>Galeria</h1>
         <h4>Estrutura completa, experiência e profissionais especializados</h4>
     </div>
        
    <div class="container"> 
        
    <div class="img-container">
        <?php
        while ($arquivo = $sql_query->fetch_assoc()) {
        ?>
            <div class="image">
                <img src="<?php echo $arquivo['path']; ?>" alt="">
            </div>
        <?php
        }
        ?>
    </div>
        <div class="popup-image">
            <span onclick="fecharPopup()">&times;</span>
            <img src="" alt="">
        </div>
    </div>
    <footer class="container2">
        <div class="column">
            <div class="logo">
                <img src="imagens/migs1-sem-fundo.png">
            </div> 
            <p>
                Trabalho Multidisciplinar - Feito por alunos do Pedro Macedo - curitiba/PR
            </p>
            <div class="socials">
                <a href="https://www.facebook.com/migseventoskids?mibextid=LQQJ4d"><img src="imagens/facebook-line.png" alt=""></i></a>
                <a href="https://www.instagram.com/migseventoskids/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="><img src="imagens/instagram-line.png" alt=""></a>
                <a href="https://wa.me/5541995706938"><img src="imagens/whatsapp-line.png" alt=""></a>
            </div>
        </div>
        <div class="mapBox">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.5425170329913!2d-49.34074722464183!3d-25.586882839117457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcfd31f8da0b21%3A0x1ada664cc69bff29!2sMIGS%20EVENTOS%20KIDS!5e0!3m2!1spt-BR!2sbr!4v1699905519779!5m2!1spt-BR!2sbr" width="720" height="250" style="border:1px solid;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
    </footer>

<script>

document.querySelectorAll('.img-container .image').forEach(image => {
    image.onclick = () => {
        const imgSrc = image.querySelector('img').getAttribute('src');
        const popup = document.querySelector('.popup-image');
        const popupImg = popup.querySelector('img');

        popup.style.display = 'block';
        popupImg.src = imgSrc;
    }
});


function fecharPopup() {
    document.querySelector('.popup-image').style.display = 'none';
}
</script>

</body>

</html>