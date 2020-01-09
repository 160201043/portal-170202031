<?php

namespace kouosl\oneri\controllers\backend;

use Yii;
use kouosl\oneri\models\oner;
use yii\data\ActiveDataProvider;
use kouosl\oneri\controllers\backend\SeaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DefaultController implements the CRUD actions for oner model.
 */
class DefaultController extends Controller
{
    public $enableCsrfValidation=false;
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all oner models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SeaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreateModelon(){
        \Yii::$app->response->format=\yii\web\Response::FORMAT_JSON;
        $model=new oner();
        $model->scenario=oner::SCENARIO_CREATE;
        $model->attributes=\Yii::$app->request->post();
        if($model->validate()){
            $model->userid=0;
            $model->save();
            return array('status' => true,'data'=>'girdi başarılı');
        }else{
            return array('status' => false,'data' => $model->getErrors());
        }
    }

    public function actionListModelon(){
        \Yii::$app->response->format=\yii\web\Response::FORMAT_JSON;
        $model=oner::find()->all();
        if(count($model)>0){
            return array('status'=> true,'data'=>$model);
        }else{
            return array('status'=> false,'data'=>'Veri yok.');
        }
    }
    /**
     * Displays a single oner model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new oner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new oner();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing oner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing oner model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the oner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return oner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = oner::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}