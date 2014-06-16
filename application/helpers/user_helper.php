<?php

if ( ! function_exists('get_photo'))
{
        function get_photo($photo = "")
        {
                $CI =& get_instance();
                if($photo != "")
                        return $photo;
                else
                        return $CI->config->item("base_url") . "/" . $CI->config->item("default_avatar");
        }
}

if ( ! function_exists('get_position'))
{
        function get_position($class = 0)
        {
                $CI =& get_instance();
                switch($class){
                        case 0: return $CI->lang->line("manager");
                        case 1: return $CI->lang->line("moderator");
                        case 2: return $CI->lang->line("admin");
                }
        }
}