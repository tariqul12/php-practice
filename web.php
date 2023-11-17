<?php
require_once "vendor/autoload.php";
use App\classes\Welcome;

$welcome=new Welcome();

if ($_GET['page'] == 'home'){

    $welcome->index();

}
elseif ($_GET['page'] == 'about')
{
    $welcome->about();
}
elseif ($_GET['page'] == 'contact')
{
    $welcome->contact();
}