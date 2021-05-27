<?php

namespace frontend\controllers;

use common\models\Celebrities;
use common\models\People;
use yii\data\ActiveDataProvider;

class PeopleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Celebrities::find()->orderBy(['net_worth' => SORT_DESC]),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        return $this->render('index',[
            'celebrities' => $dataProvider,
        ]);
    }
    public function actionView($id)
    {

        $person = Celebrities::findOne($id);
        $his = $person->gender == "Male" ? "his" : "her";
        $this->getView()->title = $person->name." Net Worth";
        \Yii::$app->view->registerMetaTag([
            'name' => 'description',
            'content' => 'During '. $his .' career, '.$person->name.' was able to make a lot of money. Now '. $his .' net worth is already greater than...'
        ]);

        return $this->render('view',[
            'person' => $person,
        ]);
    }

}
