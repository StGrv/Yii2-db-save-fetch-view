<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use backend\models\Categories ;

class CategoriesController extends Controller {
    
    public function actionIndex() {
        
       $categories = Categories::find()->all() ;   
        
       return $this->render('index', ['categories' => $categories]) ;
    }
    
    public function actionView($id) {
        
        $categories = Categories::findOne(['id' => $id]) ;
        return $this->render('view', ['categories' => $categories]) ;
    }
    
    
} // End

?>