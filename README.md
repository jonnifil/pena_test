Задание 3
* В данный момент компания X работает с двумя перевозчиками
* 1. Почта России
* 2. DHL
* У каждого перевозчика своя формула расчета стоимости доставки посылки
* Почта России до 10 кг берет 100 руб, все что cвыше 10 кг берет 1000 руб
* DHL за каждый 1 кг берет 100 руб
* Задача:
* Необходимо описать архитектуру на php из методов или классов для работы с
* перевозчиками на предмет получения стоимости доставки по каждому из указанных
* перевозчиков, согласно данным формулам.
* При разработке нужно учесть, что количество перевозчиков со временем может
* возрасти. И делать расчет для новых перевозчиков будут уже другие программисты.
* Поэтому необходимо построить архитектуру так, чтобы максимально минимизировать
* ошибки программиста, который будет в дальнейшем делать расчет для нового
* перевозчика, а также того, кто будет пользоваться данным архитектурным решением.
*
*/

Смысл сделать правильно в плане архитектуры, а не только выполнение задачи
Соблюдать PSR правила и принципы проектирования

Плюсом будет:
Сделать в разных файлах|классах с  использованием composer и autoloading (vendor/autoload.php из composer)
Создать публичный репозиторий
Развернуть простой проект на докере для текущей задачи

Скачать репозиторий

Перейти в корень и выполнить

docker-compose up --build -d

docker-compose exec app composer install

Проект будет доступен по адресу 127.0.0.1:8800

Запрос для DHL POST http://127.0.0.1:8800/api/delivery-tariff/calculate-dhl
В тело поле weight - вес в кг, обязательно, целое, больше 0

Вернёт джейсон типа
{
"weight": "100",
"price": 10000
}

Запрос для Почты России POST http://127.0.0.1:8800/api/delivery-tariff/calculate-russian-post
Тело и ответ аналогично первого запроса.
