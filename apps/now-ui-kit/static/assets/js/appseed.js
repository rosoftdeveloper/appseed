// data types & common stuff
var STATUS = {
    
    OK               : 0 ,
    ERR              : 1 ,
    ERR_AUTH         : 2 ,
    ERR_INPUT        : 3 ,

};

// data types & common stuff
var COMMON = {
    
    NOT_CONFIRMED    : 0,
    CONFIRMED        : 1,
    ALL              : 'ALL',
    PAGE             : 'PAGE',

    // mirror with jScript -> app.js
    SECTION_PAGE     : 'SECTION_PAGE',
    SECTION_BLOG     : 'SECTION_BLOG',

    OPER_EDIT_PAGE   : 'EDIT_PAGE',
    OPER_DELETE_ALL  : 'DELETE_ALL',

};

// class / var to be used in ajax calls
var ajx_INPUT = {
    'section'           : '',
    'action'            : '',
    'html_target'       : '',
    'data'              : '',
    'data2'             : '',
    'data3'             : '',
    'data4'             : '',
    'data5'             : '',
};

/*
* @ToDo
*/
var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}

// app entry point
$(function(){

    $( "#edit_logout" ).click(function( ) {

        console.log(' *** cancel login ');
        window.location.href = '/logout?theme=' + $('#appseed_theme').html();

    });

    $( "#edit_html" ).click(function( ) {

        console.log( ' Edit HTML ' );
        $('#appseed_editable').trumbowyg();


        $( "#edit_logout" ).show();
        $( "#edit_save"   ).show();
        $( "#edit_cancel" ).show();

        $( this ).hide();
            
    });

    $( "a#submit_login" ).click(function( ) {

        console.log( ' Sumit login ' );
        $('form#login').submit();

    });

    $( "#edit_cancel" ).click(function( ) {

        console.log( ' Drop changes ' );
        location.reload();

    });

    $( "#edit_save" ).click(function( event ) {

        event.preventDefault();
        
        console.log( ' Save HTML ' );

        ajx_router( COMMON.SECTION_PAGE                       /* section  */, 
                    COMMON.OPER_EDIT_PAGE                     /* action   */, 
                    callbk_default                            /* callback */,
                    $('#appseed_segment').html()              /* data     */, 
                    $('#appseed_editable').trumbowyg('html')  /* data2    */,
                    $('input#edit_note').val()                /* data3    */);

        return false;
    });

    $( "#clear_history" ).click(function( event ) {

        event.preventDefault();
        
        console.log( ' Delete HISTORY ' );

        ajx_router( COMMON.SECTION_PAGE       /* section  */, 
                    COMMON.OPER_DELETE_ALL    /* action   */, 
                    callbk_default            /* callback */,
                    null                      /* data     */, 
                    null                      /* data2    */,
                    null                      /* data3    */);

        return false;
    });    

});

// notif the user ..
function notif( status, text ) {
    
    let notif_class = 'success';
    
    // trace the response ..
    console.log( ' -> status: ' + status + ' -> ' + text );

    $('span#notif').html( text );

    if ( status == STATUS.OK ) {

       location.reload();     
    }
}

// helper to talk to backend using ajax ..
function ajx_router( section, action, callback_fct, data, data2, data3 ) {

    ajx_INPUT.section       = section ;    
    ajx_INPUT.action        = action  ;    
    ajx_INPUT.data          = data    ;    
    ajx_INPUT.data2         = data2   ;    
    ajx_INPUT.data3         = data3   ;

    $.ajax({
        url       : '/api'    ,
        data      : ajx_INPUT ,
        dataType  : 'json'    ,
        type      : 'POST'    ,
        success   : function( resp_json ) {
            
            console.log( resp_json );
            
            callback_fct( resp_json );
            return false;

        },
        error: function(error) {
            
            console.log(error);

        }
    });

    return false;
}

// callback for assignments ..
function callbk_default( resp_json ) {
    
    console.log('[callbk_assign] Begin' );
    console.log('[callbk_assign] status      -> ' + resp_json.status );
    console.log('[callbk_assign] status_info -> ' + resp_json.info   );
    
    // notif the user ..
    notif( resp_json.status, resp_json.info );

    return false;
}
