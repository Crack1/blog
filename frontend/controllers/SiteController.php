<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\TblPost;
use frontend\models\PostSearch;
use common\component\AccessRule;
use common\models\User;
use yii\web\NotFoundHttpException;
use kartik\mpdf\Pdf;
use yii\data\ActiveDataProvider;


/**
* Site controller
*/
class SiteController extends Controller
{
  /**
  * @inheritdoc
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
      'access' => [
        'class' => AccessControl::className(),
        'ruleConfig' => ['class' => AccessRule::className(), ],
        'only' => ['index','create','update','view','vta1'],
        'rules' => [
          [
            //'actions' => ['index'],
            'allow' => true,
            'roles' => [
              User::ROLE_USER,
              User::ROLE_ADMIN, '?'
            ],
          ],
        ],
      ],
    ];
  }

  /**
  * @inheritdoc
  */
  public function actions()
  {
    return [
      'error' => [
        'class' => 'yii\web\ErrorAction',
      ],
    ];
  }

  public function actionError()
  {
    $exception = Yii::$app->errorHandler->exception;
    if ($exception !== null) {
      return $this->render('error', ['exception' => $exception]);
    }
  }
  /**
  * Displays homepage.
  *
  * @return string
  */
  public function actionIndex()
  {


    $searchModel = new PostSearch();
    //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    $dataProvider = new ActiveDataProvider([
           'query' => TblPost::find()->where(['status' => 1])->orderBy('id_post DESC'),
           'pagination' => [
               'pageSize' => 10,
           ],
       ]);

    return $this->render('index', [
      'searchModel' => $searchModel,
      'dataProvider' => $dataProvider,
    ]);
    //return $this->render('index');
  }

  public function actionView($id)
  {
    $model = TblPost::find()->where(['id_post'=>$id])->one();

    return $this->render('view', [
      'model' => $model,
    ]);
  }

  /**
  * Login action.
  *
  * @return string
  */
  public function actionLogin()
  {
    if (!Yii::$app->user->isGuest) {
      return $this->goHome();
    }

    $model = new LoginForm();
    if ($model->load(Yii::$app->request->post()) && $model->login()) {
      return $this->goBack();
    } else {
      return $this->render('login', [
        'model' => $model,
      ]);
    }
  }

  /**
  * Logout action.
  *
  * @return string
  */
  public function actionLogout()
  {
    Yii::$app->user->logout();

    return $this->goHome();
  }
}
