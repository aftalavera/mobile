<head>

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.6.0/build/cssgrids/grids-min.css">

    <style>

    body {

        margin: auto; /* center in viewport */

        width: 960px;

    }



    table { border: 1px outset black; }

    td { border: 1px solid black; }

    th { border: 1px solid black; }



    #table {

        width: 470px;

        border-top: 4px solid #e3e7e7;

    }



    #table p {

        clear: both;

        width: 100%;

        margin: 0;

    }



    #table span {

        float: left;

        padding: 0 10px;

        border-left: 1px solid #e3e7e7;

        border-bottom: 1px solid #e3e7e7;

    }



    #table span.col1 {

        width: 110px;

    }



    #table span.col2 {

        width: 186px;

    }

    #table span.col3 {

        width: 110px;

        border-right: 1px solid #e3e7e7;

    }


    </style>

</head>



<body>

    <div class="yui3-u">

        <div id="table">

        <?php

            foreach ($afiliados->result() as $row)

                echo '<p><span class="col1">' .$row->precinto. '</span><span class="col2">'.$row->total.'</span></p>';

        ?>

        </div> <!-- eof #table -->


		

    </div>

</body>

	

	

	

	

	

	

	

	

	