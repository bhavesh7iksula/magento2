<?php
namespace Iksula\Firstmodule\Block;
 
class First extends \Magento\Framework\View\Element\Template
{

    public function getTxt()
    {
        return 'This is rendering from First.php!';
    }
}