<?php

require("./readfromconsole.php");

function readFromConsoleTest()
{
	$result = readFromConsole('true');
	echo 'Результат: '. $result . PHP_EOL . 'Ожидалось: true' . PHP_EOL .
		 ($result === true ? 'Test is passed' . PHP_EOL.PHP_EOL : 'Test is failed' . PHP_EOL.PHP_EOL);

	$result = readFromConsole('false');
	echo 'Результат: '. $result . PHP_EOL . 'Ожидалось: false' . PHP_EOL .
		 ($result === false ? 'Test is passed' . PHP_EOL.PHP_EOL : 'Test is failed' . PHP_EOL.PHP_EOL);

	$result = readFromConsole('!stop');
	echo 'Результат: '. $result . PHP_EOL . 'Ожидалось: null' . PHP_EOL .
		 ($result === null ? 'Test is passed' . PHP_EOL.PHP_EOL : 'Test is failed' . PHP_EOL.PHP_EOL);

	$result = readFromConsole('1.3');
	echo 'Результат: '. $result . PHP_EOL . 'Ожидалось: 1.3' . PHP_EOL .
		 ($result === 1.3 ? 'Test is passed' . PHP_EOL.PHP_EOL : 'Test is failed' . PHP_EOL.PHP_EOL);

	$result = readFromConsole('1');
	echo 'Результат: '. $result . PHP_EOL . 'Ожидалось: 1' . PHP_EOL .
		 ($result === 1 ? 'Test is passed' . PHP_EOL.PHP_EOL : 'Test is failed' . PHP_EOL.PHP_EOL);

	$result = readFromConsole('test');
	echo 'Результат: '. $result . PHP_EOL . 'Ожидалось: test' . PHP_EOL .
		 ($result === 'test' ? 'Test is passed' . PHP_EOL.PHP_EOL : 'Test is failed' . PHP_EOL.PHP_EOL);
}

echo readFromConsoleTest();

echo PHP_EOL . 'Введите данные для проверки: ' . PHP_EOL;
$result = readFromConsole();

echo 'Ожидалось: ' . PHP_EOL;
$expectResult = trim(fgets(STDIN));

echo 'Результат: ' . assertEquals($expectResult, $result) . PHP_EOL;

function assertEquals($expectResult, $result)
{
	if ($result == $expectResult)
	{
		return 'passed';
	}
	else
	{
		return 'failed';
	}
}