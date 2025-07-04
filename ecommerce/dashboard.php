<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loja.css">
    
    <title>Leodair Construções - Materiais de Construção</title>
</head>
<body>
    <?php if(isset($_SESSION['usuario'])): ?>
    <div class="login-info">
        Olá, <?php echo $_SESSION['usuario']; ?> | <a href="logout.php">Sair</a>
    </div>
    <?php endif; ?>

    <nav class="navbar">
        <div class="logo">LEODAIR_CONSTRU</div>
        <ul class="nav-links">
            <li><a href="index.php">Início</a></li>
            <li><a href="produtos.php">Produtos</a></li>
            <li><a href="carrinho.php">Carrinho</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <section class="banner">
        <h1>Tudo para sua obra em um só lugar</h1>
        <p>Materiais de construção de qualidade com os melhores preços da região</p>
        <a href="produtos.php" class="btn">Ver Produtos</a>
    </section>

    <section class="destaques">
        <h2 class="section-title">Produtos em Destaque</h2>
        <div class="produtos-grid">
            <div class="produto-card">
                <img src="assets/cimento-cp-ii-z-32r-todas-as-obras-50-kg.jpg" alt="Cimento" class="produto-img">
                <div class="produto-info">
                    <h3 class="produto-titulo">Cimento 50kg</h3>
                    <p class="produto-preco">R$ 32,90</p>
                    <a href="#" class="btn">Adicionar ao Carrinho</a>
                </div>
            </div>
            
            <div class="produto-card">
                <img src="assets/tijolo-baiano-9x19x19-mil-1 (1).webp" alt="Tijolos" class="produto-img">
                <div class="produto-info">
                    <h3 class="produto-titulo">Tijolo Baiano (milheiro)</h3>
                    <p class="produto-preco">R$ 420,00</p>
                    <a href="#" class="btn">Adicionar ao Carrinho</a>
                </div>
            </div>
            
            <div class="produto-card">
                <img src="assets/telha_ceramica_portuguesa_taguatex_17_pcs_p_m_natural_8455_1_ad8061e3667fb09416bb1fb8407d8d02.webp" alt="Telhas" class="produto-img">
                <div class="produto-info">
                    <h3 class="produto-titulo">Telha Cerâmica (un)</h3>
                    <p class="produto-preco">R$ 2,15</p>
                    <a href="#" class="btn">Adicionar ao Carrinho</a>
                </div>
            </div>
            <div class="produto-card">
                <img src="assets/452_tintaacrilicasedasupremosuperpremiumbranconeve18lalessi.webp" alt="Tinta" class="produto-img">
                <div class="produto-info">
                    <h3 class="produto-titulo">Tinta Acrílica 18L</h3>
                    <p class="produto-preco">R$ 189,90</p>
                    <a href="#" class="btn">Adicionar ao Carrinho</a>
                </div>
            </div>
            <div class="produto-card">
                <img src="assets/581.webp" alt="kit pintura" class="produto-img">
                <div class="produto-info">
                    <h3 class="produto-titulo">kit pintura</h3>
                    <p class="produto-preco">R$ 34,90</p>
                    <a href="#" class="btn">Adicionar ao Carrinho</a>
                </div>
            </div>
        
    </section>

    <section class="sobre" style="padding: 4rem 2rem; background-color: #fff; text-align: center;">
        <h2 class="section-title">Sobre a Leodair Construções</h2>
        <p style="max-width: 800px; margin: 0 auto 2rem; line-height: 1.6;">
            Há mais de 15 anos no mercado, a Leodair Construções é referência em materiais de construção na região. 
            Oferecemos produtos de qualidade, preços competitivos e atendimento especializado para ajudar você 
            a realizar seu sonho da casa própria ou reforma.
        </p>
        <a href="contato.php" class="btn">Fale Conosco</a>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">LEODAIR_CONSTRU</div>
            
            <div class="footer-social">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Leodair Construções. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>