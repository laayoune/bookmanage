<?php

namespace app\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use app\models\Book;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class BookController extends Controller
{
    //列表查询\条件查询
    public function actionIndex()
    {
        $where['book_id']=Yii::$app->request->post('book_id');
        $where['book_name']=Yii::$app->request->post('book_name');

        $query = Book::find();
        if(!empty($where['book_id']) || !empty($where['book_name'])){
            $query->andFilterWhere(['like','book_id',$where['book_id']])->orFilterWhere(['like','book_name',$where['book_name']]);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    //新增
    public function actionCreate()
    {
        $model = new Book();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->book_id]);
        }
        return $this->render('edit', [
            'model' => $model,
        ]);
    }
    //修改
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->book_id]);
        }
        return $this->render('edit', [
            'model' => $model,
        ]);
    }
    //删除
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    //单个查询
    protected function findModel($id)
    {
        if (($model = Book::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('请求的数据不存在');
    }
    //结果展示
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
}
