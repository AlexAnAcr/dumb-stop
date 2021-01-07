<?php
declare(strict_types = 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $msql = new mysqli("localhost", "user", "pass");
    $msql->select_db("user");
    $msql->query("INSERT INTO `dumb-stop_stat` VALUES(NULL)");
    $msql->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Тест не пройден</title>
    </head>
    <body style="font-family: Cambria;">
        <h1 style="text-align: center; background-color: red; font-size: 48pt; padding: 10pt; margin: 0px;">Тест не пройден</h1>
        <h2 style="text-align: center;">Вы не выполнили ни 5 задание, ни остальные. Вам не нужен e-mail.</h2>
        <h3 style="text-align: right;">Как говорил Н.В. Гоголь, "В России только две проблемы: дураки и дороги." Чтож, вы - первая проблема России - можете гордиться этим...</h3>
    </body>
</html>
<?php   
} else {
    if (isset($_GET["req"]) && $_GET["req"] === "official") {
?>  
<!DOCTYPE html>
<html>
 <head>
  <title>Тест</title>
  <style>
	  div {
		  font-family: inherit;
		  font-size: 18pt;
		  margin: 10pt;
	  }
	  body {
		  margin: 0px;
		  width: 100%;
		  font-family: Cambria;
	  }
	  h1 {
		  text-align: center;
		  margin: inherit;
		  background-color: red;
		  font-size: 48pt;
		  padding: 10pt;
	  }
	  h2 {
		  text-align: center;
	  }
	  div.hint {
		  text-align: right;
		  font-style: normal;
		  font-size: 12pt;
		  opacity: 50%
	  }
	  td.diag {
		  background-color: lightgreen;
		  height: 48pt;
		  width: 48pt;
		  cursor: pointer; 
	  }
	  div.tabled {
		  margin-left: 48pt;
		  margin-bottom: 24pt;
	  }
	  td {
		  text-align: right;
	  }
	  table {
		  border-spacing: 3pt;
	  }
	  input {
    display: block;
    padding: 3px;
    border: 1px solid #3a3a3a;
    border-radius: 5px;
    color: #333;
    transition: all 0.3s ease-out;
	box-shadow: inset 0 0 5px 1px #dfdfdf;
    }
	  
input:hover {
    border-radius: 9px
}

input:focus {
    outline: none;
    border-radius: 9px;
    border-color: #95D3DD;
}
	  input.submit {
		  display: block;
		  padding: 5px;
		  border: 2px solid #105993;
		  background-color: #2196F3;
		  color: #fff;
		  border-radius: 5px;
		  transition: all 0.3s ease-out;
		  font-size: 24pt;
		  font-weight: bold;
		  margin-top: 24pt;
		  margin-bottom: 24pt;
		  margin-left: auto;
		  margin-right: auto;
		  cursor: pointer; 
    }
	  input.submit:hover {
		  background-color: #0093C0;
	  }
	  input.submit:focus {
		  background-color: #124E7E;
	  }
	 </style>
	 <script async src="tex-mml-chtml.js"></script>
	 <script src="jquery-3.5.1.min.js"></script>
 </head>
 <body>
	 <h1>Система Стоп-Дурак</h1>
     <div>
		 Внимание, на этом переходе установлена защита от дураков. Для получения e-mail Вам необходимо доказать наличие интеллекта благополучного жителя России. Это не займёт много времени т.к. приведённые вопросы достаточно просты при умении правильно использовать ресурсы Интернета. Если у Вас не получится пройти этот тест, то переживать не стоит т.к. в этом случае Вы просто не сможете написать достаточно логичное и содержательное письмо, следовательно, e-mail Вам просто не нужен.
	 </div>
	 <div style="display: flex; justify-content: flex-end; margin-bottom: 15pt;">
		 <div style="text-align: right; width: 50%; font-size: 15pt; opacity: 50%;">
		 P.S. Если Вы проводите в TikTok больше 30 минут в день ежедневно, то, согласно статистике деградации, шансы на прохождение нижеприведённого теста у Вас ниже 20%.
		 </div>
	 </div>
		 <form action="get_email.php" method="post">
			 <div>1) Чему равны корни уравнения четвёртой степени, приведённого ниже?</div>
			 <h2>\(5x^4-18x^3+4x^2-14=0\)</h2>
			 <div class="hint">Вы должны дать ответ в правильной форме.</div>
			 <div class="tabled">
				 <table style="font-size:12pt;">
				 <tr>
					 <td>X1 =</td>
					 <td><input type="text"></td>
				 </tr>
				 <tr>
					 <td>X2 =</td>
					 <td><input type="text"></td>
				 </tr>
				 <tr>
					 <td>X3 =</td>
					 <td><input type="text"></td>
				 </tr>
				 <tr>
					 <td>X4 =</td>
					 <td><input type="text"></td>
				 </tr>
			 </table>
			 </div>	
			 <div>2) Какой квантовый эффект привёл к появлению пятна Пуассона?</div>
			 <div class="hint">Необходимо указать термин.</div>
			 <div class="tabled">
				 <table style="font-size:12pt;">
				 <tr>
					 <td>Ответ: </td>
					 <td><input type="text"></td>
				 </tr>
				 <tr>
					 <td>Критик: </td>
					 <td><input type="text"></td>
				 </tr>
				 <tr>
					 <td>Год: </td>
					 <td><input type="date"></td>
				 </tr>
			 </table>
			 </div>
			 <div>3) Какую технологию использует компания Google для эффективной слежки за пользователями?</div>
			 <div class="hint">Имеется ввиду не только слежка через Chrome, но и через поисковую систему вцелом.</div>
			 <div class="tabled">
				 <table style="font-size:12pt;">
				 <tr>
					 <td>Название: </td>
					 <td><input type="text"></td>
				 </tr>
				 <tr>
					 <td>Патент: </td>
					 <td><input type="text"></td>
				 </tr>
			 </table>
			 </div>
			 <div>4) Что общего между понятиями "авиапромышленность" и "карбоксильная кислота"?</div>
			 <div class="hint">Это усложнённый вопрос. Правильный ответ на него имеет такую же цену, как и 2 правильно отвеченных предыдущих вопроса.</div>
			 <div class="tabled">
				 <table style="font-size:12pt;">
				 <tr>
					 <td>Коэффициент корреляции: </td>
					 <td><input type="text"></td>
				 </tr>
				 <tr>
					 <td>Черта: </td>
					 <td><input type="text"></td>
				 </tr>
			 </table>
			 </div>
			 <div>5) Обозначте вид диаграммы распределения времени при DDD-подходе.</div>
			 <div class="hint">Если Вы правильно ответите на этот вопрос, ответы на остальные вопросы не важны.</div>
			 <div style="display:flex; justify-content: center;">
				 <table style="font-size:12pt; border-spacing: 5pt;">
				 <tr>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
				 </tr>
				 <tr>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
				 </tr>
					 <tr>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
				 </tr>
					 <tr>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
				 </tr>
					 <tr>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
				 </tr>
					 <tr>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
				 </tr>
					 <tr>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
					 <td class="diag"></td>
				 </tr>
			 </table>
			 </div>
			 <input class="submit" type="submit" value="Отправить данные теста">
		 </form>
	 <script>
		var rainbow = {
			"lightcoral":"lightsalmon",
			"lightsalmon":"lightyellow",
			"lightyellow":"lightgreen",
			"lightgreen":"lightcyan",
			"lightcyan":"lightblue",
			"lightblue":"plum",
			"plum":"lightcoral"
		}
	 $(".diag").on("click", function(event){
		 //Tm93IHlvdSd2ZSBwYXNzZWQgdGhlIHRlc3QhCkRvZXMgaXQgaGFwcGVuIHRoYXQgZXZlcnl0aGluZyB2aXNpYmxlIGlzIGp1c3QgYW4gaWxsdXNpb24/KQ==
		 let style = $(this).attr("style");
		 if (typeof(style) === "undefined") {
			 $(this).attr("style", "background-color:lightcyan;")
		 } else {
			 let spl = style.split(':')[1].split(';')[0].trim();
			 $(this).attr("style", "background-color:"+rainbow[spl]+";");
		 }
		 
	 });
	 </script>
	 
 </body>
</html>
<?php
    } else {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Запрос не распознан</title>
    </head>
    <body style="font-family: Cambria;">
        <h1 style="text-align: center; background-color: red; font-size: 48pt; padding: 10pt; margin: 0px;">Запрос не распознан</h1>
        <h2 style="text-align: center;">Возможно, Вы немножко:</h2>
        <img style="display: block; margin: auto;" src="404.jpg">
    </body>
</html>
<?php
    }
}
?>