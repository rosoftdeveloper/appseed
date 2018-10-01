<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class COMMON 
{
    
    // types
    const TYPE_PAGE     = 'PAGE'    ;
    const TYPE_THEME    = 'THEME'   ;
    
    // Status
    const STATUS_OK            = 0; // all ok
    const STATUS_ERR           = 1; // generic err 
    const STATUS_ERR_AUTH      = 2; // auth err
    const STATUS_ERR_INPUT     = 3; // wrong input 

    // mirror with jScript -> app.js
    const SECTION_PAGE         = 'SECTION_PAGE';
    const SECTION_BLOG         = 'SECTION_BLOG';

    const OPER_EDIT_PAGE       = 'EDIT_PAGE';
    const OPER_DELETE_ALL      = 'DELETE_ALL'; 

}

