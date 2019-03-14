<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package decorateTree
 */


get_header();
?>
	<div class="response_bar">
		<div></div>
		<div></div>
		<div></div>
	</div>
	<div class="nav_menu">
		<div class="nav_menu_list">
			<button class="swap_button fs_screen_button active">Главная</button>
			<button class="swap_button about_box_show_button">О нас</button>
			<button class="swap_button advant_button">Преимущества</button>
			<button class="swap_button "><a href="/portfolio">Наши работы</a></button>
			<button class="swap_button contact_button">Контакты</button>
		</div>
	</div>
	<div class="first_screen">
		<div class="container_content">
			<div class="fs_content">
				<div class="fs_wind">
					<div class="fs_text">
						<?php echo get_field("fs_name"); ?>
						<h2><?php echo get_field("fs_desc"); ?></h2>
						<p><?php echo get_field("fs_advant"); ?></p>
						<button class="contact_button">Связаться</button>
					</div>
				</div>
			</div>
		</div>
		<div class="wrapper">
			<div class="section_container">
				<div class="rotate_section">
					<div class="rotate_bg" style="background-image: url('<?php echo get_field("first_screen_image"); ?>');">
						</div>
					<div class="rotate_container">
						<div class="rotate_content" style="background-image: url('<?php echo get_field("first_screen_image"); ?>');">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about_block">
		<div class="about_bg" style="background-image: url('<?php echo get_field("about_image"); ?>');"></div>
		<div class="about_container">
			<div class="about_content">
				<h1>нас</h1>
				<p><?php echo get_field("about_text"); ?></p>
			</div>
		</div>
	</div>
	<div class="advant_block">
		<div class="advant_container">
			<div class="advant_list">
				<?php $advant_list = get_post_meta($post->ID,'advant_list_item',true);
					foreach ($advant_list as $key => $value) :
						?>
							<div class="advant_item">
								<img src="<?php echo($value["advant_list_image"]); ?>" alt="">
								<h1><?php echo($value["advant_list_title"]); ?></h1>
								<p><?php echo($value["advant_list_desc"]); ?></p>
							</div>
						<?
					endforeach;
				?>
			</div>
		</div>
	</div>
	<div class="contact_block">
		<div class="contact_content">
			<div class="contact_text">
				<h1>Контакты</h1>
				<p><img src="<?php bloginfo('template_directory'); ?>/img/map_icon.png" alt=""><?php echo get_field("address"); ?></p>
				<button class="response_button">Найти на карте</button>
				<p><img src="<?php bloginfo('template_directory'); ?>/img/tel_icon.png" alt=""><?php echo get_field("tel"); ?></p>
				<p><img src="<?php bloginfo('template_directory'); ?>/img/mail_icon.png" alt=""><?php echo get_field("mail"); ?></p>
				<h2>Есть вопросы? Оставте заявку на обратный званок.</h2>
				<form action="<?php the_permalink(); ?>" method='get'>
					<input type="text" name="name" placeholder="Ваше имя">
					<input type="text" name="tel" placeholder="Ваш телефон">
					<textarea name="comment" placeholder="Ваш комментарий"></textarea>
					<button type="submit">Позвоните мне!</button>
				</form>
			</div>
			<div class="contact_map">
				<div class="close_button"></div>
				<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6dd2cc1117371abe8a6f819e7bcd7b06cbc75358a178f9b88125e4d8fb3c0244&amp;source=constructor" width="700" height="500" frameborder="0"></iframe>
			</div>
		</div>
	</div>

<style type="text/css">
	body {overflow: hidden;}
	
</style>
	


<?php
get_footer();
