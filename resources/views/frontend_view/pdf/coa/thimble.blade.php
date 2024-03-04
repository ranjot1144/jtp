<html>

<head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">

        <style>

                @font-face { font-family: 'MyFont'; src: url('{{url('/fonts/centurygothic.ttf')}}') format('truetype') }

                  

                                footer {

                                    padding-bottom: 1em;

                                    width:100%;

                                    position: fixed;

                                    bottom: 2em;

                                }

                                footer div{

                                    font-size: 0.7em;

                                    display: inline-block;

                                    text-align: justify;

                                    margin: 0;

                                }

                                footer div p{

                                    margin: 0;

                                }

                                header{

                                    width:100%;

                                     border-bottom:3px solid #f5ad3c;

                                     display:block;

                                     padding-bottom: 1em;

                                }

                                header::after{

                                    content: "";

                    clear: both;

                    display: table;

                

                                }

                            

                               

                                ul{

                                    text-decoration: none;

                            

                                }

                                li{

                                    text-decoration: none;

                                    padding-top: 0.2em !important;

                                }

                

                                *{

                                    font-family: "MyFont",MyFont,"Century Gothic","Didact Gothic",sans-serif

                                }

                            </style>

</head>

<body>



    <small style="float: right; font-size:0.5em;">DOC 025 ISS 4</small>

    <header style="margin-top:0.5em;">



            <div style="display:block; float:left; width:60%">

                    <h1 style="margin:0; margin-top:2.2em; padding:0;">Certificate of Analysis </h1>



    



      



            </div>



                <div style="display:block; float:right;">

                     {{-- Have to put the directory to the live..  --}}

                     <img class="logo" style="width:40% height:100%; text-align:center;" src="{{public_path()}}/images/colour-logo.png" alt="">

                </div>

            </header>

        

    

       <div style="display: block; padding-top:0.5em;">

            <h3>Product Information</h3>

        

        

        <p><b>Product:</b> {{$productname}}</p>



        <p><b>Batch Number:</b> {{$data['Finished Product Batch No.'] }}</p>

        <p><b>Dimensions (mm):</b> {{$data['Dimensions (mm)'] }}</p>

        <p><b>Date of release:</b> {{$data['Date'] }}</p>

        @if($data['Expiry'])

        <p><b>Expiry:</b> {{$data['Expiry'] }}</p>

        @endif

       </div>

        

        <p style="margin-top:2em;">We confirm that the above mentioned product has successfully passed our quality control, in accordance with EN ISO 9001 and meets the specific criteria.</p>

        

        <p style="margin-top:2em;">This document has been produced electronically and is valid without a signature.</p>





        <p style="text-align: right; margin-top:4em; border-bottom:1px solid #f5ad3c; padding:0.6em; display:inline-block; float:right;"> Date of examination : {{$data['Date'] }} </p>

        <footer>

            <div style="width:25%;">

                <p>Johnson Test Papers Ltd</p>

                <p>Hainge Park, Hainge Road</p>

                <p>Oldbury, West Midlands</p>

                <p>B69 2NU, United Kingdom</p>

            </div>

        

            <div style="width:25% padding:1em;">

            <p><b>T:</b> +44 (0)121 559 3883</p>

            <p><b>F:</b> +44 (0)121 559 8235</p>

            <p><b>E:</b> info@jtp.uk.com</p>

            <p><b>W:</b> <a href="http://www.johnsontestpapers.com"></a>www.johnsontestpapers.com</p>

            </div>

        

            <div style="width:25%">

                    <p>Registered in England</p>

                    <p>Company Reg No: 4112470</p>

                    <p>VAT No: GB 754 691304</p>

                </div>

                <div style="position:relative; padding-left: 1em;">

                    {{-- Have to put the directory to the live..  --}}

                    <img src="{{public_path()}}/images/iso/iso13485.jpg" style="width:8em;"  alt="">



                    <img src="{{public_path()}}/images/iso/iso9001.jpg" style="width:8em;" alt="">

                    </div>

        </footer>



</body>

</html>







