<?php 
/**
 * Name:    Authentication Helper - Wrapper over Ion-Auth library
 * Author:  AppSeed.us
 *          support@appseed.us
 *          @webappseed
 *
 * Created:  01.01.2019
 *
 * Description: Auth helpers to bootstrap your codeIgniter development
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
* Auth helpers - wrappers over Ion-Auth library
* ***************************************************
*/

/**
 * _is_auth
 *
 * Check if user is authenticated
 *
 * @return TRUE if current user is authenticated, FALSE otherwise
 * 
 */
function _is_auth()
{
    $CI =& get_instance();
    return $CI->auth->logged_in( );
}

/**
 * _auth_id
 *
 * Return the user id (if user is authenticated)
 *
 * @return the id of the authenticated user
 * 
 */
function _auth_id()
{
    $CI =& get_instance();
    return $CI->auth->get_user_id( );
}

/**
 * _auth_id
 *
 * Return the user registration email (if user is authenticated)
 *
 * @return the email of the authenticated user
 * 
 */
function _identity()
{
    if( _is_auth() ) 
    {
        $CI =& get_instance();
        return $CI->session->userdata('identity');
    } 
    
    return '';
}
