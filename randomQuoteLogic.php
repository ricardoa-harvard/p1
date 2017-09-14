<?php
$quotes = ['A computer would deserve to be called intelligent if it could deceive a human into believing that it was human - Alan Turing', 'Never trust a computer you can\'t throw out the window - Steve Wozniak', 'Man is the most extraordinary computer of all - John F. Kennedy', 'Only two things are infinite, the universe and human stupidity, and I\'m not sure about the former. - Albert Einstein', 'Research is what I\'m doing when I don\'t know what I\'m doing. - Wernher von Braun'];
$randomIndex = array_rand($quotes);

$selectedQuote = $quotes[$randomIndex];