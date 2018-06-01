<div class="row">
    <div class="col-12">
        <div>
            <div class="header-col">
                <h2 id="forms-ospaf">Formulaires</h2>
            </div>
            <div class="main-col">
                <h3>Formulaire de base</h3>
                <form>
                    <div class="form-group-base">
                        <label for="exampleText_firstInput">Label of your input</label>
                        <input id="exampleText_firstInput" name="exampleText_firstInput" type="text" placeholder="Type : text">
                        <div class="small-precision-input">Add information about your input text</div>

                        <label for="exampleText_secondInput">Label of your second input without small precision</label>
                        <input id="exampleText_secondInput" name="exampleText_secondInput" type="text" placeholder="Type : text">

                        <label for="exampleText_thirdInput">Enter your email</label>
                        <input id="exampleText_thirdInput" name="exampleText_thirdInput" type="email" placeholder="Type : email">
                        <div class="small-precision-input">We never keep your information</div>

                        <label for="textArea_exampleBase">Textarea resize with OSPAF</label>
                        <textarea id="textArea_exampleBase" name="textArea_exampleBase" class="textarea-col-12" placeholder="For choose size of your textarea, enter class : textarea-row-(number)"></textarea>
                        <div class="small-precision-input">Add information about your textarea</div>

                        <input type="submit" value="Submit" class="btn btn-green" onclick="return false;">
                    </div>
                </form>
                <div class="content-documentation">
                    <p>Pour utiliser notre formulaire</p>
<pre>
<span class="tag-html"><</span><span class="tag-html">form</span><span class="tag-html">></span>
    <span class="tag-html"><</span><span class="tag-html">div</span> <span class="attribut-html">class=</span><span class="value-html">"form-group-base"</span><span class="tag-html">></span>
        <span class="tag-html"><</span><span class="tag-html">label</span> <span class="attribut-html">for=</span><span class="value-html">"exampleText_firstInput"</span><span class="tag-html">></span>Label of your input<span class="tag-html"><</span><span class="tag-html">/label></span>
        <span class="tag-html"><</span><span class="tag-html">input</span> <span class="attribut-html">id=</span><span class="value-html">"exampleText_firstInput"</span> <span class="attribut-html">name=</span><span class="value-html">"exampleText_firstInput"</span> <span class="attribut-html">type=</span><span class="value-html">"text"</span> <span class="attribut-html">placeholder=</span><span class="value-html">"Type : text"</span><span class="tag-html">></span>
        <span class="tag-html"><</span><span class="tag-html">div</span> <span class="attribut-html">class=</span><span class="value-html">"small-precision-input"</span><span class="tag-html">></span>Add information about your input text<span class="tag-html"><</span><span class="tag-html">/div></span>

        <span class="tag-html"><</span><span class="tag-html">label</span> <span class="attribut-html">for=</span><span class="value-html">"exampleText_secondInput"</span><span class="tag-html">></span>Label of your second input without small precision<span class="tag-html"><</span><span class="tag-html">/label></span>
        <span class="tag-html"><</span><span class="tag-html">input</span> <span class="attribut-html">id=</span><span class="value-html">"exampleText_secondInput"</span> <span class="attribut-html">name=</span><span class="value-html">"exampleText_secondInput"</span> <span class="attribut-html">type=</span><span class="value-html">"text"</span> <span class="attribut-html">placeholder=</span><span class="value-html">"Type : text"</span><span class="tag-html">></span>

        <span class="tag-html"><</span><span class="tag-html">label</span> <span class="attribut-html">for=</span><span class="value-html">"exampleText_thirdInput"</span><span class="tag-html">></span>Enter your email<span class="tag-html"><</span><span class="tag-html">/label></span>
        <span class="tag-html"><</span><span class="tag-html">input</span> <span class="attribut-html">id=</span><span class="value-html">"exampleText_thirdInput"</span> <span class="attribut-html">name=</span><span class="value-html">"exampleText_thirdInput"</span> <span class="attribut-html">type=</span><span class="value-html">"email"</span> <span class="attribut-html">placeholder=</span><span class="value-html">"Type : email"</span><span class="tag-html">></span>
        <span class="tag-html"><</span><span class="tag-html">div</span> <span class="attribut-html">class=</span><span class="value-html">"small-precision-input"</span><span class="tag-html">></span>We never keep your information<span class="tag-html"><</span><span class="tag-html">/div></span>

        <span class="tag-html"><</span><span class="tag-html">label</span> <span class="attribut-html">for=</span><span class="value-html">"textArea_exampleBase"</span><span class="tag-html">></span>Textarea resize with OSPAF<span class="tag-html"><</span><span class="tag-html">/label></span>
        <span class="tag-html"><</span><span class="tag-html">textarea</span> <span class="attribut-html">id=</span><span class="value-html">"textArea_exampleBase"</span> <span class="attribut-html">name=</span><span class="value-html">"textArea_exampleBase"</span> <span class="attribut-html">class=</span><span class="value-html">"textarea-col-6"</span>
        <span class="attribut-html">placeholder=</span><span class="value-html">"For choose size of your textarea, enter class : textarea-row-(number)"</span><span class="tag-html">></span><span class="tag-html"><</span><span class="tag-html">/textarea></span>
        <span class="tag-html"><</span><span class="tag-html">div</span> <span class="attribut-html">class=</span><span class="value-html">"small-precision-input"</span><span class="tag-html">></span>Add information about your textarea<span class="tag-html"><</span><span class="tag-html">/div></span>

        <span class="tag-html"><</span><span class="tag-html">input</span> <span class="attribut-html">type=</span><span class="value-html">"submit"</span> <span class="attribut-html">value=</span><span class="value-html">"Submit"</span> <span class="attribut-html">class=</span><span class="value-html">"btn btn-green"</span><span class="tag-html">></span>
    <span class="tag-html"><</span><span class="tag-html">/div></span>
<span class="tag-html"><</span><span class="tag-html">/form></span>
</pre>
                    <h3>Redimensionnement du textarea</h3>
                    <p>Pour redimensionner votre textarea, utilisez les class suivantes :</p>
                    <ul class="ul-liste-textarea">
                        <li><span class="value-html">textarea-col-1</span></li>
                        <li><span class="value-html">textarea-col-2</span></li>
                        <li><span class="value-html">textarea-col-3</span></li>
                        <li><span class="value-html">textarea-col-4</span></li>
                        <li><span class="value-html">textarea-col-6</span></li>
                        <li><span class="value-html">textarea-col-12</span></li>
                    </ul>
                </div>
            </div>
            <div class="footer-col">
                <p>Last update : v1.0</p>
            </div>
        </div>
    </div>
</div>