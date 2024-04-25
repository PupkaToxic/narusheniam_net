
from selenium import webdriver
from selenium.webdriver.common.by import By

# Инициализация экземпляра браузера
driver = webdriver.Chrome()

# Открытие веб-страницы
driver.get("http://localhost/demo/statement.php")

# Пример: поиск элемента h1 элемента и проверка его содержимого
element = driver.find_element(By.TAG_NAME, "h1")
heading1 = element.text
assert heading1 == "Заявления"

# Пример: поиск ссылки и клик

# Находим элемент на странице, который содержит текст "Добавить новое заявление"
add_statement_link = driver.find_element(By.XPATH, "//*[contains(text(), 'Добавить новое заявление')]")


add_statement_link.click()

# Проверка перехода на другую страницу или выполнения ожидаемого действия

# Завершение работы

driver.quit()