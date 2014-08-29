<?php
/**
 * watermakr wrapper for yii framework
 * https://github.com/nevernet/Watermark
 *
 * Copyright 2013, Daniel Qin <xin.qin@qinx.org>
 *
 * Licensed under the MIT license
 * Redistributions of part of code must retain the above copyright notice.
 *
 * @author Daniel Qin <xin.qin@qinx.org>
 * @version 1.0.0
 * @copyright Copyright 2010, Daniel Qin <xin.qin@qinx.org>
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 */

require_once dirname(__FILE__) . '/../extensions/watermark/watermark.php';

class CWaterMark extends CApplicationComponent {
    /**
     * return Watermark
     */
    public static function getInstance(){
        return new Watermark();
    }

    public static function getWatermarkPng(){
        return dirname(__FILE__) . '/../../images/watermark.png';
    }
}
