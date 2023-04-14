<?php declare(strict_types=1);

echo "-----Weather report-----" . PHP_EOL;

while (true) {
    $apiKey = "e37795f78c2b5d724a17dfe75c7ee4b9";
    $city = readline("Enter city: ");
    $country = readline("Enter country code: ");

    $url = "https://api.openweathermap.org/data/2.5/weather?q=$city,$country&appid=$apiKey&units=metric";
    $response = file_get_contents($url);
    $weatherData = json_decode($response);

    $temperature = $weatherData->main->temp;
    $windSpeed = $weatherData->wind->speed;
    $weatherDescription = $weatherData->weather[0]->main;

    echo PHP_EOL;
    echo "Air temperature: $temperature (celsius)" . PHP_EOL;
    echo "Wind speed: $windSpeed m/s" . PHP_EOL;
    echo "Weather outside: $weatherDescription" . PHP_EOL;

    echo PHP_EOL;
    $userInput = readline("Continue/Quit (c/q): ");

    if ($userInput == "q")
        return false;
}