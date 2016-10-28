<html>
	<body>
		<?php
			$flats = [
				'Однокомнатные' => [
					[
						'address' => 'Вилюйская, 5',
						'cost' => 2190000,
						'areaTotal' => 47,
						'areaLive' => 15,
						'areaKitchen' => 11,
						'photos' => [
							'http://cdn.n1.ru/cache/realty/photo/52dc0385b421b5f67cb8f7a970bd0d7a_1200_800.jpg',
							'http://cdn.n1.ru/cache/realty/photo/8b54efe6c16e78d8aca5b21bc4250e6f_1200_800.jpg'
							]
					],
					[
						'address' => 'Дуси Ковальчук, 238',
						'cost' => 2750000,
						'areaTotal' => 40,
						'areaLive' => 15,
						'areaKitchen' => 12,
						'photos' => [
							'http://cdn.n1.ru/cache/realty/photo/48efa8f6e915699aa161fc02742b9f1f_1200_800.jpg',
							'http://cdn.n1.ru/cache/realty/photo/7c50133db0add15b8d7ff50aa8138b42_1200_800.jpg'
						]
					],
					[
						'address' => 'Зорге, 229\3',
						'cost' => 960000,
						'areaTotal' => 31,
						'areaLive' => 18,
						'areaKitchen' => 0,
						'photos' => [
						]
					]
				],
				'Двухкомнатные' => [
					[
						'address' => 'Забалуева, 84',
						'cost' => 1385000,
						'areaTotal' => 41,
						'areaLive' => 23,
						'areaKitchen' => 4,
						'photos' => [
						]
					],
					[
						'address' => 'Петухова, 156',
						'cost' => 2670000,
						'areaTotal' => 56,
						'areaLive' => 25,
						'areaKitchen' => 10,
						'photos' => [
							'http://cdn.n1.ru/cache/realty/photo/a6b5fa7dc66fe26ba7fc34bb5a409ba5_1200_800.jpg'
						]
					]
				]
			];
		?>
		<div class="list">
		<?php
			foreach($flats as $flat=>$items){	
				echo '<div class="flat">'.htmlspecialchars($flat)."</div>";
				echo '<hr>';
				foreach($items as $item){
					?><div class="row"><?php
					if(isset($item['photos'])){
						foreach($item['photos'] as $picture){
							?><div class = 'flat-photo'><?php
							echo ("<img src='".htmlspecialchars($picture)."'width=200px, height=150px>");
							?></div><?php
						}
					}?>
					<div class="information" ><?php
					if (isset($item['address'])){
						?> <div class="street"><?php
							echo "Адрес: ".htmlspecialchars($item['address']);						
						?></div> <?php
					}
					if (isset($item['cost'])){
						?> <div class="flat-cost"><?php
							echo "Стоимость: ".number_format($item['cost'], 0, ',', ' ')." руб.";
						?></div><?php
					}
					if (isset($item['areaTotal'])){
						?><div class="area"><?php
							echo "Общая площадь: ".$item['areaTotal']." м".'<sup><small>'."2".'</small></sup>';
						?></div><?php
					}
					if (isset($item['areaLive'])){
						?><div class="area"><?php
							echo "Жилая площадь: ".$item['areaLive']." м".'<sup><small>'."2".'</small></sup>';
						?></div><?php
					}
					if (isset($item['areaKitchen'])){
						?><div class="area"><?php
							echo "Площадь кухни: ".$item['areaKitchen']." м".'<sup><small>'."2".'</small></sup>';
						?></div><?php
					}
					?></div></div><?php				
				}		
			}	?>
		</div>
		
	<style type="text/css">
		.flat{
			margin-left:10px;
			color:midnightblue;
			font-family: ARIAL BLACK;
			font-weight: bold;
			font-size:30px;
			clear:left;
		}
		.flat-photo{
			float:left;
			margin-left:10px;
			margin-top:10px;
		}
		.information{
			float:left;
			margin-left:10px;
			font-size:20px;
			margin-top:20px;
		}
		.row{
			width:100%;
			clear:left;
			
		}
	</body>
</html>
	
	
	
	
	
	