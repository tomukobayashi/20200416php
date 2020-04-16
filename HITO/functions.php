<?php

//データを挿入する関数
function insert_comment($dbh,$name,$comment){
    $date = date();
    //データを挿入
    $sql = "INSERT INTO borad (name,comment,created) VALUE(:name,:comment,'($date)')";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name',$name,POD::PARAM_STR);
    $stmt->bindValue(':comment',$comment,POD::PARAM_STR);
    if(!$stmt->execute()){
        return 'データの読み込みに失敗しました。';
    }
}

//データを取得する関数
function select_comment($dbh){
    $date = date();
    //データを挿入
    $sql = "SELECT name,comment,created FROM board";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $data[]=$row;
    }
    return $data;
}

?>