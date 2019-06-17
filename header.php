<!DOCTYPE html>

<html <?php language_attributes(); ?> >

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php wp_head();?>

</head>

<body <?php body_class(); ?>>
<!--googleoff: all-->
	<div id="navbar">
		<div id="navToggle" class="notClicked">
			<a href="javascript:void(0);" id="navToggle-btn" class="right sansSerif" onclick="menuCollapse()">&#9776;</a>
			<?php wp_nav_menu(array('theme_location' => 'header-menu', 'poetry-laboetry')); ?>
        </div>
	</div>
<!--googleon: all-->
	<div id="header">
		<div id="headerBoxWrapper" class="centerTxt">
			<a href="<?php echo esc_url(site_url( )); ?>">
				<div id="headerBox">
					<h1 id="title" class="sansSerif centerTxt"><?php echo esc_textarea( get_bloginfo('name') ); ?></h1>
					<p id="tagline" class="sansSerif centerTxt"><?php echo esc_textarea( get_bloginfo('description') ); ?></p>
				</div>
			</a>
		</div>
	</div>
	<div class="diamondWrapper">
		<div class="diamondPink left"></div>
		<div class="diamondBlack left"></div>
	</div>
	<!--googleoff: all-->
	<div id="socialShareWrapper">
		<div class="socialShare">
			<div class="socialShareWrapperItem">
				<a href="http://www.facebook.com/sharer.php?u=<?php global $wp; echo esc_url(home_url( $wp->request ))?>" target="_blank">
					<div class="socialShareBtnWrapper">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xdivnk="http://www.w3.org/1999/xdivnk" x="0px" y="0px" viewBox="0 0 266.893 266.895" enable-background="new 0 0 266.893 266.895" xml:space="preserve">
	                    <path d="M182.409,262.307v-99.803h33.499l5.016-38.895h-38.515V98.777c0-11.261,3.127-18.935,19.275-18.935 l20.596-0.009V45.045c-3.562-0.474-15.788-1.533-30.012-1.533c-29.695,0-50.025,18.126-50.025,51.413v28.684h-33.585v38.895h33.585 v99.803H182.409z" />
	                	</svg>
	                </div>
	            </a>
	        </div>
			<div class="socialShareWrapperItem">
				<a href="https://twitter.com/share?url=<?php global $wp; echo esc_url(home_url( $wp->request ))?>" target="_blank">
					<div class="socialShareBtnWrapper">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
						</svg>
					</div>
				</a>
			</div>
			<div class="socialShareWrapperItem">
				<a href="http://reddit.com/submit?url=<?php global $wp; echo esc_url(home_url( $wp->request ))?>" target="_blank">
					<div class="socialShareBtnWrapper">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M14.238 15.348c.085.084.085.221 0 .306-.465.462-1.194.687-2.231.687l-.008-.002-.008.002c-1.036 0-1.766-.225-2.231-.688-.085-.084-.085-.221 0-.305.084-.084.222-.084.307 0 .379.377 1.008.561 1.924.561l.008.002.008-.002c.915 0 1.544-.184 1.924-.561.085-.084.223-.084.307 0zm-3.44-2.418c0-.507-.414-.919-.922-.919-.509 0-.923.412-.923.919 0 .506.414.918.923.918.508.001.922-.411.922-.918zm13.202-.93c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-5-.129c0-.851-.695-1.543-1.55-1.543-.417 0-.795.167-1.074.435-1.056-.695-2.485-1.137-4.066-1.194l.865-2.724 2.343.549-.003.034c0 .696.569 1.262 1.268 1.262.699 0 1.267-.566 1.267-1.262s-.568-1.262-1.267-1.262c-.537 0-.994.335-1.179.804l-2.525-.592c-.11-.027-.223.037-.257.145l-.965 3.038c-1.656.02-3.155.466-4.258 1.181-.277-.255-.644-.415-1.05-.415-.854.001-1.549.693-1.549 1.544 0 .566.311 1.056.768 1.325-.03.164-.05.331-.05.5 0 2.281 2.805 4.137 6.253 4.137s6.253-1.856 6.253-4.137c0-.16-.017-.317-.044-.472.486-.261.82-.766.82-1.353zm-4.872.141c-.509 0-.922.412-.922.919 0 .506.414.918.922.918s.922-.412.922-.918c0-.507-.413-.919-.922-.919z" />
						</svg>
					</div>
				</a>
			</div>
			<div class="socialShareWrapperItem">
				<a href="mailto:?Subject=<?php echo get_bloginfo('name'); ?>&amp;Body=Check%20out%20this%20website:%20<?php global $wp; echo esc_url(home_url( $wp->request ))?>" target="_blank">
					<div class="socialShareBtnWrapper">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z" />
						</svg>
					</div>
				</a>
			</div>
		</div>
	</div>
	<!--googleon: all-->
	<div id="mainContainer">
		