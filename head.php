<?php 
	function filePath(){
		if(!empty($_SESSION["file"])){
			return "background: url('" .$_SESSION["file"]."') no-repeat center center !important;";
		}else{
			return "background: url('uploads/photo.jpg') no-repeat center center !important;";
		}
	}
	function data(){
		if(!empty($_SESSION["data"])){
			foreach ($_SESSION["data"] as $value) {
				return <<< data
							<article class="score">
								<h4 class="pos" style="background: url('$value[3]')no-repeat center center;background-size: cover"></h4>
								<h4 class="name-high"> $value[1] 
									<span class="moves">
										$value[4]
									</span>
								</h4>
							<p>
								<span class="date-high">$value[2]</span>
								<span class="time-high">$value[0] sec</span>
							</p>
						</article>
data;
			}
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Крестики-Нолики</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<style type="text/css">
	/* style for user image (overwrite .o) */
	.o {
		<?php echo filePath(); ?>
		background-size: 60px !important; 
		border-radius: 50%; 
		border: 1px solid rgba(0, 0, 0, .2) !important;
	}
	</style>
	<!-- put any js-code into this file -->
	<script src="assets/js/jquery-2.1.1.js"></script>
	<script src="assets/js/app.js"></script>
</head>
<body>
<?php if($_SESSION["template"] == 0): ?>
	<section class="container-game">
		<article class="title-row">
			<h1>Крестики-Нолики</h1>
		</article>
		<article class="row initial-page">
			<article class="col">
				<article class="subtitle-row">
					<h2>Инструкция</h2>
				</article>
				<article class="container-row">
					Как играть?:
					<ul>
					<li>Выберите фото (необязательно)</li>
<li>Нажмите "Начать новую игру".</li>
<li>Игра в игру: попробуйте отметить три поля в вертикальном, горизонтальном или диагональном ряду за один ход до компьютера.</li>
					</ul>
				</article>
		
			<article class="col border-line col-game-spacing">
				<article class="subtitle-row">
					<h2 class="Hod2">Начать новую игру</h2>
				</article>
				<article class="container-row form">
					<form  class="form-content" action="index.php?template=1" enctype="multipart/form-data" method="POST">
						<label for="photo">Загрузить фото </label>
						<input id="photo" type="file" name="photo"><br>
						<input type="hidden" name="template" id="" class="" value="1">
						<input type="submit" name="" id="" value="НАЧАТЬ НОВУЮ ИГРУ">
					</form>
					<article class="alert-spacing-error">
						<article class="alert"><span class="underline">Ошибка загрузки:</span> Неправильный размер, или формат!</article>
					</article>
				</article>
			</article>
	</section>
<?php elseif($_SESSION["template"] == 1): ?>
	<section class="container-game">
		<article class="title-row">
			<h1>Крестики-Нолики</h1>
		</article>
		<article class="row initial-page">
			<article class="col">
				<article class="subtitle-row">
					<h2>Инструкция</h2>
				</article>
				<article class="container-row">
				Как играть?:
					<ul>
					<li>Выберите фото (необязательно)</li>
<li>Нажмите "Начать новую игру".</li>
<li>Игра в игру: попробуйте отметить три поля в вертикальном, горизонтальном или диагональном ряду за один ход до компьютера.</li>
					</ul>
				</article>
				
			<article class="col col-game-spacing">
				<article class="subtitle-row">
					<h2 class="Hod">Ход игры...</h2>
					<article class="alert-spacing">
						
					</article>
					<figure class="container-photo circle img_tic o"></figure>
					<figure class="container-photo circle img_tic x"></figure>
					<p class="dates">Время: <span class="time">12 sec</span></p>
					<h3 class="relative-pos-game">
						<span class="points"><span class="nameuser">Игрок: <span class="usermoves moves">2</span></span></span><span class="points"><span class="computer">ИИ: <span class="computermoves moves">2</span></span></span>
					</h3>
				</article>
				<article class="container-row relative-pos-game">
					<article class="game">
						<article class="field"><button id="1" class="btn img_tic"></button></article>
						<article class="field"><button id="2" class="btn img_tic"></button></article>
						<article class="field"><button id="3" class="btn img_tic"></button></article>
						<article class="field"><button id="4" class="btn img_tic"></button></article>
						<article class="field"><button id="5" disabled class="btn img_tic o"></button></article>
						<article class="field"><button id="6" class="btn img_tic "></button></article>
						<article class="field"><button id="7" disabled class="btn img_tic x"></button></article>
						<article class="field"><button id="8" disabled class="btn img_tic x"></button></article>
						<article class="field"><button id="9" disabled class="btn img_tic o"></button></article>
					</article>
				</article>
				<article class="container-row center form">
					<br>				
				</article>
				<div class="button-start">
					<a href="index.php?template=1"><button class="start">НОВАЯ ИГРА</button ></a>
				</div>
			</article>
	</section>
<?php elseif($_SESSION["template"] == 2): ?>
	<section class="container-game">
		<article class="title-row">
			<h1>Крестики-Нолики</h1>
		</article>
		<article class="row initial-page">
			<article class="col">
				<article class="subtitle-row">
					<h2>Инструкция</h2>
				</article>
				<article class="container-row">
				Как играть?:
					<ul>
					<li>Выберите фото (необязательно)</li>
<li>Нажмите "Начать новую игру".</li>
<li>Игра в игру: попробуйте отметить три поля в вертикальном, горизонтальном или диагональном ряду за один ход до компьютера.</li>
					</ul>
				</article>
				
			<article class="col col-game-spacing">
				<article class="subtitle-row">
					<h2 class="Hod2">Ход игры...</h2>
					<article class="alert-spacing">
						<article class="alert game-alert">Вы выиграли!</article>
					</article>
					<figure class="container-photo circle img_tic o"></figure>
					<figure class="container-photo circle img_tic x"></figure>
					<h3 class="relative-pos-game">
						<span class="points"><span class="nameuser">Игрок: <span class="usermoves moves">3</span></span></span><span class="points"><span class="computer">ИИ: <span class="computermoves moves">2</span></span></span>
					</h3>
				</article>
				<article class="container-row relative-pos-game">
					<article class="game">
						<article class="field"><button id="1" disabled class="btn img_tic o"></button></article>
						<article class="field"><button id="2" class="btn img_tic"></button></article>
						<article class="field"><button id="3" class="btn img_tic"></button></article>
						<article class="field"><button id="4" class="btn img_tic"></button></article>
						<article class="field"><button id="5" disabled class="btn img_tic o"></button></article>
						<article class="field"><button id="6" class="btn img_tic "></button></article>
						<article class="field"><button id="7" disabled class="btn img_tic x"></button></article>
						<article class="field"><button id="8" disabled class="btn img_tic x"></button></article>
						<article class="field"><button id="9" disabled class="btn img_tic o"></button></article>
					</article>
				</article>
				<div class="button-start">
					<a href="index.php?template=1"><button class="start">Начать новую игру</button></a>
				</div>
			</article>
	</section>
<?php endif; ?>
</body>
</html>