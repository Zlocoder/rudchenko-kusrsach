<?php

namespace admin\controllers;

class SiteController extends \admin\base\Controller
{
    public function actionIndex()
    {
        return $this->render('/index');
    }
}
