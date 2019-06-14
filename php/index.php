<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Assignment4/Style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <title>Hiragana Tutor App</title>

    <h1>ひらがな Tutor</h1>
    <div id="login" style="text-align: right;">
        <input type = 'text' placeholder="Username">
        <input type ='password' placeholder="password">
        <button type="submit" onclick="login()">Log in</button>
        <button type="submit" onclick="signup()">Sign up</button>
    </div>
</head>

<body background="background.jpg">
<center><table id="home">
    <tr id="0">
        <td>
            <div id="a" value="play" onclick="play(this)">
                <img class="gif" src="/Assignment4/characters/a.jpg" width="75px" height="75px">
                <audio id="audioa" src="/Assignment4/audio/a.ogg"></audio>
            </div>
            A
        </td>

        <td>
            <div id="i" value="play" onclick="play(this)">
                <img class="gif" src="/Assignment4/characters/i.jpg" width="75px" height="75px">
                <audio id="audioi" src="/Assignment4/audio/i.ogg"></audio>
            </div>
            I
        </td>

        <td>
            <div id="u" value="play" onclick="play(this)">
                <img class="gif" src="/Assignment4/characters/u.jpg" width="75px" height="75px">
                <audio id="audiou" src="/Assignment4/audio/u.ogg"></audio>
            </div>
            U
        </td>

        <td>
            <div id="e" value="play" onclick="play(this)">
                <img class="gif" src="/Assignment4/characters/e.jpg" width="75px" height="75px">
                <audio id="audioe" src="/Assignment4/audio/e.ogg"></audio>
            </div>
            E
        </td>

        <td>
            <div id="o" value="play" onclick="play(this)">
                <img class="gif" src="/Assignment4/characters/o.jpg" width="75px" height="75px">
                <audio id="audioo" src="/Assignment4/audio/o.ogg"></audio>
            </div>
            O
        </td>

        <td>
            <button id="0" type="button">Test this Row!</button>
        </td>

    </tr>

    <tr id="1">
        <td>
            <div id="ka" value="play" onclick="play(this)">
                <img class="gif" src="/Assignment4/characters/ka.jpg" width="75px" height="75px">
                <audio id="audioka" src="/Assignment4/audio/ka.ogg"></audio>
            </div>
            Ka
        </td>

        <td>
            <div id="ki" value="play" onclick="play(this)">
                <img class="gif" src="/Assignment4/characters/ki.jpg" width="75px" height="75px">
                <audio id="audioki" src="/Assignment4/audio/ki.ogg"></audio>
            </div>
            Ki
        </td>

        <td>
            <div id="ku" value="play" onclick="play(this)">
                <img class="gif" src="/Assignment4/characters/ku.jpg" width="75px" height="75px">
                <audio id="audioku" src="/Assignment4/audio/ku.ogg"></audio>
            </div>
            Ku
        </td>

        <td>
            <div id="ke" value="play" onclick="play(this)">
                <img class="gif" src="/Assignment4/characters/ke.jpg" width="75px" height="75px">
                <audio id="audioke" src="/Assignment4/audio/ke.ogg"></audio>
            </div>
            Ke
        </td>

        <td>
            <div id="ko" value="play" onclick="play(this)">
                <img class="gif" src="/Assignment4/characters/ko.jpg" width="75px" height="75px">
                <audio id="audioko" src="/Assignment4/audio/ko.ogg"></audio>
            </div>
            Ko
        </td>

        <td>
            <button id='1' type="button">Test this Row!</button>
        </td>
    </tr>
        <tr id="2">
            <td>
                <div id="sa" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/sa.jpg" width="75px" height="75px">
                    <audio id="audiosa" src="/Assignment4/audio/sa.ogg"></audio>
                </div>
                Sa
            </td>

            <td>
                <div id="shi" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/shi.jpg" width="75px" height="75px">
                    <audio id="audioshi" src="/Assignment4/audio/shi.ogg"></audio>
                </div>
                Si
            </td>

            <td>
                <div id="su" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/su.jpg" width="75px" height="75px">
                    <audio id="audiosu" src="/Assignment4/audio/su.ogg"></audio>
                </div>
                Su
            </td>

            <td>
                <div id="se" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/se.jpg" width="75px" height="75px">
                    <audio id="audiose" src="/Assignment4/audio/se.ogg"></audio>
                </div>
                Se
            </td>

            <td>
                <div id="so" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/so.jpg" width="75px" height="75px">
                    <audio id="audioso" src="/Assignment4/audio/so.ogg"></audio>
                </div>
                So
            </td>

            <td>
                <button id="2" type="button">Test this Row!</button>
            </td>

        </tr>

        <tr id="3">
            <td>
                <div id="ta" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/ta.jpg" width="75px" height="75px">
                    <audio id="audiota" src="/Assignment4/audio/ta.ogg"></audio>
                </div>
                Ta
            </td>

            <td>
                <div id="chi" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/chi.jpg" width="75px" height="75px">
                    <audio id="audiochi" src="/Assignment4/audio/chi.ogg"></audio>
                </div>
                Chi
            </td>

            <td>
                <div id="tsu" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/tsu.jpg" width="75px" height="75px">
                    <audio id="audiotsu" src="/Assignment4/audio/tsu.ogg"></audio>
                </div>
                Tsu
            </td>

            <td>
                <div id="te" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/te.jpg" width="75px" height="75px">
                    <audio id="audiote" src="/Assignment4/audio/te.ogg"></audio>
                </div>
                Te
            </td>

            <td>
                <div id="to" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/to.jpg" width="75px" height="75px">
                    <audio id="audioto" src="/Assignment4/audio/to.ogg"></audio>
                </div>
                To
            </td>

            <td>
                <button id="3" type="button">Test this Row!</button>
            </td>
        </tr>
        <tr id="4">
            <td>
                <div id="na" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/na.jpg" width="75px" height="75px">
                    <audio id="audiona" src="/Assignment4/audio/na.ogg"></audio>
                </div>
                Na
            </td>

            <td>
                <div id="ni" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/ni.jpg" width="75px" height="75px">
                    <audio id="audioni" src="/Assignment4/audio/ni.ogg"></audio>
                </div>
                Ni
            </td>

            <td>
                <div id="nu" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/nu.jpg" width="75px" height="75px">
                    <audio id="audionu" src="/Assignment4/audio/nu.ogg"></audio>
                </div>
                Nu
            </td>

            <td>
                <div id="ne" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/ne.jpg" width="75px" height="75px">
                    <audio id="audione" src="/Assignment4/audio/ne.ogg"></audio>
                </div>
                Ne
            </td>

            <td>
                <div id="no" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/no.jpg" width="75px" height="75px">
                    <audio id="audiono" src="/Assignment4/audio/no.ogg"></audio>
                </div>
                No
            </td>

            <td>
                <button id="4" type="button">Test this Row!</button>
            </td>

        </tr>

        <tr id="5">
            <td>
                <div id="ha" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/ha.jpg" width="75px" height="75px">
                    <audio id="audioha" src="/Assignment4/audio/ha.ogg"></audio>
                </div>
                Ha
            </td>

            <td>
                <div id="hi" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/hi.jpg" width="75px" height="75px">
                    <audio id="audiohi" src="/Assignment4/audio/hi.ogg"></audio>
                </div>
                Hi
            </td>

            <td>
                <div id="fu" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/fu.jpg" width="75px" height="75px">
                    <audio id="audiofu" src="/Assignment4/audio/fu.ogg"></audio>
                </div>
                Fu
            </td>

            <td>
                <div id="he" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/he.jpg" width="75px" height="75px">
                    <audio id="audiohe" src="/Assignment4/audio/he.ogg"></audio>
                </div>
                He
            </td>

            <td>
                <div id="ho" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/ho.jpg" width="75px" height="75px">
                    <audio id="audioho" src="/Assignment4/audio/ho.ogg"></audio>
                </div>
                Ho
            </td>

            <td>
                <button id="5" type="button">Test this Row!</button>
            </td>

        </tr>
        <tr id="6">
            <td>
                <div id="ma" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/ma.jpg" width="75px" height="75px">
                    <audio id="audioma" src="/Assignment4/audio/ma.ogg"></audio>
                </div>
                Ma
            </td>

            <td>
                <div id="mi" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/mi.jpg" width="75px" height="75px">
                    <audio id="audiomi" src="/Assignment4/audio/mi.ogg"></audio>
                </div>
                Mi
            </td>

            <td>
                <div id="mu" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/mu.jpg" width="75px" height="75px">
                    <audio id="audiou" src="/Assignment4/audio/mu.ogg"></audio>
                </div>
                Mu
            </td>

            <td>
                <div id="me" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/me.jpg" width="75px" height="75px">
                    <audio id="audioe" src="/Assignment4/audio/me.ogg"></audio>
                </div>
                Me
            </td>

            <td>
                <div id="mo" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/mo.jpg" width="75px" height="75px">
                    <audio id="audioo" src="/Assignment4/audio/mo.ogg"></audio>
                </div>
                Mo
            </td>

            <td>
                <button id="6" type="button">Test this Row!</button>
            </td>

        </tr>
        <tr id="7">
            <td>
                <div id="ra" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/ra.jpg" width="75px" height="75px">
                    <audio id="audiora" src="/Assignment4/audio/ra.ogg"></audio>
                </div>
                Ra
            </td>

            <td>
                <div id="ri" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/ri.jpg" width="75px" height="75px">
                    <audio id="audiori" src="/Assignment4/audio/ri.ogg"></audio>
                </div>
                Ri
            </td>

            <td>
                <div id="ru" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/ru.jpg" width="75px" height="75px">
                    <audio id="audioru" src="/Assignment4/audio/ru.ogg"></audio>
                </div>
                Ru
            </td>

            <td>
                <div id="re" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/re.jpg" width="75px" height="75px">
                    <audio id="audiore" src="/Assignment4/audio/re.ogg"></audio>
                </div>
                Re
            </td>

            <td>
                <div id="ro" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/ro.jpg" width="75px" height="75px">
                    <audio id="audioro" src="/Assignment4/audio/ro.ogg"></audio>
                </div>
                Ro
            </td>

            <td>
                <button id="7" type="button">Test this Row!</button>
            </td>

        </tr>
        <tr id="8">
            <td>
                <div id="ya" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/ya.jpg" width="75px" height="75px">
                    <audio id="audioya" src="/Assignment4/audio/ya.ogg"></audio>
                </div>
                Ya
            </td>

            <td>
                <div id="wa" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/wa.jpg" width="75px" height="75px">
                    <audio id="audiowa" src="/Assignment4/audio/wa.ogg"></audio>
                </div>
                Wa
            </td>

            <td>
                <div id="yu" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/yu.jpg" width="75px" height="75px">
                    <audio id="audioyu" src="/Assignment4/audio/yu.ogg"></audio>
                </div>
                Yu
            </td>

            <td>
                <div id="wo" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/wo.jpg" width="75px" height="75px">
                    <audio id="audiowo" src="/Assignment4/audio/wo.ogg"></audio>
                </div>
                Wo
            </td>

            <td>
                <div id="yo" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/yo.jpg" width="75px" height="75px">
                    <audio id="audioyo" src="/Assignment4/audio/yo.ogg"></audio>
                </div>
                Yo
            </td>

            <td>
                <div id="n" value="play" onclick="play(this)">
                    <img class="gif" src="/Assignment4/characters/n.jpg" width="75px" height="75px">
                    <audio id="audion" src="/Assignment4/audio/n.ogg"></audio>
                </div>
                N
            </td>

            <td>
                <button id="8" type="button">Test this Row!</button>
            </td>

        </tr>
        <p><a href="http://6iee.com/696760.html">Background link</a></p>
        <p><a href="http://www.guidetojapanese.org/learn/complete/hiragana">Audio</a></p>
        <p><a href="https://commons.wikimedia.org/wiki/Category:Hiragana_stroke_order_(animated_image_set)">Hiragana characters</a></p>
