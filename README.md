
---

## Документация API

### **Основные URL**  
- **Веб Основной URL:** `{{web_base_url}}`  
- **Основной URL API:** `{{base_url}}/api`  

---

### **Точки доступа**  

#### **Доходы**  
Точка "Доходы" предоставляет доступ к операциям, связанным с управлением записями доходов, такими как просмотр, добавление, извлечение и поиск конкретных записей доходов.  

1. **Список доходов**  
   **Веб URL:** `{{web_base_url}}/incomes/list`  
   **API URL:** `{{base_url}}/api/incomes/list`  
   **Метод:** `GET`  
   **Описание:** Получить список записей доходов с возможной пагинацией и фильтрацией по диапазону дат.  
   **Параметры:**  
   - `page` (опционально, по умолчанию: 1) - Текущая страница результатов.  
   - `per_page` (опционально, по умолчанию: 10) - Количество результатов на странице.  
   - `dateFrom` (опционально) - Фильтрация по начальной дате.  
   - `dateTo` (опционально) - Фильтрация по конечной дате.  

2. **Добавить доходы**  
   **Веб URL:** `{{web_base_url}}/incomes/add`  
   **API URL:** `{{base_url}}/api/incomes/add`  
   **Метод:** `POST`  
   **Описание:** Добавление новых записей доходов с использованием массива JSON объектов доходов.  

3. **Извлечь и сохранить доходы**  
   **Веб URL:** `{{web_base_url}}/incomes/fetchandstore`  
   **API URL:** `{{base_url}}/api/incomes/fetchandstore`  
   **Метод:** `GET`  
   **Описание:** Извлечение и сохранение записей доходов с возможной пагинацией и фильтрацией по диапазону дат.  
   **Параметры:**  
   - `page` (опционально, по умолчанию: 1) - Текущая страница результатов.  
   - `limit` (опционально, по умолчанию: 10) - Количество результатов на странице.  
   - `dateFrom` (опционально) - Фильтрация по начальной дате.  
   - `dateTo` (опционально) - Фильтрация по конечной дате.  

4. **Поиск доходов**  
   **Веб URL:** `{{web_base_url}}/incomes/search`  
   **API URL:** `{{base_url}}/api/incomes/search`  
   **Метод:** `GET`  
   **Описание:** Поиск конкретных записей доходов с использованием уникального идентификатора (`nm_id`).  
   **Параметры:**  
   - `nm_id` (обязательно) - Уникальный идентификатор записи дохода.  

---

#### **Продажи**  
Точка "Продажи" управляет операциями, связанными с записями продаж, включая просмотр, добавление, извлечение и поиск.  

1. **Список продаж**  
   **Веб URL:** `{{web_base_url}}/sales/list`  
   **API URL:** `{{base_url}}/api/sales/list`  
   **Метод:** `GET`  
   **Описание:** Получить список записей продаж с возможной пагинацией и фильтрацией по диапазону дат.  
   **Параметры:** Такие же, как для доходов.  

2. **Добавить продажи**  
   **Веб URL:** `{{web_base_url}}/sales/add`  
   **API URL:** `{{base_url}}/api/sales/add`  
   **Метод:** `POST`  
   **Описание:** Добавление новых записей продаж с использованием массива JSON объектов продаж.  

3. **Извлечь и сохранить продажи**  
   **Веб URL:** `{{web_base_url}}/sales/fetchandstore`  
   **API URL:** `{{base_url}}/api/sales/fetchandstore`  
   **Метод:** `GET`  
   **Описание:** Извлечение и сохранение записей продаж с возможной пагинацией и фильтрацией по диапазону дат.  
   **Параметры:** Такие же, как для доходов.  

4. **Поиск продаж**  
   **Веб URL:** `{{web_base_url}}/sales/search`  
   **API URL:** `{{base_url}}/api/sales/search`  
   **Метод:** `GET`  
   **Описание:** Поиск конкретных записей продаж с использованием уникального идентификатора (`nm_id`).  
   **Параметры:** Такие же, как для доходов.  

---

#### **Запасы**  
Точка "Запасы" управляет операциями, связанными с записями запасов, включая просмотр, добавление, извлечение и поиск.  

1. **Список запасов**  
   **Веб URL:** `{{web_base_url}}/stocks/list`  
   **API URL:** `{{base_url}}/api/stocks/list`  
   **Метод:** `GET`  
   **Описание:** Получить список записей запасов с возможной пагинацией и фильтрацией по диапазону дат.  
   **Параметры:** Такие же, как для доходов.  

