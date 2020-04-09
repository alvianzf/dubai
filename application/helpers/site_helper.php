<?php

function siteInfo()
{
    $CI = get_instance();

    $CI->load->model('SiteInfoModel');

    return $CI->SiteInfoModel->getSiteInfo();
}