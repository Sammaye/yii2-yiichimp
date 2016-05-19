# yii2-yiichimp
A Yii2 ext for the MailChimp 3.0 API

This is so simple anyone can use it!

## How To Install

Simply `require` it with composer like so:

    composer require sammaye/yiichimp:"^1.0"

## How To Use

Simply add it to your configuration, for example in my `main.php` I add:

	'mailchimp' => [
		'class' => 'sammaye\yiichimp\Chimp',
		'apikey' => 'chimp_chimp-us6'
	]

and you are ready to use it like so:

    var_dump(Yii::$app->mailchimp->get('/lists/9dd4930fe0/members/' . md5(strtolower('sammaye@flyingunicorns.com'))));

Please refer to MailChimp's own documentation for all other uses: [http://developer.mailchimp.com/documentation/mailchimp/reference/overview/](http://developer.mailchimp.com/documentation/mailchimp/reference/overview/)

## Error Handler

I have implemented every exception as a class name which extends the base `MailChimpException`.

This will make it easier to detect specific errors but also if you wish to catch any errors this API may bring up then you need to catch the `MailChimpException`.
