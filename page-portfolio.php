<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
			<button class="swap_button fs_screen_button"><a href="../">Главная</a></button>
			<button class="swap_button about_box_show_button"><a href="../">О нас</a></button>
			<button class="swap_button advant_button"><a href="../">Преимущества</a></button>
			<button class="swap_button active">Наши работы</button>
			<button class="swap_button contact_button"><a href="../">Контакты</a></button>
		</div>
	</div>
	<div class="gallery_block">
		<div class="gallery_container">
			<div class="gallery_title">
				<h1>Наши работы</h1>
				<p>Нажмите на изображение работы чтобы получить информацию о ней.</p>
			</div>
			<div class="gallery_list">
				<?php
					$args = array(
						'numberposts' 		=> 99,
						'post_type'			=> 'works',
						'suppress_filtres'	=> true, 
					);
					$posts = get_posts( $args );
					foreach ($posts as $post) : 
						setup_postdata($post);
						?>

						<div class="gallery_item">
							<div class="gallery_image" style="background-image: url('<?php the_post_thumbnail_url() ?>');"></div>
							<div class="focus_block">
								<img src='<?php the_post_thumbnail_url() ?>' alt="">
								<div class="text_block">
									<h1><?php the_title() ?></h1>
									<p><?php the_content() ?></p>
									<button class="gallery_close"><img src="<?php bloginfo('template_directory'); ?>/img/times_icon.png" alt=""></button>
								</div>
								</img>
							</div>
						</div>

						<?
					endforeach;
				?>
			</div>
		</div>
	</div>

<?php
get_footer();
