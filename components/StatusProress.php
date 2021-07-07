<?php
/**
 * Created by PhpStorm.
 * User: Agus
 * Date: 5/21/2016
 * Time: 3:17 PM
 */

namespace app\components;


//use app\models\SuratPengantarSkckStatus;
use yii\base\Widget;

class StatusProress
{
    public $statusModel;

    static  function createForm($statusModel, $model)
    {
      $className = get_class($model);
      if($model->hasAttribute('status_id')) $currentStatus = $model->status_id;
      elseif($model->hasAttribute('status')) $currentStatus = $model->status;


        $css = "<style>" . StatusProress::$css. "</style>";

        $item = [];
        foreach($statusModel as $status){
            $warna = '';
            if($status->id <= $currentStatus) $warna = 'completed';
            else if($status->id == $currentStatus + 4) $warna = 'danger';

            array_push($item, ' <li class="'.$warna.'"> <span class="bubble"></span>'.$status->name.'</li>');
        }

        $html = '
<ul class="progress-indicator">'.
            implode('',$item)
.'</ul>
        ';

        return $css . $html;
    }

    static $css = '
.flexer,
.progress-indicator {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex
}

.no-flexer,
.progress-indicator.stacked {
    display: block
}

.no-flexer-element {
    -ms-flex: 0;
    -webkit-flex: 0;
    -moz-flex: 0;
    flex: 0
}

.flexer-element,
.progress-indicator>li {
    -ms-flex: 1;
    -webkit-flex: 1;
    -moz-flex: 1;
    flex: 1
}

.progress-indicator {
    margin: 0 0 1em;
    padding: 0;
    font-size: 80%;
    text-transform: uppercase
}

.progress-indicator>li {
    list-style: none;
    text-align: center;
    width: auto;
    padding: 0;
    margin: 0;
    position: relative;
    text-overflow: ellipsis;
    color: #bbb;
    display: block
}

.progress-indicator>li:hover {
    color: #6f6f6f
}

.progress-indicator>li.completed,
.progress-indicator>li.completed .bubble {
    color: #65d074
}

.progress-indicator>li .bubble {
    border-radius: 1000px;
    width: 20px;
    height: 20px;
    background-color: #bbb;
    display: block;
    margin: 0 auto .5em;
    border-bottom: 1px solid #888
}

.progress-indicator>li .bubble:after,
.progress-indicator>li .bubble:before {
    display: block;
    position: absolute;
    top: 9px;
    width: 100%;
    height: 3px;
    content: \'\';
    background-color: #bbb
}

.progress-indicator>li.completed .bubble,
.progress-indicator>li.completed .bubble:after,
.progress-indicator>li.completed .bubble:before {
    background-color: #65d074;
    border-color: #247830
}

.progress-indicator>li .bubble:before {
    left: 0
}

.progress-indicator>li .bubble:after {
    right: 0
}

.progress-indicator>li:first-child .bubble:after,
.progress-indicator>li:first-child .bubble:before {
    width: 50%;
    margin-left: 50%
}

.progress-indicator>li:last-child .bubble:after,
.progress-indicator>li:last-child .bubble:before {
    width: 50%;
    margin-right: 50%
}

.progress-indicator>li.active,
.progress-indicator>li.active .bubble {
    color: #337AB7
}

.progress-indicator>li.active .bubble,
.progress-indicator>li.active .bubble:after,
.progress-indicator>li.active .bubble:before {
    background-color: #337AB7;
    border-color: #122a3f
}

.progress-indicator>li a:hover .bubble,
.progress-indicator>li a:hover .bubble:after,
.progress-indicator>li a:hover .bubble:before {
    background-color: #5671d0;
    border-color: #1f306e
}

.progress-indicator>li a:hover .bubble {
    color: #5671d0
}

.progress-indicator>li.danger .bubble,
.progress-indicator>li.danger .bubble:after,
.progress-indicator>li.danger .bubble:before {
    background-color: #d3140f;
    border-color: #440605
}

.progress-indicator>li.danger .bubble {
    color: #d3140f
}

.progress-indicator>li.warning .bubble,
.progress-indicator>li.warning .bubble:after,
.progress-indicator>li.warning .bubble:before {
    background-color: #edb10a;
    border-color: #5a4304
}

.progress-indicator>li.warning .bubble {
    color: #edb10a
}

.progress-indicator>li.info .bubble,
.progress-indicator>li.info .bubble:after,
.progress-indicator>li.info .bubble:before {
    background-color: #5b32d6;
    border-color: #25135d
}

.progress-indicator>li.info .bubble {
    color: #5b32d6
}

.progress-indicator.stacked>li {
    text-indent: -10px;
    text-align: center;
    display: block
}

.progress-indicator.stacked>li .bubble:after,
.progress-indicator.stacked>li .bubble:before {
    left: 50%;
    margin-left: -1.5px;
    width: 3px;
    height: 100%
}

.progress-indicator.stacked .stacked-text {
    position: relative;
    z-index: 10;
    top: 0;
    margin-left: 60%!important;
    width: 45%!important;
    display: inline-block;
    text-align: left;
    line-height: 1.2em
}

.progress-indicator.stacked>li a {
    border: none
}

.progress-indicator.stacked.nocenter>li .bubble {
    margin-left: 0;
    margin-right: 0
}

.progress-indicator.stacked.nocenter>li .bubble:after,
.progress-indicator.stacked.nocenter>li .bubble:before {
    left: 10px
}

.progress-indicator.stacked.nocenter .stacked-text {
    width: auto!important;
    display: block;
    margin-left: 40px!important
}

@media handheld,
screen and (max-width:400px) {
    .progress-indicator {
        font-size: 60%
    }
}


    ';
}
