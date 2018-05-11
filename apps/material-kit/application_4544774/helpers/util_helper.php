<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Check current request is POST
function is_post()
{
    $CI =& get_instance();
    return ( $CI->input->server('REQUEST_METHOD') === 'POST' ? true : false );
}

// Check current request is GET
function is_get()
{
    $CI =& get_instance();
    return ( $CI->input->server('REQUEST_METHOD') === 'GET' ? true : false );
}

// Check input to be int
function g_is_int( $var, $min_val=0 ) 
{
    return (bool)filter_var( $var, FILTER_VALIDATE_INT, array('options' => array('min_range' => $min_val)));
}

// Check input to be POSITIVE int
function g_is_pos_int( $var ) 
{
    return g_is_int( $var, 1); 
}

// @Deprecated - Check input to be int
function is_pos_int( $aInput )
{
    return (bool)filter_var( $aInput, FILTER_VALIDATE_INT, array('options' => array('min_range' => 1)));
}

// Check input to be a String
function g_is_string( $var, $min_len=0 ) 
{
    if ( isset( $var ) && strlen( $var ) >= $min_len )  
        return TRUE;
    else 
        return FALSE;
}

// @Deprecated - Check input to be a NON empty String
function has_text( $aInput, $aMinLen=1 ) 
{
    if (NULL==$aInput)        { return FALSE ;                                    }
    if ( g_is_arr($aInput) )  { return (bool) count   ( $aInput );                }
    else                      { return (bool) (strlen ( $aInput ) >= $aMinLen ) ; }
    
    return FALSE;
}

// Check input to be an Array
function g_is_arr( $var ) 
{
    if   ( NULL === $var )         { return FALSE ; } 
    if   ( (array) $var !== $var ) { return FALSE ; }
    else                           { return TRUE  ; }
}

// @Deprecated - use g_is_arr ..
function is_arr( $var ) 
{
    if   ( NULL === $var )         { return FALSE ; } 
    if   ( (array) $var !== $var ) { return FALSE ; }
    else                           { return TRUE  ; }
}

// Check input to be a email addres
function g_is_email_addr( $var ) 
{
    return ( filter_var( $var, FILTER_VALIDATE_EMAIL) ? TRUE : FALSE );
}

// Check input to be an IP addres
function g_is_ip_addr( $aInput )
{
    if ( !isset($aInput) ) return false;
    
    return ( filter_var( $aInput, FILTER_VALIDATE_IP) );      
}

/*
* ***************************************************
* Cfg helpers ...
* ***************************************************
*/

function cfg_item( $aKey )
{
    $CI =& get_instance();
    return $CI->config->item( $aKey );
}

function cfg_theme( )
{
    $CI =& get_instance();
    return $CI->config->item( 'theme' );
}

/*
* ***************************************************
* Session helpers ...
* ***************************************************
*/

function session_set( $aKey, $aVal )
{
    $CI =& get_instance();
    return $CI->session->set_userdata( $aKey, $aVal );
}

function session_get( $aKey, $aVal )
{
    $CI =& get_instance();
    return $CI->session->userdata( $aKey );
}

function session_del( $aKey )
{
    $CI =& get_instance();
    return $CI->session->unset_userdata( $aKey );
}

function session_exists( $aKey )
{
    $CI =& get_instance();
    return $CI->session->has_userdata( $aKey );
}

                           
                                     

