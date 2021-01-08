<?php

namespace app\controllers;

use Yii;
use app\models\Satuan;
use app\models\search\SatuanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class SatuanController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new SatuanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($_id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Satuan();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', '_id' => $model->_id]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($_id)
    {
        $model = $this->findModel($_id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', '_id' => (string) $model->_id]);
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($_id)
    {
        $this->findModel($_id)->delete();
        return $this->redirect(['index']);
    }

    protected function findModel($_id)
    {
        $ID = new \MongoDB\BSON\ObjectID($_id);
        if (($model = Satuan::findOne($ID)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
