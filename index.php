<!doctype html>
<html lang="en">
<head>
    <!--Mingi komentaar -->
    <link rel="stylesheet" href="Stylesheet.css">
    <base href="http://www.w3schools.com/images/" target="_blank">
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        p {color:red;}
        q {
            quotes: "«" "»" "‹" "›";
        }
    </style>
</head>
<body>
<main>
<div id="first">
<nav><a href="www.google.com">Google<br></a></nav>
<abbr title="Central Intelligence Agency">CIA<br></abbr>
<address>Martin Kooga<br>Jõhvi<br></address>
    <cite>Lorem ipsum.</cite>
<article><p><b>Lorem ipsum dolor sit amet, consectetur.</b></p></article>
<aside>Lorem ipsum dolor sit amet, consectetur.</aside>
<bdi>Lorem ipsum dolor sit amet.</bdi>
<bdo>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, neque.</bdo>
<blockquote>Lorem ipsum dolor.</blockquote>
    <span style="cursor:help">help</span><br>
<em>Lorem ipsum dolor sit amet, consectetur adipisicing.</em>
<dl>
    <dt>Meh</dt>
    <dd>Meh.</dd>
    <dt>Meh</dt>
    <dt>Meh</dt>
</dl>
    <del>Lorem ipsum dolor.</del>
    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
    <header>Lorem ipsum.</header><hr>
    <cite>Lorem ipsum dolor.</cite><br>
    <code><?php echo "Hello world!";?></code>
    <footer>Lorem ipsum dolor sit.</footer>
    <strong>Lorem ipsum dolor sit.</strong>
    <sub>Lorem ipsum dolor.</sub>
    <sup>Lorem ipsum.</sup>
    <u>Lorem ipsum dolor.</u>
    <s>Lorem ipsum.</s>
    <small>Lorem ipsum dolor sit amet.</small>
    <i>Lorem ipsum dolor sit.</i>
    <ins>Lorem ipsum dolor sit.</ins>
    <mark>Lorem ipsum dolor sit.</mark>
    <section>
    <q>Lorem ipsum.</q>
    <pre>Lorem ipsum dolor sit amet,       consectetur
    adipisicing elit. Atque consequatur dignissimos
    dolorum mollitia          nesciunt, suscipit.</pre>
    <p><dfn>HTML</dfn> is the standard markup language for creating web pages.</p>
    <kbd>Lorem ipsum dolor.</kbd><br>
    <samp>Sample output from a computer program</samp>
    </section>

</div>
    </main>
<div>
    <ol>
        <li>Lorem ipsum dolor sit.</li>
        <li>Lorem ipsum dolor.</li>
    </ol>
    <ul>
        <li>Lorem ipsum.</li>
        <li>Lorem.</li>
    </ul>
    <table>
        <colgroup>
            <col span="3">
        </colgroup>
        <thead>
        <th>
            <p><b>Lorem ipsum<wbr> dolor sit amet.</b></p>
        </th>
        <caption>Lorem<wbr> ipsum dolor sit <time>10:00</time>.</caption>
        </thead>
        <tbody>
        <tr>
           <td>
               <p>Lorem ipsum.</p>
           </td>
            <td>
                <p>Lorem ipsum dolor.</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Lorem ipsum dolor sit amet.</p>
            </td>
            <td>
                <p>Lorem ipsum dolor.</p>
            </td>
        </tr>
        </tbody>
        <tfoot>


        </tfoot>


    </table>

</div>
<div>
    <figure>
    <img src="http://psychiclibrary.com/beyondBooks/wp-content/uploads/2012/12/planets.jpg" width="145" height="126" alt="Planets" usemap="#planetmap">
        <figcaption>Fig.1 - Some planets.And the sun.</figcaption>
    <map name="planetmap">
        <area shape="circle" coords="0,82,126" alt="Sun" href="http://i.space.com/images/i/000/005/972/original/sun-photo-solar-filament-101118-02.jpg?1294094311">

    </figure>
</div>
<div>

    <button type="button" onclick="alert('Hello world!')">Sigh.</button>
    <audio controls>
        <source src="assets/audio/sigh.mp3" type"audio/mp3">
        <source src="assets/audio/sigh.wma" type"audio/wma">
    </audio>
    <video width="320" height="240" controls>
        <source src="assets/video/VICE.mp4" type="video/mp4">
        <track src="assets/video/VICE.srt" kind="subtitles" srclang="en" label="English">
        Your browser does not support the video tag.
    </video>
</div>
<div>
    <select>
        <optgroup label="Sigh">
        <option value="sigh">
Sigh
        </option>
            <optgroup label="Meh">
        <option value="meh">
            <span>Meh</span>
        </option>
    </select>
</div>
<div id="ruut">
    <canvas id="myCanvas"></canvas>

    <script>
        var canvas = document.getElementById("myCanvas");
        var ctx = canvas.getContext("2d");
        ctx.fillStyle = "#FF0000";
        ctx.fillRect(0, 0, 80, 80);
    </script>
    <noscript>Midagi läks valesti.</noscript>
</div>
<div id="lahtrid">
    <form action="demo_form.asp" method="get">
        <label for="browser">Browsers</label>
        <input id="browsers" list="browsers" name="browser">
        <datalist id="browsers">
            <option value="Internet Explorer">
            <option value="Firefox">
            <option value="Chrome">
            <option value="Opera">
            <option value="Safari">
        </datalist>
        <input type="submit">
    </form>
    <form action="demo_keygen.asp" method="get">
        Username: <input type="text" name="usr_name">
        Encryption: <keygen name="security">
            <input type="submit">
    </form>
    <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
        <input type="range" id="a" value="50">100
        +<input type="number" id="b" value="50">
        =<output name="x" for="a b"></output>
    </form>
    <details>
        <summary>Copyright 1999-2014.</summary>
        <p> - by Refsnes Data. All Rights Reserved.</p>
        <p><dialog open>This is an open dialog window</dialog></p>
    </details>

</div>
<div id="person">
    <form>
        <fieldset>
            <legend>Personalia:</legend>
            Name: <input type="text"><br>
            Email: <input type="text"><br>
            Date of birth: <input type="text">
        </fieldset>
    </form>
    <meter value="2" min="0" max="10">2 out of 10</meter><br>
    <progress value="22" max="100">
    </progress><br>
    <iframe src="http://www.w3schools.com">
    <embed src="assets/animations/Car-speakers-590x90.swf">
        <object data="assets/audio/sigh.wma">
            <param name="autoplay" value="true">
        </object>

</div>
<div id="flex">

</div>
<textarea rows="2" cols="30">
Lorem ipsum dolor sit amet, consectetur adipisicing.
</textarea>
</body>
</html>