<?php
namespace Iksula\Firstmodule\Block;
 
class Firstmodule extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return 'Hello world!';
    }

    public function getTxt()
    {
        return 'This is rendering from First.php!';
    }
}