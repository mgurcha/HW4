<html>
	<head>
		<title>Rock Paper Scissors</title>
		<script language="javascript" type="text/javascript" src="js/rps.js"></script>
		<link  href="css/styles.css" rel="stylesheet" type="text/css" />
        
        <link href="https://fonts.googleapis.com/css?family=Gugi|Noto+Sans" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
	</head>
	<body onload="init()">
		<div id="gameWindow">
			<div id="introScreen">
				<div id="introScreenContent">
					<h1>Rock Paper Scissors</h1>
					<br>
					<div id="btnStart" class="button" onclick="startGame()">Start Game!</div>
				</div>
		</div>
		<div id="endScreen">
				<div id="endScreenContent">
					<h1 id="txtEndTitle"></h1>
					<h2 id="txtEndMessage"></h2>
					<br>
					<div id="btnReplay" class="button" onclick="replay()">Play Again!</div>
				</div>
			</div>
			
			<div id="btnGo" onclick="go()">GO</div>

			<div id="playerPanel">
				<h2>Player</h2>
				<img id="imgPlayer" src="images/question.png">
				<br><br>
				<div id="btnRock" class="iconButton" onclick="select('rock')">
					<img src="images/rock.png">
					<br>Rock
				</div>
				<div id="btnPaper" class="iconButton" onclick="select('paper')">
					<img src="images/paper.png">
					<br>Paper
				</div>
				<div id="btnScissors" class="iconButton" onclick="select('scissors')">
					<img src="images/scissors.png">
					<br>Scissors
				</div>
			</div>

			<div id="computerPanel">
				<h2>Computer</h2>
				<img id="imgComputer" src="images/question.png">
				<br><br>
				<div id="lblRock" class="iconLabel">
					<img src="images/rock.png">
					<br>Rock
				</div>
				<div id="lblPaper" class="iconLabel">
					<img src="images/paper.png">
					<br>Paper
				</div>
				<div id="lblScissors" class="iconLabel">
					<img src="images/scissors.png">
					<br>Scissors
				</div>
			</div>
		</div>
		
		<br><br>
		<div id="home">
			<button type="button" class="btn btn-info" id="main" onclick="mainScreen()">Go Back to Main Screen</button>
		</div>
	</body>
</html>

