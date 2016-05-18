	<?
	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;
	use app\models\Menu;
	?>

<aside class="col-xs-3 sidbar_gl ">
		<div class="sidbarRight">
			<?

			$footM = Menu::find()->select('label,url')->where(['type_menu'=>'right','active'=>2])->asArray()->all();


			echo Nav::widget([
					'options' => ['class' => 'footMenu', 'id'=>'footM'],
					'items' => $footM,
			]);

			?>
		</div>
		<div class="asideRightImg">
			<ul>
				<li><a href="#"><img src="img/asideRightImg.png" alt=""></a></li>
				<li><a href="#"><img src="img/asideRightImg.png" alt=""></a></li>
				<li><a href="#"><img src="img/asideRightImg.png" alt=""></a></li>
			</ul>
		</div>
	</aside> 