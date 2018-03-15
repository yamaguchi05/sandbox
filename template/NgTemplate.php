<?php

// 知らない人が作ったクソコントローラ
class Controller extends SuperController
{
    public function indexAction()
    {
        // 前処理(必ずやる。ただしやる内容がコントローラーによって違う)
        $this->preAction();

        // 処理
        echo("処理します。");

        // 後処理(必ずやる。ただしやる内容がコントローラーによって違う)
        $this->postAction();
    }
}