</table>

</body>

<script type="text/javascript">
var counter=0;
    $(document).ready(function () {
        //quiz button click
        $("button").click(function () {
            var id = this.id;
            var questionid = new Array();

            //Getting the ID's of each character in that row

            $("#" + id + " div").each(function(i) {
                questionid[i] = $(this).prop("id");
            });

            console.log(questionid);
            $("#home").hide();
            //sets up quiz template
            quiz(questionid);
        })
        //On hover the gif will play at the start instead of continuously playing in the background
        $(".gif").hover(
            function () {
                var src = $(this).attr("src");
                $(this).attr("src", src.replace(/\.jpg$/i, ".gif"));
            },
            function () {
                var src = $(this).attr("src");
                $(this).attr("src", src.replace(/\.gif$/i, ".jpg"));
            });
    });

    //making the quiz template
    function quiz(questionid){

        // array spread
        // es6
        let ranquestions=[...questionid];

        ranquestions = KnuthShuffle(ranquestions);

        var quiztemplate = "<center id='quiztable'><table><th>What is the Romaji of these Hiragana</th><tr>";

        //Images to Romaji
        for(var i=0;i<5;i++) {
            var correct = ranquestions[i];

            let temparray = [...checkArray(ranquestions, correct)];

            quiztemplate += "<td id='"+correct+"'>" +
                "<div>" +
                "<img class = 'gif' src='/Assignment4/characters/" + correct + ".jpg' width='75px' height='75px'>" +
                "</div>" +
                "<select>" +
                "<option value='" + temparray[0] + "'><div>" + temparray[0] + "</div></option>" +
                "<option value='" + temparray[1] + "'>" + temparray[1] + "</option>" +
                "<option value='" + temparray[2] + "'>" + temparray[2] + "</option>" +
                "<option value='" + temparray[3] + "'>" + temparray[3] + "</option>" +
                "</select>" +
                "</td>";
        }
        quiztemplate+="</tr><th>What is the Hiragana of these Romaji</th><tr>";

        //romaji to hiragana
        for(var i=0;i<5;i++){
            var tempranquestions = [...ranquestions];
            var correct=tempranquestions[i];
            tempranquestions = [...checkArray(ranquestions,correct)];
            console.log(correct);
            quiztemplate+="<td id='"+correct+"'>" +
                "<div>" +
                "<div>"+correct+"</div>" +
                "</div>" +
                "<div><img class='gif' src='/Assignment4/characters/"+tempranquestions[0]+".jpg' onclick='' width='75px' height='75px'>1</div>" +
                "<div><img class='gif' src='/Assignment4/characters/"+tempranquestions[1]+".jpg' width='75px' height='75px'>2</div>" +
                "<div><img class='gif' src='/Assignment4/characters/"+tempranquestions[2]+".jpg' width='75px' height='75px'>3</div>" +
                "<div><img class='gif' src='/Assignment4/characters/"+tempranquestions[3]+".jpg' width='75px' height='75px'>4</div>" +
                "<select>" +
                "<option value='" + tempranquestions[0] + "'>1</option>" +
                "<option value='" + tempranquestions[1] + "'>2</option>" +
                "<option value='" + tempranquestions[2] + "'>3</option>" +
                "<option value='" + tempranquestions[3] + "'>4</option>" +
                "</select>" +
                "</td>";
        }

        quiztemplate+="</tr><tr><td><button type='button' onclick='submit()'>SUBMIT</button></td></tr></table></center>";
        $("#home").after(quiztemplate);
    }

    function submit(){
        var givenarray = new Array();
        var correctarray = new Array(10);
        var correct=0;

        $("option:selected").each(function(i) {
            givenarray[i] = $(this).val();

        });

        $("td:visible").each(function(i) {
                correctarray[i] = $(this).prop("id");
        });

        var total=10;
        for(var i=0;i<10;i++) {
            // console.log('equal?', correctarray[i] === givenarray[i]);
            if (givenarray[i] === correctarray[i]) {
                correct++;
            }
        }

        $("#quiztable").hide();
        counter++;
        var percent = (correct/total)*100;
        var redirect="<div id = 'homebtn'><p id='correct'>Quiz number: "+counter+" You got "+correct+" out of "+total+" correct: "+percent+"%</p>" +
            "<button type='submit' onclick='show()'>Press this to go home</button></div>";

        $("#quiztable").after(redirect);
    }

    function signup(){
        $("#login").hide();

        var x = "<div style='text-align: right'><input type='text' id='uid' placeholder='username' right'>" +
            "<input type='password' id='pwd' placeholder='password'>" +
            "<button type='submit' onclick='signup2()'>Submit</button></div>";

        $("#login").after(x);
    }

    function signup2(){
        var username=$('#uid').val();
        var password=$('#pwd').val();
        console.log(username);
    }

    function login(){

    }

    function show(){
        $("#home").show();
        $("#homebtn").hide();
    }
    function play(element) {
        var audio = document.getElementById("audio" + element.id);
        audio.play();
    }
    function checkArray(array,correct){
        var newarray = new Array();
        var temp;
        for(i=0;i<array.length;i++){
            newarray[i] = array[i];
            if(newarray[i] == correct){
                temp = newarray[0];
                newarray[i]=temp;
                newarray[0]=correct;
            }
        }
        newarray.length--;
        newarray=KnuthShuffle(newarray);
        return newarray;
    }
    //stackoverflow random sorting of array
    function KnuthShuffle(array){
        var currentIndex = array.length, temporaryValue, randomIndex;

        // While there remain elements to shuffle...
        while (0 !== currentIndex){
            // Pick a remaining element...
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;
            // And swap it with the current element.
            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }
        return array;
    }

</script>

</html>
