<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<?
$connection=Yii::app()->db; // так можно делать, если в конфигурации настроен компонент соединения "db"
// В противном случае можно создать соединение явно:
// $connection=new CDbConnection($dsn,$username,$password);
$command=$connection->createCommand($sql);
// при необходимости SQL-выражение можно изменить:
// $command->text=$newSQL;
$sql="SELECT username, email FROM tbl_user";
$dataReader=$connection->createCommand($sql)->query();
// привязываем первое поле (username) к переменной $username
$dataReader->bindColumn(1,$username);
// привязываем второе поле (email) к переменной $email
$dataReader->bindColumn(2,$email);
while($dataReader->read()!==false)
{
    print_r($dataReader->read());
}

?>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
