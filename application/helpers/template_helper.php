<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('array_print')) 
{
    function array_print($array) 
    {
        if(is_array($array) && isset($array)) 
        {
            foreach($array as $key => $val)
                array_print($val);
        }
        else
        {
            echo $array."\n";
        }
    }
}

if ( ! function_exists('nav_menu')) 
{
    function nav_menu()
    {
        echo '
            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

                <ul class="wraplist">   

                    <li class="open"> 
                        <a href="'.base_url().'file_manajer">
                            <i class="fa fa-file"></i>
                            <span class="title">File Manajer</span>
                        </a>
                    </li>
                    <li class=""> 
                        <a href="javascript:;">
                            <i class="fa fa-cogs"></i>
                            <span class="title">Pengaturan</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu" >
                            <li>
                                <a class="" href="'.base_url().'user">User</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="'.base_url().'logout">
                            <i class="fa fa-sign-out"></i>
                            <span class="title">Logout</span>
                        </a>
                    </li>
                </ul>

            </div>
            <!-- MAIN MENU - END -->
        ';
    }
}

