<?php
 
namespace app\controllers;

use Yii;
use app\models\Trabajo;
use app\models\TrabajoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\web\Response;
use yii\widgets\ActiveForm;
use app\base\Model;

use yii\helpers\Json;


/**
 * TrabajoController implements the CRUD actions for Trabajo model.
 */
class TrabajoController extends Controller
{
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
     * Lists all Trabajo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TrabajoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Trabajo model.
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
     * Creates a new Trabajo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new Trabajo();
    //     $model2 = new \app\models\Vehiculo();
    //     $model->restra = '-';
    //     $model->fintra = date("Y-m-d");
    //     $modelsAddress = [new \app\models\Repuestosu];

    //     if ($model->load(Yii::$app->request->post())) {

    //         $modelsAddress = Model::createMultiple(\app\models\Repuestosu::classname());
    //         Model::loadMultiple($modelsAddress, Yii::$app->request->post());

    //         if($model->seru!==null){
    //             foreach ($model->seru as $servicio) {
    //                 $ser = new \app\models\Serviciosu();
    //                     $ser->fecseu = date("Y-m-d");
    //                     $ser->serseu = $servicio;
    //                     $ser->traseu = $model->id_tra;
    //                 $ser->save();
    //             }
    //         }

    //         // validate all models
    //         $valid = $model->validate();
    //         $valid = Model::validateMultiple($modelsAddress) && $valid;

    //         if ($valid) {
    //             $transaction = \Yii::$app->db->beginTransaction();

    //             try {

    //                 if ($flag = $model->save(false)) {
    //                     foreach ($modelsAddress as $modelAddress) {
    //                         $modelAddress->id_reu = $model->id_tra;
    //                         if (! ($flag = $modelAddress->save(false))) {
    //                             $transaction->rollBack();
    //                             break;
    //                         }
    //                     }
    //                 }

    //                 if ($flag) {
    //                     $transaction->commit();
    //                     return $this->redirect(['view', 'id' => $model->id_tra]);
    //                 }
    //             } catch (Exception $e) {
    //                 $transaction->rollBack();
    //             }
    //         }
    //     } elseif
    //      ($model2->load(Yii::$app->request->post())) {
    //         $model2->save();           
    //         //return $this->refresh();
    //         $model->vehtra=$model2->id_veh;
    //         $model2 = new \app\models\Vehiculo();
    //         $model->restra = '-';
    //         $model->fintra = date("Y-m-d");
    //     }

    //     return $this->render('create', [
    //         'model' => $model, 'model2' => $model2,
    //         'modelsAddress' => (empty($modelsAddress)) ? [new \app\models\Repuestosu] : $modelsAddress
    //     ]);
    // }

    public function actionGetRepuestos()
    {
        $repuestos = Trabajo::getRepdisp();
        echo Json::encode($repuestos);
    }

    public function actionGetRusados()
    {
//SELECT * FROM `tblrepuestosu` JOIN `tblrepuesto` ON `id_rep`=`repreu` WHERE `id_rep`=`repreu`
        $connection=Yii::$app->db;
        $query='SELECT id_rep as id, fecreu as fecha, nomrep as nombre, canrep as cantidad, (prerep*canreu) as precio FROM `tblrepuestosu` JOIN `tblrepuesto` ON `id_rep`=`repreu` WHERE `id_rep`=`repreu`';
        $repuestos = $connection->createCommand($query)->queryAll();
        echo Json::encode($repuestos);
    }

    public function actionGetSusados()
    {
        $connection=Yii::$app->db;
        $query='SELECT id_ser as id, fecseu as fecha, desser as nombre, preser as precio FROM `tblserviciou` JOIN `tblservicio` ON `id_ser`=`serseu` WHERE `id_ser`=`serseu`';
        $repuestos = $connection->createCommand($query)->queryAll();
        echo Json::encode($repuestos);
    }    

    public function actionCreate()
    {
        $model = new Trabajo();
        $model2 = new \app\models\Vehiculo();
        $model->restra = '-';
        $model->fintra = date("Y-m-d");         

        if ($model->load(Yii::$app->request->post())){
            // echo '<pre>';
            // print_r(json_decode($model->reca)[0]->item);
            // echo '</pre>';
            // exit;
            $model->save();
            $model->reca=json_decode($model->reca);
            if($model->reca!=null){
                foreach ($model->reca as $repuesto) {
                    $rep = new \app\models\Repuestosu();
                        // echo '<pre>';
                        // print_r($repuesto->cantidad);                        
                        // echo '</pre>';
                        // exit;
                        $rep->fecreu = date("Y-m-d");
                        $rep->repreu = $repuesto->item;
                        $rep->canreu = $repuesto->cantidad;
                        $rep->trareu = $model->id_tra;
                    $rep->save();
                }
            }
            if($model->seru!=null){
                foreach ($model->seru as $servicio) {
                    $ser = new \app\models\Serviciosu();
                        $ser->fecseu = date("Y-m-d");
                        $ser->serseu = $servicio;
                        $ser->traseu = $model->id_tra;
                    $ser->save();
                }
            }
            return $this->redirect(['view', 'id' => $model->id_tra]);
        } elseif
         ($model2->load(Yii::$app->request->post())) {
            $model2->save();           
            //return $this->refresh();
            $model->vehtra=$model2->id_veh;
            $model2 = new \app\models\Vehiculo();
            $model->restra = '-';
            $model->fintra = date("Y-m-d");
        }
        return $this->render('create', [
            'model' => $model, 'model2' => $model2,
        ]);
    }

    /**
     * Updates an existing Trabajo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model->repu = $model->Rep();

        $model->seru = $model->Ser();

        $repu = $model->repu;

        $seru = $model->seru;

        if ($model->load(Yii::$app->request->post())/* && $model->save()*/) {
            echo "<pre>";
            print_r(json_decode($model->reca));
            echo "</pre>";exit;
            if($model->repu!==$repu){
                \app\models\Repuestosu::deleteAll(['trareu'=>$model->id_tra]);
                if($model->repu!=null) {
                    foreach ($model->repu as $repuesto) {
                        $rep = new \app\models\Repuestosu();
                            $rep->fecreu = date("Y-m-d");
                            $rep->repreu = $repuesto->item;
                            $rep->trareu = $model->id_tra;
                        $rep->save();
                    }
                }
            }
            if($model->seru!==$seru){
                \app\models\Serviciosu::deleteAll(['traseu'=>$model->id_tra]);                
                if($model->seru!=null) {                
                    foreach ($model->seru as $servicio) {
                        $ser = new \app\models\Serviciosu();
                            $ser->fecseu = date("Y-m-d");
                            $ser->serseu = $servicio;
                            $ser->traseu = $model->id_tra;
                        $ser->save();
                    }
                }
            }            
            return $this->redirect(['view', 'id' => $model->id_tra]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Trabajo model.
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
     * Finds the Trabajo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Trabajo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Trabajo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
