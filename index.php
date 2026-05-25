<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Salon</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
</head>

<body>

<header class="header">

    <div class="container nav-container">

        <div class="logo">
            Beauty Salon
        </div>

        <nav class="nav">
            <a href="#">Головна</a>
            <a href="#services">Послуги</a>
            <a href="#masters">Майстри</a>
            <a href="#about">Про нас</a>
            <a href="#gallery">Галерея</a>
            <a href="#booking">Запис</a>
            <a href="#contacts">Контакти</a>
            <a href="#reviews">Відгуки</a>
        </nav>

        <a href="#booking" class="nav-btn">
            Записатися
        </a>

        <a href="my-bookings.php" class="booking-cabinet-btn">
    Мій Кабінет
</a>

    </div>

</header>

<!-- HERO -->

<section class="hero">

    <div class="container hero-content">

        <div class="hero-box">

            <p class="hero-small">
                КРАСА І ДОГЛЯД
            </p>

            <h1>
                Де Краса <br>
                Зустрічає Гармонію
            </h1>

            <p class="hero-text">
                Відчуйте атмосферу розкоші, турботи та краси у нашому салоні.
                Ми створюємо процедури, які підкреслюють вашу природну красу
                та дарують відчуття комфорту.
            </p>

            <div class="hero-buttons">

                <a href="#booking" class="btn primary-btn">
                    Записатися
                </a>

                <a href="#services" class="btn secondary-btn">
                    Наші Послуги
                </a>

            </div>

        </div>

    </div>

</section>

<!-- SERVICES -->

<section class="services" id="services">

    <div class="container">

        <p class="section-small">
            НАШІ ПОСЛУГИ
        </p>

        <h2 class="section-title">
            Професійний Догляд
        </h2>

        <p class="section-text">
            Індивідуальний підхід та якісні процедури для вашої краси
        </p>

        <div class="services-grid">

            <div class="service-card">

                <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?q=80&w=1200&auto=format&fit=crop">

                <div class="service-content">

                    <div class="service-icon">
                        <img src="https://cdn-icons-png.flaticon.com/128/3163/3163203.png">
                    </div>

                    <h3>Догляд за обличчям</h3>

                    <p>
                        Професійні процедури для сяючої та доглянутої шкіри.
                    </p>

                    <div class="service-bottom">

                        <span>Від 2500 грн</span>

                        <a href="#contacts">Дізнатись більше →</a>

                    </div>

                </div>

            </div>

            <div class="service-card">

                <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=1200&auto=format&fit=crop">

                <div class="service-content">

                    <div class="service-icon">
                        <img src="https://cdn-icons-png.flaticon.com/128/2920/2920277.png">
                    </div>

                    <h3>Масаж</h3>

                    <p>
                        Розслабляючі та терапевтичні масажі для вашого комфорту.
                    </p>

                    <div class="service-bottom">

                        <span>Від 2800 грн</span>

                        <a href="#contacts">Дізнатись більше →</a>

                    </div>

                </div>

            </div>

            <div class="service-card">

                <img src="https://images.unsplash.com/photo-1604654894610-df63bc536371?q=80&w=1200&auto=format&fit=crop">

                <div class="service-content">

                    <div class="service-icon">
                        <img src="https://cdn-icons-png.flaticon.com/128/3050/3050525.png">
                    </div>

                    <h3>Манікюр та педикюр</h3>

                    <p>
                        Бездоганний манікюр та педикюр у затишній атмосфері.
                    </p>

                    <div class="service-bottom">

                        <span>Від 1600 грн</span>

                        <a href="#contacts">Дізнатись більше →</a>

                    </div>

                </div>

            </div>

            <div class="service-card">

                <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?q=80&w=1200&auto=format&fit=crop">

                <div class="service-content">

                    <div class="service-icon">
                        <img src="https://cdn-icons-png.flaticon.com/128/1685/1685898.png">
                    </div>

                    <h3>Догляд за тілом</h3>

                    <p>
                        Комплексні spa-процедури для краси та здоров'я шкіри.
                    </p>

                    <div class="service-bottom">

                        <span>Від 3500 грн</span>

                        <a href="#contacts">Дізнатись більше →</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section id="masters">

    <div class="container">

        <h2 class="section-title">
            Наші Майстри
        </h2>

        <div class="masters-grid">

            <!-- Косметолог -->

            <div class="master-card">

                <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=800&auto=format&fit=crop" alt="Косметолог">

                <h3>Марія</h3>

                <p>Косметолог</p>

                <span>5 років досвіду</span>

            </div>

            <!-- Масажист -->

            <div class="master-card">

                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=800&auto=format&fit=crop" alt="Масажист">

                <h3>Ольга</h3>

                <p>Масажист</p>

                <span>4 роки досвіду</span>

            </div>

            <!-- Манікюр та педикюр -->

            <div class="master-card">

                <img src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?q=80&w=800&auto=format&fit=crop" alt="Манікюр">

                <h3>Ірина</h3>

                <p>Майстер манікюру та педикюру</p>

                <span>6 років досвіду</span>

            </div>

            <!-- Догляд за тілом -->

            <div class="master-card">

                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=800&auto=format&fit=crop" alt="Догляд за тілом">

                <h3>Софія</h3>

                <p>Спеціаліст з догляду за тілом</p>

                <span>7 років досвіду</span>

            </div>

        </div>

    </div>

