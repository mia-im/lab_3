Створюємо базу даних і в ній таблицю користувачів (users) з полями:
айдішнік, логін, пароль, ім'я, прізвище, мова за замовчуванням (поле може бути null), роль (поле числове, де клієнт - 1, менеджер - 2, адмін -3). Перепилювати авторизацію (вхід на сайт) з попередньої Лаби, щоб працювало не з масиву, а виходячи з того чи користувач в БД.

Робимо сторінки для базових CRUD операцій (створення, пошук, редагування, видалення користувачів).

Сторінка список користувачів
Сторінка де виводитися список користувачів (html таблицею). З висновком всіх полів на екран крім пароля. У кожному рядку таблиці є кнопки які дають можливість видалити або відредагувати конкретного пользователя.Прі натсканні на кнопку видалити, видаляємо користувача і редирект його назад на цю ж сторінку, виводячи повідомлення про те то "користувач такий-то успішно видалений".

Сторінка створення користувача
Сторінка з полями введення для всіх колонок таблиці крім айдішніка. При натисканні на кнопку "створити" формуєте insert запит до бази даних який додає користувача в таблицю users. Після додавання в таблицю під користувачем можна авторизуватися на сайті.

Сторінка редагування користувача
Аналогічно створенню, за винятком того що ми редагуємо користувача який вже є, і при натисканні на кнопку "зберегти" ми змінює в таблиці вже існуючого користувача.

При бажанні сторінки створення і редагування можете робити в одному файлі.

Сторінки з редагування і створення доступні тільки адміну. Сторінка зі списком користувачів доступна тільки адміну і менеджеру, але менеджер не може видалити, і не може перейти на сторінку редагування.
