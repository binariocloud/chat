<!DOCTYPE HTML>
<html>
	<head>
		<title>Binario Cloud <?=gethostname();?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!-- <meta http-equiv="refresh" content="18"> -->
		<link rel="stylesheet" href="assets/css/main.css" />
    		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    		<script type="text/javascript" src="assets/js/chat.js"></script>
    		<script type="text/javascript">
        		// ask user for name with popup prompt    
			if ( !name ) {
        			var name = prompt("Enter your chat name:", "Guest");
			}
        		// default name is 'Guest'
        		if (!name || name === ' ') {
           			name = "Guest";      
        		}
        		// strip tags
        		name = name.replace(/(<([^>]+)>)/ig,"");
        		// display name on page
       		 	$("#name-area").html("You are: <span>" + name + "</span>");
        		// kick off chat
        		var chat =  new Chat();
        		$(function() {
                 		chat.getState(); 
                 		// watch textarea for key presses
             			$("#textarea").keydown(function(event) {  
                 			var key = event.which;  
                 			//all keys including return.  
                 			if (key >= 33) {
                     				var maxLength = $(this).attr("maxlength");  
                     				var length = this.value.length;  
                     				// don't allow new content if length is maxed out
                     				if (length >= maxLength) {  
                         				event.preventDefault();  
                     				}  
                  			}  
				});
                 		// watch textarea for release of key press
                 		$('#textarea').keyup(function(e) {       
                          		if (e.keyCode == 13) { 
                    				var text = $(this).val();
                                		var maxLength = $(this).attr("maxlength");  
                    				var length = text.length; 
                    				// send 
                    				if (length <= maxLength + 1) { 
                       				         chat.send(text, name);  
                       				         $(this).val("");
                    				} else {
                       			                 $(this).val(text.substring(0, maxLength));
                                		}       
                          		}
             			});
        		});
    		</script>
	</head>
	<body class="is-preload" onload="setInterval('chat.update()', 1000)">

		<!-- Header -->
			<header id="header">
				<a class="logo" href=""><img src="images/logo-binario-cloud.png"></a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="https://binario.cloud">Site Binario Cloud</a></li>
					<li><a href="https://binarionet.com.br">Site Grupo Binario</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>Binario Cloud <?=gethostname();?></h1>
					<p>Com os serviços da Binario Cloud nossos clientes podem contar com uma equipe altamente capacitada e especialistas em cloud computing, capazes de ajuda-los a desenhar, implementar e suportar melhor arquitetura para rodar suas aplicações.</p>
				</div>
				<video autoplay loop muted playsinline src="images/binario_intro_high.mp4"></video>
			</section>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<div class="row gtr-uniform">
							<div class="col-12">
								<div id="chat-area"></div>
							</div>
						</div>
						<form id="send-message-area">
							<div class="row gtr-uniform">
								<div class="col-12">
                                                                        <textarea name="textarea" id="textarea" placeholder="Type your message and press Enter" rows="1" maxlength = '100'></textarea>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h4>NUVEM PRIVADA</h4>
							<ul class="alt">
								<li>Solução hiperconvergente, que centraliza todo seu ambiente de rede, computação e segurança</li>
								<li>Flexibilidade para dimensionar o hardware conforme sua demanda</li>
								<li>Prepare seu script para que o BCOS suba instâncias conforme sua demanda</li>
								<li>Suporte ágil, com atendimento e substituição de peças feitas por nossos especialistas</li>
								<li>Baixo custo de operacional e baixo consumo de energia</li>
								<li>Monitoramento remoto 24×7</li>
							</ul>
						</section>
						<section>
							<h4>NUVEM PÚBLICA</h4>
							<ul class="alt">
								<li>Cobrança baseada na utilização de recursos</li>
								<li>Gestão e controle através de interface amigável do Binário Cloud Operating System (BCOS)</li>
								<li>Escale seu ambiente através de máquinas virtuais e faça isso com poucos cliques</li>
								<li>Alta disponibilidade – SLA 99,9%</li>
								<li>Auto-scaling</li>
								<li>Suporte ao uso do ambiente com equipe especializada</li>
							</ul>
						</section>
						<section>
							<h4>SOCIAL</h4>
							<ul class="plain">
								<li><a href="https://twitter.com/BinarioCloud"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="https://www.facebook.com/binariocloud/"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="https://www.instagram.com/binario.cloud/"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="https://br.linkedin.com/company/binariocloud?trk=ppro_cprof"><i class="icon fa-linkedin">&nbsp;</i>Linkedin</a></li>
								<li><a href="https://github.com/binariocloud"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; <a href="https://binario.cloud">Binario Cloud</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
