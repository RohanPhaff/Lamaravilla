<div class="navigation-div">
    <img src="../img/zon.png" alt="De foto kon niet geladen worden" class="zon">

    <p class="back-to-lamaravilla"><a href="{{ Request::path() === '/' ? 'https://la-maravilla.nl/' : '/'}}">{{ Request::path() === '/' ? 'Terug naar Lamaravilla' : 'Terug naar homepage'}}</a></p>

    <div class="navbar-vertical-line"></div>

    <ul class="navigation">
        <a href="/a1/create"><li><strong>A1</strong></li></a>
        <a href="/a2/create"><li><strong>A2</strong></li></a>
        <a href="/b1/create"><li><strong>B1</strong></li></a>
    </ul>
</div>