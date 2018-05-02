<!DOCTYPE html>
<html>
<head>
	<title> RPG-After-The-Adiventure</title>|
	<?php
      $dir = get_template_directory_uri() . '/geraldao1.jpg';

  	?>
  
  	<style>
  	body {
          	background-image: url(<?php echo $dir?>);
          	background-size: cover;
     }
  	<!-- VOU COLCOAR UM PEDAÇO AQUI@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
  	@import url(https://fonts.googleapis.com/css?family=Open+Sans);

	html {
	  height:100%;
	}

	nav {
	  max-width: 960px;
	  mask-image: linear-gradient(90deg, rgba(34, 145, 112, 0.6) 0%, #40e0d0 25%, #40e0d0 75%, rgba(34, 145, 112, 0.6) 100%);
	  margin: 0 auto;
	  padding: 60px 0;
	}

	nav ul {
	  text-align: center;
	  background: linear-gradient(90deg, rgba(34, 145, 112, 0.6) 0%, rgba(34, 145, 112, 0.6) 25%, rgba(34, 145, 112, 0.6) 75%, rgba(34, 145, 112, 0.6) 100%);
	  box-shadow: 0 0 25px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(34, 145, 112, 0.6);
	}

	nav ul li {
	  display: inline-block;
	}

	nav ul li a {
	  padding: 18px;
	  font-family: "Open Sans";
	  text-transform:uppercase;
	  color: rgba(0, 35, 122, 0.5);
	  font-size: 18px;
	  text-decoration: none;
	  display: block;
	}

	nav ul li a:hover {
	  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
	  background: rgba(255, 255, 255, 0.1);
	  color: rgba(0, 35, 122, 0.7);
	}

  	<!-- FIM DO PEDAÇO@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
  		body {
          	background-image: url(<?php echo $dir?>);
          	background-size: cover;
     }     	
      /*adimito peguei com maicon ceruti essa parte do div pq achei bacana */
      	div::before {
		    content: "CAÇADA SELVAGEM";
		    font: 10pt Arial;
		    font-weight: bold;
		    color: white;
		    background-color: #40e0d0;
		    padding: 5px;
		    display: block;
		    position: relative;
		    top: -10px;
		    left: -10px;
		    width: 560px;
		}

		div {
		    background-color: rgba(255,255,255,.8);
		    margin: 100px auto 100px auto;
		    padding: 10px;
		    width: 550px;
		    min-height:300px;
		}
  	</style>
</head>
<body>
<!-- VOU COLCOAR UM PEDAÇO AQUI@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->  
<nav>
  <ul>
    <li>
      <a href="#">Home</a>
    </li>
    <li>
      <a href="#">Sobre</a>
    </li>
    <li>
      <a href="#">Ajuda</a>
    </li>
    <li>
      <a href="#">Contato</a>
    </li>
  </ul>
</nav>	  
<!-- FIM DO PEDAÇO@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<h1> BETA V. 1.1.1.1.1.1.1.0 </h1>

<?php
	if(have_posts()) :
		while (have_posts()): 
			the_post();
?>

<li>
	<ul>
		<h2> 
			<?php echo " "; the_title(); ?>
		</h2>

		<div class="post"><?php the_content();?></div>
	</ul>
	<h4>
		<?php  	
		$paramentros = array(

			'label_submit' => 'Enviar Comentários',
			'tittle_reply' => 'Escreve aqui meu bom',
			'comment_notes_after' => 'Escreve aqui meu bom',
			'id_form' => 'idform',
			'id_submit' => 'idsubmit',
			'tittle_reply_to' => 'Não sei oq vai aqui %s',
			'comment_field' => '<textarea id="comment" name="comment"></textarea>');
		comment_form($paramentros);

		?>
	</h4>




	<span> 
		<?php echo "  Data atual: "; the_time("d/m/Y"); ?>
		<h1> BETA V. 1.1.1.1.1.1.1.0 </h1>
	</span>

</li>

<?php 	
		endwhile;

?>

<?php 	
	endif; 

?>

</body>
</html>



















