@extends('layouts.app')

@section('title', 'Известные проблемы LanguageTool и способы их устранения')

@section('content')
    <div id="textContent" class="content-section" style="text-align: left">

        <div class="container">

            <h2>Новости</h2>
            
            <p><strong>26.06.2018: </strong>Вышла версия 4.2 LanguageTool!</p>
            <ul>
                <li>Обновлены модули проверки для русского, английского, бретонского, каталанского,  греческого, немецкого, украинского, эсперанто, португальского, испанского и нидерландского языков.</li>
                <li>В англоязычном модуле обновлены словари для проверки орфографии (en_GB, en_US, en_CA).</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
                Изменения для русскоязычного модуля включают:
                <li>Расширен и исправлен словарь частей речи, расширено описание грамматических характеристик для некоторых групп слов.</li>
                <li>Созданы новые и улучшены существующие правила для проверки пунктуации и грамматики.</li>
                <li>В словарь независимой версии добавлены новые слова для орфографической проверки.</li>
            </ul>
            
            <p><strong>27.03.2018: </strong>Вышла версия 4.1 LanguageTool!</p>
            <ul>
                <li>Обновлены модули проверки для русского, английского, немецкого, украинского, каталанского, китайского, польского, эсперанто, португальского, испанского, французского, галисийского и нидерландского языков.</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
                Изменения для русскоязычного модуля включают:
                <li>Улучшены правила разбиения текста на предложения.</li>
                <li>Созданы новые и улучшены существующие правила для проверки пунктуации и грамматики.</li>
                <li>Расширен словарь частей речи.</li>
                <li>В словарь независимой версии добавлены новые слова для орфографической проверки.</li>
            </ul>

            <p><strong>29.12.2017: </strong>Вышла версия 4.0 LanguageTool!</p>
            <ul>
                <li>Обновлены модули проверки для русского, английского, португальского, польского, немецкого, украинского,  каталанского,  французского, галисийского и нидерландского языков.</li>
                <li>Добавлены правила поиска <a href="https://ru.wikipedia.org/wiki/%D0%9B%D0%BE%D0%B6%D0%BD%D1%8B%D0%B5_%D0%B4%D1%80%D1%83%D0%B7%D1%8C%D1%8F_%D0%BF%D0%B5%D1%80%D0%B5%D0%B2%D0%BE%D0%B4%D1%87%D0%B8%D0%BA%D0%B0">«ложных друзей переводчика»</a> для переводов между русским и английским языками.</li>
                <li>Для английского, немецкого и португальского языков реализована новая модель нейросети — word2vec. <a href="https://fscs.hhu.de/languagetool/summary.pdf">Описание (pdf)</a>  Для работы этой нейросети необходим файл данных <a href="https://fscs.hhu.de/languagetool/word2vec.tar.gz">word2vec.tar.gz</a>.</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
                Изменения для русскоязычного модуля включают:
                <li>Созданы новые и улучшены существующие правила для проверки пунктуации и грамматики.</li>
                <li>В словарь независимой версии добавлены новые слова для орфографической проверки.</li>
            </ul>

            <p><strong>26.09.2017: </strong>Вышла версия 3.9 LanguageTool!</p>
            <ul>
                <li>Обновлены модули проверки для португальского, немецкого, украинского, испанского, каталанского, бретонского, английского, французского, эсперанто, нидерландского и русского языков.</li>
                <li>Внесены дополнения в Java API.</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
                Изменения для русскоязычного модуля включают:
                <li>Создано несколько новых и улучшены существующие правила.</li>
                <li>Добавлены новые слова для орфографической проверки в независимую версию.</li>
            </ul>

            <p><strong>27.06.2017: </strong>Вышла версия 3.8 LanguageTool!</p>
            <ul>
                <li>Обновлены модули проверки для русского, португальского, каталанского, английского, немецкого, польского, словацкого, нидерландского и украинского языков.</li>
                <li>Улучшена работа сервера LT для независимой версии, внесены изменения в настройки сервера по умолчанию.</li>
                <li>Java API: удалены устаревшие методы.</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
                Изменения для русскоязычного модуля включают:
                <li>Созданы новые и улучшены существующие правила.</li>
            </ul>

            <p><strong>27.03.2017: </strong>Вышла версия 3.7 LanguageTool!</p>
            <ul>
                <li>Обновлены модули проверки для португальского, бретонского, каталанского, английского, французского, немецкого, русского, украинского, греческого, итальянского языков.</li>
                <li>Диалог настроек для LibreOffice/Apache OpenOffice использует системный стиль окна вместо ранее предопределённого стиля Nimbus.</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
                Изменения для русскоязычного модуля включают:
                <li>Созданы новые правила.</li>
                <li>Усовершенствованы существующие грамматические правила.</li>
                <li>Обновлён встроенный словарь частей речи, улучшена система идентификаторов частей речи.</li>
                <li>Добавлены новые слова для орфографической проверки в независимую версию.</li>
            </ul>


            <p><strong>28.12.2016:</strong>Вышла версия 3.6 LanguageTool!</p>
            <ul>
                <li>Обновлены модули для проверки следующих языков: английского, русского, каталанского, французского, немецкого, польского, португальского, испанского и украинского.</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
                Изменения для русскоязычного модуля включают:
                <li>Создано около 80 новых правил.</li>
                <li>Усовершенствованы существующие грамматические правила.</li>
                <li>Создано гибридное xml/Java правило «правописание «н/нн» в причастиях и прилагательных».</li>
                <li>Добавлено Java правило «RussianWordCoherencyRule».</li>
                <li>Обновлён встроенный словарь частей речи, улучшена система идентификаторов частей речи.</li>
                <li>Переписаны правила для устранения грамматической неоднозначности.</li>
                <li>Добавлены новые слова для орфографической проверки в независимую версию.</li>
            </ul>

            <p><strong>30.09.2016:</strong>Вышла версия 3.5 LanguageTool!</p>
            <ul>
                <li>Обновлены модули для проверки следующих языков: английского, русского, эсперанто, каталанского, французского, немецкого, польского, португальского, испанского и украинского.</li>
                <li>Увеличена скорость проверки текста в независимой версии программы.</li>
                <li>Обновлён словарь английского языка (en_GB, Великобритания) для проверки орфографии. Теперь используется кодировка UTF-8.</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
                Изменения для русскоязычного модуля включают:
                <li>Создано более 100 новых правил.</li>
                <li>Переписаны и улучшены существующие грамматические правила.</li>
                <li>Добавлены новые слова для орфографической проверки.</li>
                <li>Теперь программа понимает текст со знаками ударения.</li>
            </ul>


            <p><strong>03.08.2016:</strong>Вышла версия расширения <a href="https://addons.mozilla.org/ru/firefox/addon/languagetool/">LanguageTool для FireFox48+</a>!</p>
            Эта версия заменяет старое расширение LanguageToolFX.
            <ul>
                <li>Расширение полностью переписано с использованием технологии WebExtension.</li>
                <li>Так как WebExtension в FireFox реализовано не полностью, то клавиши быстрой проверки пока не работают.</li>
            </ul>


            <p><strong>27.06.2016:</strong>Вышла версия 3.4 LanguageTool!</p>
            <ul>
                <li>Обновлены модули для проверки следующих языков: английского, русского, каталанского, французского, немецкого, греческого, польского, португальского, испанского и украинского.</li>
                <li>Обновлён интерфейс независимой версии приложения.</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
                Изменения для русскоязычного модуля включают:
                <li>Улучшен и существенно дополнен словарь для проверки орфографии (в независимой версии).</li>
                <li>Добавлено несколько новых правил.</li>
                <li>Улучшены существующие правила.</li>
            </ul>


            <p><strong>28.03.2016:</strong>Вышла версия 3.3 LanguageTool!</p>
            <ul>
                Изменения для русскоязычного модуля включают:
                <li>Добавлено 20 новых правил.</li>
                <li>Улучшены существующие правила.</li>
                <li>Для Java правил добавлены примеры.</li>
                <li>Обновлён словарь для проверки орфографии (в независимой версии).</li>

                Остальные изменения:
                <li>В программу включён новый словарь немецкого языка для проверки орфографии (в независимой версии).</li>
                <li>Обновлены модули для проверки следующих языков: английского, русского, немецкого, французского, эсперанто, украинского, датского, каталанского, португальского, греческого, польского.</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
            </ul>


            <p><strong>10.03.2016:</strong> Появилась бета-версия LanguageTool для Android &mdash; LanguageTool proofreader!</p>

            Установить <a href="https://play.google.com/store/apps/details?id=org.softcatala.corrector">LanguageTool proofreader (Корректор LanguageTool) для Android</a>.</li>
            ОЧЕНЬ ВАЖНО: После установки программы зайдите в настройки Android: Settings -> Language Input -> Spell Checker (Настройки -> Языки ввода -> Проверка орфографии) и выберите "LanguageTool proofreader" (корректор LanguageTool).

            <br>
            <p><strong>29.12.2015:</strong> Вышла версия 3.2 LanguageTool!</p>
            <ul>
                Изменения для русскоязычного модуля включают:
                <li>Добавлено 38 новых правил.</li>
                <li>Улучшены существующие правила.</li>
                <li>Обновлён словарь для проверки орфографии (в независимой версии).</li>
                Остальные изменения:
                <li>Для работы программы требуется как минимум Java 8</li>
                <li>В программу включён новый словарь белорусского языка для проверки орфографии (в независимой версии).</li>
                <li>Обновлены модули для проверки следующих языков: английского, французского, эсперанто, немецкого, украинского, датского, каталанского, португальского.</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
            </ul>
            <br>
            <p><strong>02.11.2015:</strong> Появилась первая бета-версия LanguageTool для Google Chrome!</p>
            Установить <a href="https://chrome.google.com/webstore/detail/languagetool/oldceeleldhonbafppcapldpdifcinji">LanguageTool для Google Chrome (beta)</a>.</li>
            <br>
            <p><strong>28.09.2015:</strong> Вышла версия 3.1 LanguageTool!</p>
            <ul>
                Изменения для русскоязычного модуля включают:
                <li>Добавлены новые правила.</li>
                <li>Добавлены правила для поиска «ложных друзей переводчика» (русский/английский).</li>
                <li>Обновлён словарь для проверки орфографии (в независимой версии).</li>
                Остальные изменения:
                <li>Обновлены модули для проверки следующих языков: английского, французского, немецкого, японского, украинского, польского, португальского.</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
            </ul>
            <p><strong>29.06.2015:</strong> Вышла версия LanguageTool 3.0.</p>
            <ul>
                Изменения для русскоязычного модуля включают:
                <li>Переработаны существующие правила для улучшения качества проверки.</li>
                <li>Обновлён словарь для проверки орфографии.</li>
                Остальные изменения:
                <li>Обновлены модули для проверки следующих языков: английского, немецкого, бретонского, каталанского, украинского, польского, португальского, словацкого.</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
            </ul>
            <p><strong>14.05.2015:</strong> Вышла версия LanguageTool 2.9.1.</p>
            <ul>
                Эта версия включает в себя только обновление для версии с интеграцией с LibreOffice/Apache OpenOffice:
                <li>Исправлена ошибка «osl::Thread::Create failed», проявляющаяся при проверке больших документов, состоящих из более чем 300 листов, в LibreOffice 4.x с установленным LanguageTool-2.9.</li>
                Всем пользователям LanguageTool 2.9 &mdash; расширения LibreOffice/Apache OpenOffice рекомендуется обновиться до LanguageTool-2.9.1.
            </ul>
            <p><strong>30.03.2015:</strong> Вышла версия LanguageTool 2.9.</p>
            <ul>
                Изменения для русскоязычного модуля включают:
                <li>Добавлено около 60 новых правил.</li>
                <li>Переработаны старые правила для улучшения качества проверки.</li>
                Остальные изменения:
                <li>Обновлены модули для проверки следующих языков: английского, немецкого, французского, украинского, польского, эсперанто, итальянского, польского, португальского.</li>
                <li>Теперь для автоопределения языка при проверке текстов независимой версией программы используется language-detector.</li>
                <li>Упрощён формат грамматических файлов.</li>
                <li>Создано простое правило в помощь переводчикам: проверяется, чтобы предложения в оригинале и в переводе оканчивались на одни и те же знаки препинания (доступно в режиме bitext и обрабатывает только эти знаки препинания «.?!»)</li>
                <li>Появились пользовательские словари, используемые для проверки орфографии (это файлы <КодЯзыка>/hunspell/spelling.txt).</li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
            </ul>
            <p><strong>30.12.2014:</strong> Вышла версия LanguageTool 2.8.</p>
            <ul>
                Изменения для русскоязычного модуля включают:
                <li>Добавлено много новых правил.</li>
                <li>Переработаны старые правила для улучшения качества проверки.</li>
                <li>Добавлены правила для поиска «ложных друзей переводчика».</li>
                Остальные изменения:
                <li>Обновлены модули для проверки следующих языков: английского, немецкого, французского, украинского, польского, португальского, испанского, тагальского, бретонского, каталанского, астурийского, голландского.</li>
                <li>Основные <a href="http://languagetool.org/changes/languagetool-2.7_to_languagetool-2.8/">изменения в xml-правилах.</a></li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
            </ul>
            <p><strong>29.09.2014:</strong> Вышла версия LanguageTool 2.7</p>
            <ul>
                Изменения для русскоязычного модуля включают:
                <li>Добавлены правила для поиска "ложных друзей переводчика".</li>
                <li>Добавлены правила для поиска некорректных дат.</li>
                <li>Добавлены правила для поиска некорректных дней недели, например помечает ошибочным выражение "понедельник, 30 сентября 2014 г.", так как днём недели 30 сентября 2014 г. будет вторник.</li>
                <li>Добавлены новые правила.</li>
                <li>Переработаны старые правила для улучшения качества проверки.</li>
                <li>Расширено правило "правописание слов через дефис или слитно".</li>
                Остальные изменения:
                <li>Для LibreOffice 4.3 и старше проверка грамматики не производится в специальных областях (сносках).</li>
                <li>Основные <a href="http://languagetool.org/changes/languagetool-2.6_to_languagetool-2.7/">изменения в xml-правилах.</a></li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
            </ul>
            <p><strong>30.06.2014:</strong> Вышла версия LanguageTool 2.6.</p>
            <ul>
                Изменения для русскоязычного модуля включают:
                <li>Обновлённый словарь частей речи.</li>
                <li>Откорректированы обозначения частей речи в грамматическом словаре (и xml-правилах).</li>
                <li>В независимой версии словарь для проверки орфографии существенно расширен на основе словарей пользователей программы.
                <li>Добавлены новые правила.</li>
                <li>Переработаны старые правила для улучшения качества проверки.</li>
            </ul>
            <p>Остальные изменения:</p>
            <ul>
                <li>Изменён вид диалога настроек. Теперь настройки свёрнуты в группы.</li>
                <li>Основные <a href="http://languagetool.org/changes/languagetool-2.5_to_languagetool-2.6/">изменения в xml-правилах.</a></li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
            </ul>
            <p><strong>31.03.2014:</strong> Вышла версия LanguageTool 2.5.</p>
            <ul>
                Изменения для русскоязычного модуля включают:
                <li> Обновлённый словарь частей речи.</li>
                <li>Добавлены новые правила по поиску "ложных друзей переводчика" (false frends) для текстов на английском и русском языке.
                <li>Кроме того, в программу добавлено много новых правил.</li>
                <li>Переработаны старые правила для улучшения качества проверки.</li>
                <li>В независимой версии в словарь для проверки орфографии внесена дополнительная информация (частотность употребления слов), которая используется при формировании вариантов исправлений орфографических ошибок.</li>
            </ul>
            <p>Остальные изменения:</p>
            <ul>
                <li>Основные <a href="http://languagetool.org/changes/languagetool-2.4_to_languagetool-2.5/">изменения в xml-правилах.</a></li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
            </ul>
            <p><strong>09.01.2014:</strong> Вышла версия LanguageTool 2.4.1.</p>
            <ul>
                <li>Версия выпущена только как независимая версия.</li>
                <li>Обновлены библиотеки, что позволило повысить скорость формирования вариантов исправлений для проверки орфографии (особенно для английского языка).</li>
            </ul>
            <p><strong>30.12.2013:</strong> Вышла версия LanguageTool 2.4.</p>
            <ul>
                <li>Внесены изменения в правила для английского, французского, немецкого, польского, каталонского, португальского, и бретонского языков.</li>
                <li>Обновлены библиотеки, что позволило повысить скорость формирования вариантов исправлений для проверки орфографии (особенно для английского языка).</li>
                <li>Улучшена обработка многопоточности.</li>
                <li>Повышена производительность.</li>
            </ul>
            <p>Ещё вышла версия 0.5 <a href="https://addons.mozilla.org/ru/firefox/addon/languagetoolfx/">LanguageToolFX</a> - расширения Mozilla FireFox для проверки грамматики с помощью LanguageTool.</p>
            <p><strong>1.10.2013:</strong> Вышла версия LanguageTool 2.3. Изменения включают:</p>
            <ul>
                <li>Теперь программа работает только с Java 7.</li>
                <li>Теперь программа использует многопоточность, что на мультипроцессорных системах повышает быстродействие.</li>
                <li>Внесены изменения в правила для английского, украинского, французского, каталонского, португальского, немецкого и бретонского языков.</li>
                <li>В независимую версию была добавлена проверка текста "на лету" (аналогично интеграции с LibreOffice).</li>
            </ul>
            <p>Ещё вышла версия 0.4 <a href="https://addons.mozilla.org/ru/firefox/addon/languagetoolfx/">LanguageToolFX</a> - расширения Mozilla FireFox для проверки грамматики с помощью LanguageTool.</p>
            <p><strong>30.06.2013:</strong> Вышла версия LanguageTool 2.2. Для русского языка изменения включают:</p>
            <ul>
                <li>Созданы новые правила для проверки стиля.</li>
                <li>Добавлено несколько новых грамматических правил.</li>
                <li>Выполнена оптимизация существующих правил.</li>
                <li>Созданы правила для поиска межъязыковых омонимов и ошибок переводчика (по одному правилу).</li>
                <li>Дополнены правила деления текста на предложения.</li>
            </ul>
            <p>Остальные изменения:</p>
            <ul>
                <li>Обновлены и доработаны правила для французского, каталанского, немецкого, португальского, русского, бретонского, эсперанто и украинского языков.</li>
                <li>Внесены дополнения и улучшения в основной код программы.</li>
                <li>Основные <a href="http://languagetool.org/changes/languagetool-2.1_to_languagetool-2.2/">изменения в xml-правилах.</a></li>
                <li>Полный <a href="http://languagetool.org/download/CHANGES.md">список изменений</a>.</li>
            </ul>
            <p>Ещё вышла версия 0.3 <a href="https://addons.mozilla.org/ru/firefox/addon/languagetoolfx/">LanguageToolFX</a> - расширения Mozilla FireFox для проверки грамматики с помощью LanguageTool 2.2.</p>
            <p><strong>31.03.2013:</strong> Вышла версия LanguageTool 2.1. Для русского языка изменения включают:</p>
            <ul>
                <li>Добавлено несколько новых грамматических правил.</li>
                <li>Выполнена оптимизация существующих правил.</li>
                <li>Исправлена работа Java-правила "Предложение должно начинаться с большой буквы".</li>
            </ul>
            <p>Остальные изменения:</p>
            <ul>
                <li>Обновлены и доработаны правила для английского, французского, немецкого, португальского, польского, русского, бретонского, эсперанто и итальянского языков.</li>
                <li>Внесено много дополнений и улучшений в основной код программы.</li>
                <li>Основные <a href="http://languagetool.org/changes/V_2_0_to_languagetool-2.1/">изменения в xml-правилах.</a></li>
                <li>Теперь для разработки программы используется Apache Maven. Это позволило разделить программу на модули.</li>
            </ul>
            <p><strong>30.12.2012:</strong> Вышла версия LanguageTool 2.0. Для русского языка изменения включают:</p>
            <ul>
                <li>Добавлено 8 новых грамматических правил.</li>
                <li>Выполнена оптимизация существующих правил</li>
                <li>Обновлена и исправлена локализация интерфейса программы.</li>
                <li>Исправлены некоторые ошибки в русском словаре и алгоритме определения частей речи.</li>
            </ul>
            <p>Остальные изменения:</p>
            <ul>
                <li>Исправлено Java-правило "Предложение должно начинаться с большой буквы".</li>
                <li>Встроенный Http-сервер теперь может быть запущен из контекстного меню, если LT отображается как значок в системном трее.</li>
                <li>Теперь значок в системном трее отображается корректно при размере места для значка 16х16 пикселей.</li>
                <li>Обновлены и доработаны правила для английского, испанского, французского, немецкого, датского, каталанского, китайского, бретонского, португальского, эсперанто и украинского языков.</li>
                <li>Внесено много дополнений и улучшений в основной код программы.</li>
                <li>Основные <a href="http://languagetool.org/changes/V_1_9_to_V_2_0/">изменения в xml-правилах.</a></li>
            </ul>
            <p><strong>30.09.2012:</strong> Вышла версия LanguageTool 1.9. Для русского языка изменения включают:</p>
            <ul>
                <li>Добавлено несколько новых грамматических правил.</li>
                <li>Выполнена оптимизация существующих правил.</li>
                <li>Обновлена и исправлена локализация интерфейса программы.</li>
            </ul>
            <p>Остальные изменения:</p>
            <ul>
                <li>Добавлена поддержка японского языка (20 правил).</li>
                <li>Обновлены и доработаны правила для немецкого, английского, датского, каталанского, китайского, французского, бретонского, португальского, эсперанто.</li>
                <li>Внесено много дополнений и улучшений в основной код программы.</li>
            </ul>
            <p><strong>30.06.2012:</strong> Вышла версия LanguageTool 1.8. Для русского языка изменения включают:</p>
            <ul>
                <li>Проверка орфографии (не используется в версии для LibreOffice/OpenOffice).</li>
                <li>Проведена работа по улучшению существующих правил.</li>
                <li>В LibreOffice 3.5 для некоторых правил теперь доступно online описание ошибок.</li>
                <li>Добавлено правило по поиску повторов слов в предложении (отключено в начальных настройках).</li>
            </ul>
            <p>Остальные изменения:</p>
            <ul>
                <li>Поддержка вариантов языков: британский английский, американский английский, ...</li>
                <li>Устранение ошибок.</li>
                <li>Начальная поддержка для греческого и португальского языков.</li>
                <li>Внесено много дополнений и улучшений в грамматические правила для языков: немецкого, английского, каталанского, итальянского, французского, бретонского, польского, эсперанто.</li>
                <li>Проверка орфографии (не используется в версии для LibreOffice/OpenOffice).</li>
            </ul>

        </div>
        
    </div>
@endsection
