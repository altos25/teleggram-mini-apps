<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini App</title>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #0088cc;
        }
        button {
            background-color: #0088cc;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #0077b3;
        }
    </style>
</head>
<body>
<h1>Добро пожаловать в Mini App</h1>
<p id="user-info">Загрузка данных...</p>
<button onclick="fetchData()">Получить данные</button>
<p id="data-response"></p>

<script>
    // Получаем данные из Telegram Web App API
    let tg = window.Telegram.WebApp;
    tg.expand();

    document.getElementById("user-info").innerText = `Привет, ${tg.initDataUnsafe.user?.first_name || "Гость"}!`;

    function fetchData() {
        fetch("/api/test")
            .then(response => response.json())
            .then(data => {
                document.getElementById("data-response").innerText = "Ответ от сервера: " + data.message;
            })
            .catch(error => console.error("Ошибка запроса:", error));
    }
</script>
</body>
</html>