2. **Добавить запасы**  
   **Веб URL:** `{{web_base_url}}/stocks/add`  
   **API URL:** `{{base_url}}/api/stocks/add`  
   **Метод:** `POST`  
   **Описание:** Добавление новых записей запасов с использованием массива JSON объектов запасов.  

3. **Извлечь и сохранить запасы**  
   **Веб URL:** `{{web_base_url}}/stocks/fetchandstore`  
   **API URL:** `{{base_url}}/api/stocks/fetchandstore`  
   **Метод:** `GET`  
   **Описание:** Извлечение и сохранение записей запасов с возможной пагинацией и фильтрацией по диапазону дат.  
   **Параметры:** Такие же, как для доходов.  

4. **Поиск запасов**  
   **Веб URL:** `{{web_base_url}}/stocks/search`  
   **API URL:** `{{base_url}}/api/stocks/search`  
   **Метод:** `GET`  
   **Описание:** Поиск конкретных записей запасов с использованием уникального идентификатора (`nm_id`).  
   **Параметры:** Такие же, как для доходов.  

---

#### **Заказы**  
Точка "Заказы" управляет операциями, связанными с записями заказов, включая просмотр, добавление, извлечение и поиск.  

1. **Список заказов**  
   **Веб URL:** `{{web_base_url}}/orders/list`  
   **API URL:** `{{base_url}}/api/orders/list`  
   **Метод:** `GET`  
   **Описание:** Получить список записей заказов с возможной пагинацией и фильтрацией по диапазону дат.  
   **Параметры:** Такие же, как для доходов.  

2. **Добавить заказы**  
   **Веб URL:** `{{web_base_url}}/orders/add`  
   **API URL:** `{{base_url}}/api/orders/add`  
   **Метод:** `POST`  
   **Описание:** Добавление новых записей заказов с использованием массива JSON объектов заказов.  

3. **Извлечь и сохранить заказы**  
   **Веб URL:** `{{web_base_url}}/orders/fetchandstore`  
   **API URL:** `{{base_url}}/api/orders/fetchandstore`  
   **Метод:** `GET`  
   **Описание:** Извлечение и сохранение записей заказов с возможной пагинацией и фильтрацией по диапазону дат.  
   **Параметры:** Такие же, как для доходов.  

4. **Поиск заказов**  
   **Веб URL:** `{{web_base_url}}/orders/search`  
   **API URL:** `{{base_url}}/api/orders/search`  
   **Метод:** `GET`  
   **Описание:** Поиск конкретных записей заказов с использованием уникального идентификатора (`nm_id`).  
   **Параметры:** Такие же, как для доходов.  

---

---

## API Documentation

### **Overview**  
This documentation provides information on how to interact with the application via both web and API endpoints. The API allows you to access and manage various data resources like incomes, sales, stocks, and orders programmatically. The web endpoints provide the same functionality, offering a user-friendly interface for accessing and managing data.

### **Base URLs**  
- **Web Base URL:** `{{web_base_url}}`  
- **API Base URL:** `{{base_url}}/api`  

---

### **Endpoints**  

#### **Incomes**  
The "Incomes" endpoint provides access to operations related to managing income records, such as listing, adding, fetching, and searching for specific income records. 

1. **List Incomes**  
   **Web URL:** `{{web_base_url}}/incomes/list`  
   **API URL:** `{{base_url}}/api/incomes/list`  
   **Method:** `GET`  
   **Description:** Retrieve a list of income records with optional pagination and filtering by date range.  
   **Parameters:**  
   - `page` (optional, default: 1) - Current page of results.  
   - `per_page` (optional, default: 10) - Number of results per page.  
   - `dateFrom` (optional) - Filter by start date.  
   - `dateTo` (optional) - Filter by end date.  

2. **Add Incomes**  
   **Web URL:** `{{web_base_url}}/incomes/add`  
   **API URL:** `{{base_url}}/api/incomes/add`  
   **Method:** `POST`  
   **Description:** Add new income records using a JSON array of income objects.  

3. **Fetch and Store Incomes**  
   **Web URL:** `{{web_base_url}}/incomes/fetchandstore`  
   **API URL:** `{{base_url}}/api/incomes/fetchandstore`  
   **Method:** `GET`  
   **Description:** Fetch and store income records with optional pagination and filtering by date range.  
   **Parameters:**  
   - `page` (optional, default: 1) - Current page of results.  
   - `limit` (optional, default: 10) - Number of results per page.  
   - `dateFrom` (optional) - Filter by start date.  
   - `dateTo` (optional) - Filter by end date.  

