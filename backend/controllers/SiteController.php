<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

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
            'access' => [
                'class' => AccessControl::className(),                
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'profile', 'gallery', 'static'],
                        'allow' => true,
                        'roles' => ['@'], // only logged in users
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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
            'static' => [
            'class' => '\yii\web\ViewAction',
            ],
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionProfile($id=null)
    {
        if(!isset($_REQUEST['id']))
        {
            $id = Yii::$app->user->id;
        }
        $rows = (new \yii\db\Query())
            ->select('*')
            ->from('user')
            ->where('id=:id', [':id' => $id])
            ->limit(10)
            ->one();        

        /**
         * Simulate the result of a database query
         */
        $companies = [
        [
        'name'=>'Sterling Commerce',
        'description'=>'A short description of the company',
        'link'=>'sterlingcommerce.com',
        ],
        [
        'name'=>'Dell Inc,',
        'description'=>'Dell Inc. is an American privately owned multinational computer technology company based in Round Rock, Texas,
            United States, that develops, sells, repairs and supports computers and related products and services. Bearing the
            name of its founder, Michael Dell, the company is one of the largest technological corporations in the world, employing
            more than 103,300 people worldwide.',
                    'link'=>'dell.com',
        ],
        [
        'name'=>'COSTCO Wholesale Corporation',
        'description'=>'Costco Wholesale Corporation is a membership-only warehouse club that provides a wide selection of merchandise.
        As of July 2012, it is the second largest retailer in the United States, the seventh largest retailer in the world
        and the largest membership warehouse club chain in the United States.',
        'link'=>'costco.com',
        ],
        [
        'name'=>'Hewlett-Packard Company',
        'description'=>'HP is an American multinational information technology corporation headquartered in Palo Alto, California,
        United States. It provides hardware, software and services to consumers, small- and medium-sized businesses (SMBs)
        and large enterprises, including customers in the government, health and education sectors.',
	    'link'=>'hp.com',
	    ],
	    [
	    'name'=>'Baker Hughes',
	    'description'=>'Baker Hughes is one of the worlds largest oilfield services companies. It operates in over 90 countries,
        providing the oil and gas industry with products and services for drilling, formation evaluation, completion,
        production and reservoir consulting. Baker Hughes has its headquarters in the America Tower in the American
        General Center in Houston, TX.',
        'link'=>'bakerhughes.com',
        ],
        ];
        
        $socials = [
    	       [
    	           'id'        => 1,
    	           'facebook'  => '',
    	           'twitter'   => 'https://twitter.com/TomKing44113263',
    	           'google'    => 'https://plus.google.com/+TomKingOnline/',
    	           'linkedin'  => 'http://www.linkedin.com/in/tomkingonline',
    	           'pintrest'  => '',
    	           'git'       => 'https://github.com/tskmatrix/ecomm',
    	           'tumblr'    => '',
    	           'instagram' => '',	           
               ], 
	           [
    	           'id'        => 2,
    	           'facebook'  => '',
    	           'twitter'   => '',
    	           'google'    => '',
    	           'linkedin'  => '',
    	           'pintrest'  => '',
    	           'git'       => 'https://github.com/tskmatrix/demo',
    	           'tumblr'    => '',
    	           'instagram' => '',
               ],
        ];
        
        return $this->render('profile', ['rows' => $rows, 'companies'=>$companies, 'socials'=>$socials]);
    }

    public function actionGallery($id=null)
    {
        if(!isset($_REQUEST['id']))
        {
            $id = Yii::$app->user->id;
        }
        
        $rows = (new \yii\db\Query())
            ->select('*')
            ->from('users')
            ->where('UserId=:id', [':UserId' => $id])
            ->limit(1)
            ->one(); 
        
        /* 
        $pics = (new \yii\db\Query())
            ->select('*')
            ->from('userimages')
            ->where('id=:id', [':id' => $id])
            ->all();
        */
        
        return $this->render('gallery', ['rows' => $rows]);
    }

    public function actionIndex()
    {
        $rows = (new \yii\db\Query())
        ->select('*')
        ->from('users')
        ->where('UserId=:id', [':id' => Yii::$app->user->id])
        ->limit(1)
        ->one();
        return $this->render('index', ['rows' => $rows]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
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

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
