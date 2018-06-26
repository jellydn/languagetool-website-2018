@extends('layouts.app')

@section('title', 'Supported Languages - LanguageTool')

@section('content')
    <div id="textContent" class="content-section">
        <div id="languagesOverview">

            <div class="container">

                <p>LanguageTool supports several languages to a different degree. This page lists the
                        number of rules per language to give a very rough indication of how well a
                        language is supported. If your language is not supported, see <a href="http://wiki.languagetool.org/development-overview#toc0">our three-minute introduction</a>
                        on writing error detection rules. Of course you're welcome to improve and add rules for the existing languages, too.</p>

                <!-- Output of RuleOverview.java: -->

                <p><b>Rules in LanguageTool 4.2</b><br />
                Date: 2018-06-26</p>

                <table class="tablesorter sortable" style="width: auto">
                    <thead>
                    <tr>
                        <th valign='bottom' width="200">Language</th>
                        <th valign='bottom' align="left" width="60">XML<br/>rules</th>
                        <th></th>
                        <th align="left" width="60">Java<br/>rules</th>
                        <th align="left" width="60">False<br/>friends</th>
                        <th align="left" width="60">Spell<br/>check*</th>
                        <th align="left" width="60">Confusion<br/>pairs</th>
                        <th valign='bottom' align="left" width="90">Activity</th>
                        <th valign='bottom' align="left">Rule Maintainers</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr><td valign="top">Asturian </td><td valign="top" align="right">61</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ast">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ast/src/main/resources/org/languagetool/rules/ast/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Xesús González Rato</span></td></tr>
                    <tr><td valign="top">Belarusian </td><td valign="top" align="right">7</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=be">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/be/src/main/resources/org/languagetool/rules/be/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Alex Buloichik</span></td></tr>
                    <tr><td valign="top"><a href="../br/">Breton</a></td><td valign="top" align="right">675</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=br">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/br/src/main/resources/org/languagetool/rules/br/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/br/src/main/java/org/languagetool/rules/br/">2</a></td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>7</span><img title='7 commits in the last 6 months' src='../images/bar.png' width='3' height='10'/></td><td valign="top" align="left"><a href="http://dominiko.livejournal.com/tag/lingvoilo">Dominique Pellé</a>, Fulup Jakez</td></tr>
                    <tr><td valign="top"><a href="../ca/">Catalan</a><br/><span class='langVariants'>Variants for: Valencian</span></td><td valign="top" align="right">3033</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ca">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ca/src/main/resources/org/languagetool/rules/ca/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ca/src/main/java/org/languagetool/rules/ca/">21</a></td><td valign="top" align="right">26</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>103</span><img title='103 commits in the last 6 months' src='../images/bar-end.png' width='22' height='10'/><img title='103 commits in the last 6 months' src='../images/bar.png' width='50' height='10'/></td><td valign="top" align="left">Ricard Roca, Jaume Ortolà</td></tr>
                    <tr><td valign="top"><a href="../zh/">Chinese</a></td><td valign="top" align="right">801</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=zh">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/zh/src/main/resources/org/languagetool/rules/zh/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/zh/src/main/java/org/languagetool/rules/zh/">1</a></td><td valign="top" align="right">0</td><td valign="top" align="right"></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>2</span><img title='2 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Tao Lin</span></td></tr>
                    <tr><td valign="top"><a href="../da/">Danish</a></td><td valign="top" align="right">78</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=da">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/da/src/main/resources/org/languagetool/rules/da/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">6</td><td valign="top" align="right"><span title='spell check without suggestions'>(✓)</span></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Esben Aaberg, Henrik Bendt</span></td></tr>
                    <tr><td valign="top"><a href="../nl/">Dutch</a></td><td valign="top" align="right">1946</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=nl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/nl/src/main/resources/org/languagetool/rules/nl/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/nl/src/main/java/org/languagetool/rules/nl/">8</a></td><td valign="top" align="right">19</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>282</span><img title='282 commits in the last 6 months' src='../images/bar-end.png' width='22' height='10'/><img title='282 commits in the last 6 months' src='../images/bar.png' width='50' height='10'/></td><td valign="top" align="left"><a href="http://www.opentaal.org">OpenTaal</a>, <a href="http://www.taaltik.nl">TaalTik</a></td></tr>
                    <tr><td valign="top">English <br/><span class='langVariants'>Variants for: Australian, Canadian, GB, New Zealand, South African, US</span></td><td valign="top" align="right">2068</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=en">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/en/src/main/resources/org/languagetool/rules/en/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/en/src/main/java/org/languagetool/rules/en/">19</a></td><td valign="top" align="right">439</td><td valign="top" align="right">✓</td><td valign="top" align="right">707</td><td valign="top" align="right"><span style='display:none'>162</span><img title='162 commits in the last 6 months' src='../images/bar-end.png' width='22' height='10'/><img title='162 commits in the last 6 months' src='../images/bar.png' width='50' height='10'/></td><td valign="top" align="left">Mike Unwalla, <a href="http://marcinmilkowski.pl">Marcin Miłkowski</a>, <a href="http://www.danielnaber.de">Daniel Naber</a></td></tr>
                    <tr><td valign="top"><a href="../eo/">Esperanto</a></td><td valign="top" align="right">416</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=eo">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/eo/src/main/resources/org/languagetool/rules/eo/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/eo/src/main/java/org/languagetool/rules/eo/">1</a></td><td valign="top" align="right">0</td><td valign="top" align="right"><span title='spell check without suggestions'>(✓)</span></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>54</span><img title='54 commits in the last 6 months' src='../images/bar.png' width='27' height='10'/></td><td valign="top" align="left"><a href="http://dominiko.livejournal.com/tag/lingvoilo">Dominique Pellé</a></td></tr>
                    <tr><td valign="top"><a href="../fr/">French</a></td><td valign="top" align="right">2759</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=fr">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/fr/src/main/resources/org/languagetool/rules/fr/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/fr/src/main/java/org/languagetool/rules/fr/">7</a></td><td valign="top" align="right">87</td><td valign="top" align="right">✓</td><td valign="top" align="right">25</td><td valign="top" align="right"><span style='display:none'>6</span><img title='6 commits in the last 6 months' src='../images/bar.png' width='3' height='10'/></td><td valign="top" align="left"><a href="http://dominiko.livejournal.com/tag/lingvoilo">Dominique Pellé</a></td></tr>
                    <tr><td valign="top"><a href="../gl/">Galician</a></td><td valign="top" align="right">287</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=gl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/gl/src/main/resources/org/languagetool/rules/gl/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/gl/src/main/java/org/languagetool/rules/gl/">6</a></td><td valign="top" align="right">130</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>2</span><img title='2 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Susana Sotelo Docío, <a href="https://github.com/TiagoSantos81">Tiago F. Santos (4.0)</a></td></tr>
                    <tr><td valign="top"><a href="../de/">German</a><br/><span class='langVariants'>Variants for: Austria, Germany, Swiss</span></td><td valign="top" align="right">2608</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=de">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/de/src/main/resources/org/languagetool/rules/de/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/de/src/main/java/org/languagetool/rules/de/">34</a></td><td valign="top" align="right">125</td><td valign="top" align="right">✓</td><td valign="top" align="right">76</td><td valign="top" align="right"><span style='display:none'>242</span><img title='242 commits in the last 6 months' src='../images/bar-end.png' width='22' height='10'/><img title='242 commits in the last 6 months' src='../images/bar.png' width='50' height='10'/></td><td valign="top" align="left">Jan Schreiber, <a href="http://www.danielnaber.de">Daniel Naber</a></td></tr>
                    <tr><td valign="top">Greek </td><td valign="top" align="right">45</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=el">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/el/src/main/resources/org/languagetool/rules/el/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/el/src/main/java/org/languagetool/rules/el/">1</a></td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>2</span><img title='2 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Panagiotis Minos</td></tr>
                    <tr><td valign="top"><a href="../it/">Italian</a></td><td valign="top" align="right">141</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=it">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/it/src/main/resources/org/languagetool/rules/it/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/it/src/main/java/org/languagetool/rules/it/">2</a></td><td valign="top" align="right">37</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>1</span><img title='1 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Paolo Bianchini</td></tr>
                    <tr><td valign="top">Japanese </td><td valign="top" align="right">734</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ja">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ja/src/main/resources/org/languagetool/rules/ja/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">7</td><td valign="top" align="right"></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Takahiro Shinkai</span></td></tr>
                    <tr><td valign="top">Khmer </td><td valign="top" align="right">33</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=km">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/km/src/main/resources/org/languagetool/rules/km/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/km/src/main/java/org/languagetool/rules/km/">4</a></td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Nathan Wells</span></td></tr>
                    <tr><td valign="top">Persian </td><td valign="top" align="right">283</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=fa">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/fa/src/main/resources/org/languagetool/rules/fa/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/fa/src/main/java/org/languagetool/rules/fa/">7</a></td><td valign="top" align="right">0</td><td valign="top" align="right"></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Reza1615, Alireza Eskandarpour Shoferi, Ebrahim Byagowi</span></td></tr>
                    <tr><td valign="top"><a href="../pl/">Polish</a></td><td valign="top" align="right">1479</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=pl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pl/src/main/resources/org/languagetool/rules/pl/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pl/src/main/java/org/languagetool/rules/pl/">7</a></td><td valign="top" align="right">148</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><a href="http://marcinmilkowski.pl">Marcin Miłkowski</a></td></tr>
                    <tr><td valign="top"><a href="../pt/">Portuguese</a><br/><span class='langVariants'>Variants for: Angola preAO, Brazil, Moçambique preAO, Portugal</span></td><td valign="top" align="right">2185</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=pt">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pt/src/main/resources/org/languagetool/rules/pt/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pt/src/main/java/org/languagetool/rules/pt/">24</a></td><td valign="top" align="right">431</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>27</span><img title='27 commits in the last 6 months' src='../images/bar.png' width='13' height='10'/></td><td valign="top" align="left"><a href="http://www.marcoagpinto.com/">Marco A.G. Pinto</a>, <a href="https://github.com/MatheusPoletto">Matheus Poletto</a>, <a href="https://github.com/TiagoSantos81">Tiago F. Santos (3.6+)</a></td></tr>
                    <tr><td valign="top">Romanian </td><td valign="top" align="right">457</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ro">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ro/src/main/resources/org/languagetool/rules/ro/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ro/src/main/java/org/languagetool/rules/ro/">3</a></td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: <a href="http://www.archeus.ro">Ionuț Păduraru</a></span></td></tr>
                    <tr><td valign="top"><a href="../ru/">Russian</a></td><td valign="top" align="right">726</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ru">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ru/src/main/resources/org/languagetool/rules/ru/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ru/src/main/java/org/languagetool/rules/ru/">10</a></td><td valign="top" align="right">49</td><td valign="top" align="right">✓</td><td valign="top" align="right">2</td><td valign="top" align="right"><span style='display:none'>34</span><img title='34 commits in the last 6 months' src='../images/bar.png' width='17' height='10'/></td><td valign="top" align="left"><a href="http://myooo.ru/content/view/83/43/">Yakov Reztsov</a></td></tr>
                    <tr><td valign="top">Serbian <br/><span class='langVariants'>Variants for: Bosnia and Herzegovina, Croatia, Montenegro, Serbia</span></td><td valign="top" align="right">12</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=sr">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sr/src/main/resources/org/languagetool/rules/sr/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sr/src/main/java/org/languagetool/rules/sr/">1</a></td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Золтан Чала (Csala, Zoltán)</td></tr>
                    <tr><td valign="top">Slovak </td><td valign="top" align="right">170</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=sk">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sk/src/main/resources/org/languagetool/rules/sk/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sk/src/main/java/org/languagetool/rules/sk/">1</a></td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: <a href="http://sk-spell.sk.cx">Zdenko Podobný</a></span></td></tr>
                    <tr><td valign="top">Slovenian </td><td valign="top" align="right">85</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=sl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sl/src/main/resources/org/languagetool/rules/sl/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Martin Srebotnjak</span></td></tr>
                    <tr><td valign="top"><a href="../es/">Spanish</a></td><td valign="top" align="right">128</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=es">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/es/src/main/resources/org/languagetool/rules/es/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/es/src/main/java/org/languagetool/rules/es/">2</a></td><td valign="top" align="right">246</td><td valign="top" align="right">✓</td><td valign="top" align="right">14</td><td valign="top" align="right"><span style='display:none'>11</span><img title='11 commits in the last 6 months' src='../images/bar.png' width='5' height='10'/></td><td valign="top" align="left"><a href="http://languagetool-es.blogspot.com/">Juan Martorell</a></td></tr>
                    <tr><td valign="top">Swedish </td><td valign="top" align="right">26</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=sv">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sv/src/main/resources/org/languagetool/rules/sv/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sv/src/main/java/org/languagetool/rules/sv/">1</a></td><td valign="top" align="right">15</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Niklas Johansson</span></td></tr>
                    <tr><td valign="top">Tagalog </td><td valign="top" align="right">44</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=tl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/tl/src/main/resources/org/languagetool/rules/tl/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: <a href="http://www.dlsu.edu.ph/research/centers/adric/nlp/">Nathaniel Oco</a>, <a href="http://www.dlsu.edu.ph/research/centers/adric/nlp/faculty/borra.asp">Allan Borra</a></span></td></tr>
                    <tr><td valign="top">Tamil </td><td valign="top" align="right">210</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ta">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ta/src/main/resources/org/languagetool/rules/ta/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right"></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Elanjelian Venugopal</span></td></tr>
                    <tr><td valign="top"><a href="../uk/">Ukrainian</a></td><td valign="top" align="right">514</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=uk">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/uk/src/main/resources/org/languagetool/rules/uk/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/uk/src/main/java/org/languagetool/rules/uk/">18</a></td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>42</span><img title='42 commits in the last 6 months' src='../images/bar.png' width='21' height='10'/></td><td valign="top" align="left">Andriy Rysin, Maksym Davydov</td></tr>
                    </tbody>
                </table>

                <!-- End Output of RuleOverview.java -->

                <p>* ✓ = spell check &nbsp;&nbsp; (✓) = spell check but no suggestions for misspellings</p>

                <p>The number of Java rules listed is only the number of rules specific
                        to that language. There are some rules that deal with punctuation
                        and that apply to almost all languages. The "Activity" column counts
                        the number of changes to the rules of that language in the last 6 months.</p>

                <p>
                        <a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-core/src/main/resources/org/languagetool/rules/false-friends.xml">Show false friend rules source code file</a>
                </p>

            </div>
        
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
      $(".sortable").tablesorter({
        headers: {
          2: {
            sorter: false
          }
        }
      });
    });
    </script>

@endsection