</section>

<!-- ABOUT -->

<section class="about" id="about">

    <div class="container about-wrapper">

        <div class="about-image">

            <img src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?q=80&w=1200&auto=format&fit=crop">

        </div>

        <div class="about-content">

            <p class="section-small left">
                ПРО НАС
            </p>

            <h2>
                Простір Краси <br>
                та Гармонії
            </h2>

            <p>
                Beauty Salon — це місце, де поєднуються елегантність,
                професіоналізм та індивідуальний підхід.
            </p>

            <div class="stats">

                <div class="stat">

                    <div class="stat-icon">
                        <img src="https://cdn-icons-png.flaticon.com/128/1828/1828884.png">
                    </div>

                    <h3>15+</h3>

                    <span>Років Досвіду</span>

                </div>

                <div class="stat">

                    <div class="stat-icon">
                        <img src="https://cdn-icons-png.flaticon.com/128/1077/1077114.png">
                    </div>

                    <h3>10K+</h3>

                    <span>Щасливих Клієнтів</span>

                </div>

                <div class="stat">

                    <div class="stat-icon">
                        <img src="https://cdn-icons-png.flaticon.com/128/833/833472.png">
                    </div>

                    <h3>98%</h3>

                    <span>Задоволених</span>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- GALLERY -->

<section class="gallery" id="gallery">

    <div class="container">

        <p class="section-small">
            ГАЛЕРЕЯ
        </p>

        <h2 class="section-title">
            Атмосфера Салону
        </h2>

        <div class="gallery-grid">

            <div class="gallery-big">
                <img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=1200&auto=format&fit=crop">
            </div>

            <div class="gallery-small">
                <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=1200&auto=format&fit=crop">
            </div>

            <div class="gallery-small">
                <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?q=80&w=1200&auto=format&fit=crop">
            </div>

            <div class="gallery-small">
                <img src="https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?q=80&w=1200&auto=format&fit=crop">
            </div>

            <div class="gallery-small">
                <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?q=80&w=1200&auto=format&fit=crop">
            </div>

        </div>

    </div>

</section>

<!-- BOOKING -->

<div id="success-message">

    <div class="success-popup">

        <div class="success-icon">
            ✓
        </div>

        <h3>
            Запис Успішно Створено!
        </h3>

        <p>
            Ми зв'яжемося з вами найближчим часом ✨
        </p>

    </div>

</div>

<section class="booking" id="booking">

    <div class="container booking-wrapper">

        <div class="booking-left">

            <p class="section-small left">
                ЗАПИС НА ПРИЙОМ
            </p>

            <h2>
                Запишіться <br>
                на Процедуру
            </h2>

            <div class="booking-info">

                <div class="booking-item">

                    <div class="booking-icon">
                        <img src="https://cdn-icons-png.flaticon.com/128/747/747310.png">
                    </div>

                    <div>
                        <h4>Гнучкий Графік</h4>
                        <span>Понеділок - Субота: 9:00 - 19:00</span>
                    </div>

                </div>

                <div class="booking-item">

                    <div class="booking-icon">
                        <img src="https://cdn-icons-png.flaticon.com/128/2088/2088617.png">
                    </div>

                    <div>
                        <h4>Легке Скасування</h4>
                        <span>Безкоштовне скасування до 24 годин</span>
                    </div>

                </div>

                <div class="booking-item">

                    <div class="booking-icon">
                        <img src="https://cdn-icons-png.flaticon.com/128/1946/1946429.png">
                    </div>

                    <div>
                        <h4>Команда Експертів</h4>
                        <span>Сертифіковані професіонали</span>
                    </div>

                </div>

            </div>

        </div>

        <div class="booking-form">

            <form action="booking.php" method="POST">

    <label>Ім'я</label>
    <input type="text" 
           name="first_name" 
           placeholder="Введіть ваше ім'я" 
           required>

    <label>Прізвище</label>
    <input type="text" 
           name="last_name" 
           placeholder="Введіть ваше прізвище" 
           required>

    <label>Електронна Пошта</label>
    <input type="email" 
           name="email" 
           placeholder="your@email.com" 
           required>

    <label>Номер Телефону</label>
    <input type="tel" 
           name="phone_number" 
           placeholder="+380 (XX) XXX-XX-XX" 
           required>

    <div class="form-row">

        <div>
            <label>Бажана Дата</label>
            <input type="date" 
                   name="appointment_date" 
                   required>
        </div>

        <div>
            <label>Бажаний Час</label>
            <input 
