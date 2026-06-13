<?php get_header(); ?>

<main>
    <!-- Баннер -->
    <section class="hero">
        <div class="container">
            <h1>Открой мир по самым выгодным ценам</h1>
            <p>Эксклюзивные горящие предложения с вылетом в ближайшие дни. Скидки до 50% на лучшие курорты мира — планируйте спонтанно, отдыхайте премиально.</p>
            <div class="hero-buttons">
                <button class="btn">Найти тур</button>
                <button class="btn-outline">Смотреть цены</button>
            </div>
        </div>
    </section>

    <!-- Красная полоса -->
    <section class="stats-red">
        <div class="container">
            <div class="stat-item">
                <h3>150,000+</h3>
                <p>довольных клиентов</p>
            </div>
            <div class="stat-item">
                <h3>500,000+</h3>
                <p>выполненных заказов</p>
            </div>
            <div class="stat-item">
                <h3>13 лет</h3>
                <p>на рынке туризма</p>
            </div>
        </div>
    </section>

    <!-- СЕКЦИЯ: Что такое горящие туры -->
    <section class="about-tours">
        <div class="container">
            <div class="about-grid">
                
                <!-- Левая колонка: картинка -->
                <div class="about-image-wrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/suitcase.jpg" alt="Горящие туры" class="about-image">
                    <div class="discount-badge">
                        <span class="badge-percent">-50%</span>
                        <span class="badge-text">Максимальная выгода</span>
                    </div>
                </div>

                <!-- Правая колонка: текст -->
                <div class="about-content">
                    <h2>Что такое горящие туры?</h2>
                    <p>Горящие туры — это уникальная возможность отправиться в путешествие бизнес-класса по цене эконома. Такие предложения появляются за 2-7 дней до вылета, когда в самолетах или отелях остаются невыкупленные места.</p>

                    <!-- Блок Тренды 2026 -->
                    <div class="trend-block">
                        <div class="trend-icon">
                            <i class="fa-solid fa-arrow-trend-up"></i>
                        </div>
                        <div class="trend-text">
                            <h4>Тренды 2026</h4>
                            <p>Гибкое бронирование и экзотические направления стали доступнее благодаря оптимизации логистики.</p>
                        </div>
                    </div>

                    <!-- Теги -->
                    <div class="tags">
                        <span class="tag">Скидки до 50%</span>
                        <span class="tag">Прямые рейсы</span>
                        <span class="tag">Эксклюзивные отели</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- СЕКЦИЯ: Наши преимущества -->
    <section class="advantages">
        <div class="container">
            <h2 class="section-title">Наши преимущества</h2>
            <p class="section-subtitle">Мы заботимся о каждой детали вашего отдыха, чтобы вы могли просто наслаждаться моментом.</p>

            <div class="advantages-grid">
                <!-- Карточка 1 -->
                <div class="advantage-card">
                    <div class="card-top-line orange"></div>
                    <div class="card-icon orange-bg">
                        <i class="fa-solid fa-percent"></i>
                    </div>
                    <h3>Экономия до 50%</h3>
                    <p>Лучшие цены на рынке за счет прямых контрактов с отелями.</p>
                </div>

                <!-- Карточка 2 -->
                <div class="advantage-card">
                    <div class="card-top-line red"></div>
                    <div class="card-icon red-bg">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    <h3>Полный пакет</h3>
                    <p>Перелет, проживание, трансфер и страховка уже включены в стоимость.</p>
                </div>

                <!-- Карточка 3 -->
                <div class="advantage-card">
                    <div class="card-top-line orange"></div>
                    <div class="card-icon orange-bg">
                        <i class="fa-solid fa-hotel"></i>
                    </div>
                    <h3>Проверенные отели</h3>
                    <p>Только те варианты, где мы отдыхали сами и уверены в качестве.</p>
                </div>

                <!-- Карточка 4 -->
                <div class="advantage-card">
                    <div class="card-top-line red"></div>
                    <div class="card-icon red-bg">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h3>Поддержка 24/7</h3>
                    <p>Мы на связи на протяжении всего вашего путешествия в любое время.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- СЕКЦИЯ: Самые горящие предложения -->
    <section class="hot-tours">
        <div class="container">
            <div class="section-header">
                <div class="section-header-left">
                    <h2 class="section-title">Самые горящие предложения</h2>
                    <p class="section-subtitle">Цены актуальны на момент просмотра. Бронируйте сейчас!</p>
                </div>
                <a href="#" class="view-all">Смотреть все туры <span class="arrow">→</span></a>
            </div>

            <div class="tours-grid">
                <!-- Карточка 1: Анталья -->
                <div class="tour-card">
                    <div class="tour-image-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/turkey.jpg" alt="Анталья, Турция" class="tour-image">
                        <span class="tour-badge badge-red">ХИТ ПРОДАЖ</span>
                        <div class="tour-price-badge">от 45 500 ₽</div>
                    </div>
                    <div class="tour-content">
                        <div class="tour-header">
                            <h3>Анталья, Турция</h3>
                            <div class="tour-rating">
                                <i class="fa-solid fa-star"> 5.0</i>
                            </div>
                        </div>
                        <div class="tour-details">
                            <span class="detail-item">
                                <i class="fa-regular fa-clock"> 7 ночей</i>
                            </span>
                            <span class="detail-item">
                                <i class="fa-solid fa-utensils"> Ultra All-In</i>
                            </span>
                        </div>
                        <div class="tour-footer">
                            <span class="old-price">80 000 ₽</span>
                            <button class="btn-buy">Купить</button>
                        </div>
                    </div>
                </div>

                <!-- Карточка 2: Шарм-эль-Шейх -->
                <div class="tour-card">
                    <div class="tour-image-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/egypt.jpg" alt="Шарм-эль-Шейх" class="tour-image">
                        <span class="tour-badge badge-red">ГОРИТ!</span>
                        <div class="tour-price-badge">от 38 200 ₽</div>
                    </div>
                    <div class="tour-content">
                        <div class="tour-header">
                            <h3>Шарм-эль-Шейх</h3>
                            <div class="tour-rating">
                                <i class="fa-solid fa-star"> 4.8 </i>
                            </div>
                        </div>
                        <div class="tour-details">
                            <span class="detail-item">
                                <i class="fa-regular fa-clock"> 10 ночей </i>
                            </span>
                            <span class="detail-item">
                                <i class="fa-solid fa-utensils"> All Inclusive </i>
                            </span>
                        </div>
                        <div class="tour-footer">
                            <span class="old-price">75 000 ₽</span>
                            <button class="btn-buy">Купить</button>
                        </div>
                    </div>
                </div>

                <!-- Карточка 3: Пхукет -->
                <div class="tour-card">
                    <div class="tour-image-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/thailand.jpg" alt="Пхукет, Таиланд" class="tour-image">
                        <span class="tour-badge badge-red">ЭКОТИКА</span>
                        <div class="tour-price-badge">от 72 900 ₽</div>
                    </div>
                    <div class="tour-content">
                        <div class="tour-header">
                            <h3>Пхукет, Таиланд</h3>
                            <div class="tour-rating">
                                <i class="fa-solid fa-star"> 4.9 </i>
                            </div>
                        </div>
                        <div class="tour-details">
                            <span class="detail-item">
                                <i class="fa-regular fa-clock"> 12 ночей </i>
                            </span>
                            <span class="detail-item">
                                <i class="fa-solid fa-utensils"> Завтраки</i>
                            </span>
                        </div>
                        <div class="tour-footer">
                            <span class="old-price">134 000 ₽</span>
                            <button class="btn-buy">Купить</button>
                        </div>
                    </div>
                </div>

                <!-- Карточка 4: Мальдивы -->
                <div class="tour-card">
                    <div class="tour-image-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/maldives.jpg" alt="Мальдивы" class="tour-image">
                        <span class="tour-badge badge-orange">ЛЮКС</span>
                        <div class="tour-price-badge">от 125 000 ₽</div>
                    </div>
                    <div class="tour-content">
                        <div class="tour-header">
                            <h3>Мальдивы</h3>
                            <div class="tour-rating">
                                <i class="fa-solid fa-star"> 5.0 </i>
                            </div>
                        </div>
                        <div class="tour-details">
                            <span class="detail-item">
                                <i class="fa-regular fa-clock"> 9 ночей </i>
                            </span>
                            <span class="detail-item">
                                <i class="fa-solid fa-utensils"> Полный пансион</i>
                            </span>
                        </div>
                        <div class="tour-footer">
                            <span class="old-price">210 000 ₽</span>
                            <button class="btn-buy">Купить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- СЕКЦИЯ: Почему выбирают нас -->
    <section class="why-us">
        <div class="container">
            <div class="why-us-grid">
                
                <!-- Левая колонка: текст с иконками -->
                <div class="why-us-content">
                    <h2 class="section-title">Почему выбирают нас</h2>

                    <!-- Пункт 1 -->
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Безопасность сделки</h3>
                            <p>Все платежи защищены, а ваша страховка начинает действовать с момента покупки тура.</p>
                        </div>
                    </div>

                    <!-- Пункт 2 -->
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Экспертность команды</h3>
                            <p>Наши менеджеры посетили более 50 стран и знают все нюансы каждого отеля.</p>
                        </div>
                    </div>

                    <!-- Пункт 3 -->
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Индивидуальный подход</h3>
                            <p>Мы не просто продаем путевку, а создаем сценарий вашего идеального отдыха.</p>
                        </div>
                    </div>
                </div>

                <!-- Правая колонка: картинки -->
                <div class="why-us-images">
                    <div class="image-stack">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team.jpg" alt="Наша команда" class="stack-image stack-image-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/phone-pool.jpg" alt="Проверено" class="stack-image stack-image-2">
                        
                        <!-- Плашка "Проверено Viking.by" -->
                        <div class="verified-badge">
                            <div class="verified-icon">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                            <div class="verified-text">
                                <span class="verified-title">Проверено</span>
                                <span class="verified-subtitle">Viking.by</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- НОВАЯ СЕКЦИЯ: Форма обратной связи -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-card">
                
                <!-- Левая колонка: текст -->
                <div class="cta-content">
                    <h2>Не нашли свой тур?<br><span class="text-red">Мы подберем его за вас!</span></h2>
                    <p>Оставьте заявку, и наш эксперт предложит вам 3 варианта с максимальной скидкой в течение 15 минут.</p>
                    
                    <ul class="cta-features">
                        <li>
                            <span class="check-icon">✓</span>
                            Бесплатная консультация эксперта
                        </li>
                        <li>
                            <span class="check-icon">✓</span>
                            Поиск по закрытым базам туроператоров
                        </li>
                    </ul>
                </div>

                <!-- Правая колонка: форма -->
                <div class="cta-form-wrap">
                    <form class="cta-form" action="#" method="POST">
                        <div class="form-row">
                            <input type="text" class="form-input" placeholder="Ваше имя" required>
                            <input type="tel" class="form-input" placeholder="+375 (__) ___-__-__" required>
                        </div>
                        <input type="email" class="form-input form-input-full" placeholder="Email" required>
                        
                        <button type="submit" class="btn-submit">Получить подборку</button>
                        
                        <p class="form-disclaimer">Нажимая на кнопку, вы соглашаетесь с обработкой персональных данных.</p>
                    </form>
                </div>

            </div>
        </div>
    </section>
        
</main>

<?php get_footer(); ?>