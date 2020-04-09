<?php

function sidebarData()
{
    $CI = get_instance();

    $CI->load->model('SidebarModel');

    return $CI->SidebarModel->getSidebar();
}