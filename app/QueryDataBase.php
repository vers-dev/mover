<?php

class QueryDataBase
{

    protected $link; // Здесь храниться результат подлючения PDO

    // Вызываем функцию connect()
    public function __construct()
    {
        $this->connect();
    }

    // Подключаемся к Базе Данных

    /**
     * @return void
     */
    private function connect(): void
    {
        // Пытаемся
        try {
            // Переменные для формирования PDO запроса
            $host = "localhost";
            $dbname = "mover_db";
            $username = "root";
            $password = "";

            // Готовый DSN запрос
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8;";

            $this->setLink(new PDO($dsn, $username, $password));
            $this->getLink()->exec("SET NAMES utf8");

        } catch (PDOException $err) { // Отлавливаем ошибку
            die("Ошибка выполнения скрипта: " . $err->getMessage());
        }
    }

    /**
     *
     * ДЛЯ ЧЕЛОВ, КОТОРЫЕ БУДУТ ЭТО ЮЗАТЬ
     *
     * КРЧ, ЭТА ФУНКЦИЯ НУЖНА ДЛЯ ТОГО, ЧТОБЫ БОЛЕЕ ГИБКО УПРАВЛЯТЬ ЧЕМ ЛИБО
     * ЕСЛИ ТЫ ПОНИМАЕШЬ НАФИГА ТЕБЕ ЭТО, ТО MUST HAVE ФУНКЦИЯ, БЕЗ ПРИКОЛА...
     *
     * ЕСЛИ ТЫ НЕ МОЖЕШЬ КАКИЕ-ТО ДАННЫЕ ЗАПИСАТЬ, Я ТЕБЕ ФУНКЦИЮ ДРУГУЮ СОЗДАЛ, ВОТ ЕЁ И ЮЗАЙ
     *
     */

    /**
     * @param string $sql
     * @return mixed
     */
    public function query(string $sql)
    {
        $statement = $this->getLink()->prepare($sql);
        $statement->execute();

        return $statement;
    }

    /**
     *
     * ДЛЯ ЧЕЛОВ, КОТОРЫЕ БУДУТ ЭТО ЮЗАТЬ
     *
     * КАК ЭТО ИСПОЛЬЗОВАТЬ И ЗАЧЕМ?
     *
     * Функция ниже нужна для получения данных с базы данных, она вернёт удобный формат для вывода в цикле.
     * MUST HAVE функция
     *
     * ПРИМЕР
     *
     * $database = new QueryDataBase(); // Создаём БД, подключение и прочую ерунду
     * $database->getAllData("users"); // Пишем название таблицы, откуда хотим данные получить и получаем
     *
     */

    /**
     * Получение всех данных и преобразование в объект
     */
    public function getAllData(string $table): array
    {
        return $this->query("SELECT * FROM `{$table}`")->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     *
     * НУ ДАВАЙ ТЕПЕРЬ РАЗБЕРЕМСЯ КАК ЭТО БЛИН ЮЗАТЬ
     *
     * ЭТО ФУНКЦИЯ СОХРАНЕНИЯ ТВОИХ ДАННЫХ
     *
     * ОНА ПРИНИМАЕТ В СЕБЯ НАЗВАНИЕ ТАБЛИЦЫ И ДАННЫЕ
     * ДАННЫЕ КСТАТИ ДОЛЖНЫ БЫТЬ ТАКИЕ
     *
     * ЭТО МАССИВ С КЛЮЧАМИ (АССОЦИАТИВНЫЙ МАССИВ, ОБЪЕКТ)
     *
     * К ПРИМЕРУ, ЕСТЬ ЮЗЕРЫ, у ЮЗЕРОВ В БАЗЕ ДАННЫХ ЕСТЬ ПОЛЯ email, username, password
     * ЗНАЧИТ МЫ ДОЛЖНЫ ПЕРЕДАТЬ МАССИВ В ЭТУ ФУНКЦИЮ С ТАКИМИ ЖЕ КЛЮЧАМИ
     *
     * ['email' => $email, 'username' => $username, 'password' => $password]
     *
     * ПРИМЕР ИСПОЛЬЗОВАНИЯ ФУНКЦИИ
     *
     * $database = new QueryDataBase();
     * $database->storeData('users', array('email' => 'avavionmvm@gmail.com', 'password' => $hash_password));
     *
     */

    /**
     * @param string $table
     * @param array $data
     * @return mixed
     */
    public function storeData(string $table, array $data)
    {
        $fields = array_map(fn($value): string => "`" . $value . "`", array_keys($data));
        $values = array_map(fn($value): string => "'" . $value . "'", array_values($data));

        return $this->query("INSERT INTO `{$table}`(" . implode(", ", $fields) . ") VALUES(" . implode(', ', $values) . ")");
    }

    /**
     * ВАМ ОНО НАФИГ НЕ НАДО, ЭТО СЛУЖЕБНЫЕ ФУНКЦИИ, ДАЖЕ НЕ ЧИТАЙ ИХ...
     */

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     * @return QueryDataBase
     */
    public function setLink($link): QueryDataBase
    {
        $this->link = $link;
        return $this;
    }
}