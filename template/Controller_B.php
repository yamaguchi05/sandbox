<?php

/**
 * 新人が作ったコントローラー
 * 
 * Class Controller_B
 */
class Controller_B extends SuperController
{
    protected function preAction()
    {
        parent::preLoginCheck();
    }

    protected function mainAction()
    {
        // TODO: Implement mainAction() method.
    }

    protected function postAction()
    {
        // TODO: Implement postAction() method.
    }
}