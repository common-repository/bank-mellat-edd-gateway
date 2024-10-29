<?php 

add_action( 'admin_menu', 'setMenu' );


		
function setMenu(  )

{

	add_menu_page('<span style="color:#f18500">نسخه طلایی</span>', '<span style="color:#f18500">نسخه طلایی</span>', 'activate_plugins', "mellat_bank_gate", 'load_inteface', plugin_dir_url( __FILE__ ).'/images/sms.png'); 
	add_submenu_page("mellat_bank_gate", "پکیج های آموزشی", "پکیج های آموزشی", 'activate_plugins', "mellat_bank_gate_packages", "load_packages");
	add_submenu_page("mellat_bank_gate", "افزونه و قالب ها", "افزونه و قالب ها", 'activate_plugins', "mellat_bank_gate_plugins_themes", "load_plugins_themes");	
	add_submenu_page("mellat_bank_gate", "آموزش های EDD", "آموزش های EDD", 'activate_plugins', "mellat_bank_gate_tutorials", "load_tutorials");
	add_submenu_page("mellat_bank_gate", '<span style="color:#f18500">باگ های امنیتی</span>', '<span style="color:#f18500">باگ های امنیتی</span>', 'activate_plugins', "mellat_bank_gate_bugs", "load_bugs");

}


function load_inteface(  )
{
	include dirname(__file__)."/gold.php";
}

function load_packages(  )
{
	include dirname(__file__)."/packages.php";
}

function load_plugins_themes(  )
{
	include dirname(__file__)."/pluginsthemes.php";
}

function load_tutorials(  )
{
	include dirname(__file__)."/tutorials.php";
}

function load_bugs(  )
{
	include dirname(__file__)."/bugs.php";
}