<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends Objects
{

    function __construct($aSegmentOrClone=NULL, $aContent=NULL) {
        
        parent::__construct();

        if ( ($aSegmentOrClone instanceof Objects) || ($aSegmentOrClone instanceof Page) ) {
            
            $this->clone_obj( $aSegmentOrClone );
            return;
        }        

        // set the object
        $this->setKey1( COMMON::TYPE_PAGE );

        if ( NULL !== $aSegmentOrClone )
		    $page->setSegment( $aSegmentOrClone );
        
        if ( NULL !== $aContent )
            $page->setContent( $aContent );

    }

    public function clone_obj( $aClone ) {
        
        if (NULL === $aClone)
        {
            return;
        }

        foreach(get_object_vars( $aClone ) AS $key=>$value)
        {
             $this->$key = $value;
        } 
    }

    public function json() {
        return $this->toJSON();
    }

    public function setTheme( $aInput ) {
        $this->setKey2( $aInput );
    }

    public function theme( ) {
        return $this->getKey2( );
    }

    public function setSegment( $aInput ) {
        $this->setKey3( $aInput );
    }

    public function segment( ) {
        return $this->getKey3( );
    }

    public function setNote( $aInput ) {
        $this->setKey4( $aInput );
    }

    public function note( ) {
        return $this->getKey4( );
    }

    public function setContent( $aInput ) {
        $this->setRawdata( $aInput );
    }

    public function content( ) {
        return $this->getRawdata( );
    }
}
