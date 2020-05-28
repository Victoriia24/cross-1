<?php

session_start();
$password = $_POST['password'];
$log = $_POST['log'];
$adm = $_POST['admin'];
$cl = $_POST['client'];
$man = $_POST['manager'];

class User {
    public $nname;
    public $ll_name;
    public $rrole;
    public $llog;
    public $ppassword;
}

$user1 = new User ();
$user1->nname = "Александр";
$user1->ll_name =  "Бойер";
$user1->llog = "Alex_447";
$user1->ppassword = "kju54";
$user1->rrole = 'админ';

$user2 = new User ();
$user2->nname = "Руслан";
$user2->ll_name = "Томашенко";
$user2->llog = "Rus_Tom_350";
$user2->ppassword = "djgedf7";
$user2->rrole = "менеджер";

$user3 = new User ();
$user3->nname = "Дарья";
$user3->ll_name = "Бойченко";
$user3->llog = "12_Daria_12";
$user3->ppassword = "c2c5fvv4";
$user3->rrole = "клиент";

if (isset($_POST['sub'])) {
    if ($log == $user1->llog && $password == $user1->ppassword && $adm) {
        echo "Здравствуйте, " . $user1->rrole. " ". $user1->nname. " ". $user1->ll_name. ". Вы можете на сайте делать все.";
   }
    if ($log == $user2->llog && $password == $user2->ppassword && $man) {
        echo "Здравствуйте, " . $user2->rrole. " ". $user2->nname. " ". $user2->ll_name. ". Вы можете на сайте изменять, удалять и создавать клиентов.";
    }
    if ($log == $user3->llog && $password == $user3->ppassword && $cl) {
      echo "Здравствуйте, " . $user3->rrole. " ". $user3->nname. " ". $user3->ll_name. ". Вы можете на сайте просматривать информацию доступную пользователям.";
   }
    else {
        echo "Неверный логин / пароль / роль!";
    }
}
?>