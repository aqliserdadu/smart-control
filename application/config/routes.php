<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

if($_SERVER['HTTP_HOST'] == 'smartcontrol.tech'){

    $route['default_controller'] = 'Index';
    $route['login'] = 'control/Login/index';
    $route['signin'] = 'control/Login/signin';
  

    $route['dashadmin'] = 'control/control/dashadmin';
    $route['dashboard'] = 'control/control/dashboard'; //untuk member
    //akun
    $route['akun'] = 'control/control/akun';
    $route['addakun']['POST'] = 'control/control/addakun/$1';
    $route['updateakun']['POST'] = 'control/control/updateakun/$1';
    $route['passakun']['POST'] = 'control/control/passakun/$1';
    //end akun
    
    //icon
    $route['icon'] = 'control/control/icon';
    $route['addIcon']['POST'] = 'control/control/addIcon/$1';
    $route['updateIcon']['POST'] = 'control/control/updateIcon/$1';
    //end icon

    //boardkey
    $route['boardkey']= 'control/control/boardkey';
    $route['addboardkey']['POST'] = 'control/control/addboardkey/$1';
    $route['updateboardkey']['POST'] = 'control/control/updateboardkey/$1';
    $route['deleteboardkey/(:num)']= 'control/control/deleteboardkey/$1';
    //end boardkey

    //board tool
    $route['boardtool']= 'control/control/boardtool';
    $route['addboardtool']['POST'] = 'control/control/addboardtool/$1';
    $route['deleteboardtool/(:num)']= 'control/control/deleteboardtool/$1';
    //end board tool

     //board account
     $route['boardaccount']= 'control/control/boardaccount';
     $route['addboardaccount']['POST'] = 'control/control/addboardaccount/$1';
     $route['editstatusboardaccount']['POST'] = 'control/control/editstatusboardaccount/$1';
     $route['deleteboardaccount/(:num)']= 'control/control/deleteboardaccount/$1';
     //end board tool
 


   
    //profile
    $route['profile'] = 'control/control/profile';
     $route['simpanprofile']['POST'] = 'control/control/simpanprofile/$1';
    $route['changepassword']['POST'] = 'control/control/changepassword/$1';
    $route['logout'] = 'control/Login/logout';
    //end profile
    



    //member function

    $route['device-category/(:any)']= 'control/control/dashboardCategory/$1';
  
    $route['device']= 'control/control/device';
    $route['newdevice']['POST'] = 'control/control/newdevice/$1';
    $route['deletedevice/(:any)']= 'control/control/deletedevice/$1';
  
    $route['nameboard']['POST']= 'control/control/nameboard/$1';
    $route['category-icon']= 'control/control/categoryicon';
    $route['device-icon']= 'control/control/deviceicon';
    $route['updatedeviceicon']= 'control/control/updatedeviceicon';
    
    $route['addIconCategory']['POST']= 'control/control/addIconCategory/$1';
    $route['category']['POST']= 'control/control/category/$1';
    $route['history']= 'control/control/history';
    $route['search-history']['POST']= 'control/control/searchhistory/$1';
    $route['addhistory']['POST']= 'control/control/addhistory/$1';

    $route['search-history']['POST']= 'control/control/searchhistory/$1';
    
    




    $route['404_override'] = '';
    $route['translate_uri_dashes'] = FALSE;

    
}
