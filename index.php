<?php
/* ===[ Configuracion ]=== */
define( __KEY__, 'oki doki' );//llave de seguridad o.O
define( __URL__, 'http://localhost:8080/MVCProject01/' ); #url del blog
define( __THEME__, 'sampleblog' ); //nombre del tema activo
define( __FULL_URL__, 'http://localhost:8080/MVCProject01/application/view/Themes/'. __THEME__ .'/' ); #url del blog + ruta del theme

if( !is_dir( 'application/view/themes/'. __THEME__ .'/') )
{    
    die('Error Fatal: Theme no existe!!!'); 
}

/* ===[ archivos necesarios ]=== */
//codigo aqui


/* ===[ manejo de variables ]=== */
    if( $_POST )
    {
        //codigo aqui 
    }
    else if( $_GET )
    { 
        //codigo aqui 
    }    
    else
    {
        include_once( "application/controller/homeCtrl.php" );
        $home = new homeCtrl();
        $home->load();    
    }
?>
