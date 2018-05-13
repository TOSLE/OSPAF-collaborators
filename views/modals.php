<div class="row">
    <div class="col-12">
        <div>
            <div class="header-col">
                <h2 id="modal-ospaf">Modals</h2>
            </div>
            <div class="main-col">
                <h3>Default modal</h3>
                <button class="target-modal btn btn-dark" data-type="open-modal" data-target="modal-target-1">Launch modal</button>
                <div id="modal-target-1" class="fade-background" data-type="parent-modal">
                    <div class="modal-window">
                        <div class="modal-header">
                            <i class="modal-header-icon material-icons" data-type="close-modal">close</i>
                            <h2>Modal title</h2>
                        </div>
                        <div class="modal-main">
                            <h3>Demo modal</h3>
                            <p>
                                Main message
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-red" data-type="close-modal">Close modal</button>
                        </div>
                    </div>
                </div>
                <div class="content-documentation">
                    <p>Vous devrez insérer l'appel du javascript en fin de fichier, juste avant la fermeture de la balise body</p>
                    <pre>
    <span class="tag-html"><</span><span class="tag-html">script</span> <span class="attribut-html">src=</span><span class="value-html">"ospaf/js/modals.js"</span><span class="tag-html">></span><span class="tag-html"><</span><span class="tag-html">/script></span>
</pre>
                    <p>L'utilisation d'un bouton n'est pas obligatoire. Ce qui est important, c'est la class 'target-modal' et les 'data-type' et 'data-target'.</p>
                    <pre>
    <span class="tag-html"><</span><span class="tag-html">button</span> <span class="attribut-html">class=</span><span class="value-html">"btn btn-dark target-modal"</span> <span class="attribut-html">data-type=</span><span class="value-html">"open-modal"</span> <span class="attribut-html">data-target=</span><span class="value-html">"id-modal"</span><span class="tag-html">></span>Launch modal<span class="tag-html"><</span><span class="tag-html">/button></span>
</pre>
                    <p>Puis la modal, il faut l'insérer obligatoirement après le code ci-dessus</p>
                    <pre>
    <span class="tag-html"><</span><span class="tag-html">div</span> <span class="attribut-html">id=</span><span class="value-html">"id-modal"</span> <span class="attribut-html">class=</span><span class="value-html">"fade-background"</span> <span class="attribut-html">data-type=</span><span class="value-html">"parent-modal"</span><span class="tag-html">></span>
        <span class="tag-html"><</span><span class="tag-html">div</span> <span class="attribut-html">class=</span><span class="value-html">"modal-window"</span><span class="tag-html">></span>
            <span class="tag-html"><</span><span class="tag-html">div</span> <span class="attribut-html">class=</span><span class="value-html">"modal-header"</span><span class="tag-html">></span>
                <span class="tag-html"><</span><span class="tag-html">i</span> <span class="attribut-html">class=</span><span class="value-html">"modal-header-icon material-icons"</span> <span class="attribut-html">data-type=</span><span class="value-html">"close-modal"</span><span class="tag-html">></span>Close<span class="tag-html"><</span><span class="tag-html">/i></span>
                <span class="tag-html"><</span><span class="tag-html">h2</span><span class="tag-html">></span>
                    Modal title
                <span class="tag-html"><</span><span class="tag-html">/h2></span>
            <span class="tag-html"><</span><span class="tag-html">/div></span>
            <span class="tag-html"><</span><span class="tag-html">div</span> <span class="attribut-html">class=</span><span class="value-html">"modal-main"</span><span class="tag-html">></span>
                <span class="tag-html"><</span><span class="tag-html">p</span><span class="tag-html">></span>
                    Main message
                <span class="tag-html"><</span><span class="tag-html">/p></span>
            <span class="tag-html"><</span><span class="tag-html">/div></span>
            <span class="tag-html"><</span><span class="tag-html">div</span> <span class="attribut-html">class=</span><span class="value-html">"modal-footer"</span><span class="tag-html">></span>
                <span class="tag-html"><</span><span class="tag-html">button</span> <span class="attribut-html">class=</span><span class="value-html">"btn btn-red"</span> <span class="attribut-html">data-type=</span><span class="value-html">"close-modal"</span><span class="tag-html">></span>Close modal<span class="tag-html"><</span><span class="tag-html">/button></span>
            <span class="tag-html"><</span><span class="tag-html">/div></span>
        <span class="tag-html"><</span><span class="tag-html">/div></span>
    <span class="tag-html"><</span><span class="tag-html">/div></span>
</pre>
                    <p>Le '<span class="attribut-html">data-type</span>' qui contient '<span class="value-html">open-modal</span>' permet de renseigner que notre élément HTML a pour but d'ouvrir une modal</p>
                    <p>Le '<span class="attribut-html">data-target</span>' qui contient '<span class="value-html">id-modal</span>' permet de renseigner quelle modal notre élément va viser. On peut donc par conséquent avoir plusieurs éléments HTML qui poitent vers une modal</p>
                    <p>Le '<span class="attribut-html">data-type</span>' qui contient '<span class="value-html">close-modal</span>' permet d'indiquer que notre élément va permettre de fermer la modal courante</p>
                    <p>Le '<span class="attribut-html">data-type</span>' qui contient '<span class="value-html">parent-modal</span>' permet d'indiquer que notre élément HTML est la balise parent d'une modal</p>
                </div>
                <h3>Long modal</h3>
                <br><p>Les modals long ne nécessitent pas d'attributs en plus. En effet, nous les avons conçus de façon à ce qu'elles s'adaptent automatiquement.</p>
                <button class="target-modal btn btn-dark" data-type="open-modal" data-target="modal-target-2">Launch modal</button>
                <div id="modal-target-2" class="fade-background" data-type="parent-modal">
                    <div class="modal-window">
                        <div class="modal-header">
                            <i class="modal-header-icon material-icons" data-type="close-modal">close</i>
                            <h2>Long Modal title</h2>
                        </div>
                        <div class="modal-main">
                            <h3>Demo long modal</h3>
                            <p>
                                Main message exemple
                            </p><br><br><br><br><br><br>
                            <p>
                                Main message exemple
                            </p><br><br><br><br><br><br>
                            <p>
                                Main message exemple
                            </p><br><br><br><br><br><br>
                            <p>
                                Main message exemple
                            </p><br><br><br><br><br><br>
                            <p>
                                Main message exemple
                            </p><br><br><br><br><br><br>
                            <p>
                                Main message exemple
                            </p><br><br><br><br><br><br>
                            <p>
                                Main message exemple
                            </p><br><br><br><br><br><br>
                            <p>
                                Main message exemple
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-red" data-type="close-modal">Close modal</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-col">
                <p>Last update : v1.0</p>
            </div>
        </div>
    </div>
</div>