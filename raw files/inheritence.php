<?php
class papa{
	public $car='BMW';
	public $bike='splendor';
	public $home='suman house';

}
class danny extends papa{
	public $cycle='gang';

}
$data = new danny();
echo $data->car;
echo $data->bike;
echo $data->home;
?>