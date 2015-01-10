<?php

function banners_types(){
    return
    array('1'=>'Wide Banner','2'=>'Pullup Banner');
}

function get_banner_type($code){
    $types=  banners_types();
    if(isset($types[$code]))
        return $types[$code];
    
    return FALSE;
}

function get_templates_list(){
    $templates=array();
    $templates['businesscards']=array(
        'title'=>'Business Cards',
        'link'=>'business_cards'
    );
    $templates['banners']=array(
        'title'=>'Banners',
        'link'=>'banner'
    );
    $templates['compliments']=array(
        'title'=>'Compliments',
        'link'=>'compliment'
    );
    return $templates;
}