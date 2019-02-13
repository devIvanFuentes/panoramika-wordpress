<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package panoramika
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div class="video__container">
		<div class="close__video">
			<p>
				Cerrar X
			</p>
		</div>

		<video class="panoramika__video" src="videos/promo_panoramika.mp4" controls="true">
		</video>
	</div>
	
	<div id="page" class="site">
		<header>
		<nav class="menu">

			<div class="menu__image">
				<a href="index.html">
					<img src="img/logo_panoramika.svg" alt="Logotipo panoramika">	
				</a>
				
			</div>

			<div class="menu__items">
				<ul>
					<li><a href="index.html">Inicio</a></li>
					<li><a href="#">Servicios</a></li>
					<li><a href="sucursales.html">Sucursales <span class="arrow-down-icon"></span> </a></li>
					<li><a href="contacto.html">Contacto</a></li>
					<li><a href="tel:+7224540199" class="menu__phone">(722) 454 0199</a></li>
				</ul>
				<img class="hidden menu__mobile__icon" src="img/menu-icon.svg" alt="menu-icon">
			</div>

		</nav>

		<div class="hero__content__social">
			<a class="icon-facebook" href="#"></a>
			<a class="icon-instagram" href="#"></a>
		</div>



		<div class="header__content">

			<div class="header__container">
				
				<h1 class="header__title">
					Sonreír un privilegio de una <br>
					<span class="main__color--bold">boca saludable</span>
				</h1>
				
				<p class="cero__top gray__text">
					Panorămika pone a su alcance la más completa gama de tratamientos <br>dentales y de rehabilitación oral para devolverle una sonrisa sana y bella.

				</p>

				

				<form class="header__form">
					<div class="form__group">
						<span class="icon-calendar primary-color"></span>
						<input class="header__date" id="datepicker" type="text" placeholder="Fecha">	
					</div>

					<div class="form__group">
						<span class="icon-location"></span>
						<select>
							<option selected="selected" value="null">Sucursal</option>
  							<option value="metepec">Metepec</option>
  							<option value="toluca">Toluca</option>
						</select>
					</div>
					
					<div class="form__group">
						<span class="icon-clock">		
						</span>	

						<select>
							<option selected="selected" value="null">Horario</option>
							<option value="9:00" disabled>9:00</option>
							<option value="9:30" disabled>9:30</option>
  							<option value="10:00" disabled>10:00</option>
  							<option value="10:30" disabled>10:30</option>
  							<option value="11:00" disabled>11:00</option>
  							<option value="11:00">11:30</option>
  							<option value="12:00">12:00</option>
  							<option value="12:30">12:30</option>
  							<option value="13:00">13:00</option>
  							<option value="13:30">13:30</option>
  							<option value="14:00">14:00</option>
  							<option value="14:30">14:30</option>
  							<option value="15:00">15:00</option>
  							<option value="15:30">15:30</option>
  							<option value="16:00">16:00</option>
  							<option value="16:30">16:30</option>
  							<option value="17:00">17:00</option>
  							<option value="17:30">17:30</option>
  							

						</select>
					</div>

					

					<input class="btn-primary" type="submit" value="Reservar">
				</form>

				

			</div>
			
			<a href="#" class="btn-primary header__cta">Reservar</a>

		</div>

		<div class="header__video">
			<div class="header__play">
				<span class="icon-play" id="playVideo"></span>
			</div>
		</div>

	</header>

		<div id="content" class="site-content">
