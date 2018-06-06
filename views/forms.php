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

                        <label for="exampleText_fileInput">Add basic input file in your form</label>
                        <input id="exampleText_fileInput" name="exampleText_fileInput" type="file">
                        <div class="small-precision-input">Add information about your input file</div>

                        <label for="exampleText_selectInput">Add basic select input</label>
                        <select id="exampleText_selectInput" name="exampleText_selectInput">
                            <option selected>Select option...</option>
                            <option>Value 1</option>
                            <optgroup label="Your label">
                                <option>Value 2</option>
                            </optgroup>
                        </select>

                        <label for="exampleText_selectMultipleInput">Add multiple select input</label>
                        <select multiple id="exampleText_selectMultipleInput" name="exampleText_selectMultipleInput">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>

                        <button type="submit" class="btn btn-green" onclick="return false;">Submit</button>
                        <button type="reset" class="btn btn-default">Clear form</button>
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

        <span class="tag-html"><</span><span class="tag-html">label</span> <span class="attribut-html">for=</span><span class="value-html">"exampleText_fileInput"</span><span class="tag-html">></span>Add basic input file in your form<span class="tag-html"><</span><span class="tag-html">/label></span>
        <span class="tag-html"><</span><span class="tag-html">input</span> <span class="attribut-html">id=</span><span class="value-html">"exampleText_fileInput"</span> <span class="attribut-html">name=</span><span class="value-html">"exampleText_fileInput"</span> <span class="attribut-html">type=</span><span class="value-html">"file"</span><span class="tag-html">></span>
        <span class="tag-html"><</span><span class="tag-html">div</span> <span class="attribut-html">class=</span><span class="value-html">"small-precision-input"</span><span class="tag-html">></span>Add information about your input file<span class="tag-html"><</span><span class="tag-html">/div></span>

        <span class="tag-html"><</span><span class="tag-html">label</span> <span class="attribut-html">for=</span><span class="value-html">"exampleText_selectInput"</span><span class="tag-html">></span>Add basic input file in your form<span class="tag-html"><</span><span class="tag-html">/label></span>
        <span class="tag-html"><</span><span class="tag-html">select</span> <span class="attribut-html">id=</span><span class="value-html">"exampleText_selectInput"</span> <span class="attribut-html">name=</span><span class="value-html">"exampleText_selectInput"</span><span class="tag-html">></span>
            <span class="tag-html"><</span><span class="tag-html">option</span> <span class="attribut-html">selected</span><span class="tag-html">></span>Select option...<span class="tag-html"><</span><span class="tag-html">/option></span>
            <span class="tag-html"><</span><span class="tag-html">option</span><span class="tag-html">></span>Value 1<span class="tag-html"><</span><span class="tag-html">/option></span>
            <span class="tag-html"><</span><span class="tag-html">optgroup</span> <span class="attribut-html">label=</span><span class="value-html">"Your label"</span><span class="tag-html">></span>
                <span class="tag-html"><</span><span class="tag-html">option</span><span class="tag-html">></span>Value 2<span class="tag-html"><</span><span class="tag-html">/option></span>
            <span class="tag-html"><</span><span class="tag-html">/optgroup></span>
        <span class="tag-html"><</span><span class="tag-html">/select></span>

        <span class="tag-html"><</span><span class="tag-html">label</span> <span class="attribut-html">for=</span><span class="value-html">"exampleText_selectMultipleInput"</span><span class="tag-html">></span>Add multiple select input<span class="tag-html"><</span><span class="tag-html">/label></span>
        <span class="tag-html"><</span><span class="tag-html">select</span> <span class="attribut-html">multiple</span> <span class="attribut-html">id=</span><span class="value-html">"exampleText_selectMultipleInput"</span> <span class="attribut-html">name=</span><span class="value-html">"exampleText_selectMultipleInput"</span><span class="tag-html">></span>
            <span class="tag-html"><</span><span class="tag-html">option</span><span class="tag-html">></span>1<span class="tag-html"><</span><span class="tag-html">/option></span>
            <span class="tag-html"><</span><span class="tag-html">option</span><span class="tag-html">></span>2<span class="tag-html"><</span><span class="tag-html">/option></span>
            <span class="tag-html"><</span><span class="tag-html">option</span><span class="tag-html">></span>...<span class="tag-html"><</span><span class="tag-html">/option></span>
        <span class="tag-html"><</span><span class="tag-html">/select></span>

        <span class="tag-html"><</span><span class="tag-html">button</span> <span class="attribut-html">type=</span><span class="value-html">"submit"</span> <span class="attribut-html">class=</span><span class="value-html">"btn btn-green"</span><span class="tag-html">></span>Submit<span class="tag-html"><</span><span class="tag-html">/button></span>
        <span class="tag-html"><</span><span class="tag-html">button</span> <span class="attribut-html">type=</span><span class="value-html">"reset"</span> <span class="attribut-html">class=</span><span class="value-html">"btn btn-green"</span><span class="tag-html">></span>Reset form<span class="tag-html"><</span><span class="tag-html">/button></span>
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