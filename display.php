<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="coolStyle.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="indexJava.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <title>Login</title>
</head>

<body>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.html">Home</a>
        <a href="calculate.html">Calculate Score</a>
        <a href="historical.html">View Previous Scores</a>
    </div>
    <div id="holder" class="holder">
        <div class="w3-card-4 column">

            <header class="w3-container w3-blue">
                <a href="#" onclick="toggle_visibility('bed1');">
                    <h1>Bed 1</h1>
                </a>
            </header>

            <div id="bed1" class="w3-container hidden">

                <li v-for="vector in vectors">
                    {{ vector.text }}
                </li>

            </div>

            <footer class="w3-container w3-green">
                <h5>Safe</h5>
            </footer>

        </div>
        <div class="w3-card-4 column">

            <header class="w3-container w3-blue">
                <a href="#" onclick="toggle_visibility('bed2');">
                    <h1>Bed 2</h1>
                </a>
            </header>

            <div id="bed2" class="w3-container hidden">
                <ul>
                    <li v-for="vector in vectors">
                        {{ vector.text }}
                    </li>
                </ul>
            </div>

            <footer class="w3-container w3-yellow">
                <h5>In Danger</h5>
            </footer>

        </div>
        <div class="w3-card-4 column">

            <header class="w3-container w3-blue">
                <a href="#" onclick="toggle_visibility('bed3');">
                    <h1>Bed 3</h1>
                </a>
            </header>

            <div id="bed3" class="w3-container hidden">
                <ul>
                    <li v-for="vector in vectors">
                        {{ vector.text }}
                    </li>
                </ul>
            </div>

            <footer class="w3-container w3-red">
                <h5>Needs Immediate Assitance</h5>
            </footer>

        </div>
    </div>
</body>
<script>
        var app2 = new Vue({
            el: '#bed3',
            data: {
                vectors: [{
                        text: 'Behavior Appropriate'
                    },
                    {
                        text: 'Cap Refill < 2'
                    }, {
                        text: 'Heart Rate Stable'
                    }, {
                        text: ' Mean Arterial pressure Stable'
                    },
                    {
                        text: 'Apnea None'
                    },
                    {
                        text: 'Respiratory Rate No Change'
                    },
                    {
                        text: 'Bowel Sounds Normoactive'
                    },
                    {
                        text: 'Abdomen Signs Soft , Non distended, nontender'
                    },
                    {
                        text: "Emesis None"
                    }
    
                ]
            }
        })
    </script>
<script>
    var app2 = new Vue({
        el: '#bed2',
        data: {
            vectors: [{
                    text: 'Behavior Appropriate'
                },
                {
                    text: 'Cap Refill < 2'
                }, {
                    text: 'Heart Rate Stable'
                }, {
                    text: ' Mean Arterial pressure Stable'
                },
                {
                    text: 'Apnea None'
                },
                {
                    text: 'Respiratory Rate No Change'
                },
                {
                    text: 'Bowel Sounds Normoactive'
                },
                {
                    text: 'Abdomen Signs Soft , Non distended, nontender'
                },
                {
                    text: "Emesis None"
                }

            ]
        }
    })
</script>
<script>
    var app1 = new Vue({
        el: '#bed1',
        data: {
            vectors: [{
                    text: 'cap refill 2'
                },
                {
                    text: 'HR 139'
                },
                {
                    text: 'MAP 37'
                },
                {
                    text: 'RR 48'
                },
                {
                    text: 'WOB none'
                },
                {
                    text: 'FiO2 0.21'
                },
                {
                    text: 'Support Room Air'
                },
                {
                    text: 'Assessment soft, nontender'
                },
                {
                    text: 'Girth 26'
                },
                {
                    text: "sounds normoactive"
                },
                {
                    text: "emesis no"
                },
                {
                    text: "residuals no"
                },
                {
                    text: "feed volume"
                },
            ]
        }
    })
</script>
<script type="text/javascript">
    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if (e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
    }
</script>

</html>