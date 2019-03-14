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

<div class="text_block">
	<div class="text_container">
		<div class="title"><h1>Письмо успешно отправлено! Мы как можно быстрее на него ответим!</h1></div>
		<div class="title"><h1>Email successfully sent! We will answer it as soon as possible!</h1></div>
		<button><a href="http://<?php echo($_SERVER['SERVER_NAME']) ?>"><-Перейти на главную</a></button>
	</div>
</div>

<style>
	.text_block	
	{
		display: -webkit-flex;
		display: -moz-flex;
		display: -ms-flex;
		display: -o-flex;
		display: flex;
		justify-content: center;
		-ms-align-items: center;
		align-items: center;
		flex-wrap: wrap;
		width: 100vw;
		height: 100vh;
		position: fixed;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
	}
	.text_container
	{
		display: -webkit-flex;
		display: -moz-flex;
		display: -ms-flex;
		display: -o-flex;
		display: flex;
		justify-content: center;
		-ms-align-items: center;
		align-items: center;
		flex-wrap: wrap;
		width: 100%;
	}
	.title
	{
		width: 100%;
		display: -webkit-flex;
		display: -moz-flex;
		display: -ms-flex;
		display: -o-flex;
		display: flex;
		justify-content: center;
	}
	.text_block h1
	{
		color: #f2f2f2;
		font-size: 1.8em;
		width: auto;
		margin: 0;
		padding: 5px 20px;
		border-radius: 50px;
		margin-top: 5px;
		background: #006110;
		text-align: center;
		text-transform: uppercase;
	}
	.text_block button
	{
		background: none;
		padding: 10px 50px;
		transition: 0.5s;
		border-radius: 0;
		border: none;
		outline: 0;
		outline-offset: 0; 
	}
	.text_block button a
	{
		font-size: 16px;
		color: #fff ;
		text-decoration: underline;
		text-transform: uppercase;
	}
</style>


<?php
get_footer();
