<div class="row">
    <div class="col-12">
        <div>
            <div class="header-col">
                <h2 id="pagination-ospaf">Pagination</h2>
            </div>
            <div class="main-col">
                <h3>Pagination simple</h3>
                <ul class="pagination">
                    <li class="item">
                        <a class="link-page material-icons" href="#">
                            first_page
                        </a>
                    </li>
                    <li class="item active">
                        <a class="link-page" href="#">1</a>
                    </li>
                    <li class="item">
                        <a class="link-page" href="#">2</a>
                    </li>
                    <li class="item">
                        <a class="link-page material-icons" href="#">
                            last_page
                        </a>
                    </li>
                </ul>
                <h3>Un peu de couleur</h3>
                <p>
                    Il suffit simplement d'appliquer le nom des couleurs de nos boutons, il n'existe en revanche pas de pagination pour la valeur default et white.
                </p>
                <ul class="pagination tosle">
                    <li class="item">
                        <a class="link-page material-icons" href="#">
                            first_page
                        </a>
                    </li>
                    <li class="item active">
                        <a class="link-page" href="#">1</a>
                    </li>
                    <li class="item">
                        <a class="link-page" href="#">2</a>
                    </li>
                    <li class="item">
                        <a class="link-page material-icons" href="#">
                            last_page
                        </a>
                    </li>
                </ul>
                <ul class="pagination red">
                    <li class="item">
                        <a class="link-page material-icons" href="#">
                            first_page
                        </a>
                    </li>
                    <li class="item active">
                        <a class="link-page" href="#">1</a>
                    </li>
                    <li class="item">
                        <a class="link-page" href="#">2</a>
                    </li>
                    <li class="item">
                        <a class="link-page material-icons" href="#">
                            last_page
                        </a>
                    </li>
                </ul>
                <div class="content-documentation">
                    <p>Pour utiliser notre système de pagination basique</p>
<pre>
<span class="tag-html"><</span><span class="tag-html">ul</span> <span class="attribut-html">class=</span><span class="value-html">"pagination"</span><span class="tag-html">></span>
    <span class="tag-html"><</span><span class="tag-html">li</span> <span class="attribut-html">class=</span><span class="value-html">"item"</span><span class="tag-html">></span>
        <span class="tag-html"><</span><span class="tag-html">a</span> <span class="attribut-html">class=</span><span class="value-html">"link-page material-icons"</span> <span class="attribut-html">href=</span><span class="value-html">"#"</span><span class="tag-html">></span>
            first_page
        <span class="tag-html"><</span><span class="tag-html">/a></span>
    <span class="tag-html"><</span><span class="tag-html">/li></span>
    <span class="tag-html"><</span><span class="tag-html">li</span> <span class="attribut-html">class=</span><span class="value-html">"item active"</span><span class="tag-html">></span>
        <span class="tag-html"><</span><span class="tag-html">a</span> <span class="attribut-html">class=</span><span class="value-html">"link-page"</span> <span class="attribut-html">href=</span><span class="value-html">"#"</span><span class="tag-html">></span>
            1
        <span class="tag-html"><</span><span class="tag-html">/a></span>
    <span class="tag-html"><</span><span class="tag-html">/li></span>
    <span class="tag-html"><</span><span class="tag-html">li</span> <span class="attribut-html">class=</span><span class="value-html">"item"</span><span class="tag-html">></span>
        <span class="tag-html"><</span><span class="tag-html">a</span> <span class="attribut-html">class=</span><span class="value-html">"link-page"</span> <span class="attribut-html">href=</span><span class="value-html">"#"</span><span class="tag-html">></span>
            2
        <span class="tag-html"><</span><span class="tag-html">/a></span>
    <span class="tag-html"><</span><span class="tag-html">/li></span>
    <span class="tag-html"><</span><span class="tag-html">li</span> <span class="attribut-html">class=</span><span class="value-html">"item"</span><span class="tag-html">></span>
        <span class="tag-html"><</span><span class="tag-html">a</span> <span class="attribut-html">class=</span><span class="value-html">"link-page material-icons"</span> <span class="attribut-html">href=</span><span class="value-html">"#"</span><span class="tag-html">></span>
            last_page
        <span class="tag-html"><</span><span class="tag-html">/a></span>
    <span class="tag-html"><</span><span class="tag-html">/li></span>
