<?php
/*--------------добавления нового пункта меню в админ панель-------------*/

function page_settings_theme(){
	add_theme_page(
		'Страница настройки темы',
		'Настройка TPP',
		'administrator',
		'tpp',
		'show_page_settings_tpp'
	);
}

add_action('admin_menu', 'page_settings_theme');

/*-------------функция отображающая содержимое страницы настройки темы------------*/

function show_page_settings_tpp(){
	?>
		<!--Создаем заголовок в стандартном контейнере wrap-->
		<div class="wrap">
		<!--добавляем иконки к странице-->
		<div id="icon-themes" class="icon32"></div>  
		<h2>Настройки темы TPP</h2>

		  <!-- Делаем вызов функции WordPress для вывода ошибок, возникающих при сохранении настроек. -->  
        <?php settings_errors(); ?>  

        <!-- Создаем форму, которая будет использоваться для вывода наших опций -->
        <form method="post" action="options.php">
        	<?php settings_fields('tpp'); ?>
        	<?php do_settings_sections('tpp'); ?>
        	<?php submit_button(); ?>
        </form>
		</div><!--end wrap-->
	<?php
}


function mytheme_settings(){
	add_settings_section(  
        'general_settings_section',           // ID, который будет использоваться для идентификации этой секции и по которому мы будем регистрировать опции
        'Контактная информация',                      // Заголовок, который будет отображаться на странице административной панели
        'show_field_settings',   // Вызов, который используется для отображения описания секции  
        'tpp'                             // Страница, на которую будет добавлена секция  
    );  

	/*------регистрируем текстовое поле для электронной почты-------*/
	add_settings_field(
		'email_content',
		'Email:',
		'show_content_email',
		'tpp',
		'general_settings_section'
	);

	 register_setting(
	 	'tpp',
	 	'email_content'
	 );

	  /*------регистрируем текстовое поле для первого телефона-------*/
	add_settings_field(
		'phone1',
		'Телефон №1:',
		'show_content_phone1',
		'tpp',
		'general_settings_section'
	);

	 register_setting(
	 	'tpp',
	 	'phone1'
	 );


	  /*------регистрируем текстовое поле для второго телефона-------*/
	add_settings_field(
		'phone2',
		'Телефон №2:',
		'show_content_phone2',
		'tpp',
		'general_settings_section'
	);

	 register_setting(
	 	'tpp',
	 	'phone2'
	 );
	 
	   /*------регистрируем текстовое поле для второго телефона-------*/
	add_settings_field(
		'fax',
		'Факс:',
		'show_content_fax',
		'tpp',
		'general_settings_section'
	);

	 register_setting(
	 	'tpp',
	 	'fax'
	 );
	   /*------регистрируем текстовое поле для ссылки facebook-------*/
	add_settings_field(
		'facebook',
		'Facebook:',
		'show_content_facebook_link',
		'tpp',
		'general_settings_section'
	);

	 register_setting(
	 	'tpp',
	 	'facebook'
	 );
	 
	 
	     /*------регистрируем текстовое поле для ссылки facebook-------*/
	add_settings_field(
		'vk',
		'Вконтакте:',
		'show_content_vk_link',
		'tpp',
		'general_settings_section'
	);

	 register_setting(
	 	'tpp',
	 	'vk'
	 );
	 
	      /*------регистрируем текстовое поле для ссылки facebook-------*/
	add_settings_field(
		'google',
		'Google +:',
		'show_content_google_link',
		'tpp',
		'general_settings_section'
	);

	 register_setting(
	 	'tpp',
	 	'google'
	 );
}

add_action('admin_init', 'mytheme_settings');


/*-----------функция отображающая содержимое в секции---------*/

function show_field_settings(){
	echo "<p>В данном разделе вы можете добавить контактную информацию, которая будет отображаться на сайте.</p>";
}

/*--------------вывод текстового поля email-----------*/
function show_content_email(){
	$country = get_option('email_content');
	$country_field = "<input type='text' id='email_content' class='regular-text'  name='email_content' value='".get_option('email_content')."' />";
	echo $country_field;
}
/*--------------вывод текстового поля для первого телефона-----------*/
function show_content_phone1(){
	$country = get_option('phone1');
	$country_field = "<input type='text' id='phone1' class='regular-text'  name='phone1' value='".get_option('phone1')."' />";
	echo $country_field;
}

/*--------------вывод текстового поля для второго телефона-----------*/
function show_content_phone2(){
	$country = get_option('phone2');
	$country_field = "<input type='text' id='phone2' class='regular-text'  name='phone2' value='".get_option('phone2')."' />";
	echo $country_field;
}
function show_content_fax(){
	$country = get_option('fax');
	$country_field = "<input type='text' id='fax' class='regular-text'  name='fax' value='".get_option('fax')."' />";
	echo $country_field;
}
/*--------------вывод текстового поля ссылки фейсбук-----------*/
function show_content_facebook_link(){
	$country = get_option('facebook');
	$country_field = "<input type='text' id='facebook' class='regular-text'  name='facebook' value='".get_option('facebook')."' />";
	echo $country_field;
}


/*--------------вывод текстового поля ссылки фейсбук-----------*/
function show_content_vk_link(){
	$country = get_option('vk');
	$country_field = "<input type='text' id='vk' class='regular-text'  name='vk' value='".get_option('vk')."' />";
	echo $country_field;
}

/*--------------вывод текстового поля ссылки фейсбук-----------*/
function show_content_google_link(){
	$country = get_option('google');
	$country_field = "<input type='text' id='google' class='regular-text'  name='google' value='".get_option('google')."' />";
	echo $country_field;
}
 ?>