4. **Search Incomes**  
   **Web URL:** `{{web_base_url}}/incomes/search`  
   **API URL:** `{{base_url}}/api/incomes/search`  
   **Method:** `GET`  
   **Description:** Search for specific income records using a unique identifier (`nm_id`).  
   **Parameters:**  
   - `nm_id` (required) - The unique identifier for the income record.  

---

#### **Sales**  
The "Sales" endpoint manages operations related to sales records, including listing, adding, fetching, and searching.

1. **List Sales**  
   **Web URL:** `{{web_base_url}}/sales/list`  
   **API URL:** `{{base_url}}/api/sales/list`  
   **Method:** `GET`  
   **Description:** Retrieve a list of sales records with optional pagination and filtering by date range.  
   **Parameters:** Same as incomes.  

2. **Add Sales**  
   **Web URL:** `{{web_base_url}}/sales/add`  
   **API URL:** `{{base_url}}/api/sales/add`  
   **Method:** `POST`  
   **Description:** Add new sales records using a JSON array of sale objects.  

3. **Fetch and Store Sales**  
   **Web URL:** `{{web_base_url}}/sales/fetchandstore`  
   **API URL:** `{{base_url}}/api/sales/fetchandstore`  
   **Method:** `GET`  
   **Description:** Fetch and store sales records with optional pagination and filtering by date range.  
   **Parameters:** Same as incomes.  

4. **Search Sales**  
   **Web URL:** `{{web_base_url}}/sales/search`  
   **API URL:** `{{base_url}}/api/sales/search`  
   **Method:** `GET`  
   **Description:** Search for specific sales records using a unique identifier (`nm_id`).  
   **Parameters:** Same as incomes.  

---

#### **Stocks**  
The "Stocks" endpoint manages operations related to stock records, including listing, adding, fetching, and searching.

1. **List Stocks**  
   **Web URL:** `{{web_base_url}}/stocks/list`  
   **API URL:** `{{base_url}}/api/stocks/list`  
   **Method:** `GET`  
   **Description:** Retrieve a list of stock records with optional pagination and filtering by date range.  
   **Parameters:** Same as incomes.  

2. **Add Stocks**  
   **Web URL:** `{{web_base_url}}/stocks/add`  
   **API URL:** `{{base_url}}/api/stocks/add`  
   **Method:** `POST`  
   **Description:** Add new stock records using a JSON array of stock objects.  

3. **Fetch and Store Stocks**  
   **Web URL:** `{{web_base_url}}/stocks/fetchandstore`  
   **API URL:** `{{base_url}}/api/stocks/fetchandstore`  
   **Method:** `GET`  
   **Description:** Fetch and store stock records with optional pagination and filtering by date range.  
   **Parameters:** Same as incomes.  

4. **Search Stocks**  
   **Web URL:** `{{web_base_url}}/stocks/search`  
   **API URL:** `{{base_url}}/api/stocks/search`  
   **Method:** `GET`  
   **Description:** Search for specific stock records using a unique identifier (`nm_id`).  
   **Parameters:** Same as incomes.  

---

#### **Orders**  
The "Orders" endpoint manages operations related to order records, including listing, adding, fetching, and searching.

1. **List Orders**  
   **Web URL:** `{{web_base_url}}/orders/list`  
   **API URL:** `{{base_url}}/api/orders/list`  
   **Method:** `GET`  
   **Description:** Retrieve a list of order records with optional pagination and filtering by date range.  
   **Parameters:** Same as incomes.  

2. **Add Orders**  
   **Web URL:** `{{web_base_url}}/orders/add`  
   **API URL:** `{{base_url}}/api/orders/add`  
   **Method:** `POST`  
   **Description:** Add new order records using a JSON array of order objects.  

3. **Fetch and Store Orders**  
   **Web URL:** `{{web_base_url}}/orders/fetchandstore`  
   **API URL:** `{{base_url}}/api/orders/fetchandstore`  
   **Method:** `GET`  
   **Description:** Fetch and store order records with optional pagination and filtering by date range.  
   **Parameters:** Same as incomes.  

4. **Search Orders**  
   **Web URL:** `{{web_base_url}}/orders/search`  
   **API URL:** `{{base_url}}/api/orders/search`  
   **Method:** `GET`  
   **Description:** Search for specific order records using a unique identifier (`nm_id`).  
   **Parameters:** Same as incomes.  

---
