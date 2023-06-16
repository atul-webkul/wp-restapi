<?php

class Wk_front_hook
{
   public function __construct()
   {
    $function_handler = new Wk_front_function();
    add_action('rest_api_init',array($function_handler,'my_restapi_init'));
   }

}
