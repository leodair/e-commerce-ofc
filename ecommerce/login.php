<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Loja de Materiais</title>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Cadastre-se</h1>
            <p>Crie sua conta para acessar nosso sistema</p>
        </div>
        
        <form class="login-form" method="POST" action="">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
            </div>
            
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
            </div>
            
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="seu@email.com" required>
            </div>
            
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Crie uma senha segura" required>
                <div class="password-requirements">
                    <p>Sua senha deve conter pelo menos 8 caracteres</p>
                </div>
            </div>
            
            <button type="submit" class="submit-btn">Cadastrar</button>
            
            <div class="login-footer">
                <p>Já tem uma conta? <a href="#">Faça login</a></p>
            </div>
        </form>
    </div>
</body>
</html>