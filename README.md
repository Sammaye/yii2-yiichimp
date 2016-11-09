# yii2-yiichimp
A Yii2 ext for the MailChimp 3.0 API

This is so simple anyone can use it!

## How To Install

Simply `require` it with composer like so:

    composer require "sammaye/yii2-yiichimp":"^1.0"

## How To Use

Simply add it to your configuration, for example in my `main.php` I add:

	'mailchimp' => [
		'class' => 'sammaye\yiichimp\Chimp',
		'apikey' => 'chimp_chimp-us6'
	]

and you are ready to use it like so:

    var_dump(Yii::$app->mailchimp->get('/lists/9dd4930fe0/members/' . md5(strtolower('sammaye@flyingunicorns.com'))));

Please refer to MailChimp's own documentation for all other uses: [http://developer.mailchimp.com/documentation/mailchimp/reference/overview/](http://developer.mailchimp.com/documentation/mailchimp/reference/overview/)
