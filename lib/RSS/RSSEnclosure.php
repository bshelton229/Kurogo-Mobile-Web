<?php
/**
  * @package ExternalData
  * @subpackage RSS
  */

class RSSEnclosure extends XMLElement
{
    protected $name='enclosure';
    protected $url;
    protected $length;
    protected $type;

    protected function standardAttributes()
    {
        return array(
            'url',
            'length',
            'type'
        );
    }
    
    public function __construct($attribs)
    {
        $this->setAttribs($attribs);
        $this->url = $this->getAttrib('URL');
        $this->length = $this->getAttrib('LENGTH');
        $this->type = $this->getAttrib('TYPE');
    }
    
    public function isImage()
    {
        $image_types = array(
            'image/jpeg',
            'image/jpg',
            'image/gif',
            'image/png'
            );
        return in_array($this->type, $image_types);
    }
    
    public function getType()
    {
        return $this->type;
    }

    public function getURL()
    {
        return $this->url;
    }

    public function getLength()
    {
        return $this->length;
    }
}

