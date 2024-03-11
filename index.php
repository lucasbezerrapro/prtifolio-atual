<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img width="90" height="100" src="img/logo.png" alt="Logo do Portfólio">
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Portfólio</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section class="jumbotron">
        <div class="imagem-jumb">
            <div class="code-text">
                <p>
                    &lt;?php<br>
                    <span style="color: #0070ba;">class</span> Pessoa {<br>
                    &emsp;<span style="color: #0070ba;">public</span> $nome;<br>
                    &emsp;<span style="color: #0070ba;">public</span> $idade;<br>
                    &emsp;<span style="color: #0070ba;">public</span> $profissao;<br><br>
                    
                    &emsp;<span style="color: #0070ba;">public function</span> __construct($nome, $idade, $profissao) {<br>
                    &emsp;&emsp;$this-&gt;nome = $nome;<br>
                    &emsp;&emsp;$this-&gt;idade = $idade;<br>
                    &emsp;&emsp;$this-&gt;profissao = $profissao;<br>
                    &emsp;}<br><br>

                    &emsp;<span style="color: #0070ba;">public function</span> apresentacao() {<br>
                    &emsp;&emsp;echo "<span style='color: #a71d5d;'>Olá! Meu nome é {$this-&gt;nome}, tenho {$this-&gt;idade} anos e sou {$this-&gt;profissao}.</span>";<br>
                    &emsp;}<br>
                    }<br><br>
                    ?&gt;
                </p>
            </div>
            <div class="img-jumb">
                <img width="600" height="600" src="img/card-section.png" alt="">
            </div>
        </div>
    </section>

    <section class="projects">
        <h2>Projetos</h2>
        <div class="project-row">
            <div class="project-card">
                <img src="img/card-section.png" alt="Projeto 1">
                <div class="project-info">
                    <h3>Nome do Projeto 1</h3>
                    <p>Descrição do Projeto 1</p>
                    <button>Ver Projeto</button>
                </div>
            </div>
            <div class="project-card">
                <img src="img/card-section.png" alt="Projeto 2">
                <div class="project-info">
                    <h3>Nome do Projeto 2</h3>
                    <p>Descrição do Projeto 2</p>
                    <button>Ver Projeto</button>
                </div>
            </div>
            <div class="project-card">
                <img src="img/card-section.png" alt="Projeto 3">
                <div class="project-info">
                    <h3>Nome do Projeto 3</h3>
                    <p>Descrição do Projeto 3</p>
                    <button>Ver Projeto</button>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <h2>Entre em Contato</h2>
        <form action="#" method="POST">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Mensagem:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>
</body>
</html>
