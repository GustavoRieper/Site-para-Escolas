<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eblue</title>
<link rel="stylesheet" type="text/css" href="estilo_inicio.css"/> <!-- Importação do CSS -->
<link rel="shortcut icon" href="imagens_inicio/favico.ico" /> <!-- Icone na aba no Navegador -->

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script>
        jQuery(document).ready(function($) { 
            $(".scroll").click(function(event){        
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top}, 900);
        });
        });
</script>

</head>

<body class="fadeIn">
<!-- ------------------------------------- Edição Parte 1 da tela de Inicio ------------------------------------------------>
	<div class="inicio_parte1">
    	<img id="anco_1" src="imagens_inicio/ancora.png"></a><br>
    	<img id="imagem_tela1" src="imagens_inicio/garota_laptop.jpg">
        <img id="logo_parte1" src="imagens_inicio/logo_inicio_pt1.png">
        <div class="conteudo_pt1">
        	<!--<p>Realize o login e tenha acesso a todo o conteúdo disponibilizado pelos seus professores.</p>   -->    
            
            <form action="../padroes/carregando.html">
                <input id="login" name="E-mail" type="email" title="Digite seu E-mail" required placeholder="Digite seu E-mail">
                <br><br>
                 <input id="login" name="E-mail" type="password" title="Digite sua Senha" required placeholder="Digite sua Senha">
                 <br><br>
                 <input id="login_entrar" type="submit" value="Entrar">
                 <br>   
                       
            </form> 
            <a href="#">Precisa de ajuda?</a>
            <a href="../login/inicio_login.html">
           
        </div><a class="scroll" href="#imagem_tela2"><img src="botao_baixo.png"  id="botao_baixo"></a>
        
        <div class="ancora">
        	<a class="scroll" href="#anco_1"><img id="img_ancora" src="imagens_inicio/ancora.png"></a><br>
            <a class="scroll" href="#imagem_tela2"><img id="img_ancora" src="imagens_inicio/ancora.png" style="top:44%;"></a>
            <a class="scroll" href="#imagem_tela3"><img id="img_ancora" src="imagens_inicio/ancora.png" style="top:48%;"></a>
            <a class="scroll" href="#botao_contato"><img id="img_ancora" src="imagens_inicio/ancora.png" style="top:52%;"></a>
        
        </div>


	</div>
<!-- ------------------------------------- FIM Edição Parte 1 da tela de Inicio -------------------------------------------->

<!-- ------------------------------------- Edição Parte 1 da tela de Inicio ------------------------------------------------>
	<div class="inicio_parte2">
    	<img id="imagem_tela2" src="imagens_inicio/fundo_tela2.jpg">
        <img id="logo_parte2" src="imagens_inicio/eblue_kids.png">
        <div class="conteudo_pt2">
        	<p>Eblue Kids é o módulo do sistema ambientado para crianças da Educação Infantil. Disponibilizando jogos, livros narrados,
atividades e vídeos atribuídos pelo professor.</p>       
            
        </div>
        <a class="scroll" href="#imagem_tela3"><img src="botao_baixo.png"  id="botao_baixo"></a>
    
    
    
    


	</div>
<!-- ------------------------------------- FIM Edição Parte 1 da tela de Inicio -------------------------------------------->

<!-- ------------------------------------- Edição Parte 1 da tela de Inicio ------------------------------------------------>
	<div class="inicio_parte3">
    	<img id="imagem_tela3" src="imagens_inicio/fundo_tela3.jpg">
        <img id="logo_parte3" src="imagens_inicio/eblue_young.png">
        <div class="conteudo_pt3">
        	<p>Eblue Young é  o módulo do sistema desenvolvido e ambientado para jovens. Através dele o aluno pode acessar conteúdos listados pelos professores.
        </div>
    <a class="scroll" href="#logo_parte4"><img src="botao_baixo.png"  id="botao_baixo"></a>
    
    
    


	</div>
<!-- ------------------------------------- FIM Edição Parte 1 da tela de Inicio -------------------------------------------->

<!-- ------------------------------------- Edição Parte 1 da tela de Inicio ------------------------------------------------>
	<div class="inicio_parte4">
    	<img id="imagem_tela4" src="imagens_inicio/fundo_tela4.jpg">
        
        <div class="conteudo_pt4">
        	<p>Para mais informações sobre o sistema, entre em contato.</p>
            <div id="botao_contato"><p><a href="#">Clique aqui</a></p></div>
            <img id="logo_parte4" src="imagens_inicio/logo_inicio_pt1.png">
        </div>
    <a class="scroll" href="#anco_1"><img src="botao_cima.png"  id="botao_baixo" style="right:0; width:5%; margin-top:-5%; padding-bottom: 0px;"></a>
    
    


	</div>
<!-- ------------------------------------- FIM Edição Parte 1 da tela de Inicio -------------------------------------------->
</body>
</html>
