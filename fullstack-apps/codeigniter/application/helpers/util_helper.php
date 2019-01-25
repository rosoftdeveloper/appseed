<?php 
/**
 * Name:    Util Helper
 * Author:  AppSeed.us
 *          support@appseed.us
 *          @webappseed
 *
 * Created:  01.01.2019
 *
 * Description: Cool helpers to bootstrap your codeIgniter development
 *
 * Requirements: PHP5.6 or above
 *
 * @package    AppSeed-CodeIgniter-JQuery
 * @author     AppSeed.us
 * @link       https://www.appseed.us
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/*
* ***************************************************
* Misc helpers ...
* ***************************************************
*/

// Check current request is POST
function _is_post()
{
    $CI =& get_instance();
    return ( $CI->input->server('REQUEST_METHOD') === 'POST' ? true : false );
}

// Check current request is GET
function _is_get()
{
    $CI =& get_instance();
    return ( $CI->input->server('REQUEST_METHOD') === 'GET' ? true : false );
}

// Check current workspace - Dev or Production
function _is_dev( )
{

    $aUrl = base_url();

    if( _contains( $aUrl, 'localhost') || _contains( $aUrl, '127.0.0.1') )
        return TRUE;
        
    return FALSE;    
} 

// Check input to be int
function _is_int( $var, $min_val=0 ) 
{
    return (bool)filter_var( $var, FILTER_VALIDATE_INT, array('options' => array('min_range' => $min_val)));
}

// Check input to be posotive string
function _is_pos_int( $var ) 
{
    return _is_int( $var, 1); 
}

// Check input to be a String
function _is_str( $var, $min_len=0 ) 
{
    if ( isset( $var ) && strlen( $var ) >= $min_len )  
        return TRUE;
    else 
        return FALSE;
}

// Check input to be not NULL (for all types)
function _is_set( $aInput, $aMinLen=1 ) 
{
    if ((NULL==$aInput) || (''==$aInput) )  { return FALSE ; }
    else { return (bool) (strlen ( $aInput ) >= $aMinLen ) ; }
    
    return FALSE;
}

// Check for a substring ($needle) in string ($haystack)
function _contains($haystack, $needle, $aCaseSensitive=False)
{   
    if ( $aCaseSensitive )
        return strpos( $haystack, $needle) !== false;
    else 
        return strpos( strtolower($haystack), strtolower($needle) ) !== false;
}

// Check string ($haystack) to starts with $needle 
function _starts_with($haystack, $needle)
{
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
}

// Check string ($haystack) to ends with $needle 
function _ends_with($haystack, $needle)
{
    $length = strlen($needle);

    return $length === 0 || 
    (substr($haystack, -$length) === $needle);
}

// Build paths in a OS independent way
function _build_path(  $aPath1,        $aPath2=NULL, $aPath3=NULL, 
                       $aPath4=NULL,   $aPath5=NULL, $aPath6=NULL, 
                       $aPath7=NULL,   $aPath8=NULL, $aPath9=NULL )
{
    $retVal  = '';

    if ( DIRECTORY_SEPARATOR == substr($aPath1 , -1) ) 
        $retVal  = $aPath1;
    else
        $retVal  = $aPath1 . DIRECTORY_SEPARATOR;
         
    $retVal .= ( NULL==$aPath2 ? '' : ( $aPath2 . DIRECTORY_SEPARATOR ) );
    $retVal .= ( NULL==$aPath3 ? '' : ( $aPath3 . DIRECTORY_SEPARATOR ) );
    $retVal .= ( NULL==$aPath4 ? '' : ( $aPath4 . DIRECTORY_SEPARATOR ) );
    $retVal .= ( NULL==$aPath5 ? '' : ( $aPath5 . DIRECTORY_SEPARATOR ) );
    $retVal .= ( NULL==$aPath6 ? '' : ( $aPath6 . DIRECTORY_SEPARATOR ) );
    $retVal .= ( NULL==$aPath7 ? '' : ( $aPath7 . DIRECTORY_SEPARATOR ) );
    $retVal .= ( NULL==$aPath8 ? '' : ( $aPath8 . DIRECTORY_SEPARATOR ) );
    $retVal .= ( NULL==$aPath9 ? '' : ( $aPath9 . DIRECTORY_SEPARATOR ) );

    return $retVal;
}

// Return current theme set in cfg 
function _theme( )
{
    return _cfg_theme( ); 
}

// Return the base static dir for current theme
function _static( $aTheme=NULL )
{
    if ( FALSE == _is_set( $aTheme ) )
        $aTheme = _theme();

    return 'static/themes/' . _theme() . '/';
}

// Same as _static() with echo instead of return
function _e_static( $aTheme=NULL )
{
    echo _static( $aTheme );
}

/*
* ***************************************************
* Session helpers ...
* ***************************************************
*/

// Set a key into session
function _session_set( $aKey, $aVal )
{
    $CI =& get_instance();
    return $CI->session->set_userdata( $aKey, $aVal );
}

// Get a key from session
function _session_get( $aKey )
{
    $CI =& get_instance();
    return $CI->session->userdata( $aKey );
}

// Delete a session key 
function _session_del( $aKey )
{
    $CI =& get_instance();
    return $CI->session->unset_userdata( $aKey );
}

// Check key exists 
function _session_exists( $aKey )
{
    $CI =& get_instance();
    return $CI->session->has_userdata( $aKey );
}

/*
* ***************************************************
* Cfg helpers ...
* ***************************************************
*/

// get a key from cfg
function _cfg_item( $aKey )
{
    $CI =& get_instance();
    return $CI->config->item( $aKey );
}

// read the theme set in cfg 
function _cfg_theme( )
{
    $CI =& get_instance();
    return $CI->config->item( 'theme' );
}

/*
* ***************************************************
* Assets helpers ...
* ***************************************************
*/

function _assets( $aAssetName=NULL ) 
{
    $CI     =& get_instance();
    $assets = $CI->config->item( 'assets' );

    // return all file
    if ( NULL == $aAssetName )
        return $assets;

    // return specific asset
    if ( property_exists( $assets, $aAssetName ) )
        return $assets->$aAssetName;

    // default to NULL if specific asset cannot be located
    return NULL;
}


/*
* ***************************************************
* Loaders
* ***************************************************
*/

function _analytics( ) 
{
    if ( _is_dev() )
        return '<!-- NO GOOGLE_ANALYTICS (local development) -->'; 

    $GOOGLE_ANALYTICS = _assets( 'GOOGLE_ANALYTICS' );
    
    if ( _is_set( $GOOGLE_ANALYTICS ) ) 
    {
        $CI =& get_instance();
        $data = array();

        $data['GOOGLE_ANALYTICS'] = $GOOGLE_ANALYTICS;
         
        return $CI->load->view('common/google_analytics', $data, TRUE );
    }
    
    return '<!-- NO GOOGLE_ANALYTICS (not defined in assets) -->'; 
}
