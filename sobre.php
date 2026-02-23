<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Barbearia do Lika</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<header>
    <div class="logo">
        <img src="img/logo.png" alt="Barbearia do Lika">
    </div>

    <nav>
        <ul>
            <li><a href="#historia"><i class="fa-solid fa-user"></i> Sobre Nós</a></li>
            <li><a href="#servicos"><i class="fa-solid fa-scissors"></i> Serviços</a></li>
            <li><a href="#ambiente"><i class="fa-solid fa-image"></i> Galeria</a></li>
            <li><a href="#contato"><i class="fa-solid fa-phone"></i> Contato</a></li>
        </ul>
    </nav>
</header>

<!-- HERO -->
<section id="banner">
    
    <img src="img/banner.jpg" alt="Barbearia" class="banner-img">

    <div class="banner-content">
        <h1>SEU ESTILO COMEÇA AQUI</h1>
        <p>Cortes modernos, barba alinhada e acabamento impecável.</p>
    </div>

</section>
<!-- HISTÓRIA -->
<section id="historia" class="section">
    <h2 class="section-title">Nossa História</h2>
    <div class="section-divider"></div>

    <p class="historia-text">
        A Barbearia do Lika nasceu com um propósito simples: oferecer qualidade,
        estilo e uma experiência diferenciada para cada cliente.
        Desde o primeiro atendimento até o acabamento final,
        buscamos entregar confiança, personalidade e profissionalismo.
    </p>

    <p class="historia-text">
        Aqui cada detalhe importa. Trabalhamos com técnicas modernas e clássicas,
        sempre valorizando o que realmente faz a diferença:
        fazer você sair daqui se sentindo melhor do que entrou.
    </p>
</section>

<section id="ambiente" class="section ambiente">
    <h2 class="section-title">Nosso Ambiente</h2>
    <div class="section-divider"></div> 

    <div class="galeria-ambiente">
        <div class="ambiente-item">
            <img src="img/cadeira.webp" alt="Cadeiras Premium">
            <div class="ambiente-info">
                <h3>Conforto em cada detalhe</h3>
                <p>
                    Nossas cadeiras premium foram escolhidas para proporcionar
                    o máximo de relaxamento enquanto cuidamos do seu estilo.
                </p>
            </div>
        </div>

        <div class="ambiente-item">
            <img src="img/sofa.webp" alt="Área de Espera">
            <div class="ambiente-info">
                <h3>Mais que uma espera, um momento de pausa</h3>
                <p>
                    Desfrute de um ambiente moderno e descontraído,
                    ideal para tomar um café ou uma cerveja gelada
                    enquanto aguarda seu horário.
                </p>
            </div>
        </div>

        <div class="ambiente-item">
            <img src="img/ambiente.webp" alt="Estrutura Profissional">
            <div class="ambiente-info">
                <h3>Onde a técnica encontra o design</h3>
                <p>
                    Um espaço com identidade masculina marcante,
                    equipado com as melhores ferramentas para garantir
                    um acabamento impecável.
                </p>
            </div>
        </div>
    </div> </section>

<!-- SERVIÇOS -->
<section id="servicos" class="section">
    <h2 class="section-title">Nossos Serviços</h2>
    <div class="section-divider"></div>

    <div class="cards">

    <!-- CARD 1 -->
    <div class="card">
        <img src="img/corte masculino.jpg" alt="Corte Masculino">

        <div class="card-content">
            <i class="fa-solid fa-scissors"></i>
            <h3>Corte Masculino</h3>
            <p>Estilo moderno ou clássico com acabamento impecável.</p>
        </div>
    </div>

    <!-- CARD 2 -->
    <div class="card">
        <img src="img/Barba.webp" alt="Barba Completa">

        <div class="card-content">
            <i class="fa-solid fa-user"></i>
            <h3>Barba Completa</h3>
            <p>Desenho, alinhamento e toalha quente.</p>
        </div>
    </div>

    <!-- CARD 3 -->
    <div class="card">
        <img src="img/Acabamento.webp" alt="Acabamento Premium">

        <div class="card-content">
            <i class="fa-solid fa-star"></i>
            <h3>Acabamento Premium</h3>
            <p>Navalha e finalização perfeita.</p>
        </div>
    </div>

</div>
</section>

<!-- DIFERENCIAL -->
<section id="diferencial" class="section">
    <h2 class="section-title">Nosso Diferencial</h2>
    <div class="section-divider"></div>

    <div class="cards">

        <!-- CARD 1 -->
        <div class="card">
            <img src="img/Atendimento.webp" alt="Atendimento Personalizado">
            <div class="card-content">
                <i class="fa-solid fa-user-check"></i>
                <h3>Atendimento Personalizado</h3>
                <p>Cada cliente recebe atenção exclusiva e consultoria de estilo.</p>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="card">
            <img src="img/Relogio na parede.webp" alt="Pontualidade">
            <div class="card-content">
                <i class="fa-solid fa-clock"></i>
                <h3>Pontualidade</h3>
                <p>Respeitamos seu tempo com organização e compromisso.</p>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="card">
            <img src="img/Tecnicas modernas.webp" alt="Técnicas Modernas">
            <div class="card-content">
                <i class="fa-solid fa-fire"></i>
                <h3>Técnicas Modernas</h3>
                <p>Clássico e atual combinados em cada detalhe do corte.</p>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="card">
            <img src="img/Espelho.webp" alt="Acabamento Impecável">
            <div class="card-content">
                <i class="fa-solid fa-gem"></i>
                <h3>Acabamento Impecável</h3>
                <p>Precisão, cuidado e perfeição em cada finalização.</p>
            </div>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h2>PRONTO PARA DAR UM UPGRADE NO VISUAL?</h2>
    <p>Agende seu horário agora mesmo e venha viver uma experiência completa.</p>
    
    <a href="https://wa.me/seunumeroaqui" target="_blank">
        <i class="fa-brands fa-whatsapp"></i> Pronto para Mudar no visual?
    </a>
</section>

<!-- FOOTER -->
<footer id="contato">
    <h3>Barbearia Do Lika</h3>
    <p><i class="fa-brands fa-whatsapp"></i> (11) 99999-9999</p>
    <p><i class="fa-brands fa-instagram"></i> @barbeariadolika</p>
    <p><i class="fa-solid fa-location-dot"></i> Rua Exemplo, 123 - São Paulo</p>
    <p><i class="fa-solid fa-clock"></i> Seg-Sáb: 09h às 20h</p>
    <p class="copy">© 2026 - Todos os direitos reservados</p>
</footer>

</body>
</html>