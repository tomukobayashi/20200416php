<?php 
require_once('./functions.php');
//処理の流れを記述
$errs = [];
$data = [];
$bdh = get_db_connect();

if($_SERVER['REQUESTED_METHOD'] === 'POST'){

    $name= get_post('name');
    $comment=get_post('comment');

    if(!check_words($name,50)){
        $errs[]='お名前欄を修正してください';
    }
    if(!check_words($comment,200)){
        $errs[]='コメント欄を修正してください';
    }
    if(count($errs) === 0){
        $result = insert_comment($dbh,$name,$comment);
    }
}
$data=select_comments($dbh);
include_once('view.php');
?>