<?php
/**
 * AmChartsPHP
 * 
 * @link      http://github.com/neeckeloo/AmChartsPHP
 * @copyright Copyright (c) 2012 Nicolas Eeckeloo
 */
namespace AmCharts\Chart\Setting;

class BorderTest extends \PHPUnit_Framework_TestCase
{   
    /**
     * @var AmCharts\Chart\Setting\Border
     */
    protected $border;
    
    public function setUp()
    {
        $this->border = new Border('#ffffff');
    }
    
    public function testSetAlpha()
    {
        $alpha = 20;
        $this->border->setAlpha($alpha);
        $this->assertEquals($alpha, $this->border->getAlpha());
    }
    
    public function testSetColor()
    {
        $color = '#ff0000';
        
        $this->border->color($color);
        $this->assertInstanceOf('AmCharts\Chart\Setting\color', $this->border->color());
        
        $this->border->color(new Color($color));
        $this->assertInstanceOf('AmCharts\Chart\Setting\color', $this->border->color());
    }

    public function testSetThickness()
    {
        $thickness = 2;
        $this->border->setThickness($thickness);
        $this->assertEquals($thickness, $this->border->getThickness());
    }
    
    public function testToArray()
    {
        $this->assertCount(2, $this->border->toArray());
    }
}