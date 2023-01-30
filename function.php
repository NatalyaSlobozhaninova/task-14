<?php

function getUsersList(){
    return [
        'admin' => 'n$kjhjbhjb987HGHVGHVknjnmb098i978t33#$4GFHGVGNVHGJUHKJOIU9U', 
        'nat' => '$2y$10$zPuL1Fs8mJWRfS8nthytjtyjhuifhuhugefhhh99i97NqB6KAfXVO', 
        'alex' => 'vhggytrtfd$oCNfTkfxFPvLvZIWfDUNLOPdbemzX2ZIf3BOFj7pliCBvQNRTIAp2', 
    ];
}


function getCurrentUser(){
    return $_POST['login'] ?? null;
}


function checkPassword($login, $password){
    return (getCurrentUser($login) && password_verify($password, getUsersList()[$login]));
 }