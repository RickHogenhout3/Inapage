<header>
    <div class="header-content">
        <div class="logo">
            <img src="img/set/img_logo_l5.png" style="width:150px;height:auto;" alt="l5">
        </div>
        <div class="language-bar" style="z-index: 4;">
            <a href="https://twitter.com/InazumaSeries">
                <img src="img/set/btn_twitter.png" alt="tweet">
            </a>
            |
            <img src="img/set/icn_language.png" alt="world" onclick="toggleLanguageOptions(event)">
            <p onclick="toggleLanguageOptions(event)">Nederlands</p>
            <ul id="language-options" style="display: none;">
    <li>
        <a href="https://www.inazuma.jp/victory-road/"><p style="color: #fff;">日本語</p></a>
    </li>
    <li>
        <a href="https://www.inazuma.jp/victory-road/en/"><p style="color: #fff;">English</p></a>
    </li>
</ul>

        </div>
    </div>
</header>

<script>
function toggleLanguageOptions(event) {
    var languageOptions = document.getElementById('language-options');
    if (languageOptions.style.display === 'none' || languageOptions.style.display === '') {
        languageOptions.style.display = 'block';
    } else {
        languageOptions.style.display = 'none';
    }
    event.stopPropagation(); // Prevent the event from propagating to parent elements
}
</script>