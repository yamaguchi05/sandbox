<?php

/**
 * 親コントローラ
 *
 * 親クラスを作るときに有効？
 */
abstract class SuperController
{
    // abstractが多すぎると柔軟性がない。
    abstract protected function preAction();
    abstract protected function mainAction();
    abstract protected function postAction();

    public function action()
    {
        $this->preAction();

        $this->mainAction();

        $this->postAction();
    }

    protected function preLoginCheck()
    {
        
    }

    protected function preAAA()
    {
        
    }

    protected function postClose()
    {
        
    }

    protected function preBBB()
    {
        
    }
}
