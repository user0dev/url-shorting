# url-shorting service

# TODO - по Т.З.
Основной функционал:
- [x] Главная страница:
- [x] поле ввода оригинальной ссылки.
- [x] кнопка сгенерировать.

- [x] При нажатии на кнопку пользователю отдается сокращенная ссылка.
- [x] Переход по ссылке редиректит на оригинальный uri.

Дополнительный функционал:
- [ ] поле ввода конечной ссылки (если пользователь хочет сделать собственную ссылку)
- [x] Отдача ссылки без перезагрузки страницы

Требования:
- [x] PHP 5.6
- [x] Не использовать фреймворки (Laravel, Symfony, Silex и т.д.)
- [x] PSR 2 + табы вместо пробелов.
- [x] git
Пожелания:
- [x] При необходимости сторонних библиотек использовать composer.
- [x] PSR4


# TODO
- [ ] Доделать оформление страницы показа результата
- [ ] Показ ошибок при запросах через ajax
- [ ] Обработка ошибок
- [ ] Сделать страницы отображающиеся в случае ошибок
- [x] Проверить на соответствие PSR-2
- [ ] Выдача старого id если url уже есть в базе (вместо генерации новой записи)
- [ ] Возможность задавать свой сокращенный адрес

# TODO - для полноценной работы
- [ ] Оформить
- [ ] Добавить логотип
- [ ] Доменное имя.
- [ ] Front Controller
- [ ] Конфигурация с автозагрузкой
