<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles/index-page.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">	 
    <title>Phone book</title> 
	<script
		src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous"></script>
    <script type="text/javascript" src="script/scripts.js"></script> 
</head>
<body>
	<div class="content-container">	
		<div class="wrapper">
			<div class="info-container">
				<div class="info-container__title">
					Добавить контакт
				</div>
				<form class="form" method="POST" action="./php/addContact.php">
					<input class="form__input" type="text" name="name" placeholder="Имя"/>
					<input class="form__input" type="tel" name="phoneNumber" pattern="^\+?\d\s?\(?\d{3}\)?\s?\d{3}-?\d{2}-?\d{2}$" placeholder="Телефон"/>
					<input class="form__submit-btn" type="submit" name="addContact" value="Добавить"/>
				</form>
			</div>
			<div class="info-container">
				<div class="info-container__title">
					Список контактов
				</div>
				<div class="contacts-list">
				<!-- dynamic content -->
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>