type="text"
name="appointment_time"
placeholder="--:--"
maxlength="5"
required
oninput="formatTime(this)">
        </div>

    </div>

    <label>Послуга</label>

    <select name="service_id" required>

<option value="">Оберіть послугу</option>

<option value="1">Догляд за Обличчям - 1200 грн</option>

<option value="2">Масаж - 1500 грн</option>

<option value="3">Манікюр - 700 грн</option>

<option value="4">Педикюр - 900 грн</option>

<option value="5">Манікюр та Педикюр - 1400 грн</option>

<option value="6">Догляд за Тілом - 2000 грн</option>

</select>

<label>Майстер</label>

<select name="master_id" required>
    <option value="10">Оберіть майстра</option>

    <option value="11">Марія — Косметолог</option>

    <option value="12">Ольга — Масажист</option>

    <option value="13">Ірина — Майстер манікюру та педикюру</option>

    <option value="14">Софія — Спеціаліст з догляду за тілом</option>
</select>

    <button type="submit">
        Забронювати Візит
    </button>

</form>

        </div>

    </div>

</section>

<!-- CONTACTS -->

<section class="contacts" id="contacts">

    <div class="container">

        <p class="section-small">КОНТАКТИ</p>

        <h2 class="section-title">Наші Контакти</h2>

        <p class="section-text">
            Зв'яжіться з нами або завітайте до нашого салону
        </p>

        <div class="contacts-grid">

            <div class="contact-card">

                <div class="contact-icon">
                    <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png">
                </div>

                <h3>Адреса</h3>

                <p>
                    вул. Під Дубом, 12<br>
                    м. Львів
                </p>

            </div>

            <div class="contact-card">

                <div class="contact-icon">
                    <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png">
                </div>

                <h3>Телефон</h3>

                <p>
                    +380 (67) 123-45-67<br>
                    Пн - Сб: 9:00 - 19:00
                </p>

            </div>

            <div class="contact-card">

                <div class="contact-icon">
                    <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png">
                </div>

                <h3>Електронна Пошта</h3>

                <p>
                    info@beautysalon.ua<br>
                    hello@beautysalon.ua
                </p>

            </div>

            <div class="contact-card">

                <div class="contact-icon">
                    <img src="https://cdn-icons-png.flaticon.com/512/2972/2972531.png">
                </div>

                <h3>Графік Роботи</h3>

                <p>
                    Пн - Пт: 9:00 - 19:00<br>
                    Сб: 10:00 - 18:00
                </p>

            </div>

        </div>

    </div>

</section>

<section class="reviews-preview" id="reviews">

    <div class="container">

        <h2 class="section-title">Відгуки Клієнтів</h2>

        <?php

include 'connect.php';

$result = $conn->query("SELECT * FROM Review ORDER BY review_id DESC LIMIT 3");

while($row = $result->fetch_assoc()) {

echo "

<div class='review-card'>

<h3>" . str_repeat('⭐', $row['rating']) . "</h3>

<p>" . $row['comment'] . "</p>

<b>— " . $row['name'] . "</b>

</div>

";

}

?>

<a href="reviews.php" class="review-btn">
Створити Відгук
</a>

    </div>

</section>

<!-- FOOTER -->

<footer class="footer">

    <div class="container footer-wrapper">

        <div class="footer-column">

            <h3>Beauty Salon</h3>

            <p>
                Beauty Salon — простір краси, стилю та професійного догляду.
            </p>

        </div>

        <div class="footer-column">

            <h4>Швидкі Посилання</h4>

            <a href="#services">Послуги</a>
            <a href="#about">Про Нас</a>
            <a href="#gallery">Галерея</a>
            <a href="#contacts">Контакти</a>

        </div>

        <div class="footer-column">

            <h4>Розсилка</h4>

            <p>
                Підпишіться, щоб отримувати ексклюзивні пропозиції та поради з краси
            </p>

            <form action="newsletter.php" method="POST" class="subscribe">

    <input type="email"
           name="email"
           placeholder="Ваша пошта"
           required>

    <button type="submit">
        Підписатися
    </button>

</form>

        </div>

    </div>

<div class="footer-bottom">
    <p>© 2026 Beauty Salon. Всі права захищені.</p>
</div>

</footer>

<script>
function formatTime(input) {

    let value = input.value.replace(/\D/g, '');

    if (value.length >= 3) {
        value = value.substring(0,2) + ':' + value.substring(2,4);
    }

    input.value = value;
}
</script>

</body>

<script src="script.js"></script>

</html>