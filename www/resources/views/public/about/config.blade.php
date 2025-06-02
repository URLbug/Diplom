@extends('app/public')

@section('content')
    <div class="text-white">
        <div class="text-center mb-8">
            <h1 class="md:text-5xl text-4xl font-bold">
                Политика <span class="text-amber-500">конфиденциальности</span>
            </h1>
        </div>

        <p class="mt-4 leading-relaxed text-lg">
            Настоящая политика конфиденциальности описывает, как <span class="text-amber-500 font-semibold">SecureGuard</span>
            обрабатывает и защищает персональные данные пользователей нашего сайта.
        </p>

        <h2 class="text-3xl font-semibold mt-8 border-b-2 border-amber-500 pb-2">1. Сбор информации</h2>
        <p class="mt-4 text-lg leading-relaxed">
            Мы можем собирать следующие данные:
        </p>
        <ul class="list-disc list-inside mt-2 space-y-2 text-lg">
            <li>Имя, номер телефона и email, предоставленные в форме обратной связи</li>
            <li>IP-адрес, данные браузера и устройства</li>
            <li>Cookies и другие технические данные</li>
        </ul>

        <h2 class="text-3xl font-semibold mt-8 border-b-2 border-amber-500 pb-2">2. Использование данных</h2>
        <p class="mt-4 text-lg leading-relaxed">
            Собранные данные используются исключительно для:
        </p>
        <ul class="list-disc list-inside mt-2 space-y-2 text-lg">
            <li>Связи с пользователем по запросу</li>
            <li>Улучшения работы сайта</li>
            <li>Анализа поведения пользователей (анонимно)</li>
        </ul>

        <h2 class="text-3xl font-semibold mt-8 border-b-2 border-amber-500 pb-2">3. Защита данных</h2>
        <p class="mt-4 text-lg leading-relaxed">
            <span class="text-amber-500 font-semibold">SecureGuard</span> принимает все необходимые меры для защиты персональных данных от утраты,
            неправомерного доступа, изменения или распространения.
        </p>

        <h2 class="text-3xl font-semibold mt-8 border-b-2 border-amber-500 pb-2">4. Передача третьим лицам</h2>
        <p class="mt-4 text-lg leading-relaxed">
            Мы не передаем персональные данные третьим лицам, за исключением случаев, предусмотренных законодательством РФ.
        </p>

        <h2 class="text-3xl font-semibold mt-8 border-b-2 border-amber-500 pb-2">5. Согласие пользователя</h2>
        <p class="mt-4 text-lg leading-relaxed">
            Отправляя данные через формы на сайте, вы соглашаетесь с настоящей политикой конфиденциальности.
        </p>

        <h2 class="text-3xl font-semibold mt-8 border-b-2 border-amber-500 pb-2">6. Контакты</h2>
        <p class="mt-4 text-lg leading-relaxed">
            По вопросам, связанным с обработкой персональных данных, вы можете связаться с нами:
        </p>
        <ul class="list-none mt-2 space-y-2 text-lg">
            <li>📍 Адрес: г. Москва, ул. Охранная, 12</li>
            <li>✉️ Email: <a href="mailto:info@secureguard.ru" class="text-amber-500 underline">info@secureguard.ru</a></li>
            <li>📞 Телефон: +7 (495) 123-45-67</li>
        </ul>
    </div>
@endsection
