<?php

// helper function for isActive

function isActive($url){
    return Request::is($url)?'active': '';
}