<span class="tag-html"><</span><span class="tag-html">/ul></span>
</pre>
                    <p>Pour utiliser notre système de pagination en coueur, il suffit de rajouter le nom dans la class de la balise <span class="tag-html"><</span><span class="tag-html">ul></span></p>
<pre>
<span class="tag-html"><</span><span class="tag-html">ul</span> <span class="attribut-html">class=</span><span class="value-html">"pagination tosle"</span><span class="tag-html">></span>
    <span class="tag-html"><</span><span class="tag-html">li</span> <span class="attribut-html">class=</span><span class="value-html">"item"</span><span class="tag-html">></span>
        <span class="tag-html"><</span><span class="tag-html">a</span> <span class="attribut-html">class=</span><span class="value-html">"link-page material-icons"</span> <span class="attribut-html">href=</span><span class="value-html">"#"</span><span class="tag-html">></span>
            first_page
        <span class="tag-html"><</span><span class="tag-html">/a></span>
    <span class="tag-html"><</span><span class="tag-html">/li></span>
    <span class="tag-html"><</span><span class="tag-html">li</span> <span class="attribut-html">class=</span><span class="value-html">"item active"</span><span class="tag-html">></span>
        <span class="tag-html"><</span><span class="tag-html">a</span> <span class="attribut-html">class=</span><span class="value-html">"link-page"</span> <span class="attribut-html">href=</span><span class="value-html">"#"</span><span class="tag-html">></span>
            1
        <span class="tag-html"><</span><span class="tag-html">/a></span>
    <span class="tag-html"><</span><span class="tag-html">/li></span>
    <span class="tag-html"><</span><span class="tag-html">li</span> <span class="attribut-html">class=</span><span class="value-html">"item"</span><span class="tag-html">></span>
        <span class="tag-html"><</span><span class="tag-html">a</span> <span class="attribut-html">class=</span><span class="value-html">"link-page"</span> <span class="attribut-html">href=</span><span class="value-html">"#"</span><span class="tag-html">></span>
            2
        <span class="tag-html"><</span><span class="tag-html">/a></span>
    <span class="tag-html"><</span><span class="tag-html">/li></span>
    <span class="tag-html"><</span><span class="tag-html">li</span> <span class="attribut-html">class=</span><span class="value-html">"item"</span><span class="tag-html">></span>
        <span class="tag-html"><</span><span class="tag-html">a</span> <span class="attribut-html">class=</span><span class="value-html">"link-page material-icons"</span> <span class="attribut-html">href=</span><span class="value-html">"#"</span><span class="tag-html">></span>
            last_page
        <span class="tag-html"><</span><span class="tag-html">/a></span>
    <span class="tag-html"><</span><span class="tag-html">/li></span>
<span class="tag-html"><</span><span class="tag-html">/ul></span>
</pre>
                    <h3>Pagination et positionnement</h3>
                    <p>Pour placer votre pagination autrement, il suffit de placer l'une des class à la balise <span class="tag-html"><</span><span class="tag-html">ul></span></p>
                    <ul class="pagination justify-center">
                        <li class="item">
                            <a class="link-page material-icons" href="#">
                                first_page
                            </a>
                        </li>
                        <li class="item active">
                            <a class="link-page" href="#">1</a>
                        </li>
                        <li class="item">
                            <a class="link-page" href="#">2</a>
                        </li>
                        <li class="item">
                            <a class="link-page material-icons" href="#">
                                last_page
                            </a>
                        </li>
                    </ul>
                    <ul class="pagination justify-right">
                        <li class="item">
                            <a class="link-page material-icons" href="#">
                                first_page
                            </a>
                        </li>
                        <li class="item active">
                            <a class="link-page" href="#">1</a>
                        </li>
                        <li class="item">
                            <a class="link-page" href="#">2</a>
                        </li>
                        <li class="item">
                            <a class="link-page material-icons" href="#">
                                last_page
                            </a>
                        </li>
                    </ul>
                    <ul class="ul-liste-textarea">
                        <li><span class="value-html">justify-center</span> pour centrer</li>
                        <li><span class="value-html">justify-right</span> pour aligner à droite</li>
                    </ul>
                </div>
            </div>
            <div class="footer-col">
                <p>Last update : v1.0</p>
            </div>
        </div>
    </div>
</div>