<?php

class Controller
{
    public function indexAction()
    {
        // 前処理(必ずやる。ただしやる内容がコントローラーによって違う)
        preAction();

        // 処理
        echo("処理します。");

        // 後処理(必ずやる。ただしやる内容がコントローラーによって違う)
        postAction();
    }
}
