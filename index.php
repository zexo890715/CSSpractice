<!DOCTYPE html>
<html>
<head>
	<style>
		.question {
			cursor: pointer;
			height: 30px;
			background-color: #408080;
			color: #FFFFFF;
			font-weight: normal;
			border-radius: 5px;
			margin: 20px 10px;
			padding: 5px 15px;
		}

		.answer {
			display: none;
			height: 30px;
			background-color: #FFFFFF;
			color: #000000;
			font-weight: normal;
			border: 1px solid #408080;
			border-radius: 0 0 5px 5px;
			margin: -25px 10px 10px 10px;
			padding: 5px 15px;

		}
	</style>
</head>
<body>
	<div class="question" onclick="toggleAnswer('answer1')">1.問題A</div>
	<div class="answer" id="answer1">
		線上刷卡、ATM捐款-虛擬帳號、專案捐款、郵局轉帳等。
	</div>
	<div class="question" onclick="toggleAnswer('answer2')">2.問題B</div>
	<div class="answer" id="answer2">
		回答B
	</div>
	<div class="question" onclick="toggleAnswer('answer3')">3.問題C</div>
	<div class="answer" id="answer3">
		回答C
	</div>
	<div class="question" onclick="toggleAnswer('answer4')">4.問題D</div>
	<div class="answer" id="answer4">
		回答D
	</div>
	<script>
		function toggleAnswer(answerId) {
			var answerElement = document.getElementById(answerId);
			var answers = document.getElementsByClassName('answer');

			for (var i = 0; i < answers.length; i++) {
				if (answers[i] === answerElement) {
					if (answerElement.style.display === 'none') {
						answerElement.style.display = 'block';
					} else {
						answerElement.style.display = 'none';
					}
				} else {
					answers[i].style.display = 'none';
				}
			}
		}
	</script>
</body>
</html>
