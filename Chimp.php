<?php

namespace sammaye\yiichimp;

use Yii;
use yii\base\Component;

use sammaye\mailchimp\Chimp as MailChimp;

class Chimp extends Component
{
    public $apikey;
    
    private $_client;
    
    public function init()
    {
        $this->_client = new MailChimp(['apikey' => $this->apikey]);
        return parent::init();
    }
    
	public function __call($name, $params)
	{
		if(method_exists($this->_client, $name)){
			return call_user_func_array([$this->_client, $name], $params);
		}
		parent::call($name, $params); // We do this so we don't have to implement the exceptions ourselves
	}
}