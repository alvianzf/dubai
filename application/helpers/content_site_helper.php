<?php

function contentSite()
{
    $CI = get_instance();

    $CI->load->model('ContentModel');

    return $CI->ContentModel->getContentSite();
}