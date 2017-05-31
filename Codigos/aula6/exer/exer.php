<!DOCTYPE>
<html>
	<head>
		<title>Exercicio 1</title>
		<meta charset="utf-8">
	</head>
	<body>
	<!-- div estilo cabeçalho -->
	<div id="header" style="text-align:center; padding:5px; background-color:black; color: white">
		<h1>Portal</h1>
		<h3><?php echo date('d/m/Y');  ?>
	</div>
	
	<!-- div estilo barra lateral -->
	<div style="line-height:30px; background-color:#eee; 
	widht:30%; height:100%;float:left;padding:5px">
	<ul>
		<li>esportes</li>
		<li>filmes</li>
		<li>politica</li>		
	</ul>
	</div>
	<!-- div estilo corpo do texto -->
	<div id="left" style="display: flex; flex-direction:row; width:80%;float:left;padding:10px">
	
	<div style="flex:4; padding: 30px">
	<a href="http://g1.globo.com/economia/negocios/noticia/jf-fecha-acordo-de-leniencia-com-mpf-por-r-103-bilhoes-diz-mpf.ghtml">
		<img src="./img/jbs.jpg" style="widht:150px; height:160px">
	</a>
	<p>J&F fecha acordo de leniência por R$ 10,3 bilhões, diz MPF
Pagamentos serão feitos em 25 anos e devem começar em dezembro deste ano. Documento deve ser assinado nos próximos dias.</P>
	</div>
	
	<div style="flex:4; padding: 30px">
	<a href="http://globoesporte.globo.com/futebol/futebol-internacional/futebol-espanhol/noticia/papo-e-elogios-marcelo-casemiro-e-danilo-abrem-portas-do-real-para-vinicius-jr.ghtml">
		<img src="./img/sem-titulo.jpg" style="widht:150px; height:160px">
	</a>
	<p>Papo e elogios: Marcelo, Casemiro e Danilo abrem portas do Real para Vinicius Jr.
Trio é bastante receptivo ao garoto, e lateral-esquerdo revela que conversou com ele. "Vamos fazer de tudo na parte extracampo para que possa se sentir à vontade dentro de campo", diz Danilo</P>
	</div>
	
	<div style="flex:4; padding: 30px">
	<a href="http://g1.globo.com/tecnologia/noticia/eua-e-russia-disputam-extradicao-de-suspeito-de-crimes-ciberneticos-contra-linkedin-e-bancos.ghtml">
		<img src="./img/tecno.jpg" style="widht:150px; height:160px">
	</a>
	<p>EUA e Rússia disputam extradição de suspeito de crimes cibernéticos contra LinkedIn e bancos
Yevgeniy Nikulin foi preso em Praga, na República Tcheca, em cooperação com o FBI. Hackeamento do LinkedIn teria ligação com caso de 2012 que comprometeu credenciais de 100 milhões de usuários.</P>
	</div>
	
	
	
</div>
<div id="footer" style="background-color:black;color:white;clear:both;text-align:center;padding:5px">
Jose Alves
</div>

	</body>
</html>