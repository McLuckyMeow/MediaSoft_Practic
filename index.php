<?php
//<editor-fold desc="Text">
$message = "What makes every American a typical one is a desire to get a well-paid job that will cover their credit card.
A credit card is an indispensable part of life in America.
In other words, any American knows that how he or she handles their credit card or cards, either will help them or haunt them for years.
In the US getting a card isn’t as hard as it used to be.
Some companies now mail applications to high school students, rather than waiting for them to get into college.
At their best credit cards allow their owners to reserve hotel rooms, rent cars and finance larger purchases over several months.
At their worst, cards allow people with poor money management skills to get into a high-interest debt.
For those who are deep in credit card debt, there are some Credit Services agencies that offer anyone in America both online or telephone, and face-to-face counseling.
The counselors may propose a debt management plan.
The plan includes lower interest payments for clients and setting up a pay off timetable";
//</editor-fold>
echo "Text:".PHP_EOL;
echo $message.PHP_EOL.PHP_EOL.PHP_EOL;
$arrayAssoc=[];
//Clear text
$message = str_replace(",","",$message);
$message = str_replace("."," ",$message);
$message = str_replace("-"," ",$message);
$message = str_replace(PHP_EOL,"",$message);
$message = mb_strtolower($message);
$array = explode(" ",$message);
for($i=0;$i<count($array);$i++){
    if(!array_key_exists($array[$i],$arrayAssoc))
        $arrayAssoc[$array[$i]] = 1;
    else
        $arrayAssoc[$array[$i]] += 1;
}
echo "Result:".PHP_EOL;
print_r($arrayAssoc);
echo "Count words:".count($array).PHP_EOL;