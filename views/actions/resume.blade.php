<html>
<head>
    <title>
        {{ $fullname }}
        's Resume
    </title>
    <style type="text/css">
        #ALLCONTENT {
             padding: 20px;
        }

            #FULLNAME {
                width: 40%;
                font-size: 200%;
                font-family: "Avenir";
                font-weight: bold;
                float: left;
                text-align: center;
            }

            #CONTACT {
                width: 30%;
                font-size: 120%;
                font-family: "Baskerville";
                float: left;
                text-align: center;
            }

            #ADDRESS {
                width: 30%;
                font-size: 120%;
                font-family: "Baskerville";
                float: left;
                text-align: center;
                word-wrap: break-word;
            }

            #SECOND {
                width: 40%;
                font-size: 140%;
                font-family: "Avenir";
                float: left;
                text-align: center;
            }

            #THIRD {
                width: 30%;
                font-size: 140%;
                margin-bottom: 5px;
                font-family: "Baskerville";
                float: left;
                text-align: center;
            }

            #FIRST {
                width: 30%;
                font-size: 140%;
                font-family: "Baskerville";
                float: left;
                text-align: center;
                word-wrap: break-word;
            }

            #CATEGORIES {
                margin-bottom: 2px;
                font-size: 160%;
                font-family: "Chalkboard SE Light";
            }

            #box {
                font-size: auto;
                width: 100%;
                height: auto;
                background-color: beige;
            }

            #INNER {
                padding: 2px;
                margin-bottom: 0px;
                font-size: 120%;
                background-color: white;
                width: 100%;
                height: auto;
                font-family: "Baskerville";
                float: left;
                word-wrap: break-word;
                
            }

            #INNER {
                margin-top: 0px;
                font-size: 120%;
                background-color: white;
                width: 100%;
                height: auto;
                font-family: "Baskerville";
                float: left;
                word-wrap: break-word;
                
            }

            #TITLE {
                font-weight: bold;
            }

            #MIX {
                font-weight: bold;   
                width: 40%;
                font-size: 140%;
                font-family: "Avenir";
                float: left;
                text-align: center;
            }
    </style>
</head>
<body>
    <div id="ALLCONTENT">
        <hr>
        <div id="ADDRESS">
            {{ $address }}
        </div>

        <div id="FULLNAME">
        {{ $fullname }}
        </div>

        <div id="CONTACT">
        {{ $email }} <br>
        {{ $mobile }}
        </div>
        
        <br><br>
        
        <div id="box">
        <p id="CATEGORIES">EDUCATION</p>
        </div>
        
        <div id="FIRST">
        {{ $location }}
        </div>
        
        <div id="MIX">
        {{ $collegename }}
        </div>
        
        <div id="THIRD">
        {{ $duration }}
        </div>
        
        <div id="INNER">
        {{ $program }} (CGPA: {{ $cgpa }} ) <br>
        {{ $courses}}
        </div>
        
        <br><br><br><br>
        
        <div id="box">
        <p id="CATEGORIES">TECHNICAL EXPERIENCE</p>
        </div>
        
        <div id="INNER">
        <div id="TITLE">
            {{ $ptitle1 }} [ {{ $duration1 }} ]
        </div>
        <br>
        {{ $description1 }}
        </div>

        <div id="INNER">
        <div id="TITLE">
            {{ $ptitle2 }} [ {{ $duration2 }} ]
        </div>
        <br>
        {{ $description2 }}
        </div>

        <div id="INNER">
        <div id="TITLE">
            {{ $ptitle3 }} [ {{ $duration3 }} ]
        </div>
        <br>
        {{ $description3 }}
        </div>

        <br><br> <br>
        <div id="box">
        <p id="CATEGORIES">ADDITIONAL EXPERIENCES AND AWARDS</p>
        </div>

        <div id="INNER">
            <ul>
                <li>{{ $award1 }}</li>
                <li>{{ $award2 }}</li>                
                <li>{{ $award3 }}</li>                
                <li>{{ $award4 }}</li>
                <li>{{ $award5 }}</li>                
            </ul>
        </div>

        <br><br> <br>
        <div id="box">
        <p id="CATEGORIES">WORK EXPERIENCE</p>
        </div>

        <div id="FIRST">
            {{ $place1 }}
        </div>

        <div id="MIX">
            {{ $cname1 }}
        </div>

        <div id="THIRD">
            {{ $c_duration1 }}
        </div>

        <div id="INNER">
            {{ $c_description1 }}
        </div>

        
        <br><br> <br>
        <div id="box">
        <p id="CATEGORIES">LANGUAGES AND TECHNOLOGIES</p>
        </div>

        <div id="INNER">
            <ul>
                <li>{{ $languages }}</li>
                <li>{{ $techno }}</li>
                <li>{{ $oper }}</li>
            </ul>
        </div>

        <hr>
        
    </div>
</body>
</html>