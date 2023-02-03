<head>
    <style>
       
    .row .card-border {
        margin-top: -10px;
       display:flex;
       border:none;
    }

    .monitoring-graph {
        position: absolute;
        z-index: 0;
        display: inline;
    }

    .monitoring-graph .container {
        position: absolute;
        margin-left: 130px;
        margin-top:10px;
    }
    .row .card-border .card-body {
        height: 485px;
        width:500px;
        border-left: 1px solid black;
        border-top:0px;
        border-bottom: 1px solid black;
    }

    @media screen and (max-width:900px) and (min-width:300px){
        .monitoring-graph .container {
            margin-top: 10px;
            margin-left:80px;
            
        }
        .row .card-border .card-body  {
            margin-top: -10px;
            display: none;
        }
    }
    </style>
</head>

    <div class="row">
        <div class='col-sm-1' style="margin-top:10px;">
            <p>January</p>
            <p>February</p>
            <p>March</p>
            <p>April</p>
            <p>May</p>
            <p>June</p>
            <p>July</p>
            <p>August</p>
            <p>September</p>
            <p>October</p>
            <p>November</p>
            <p>December</p>
        </div>
        <div class='col-sm card-border'>
            <div class='card '>
                <div class='card-body'>
                </div>
            </div>

        </div>
        <div class="col-sm monitoring-graph">
            <div class="container">
                <p style="background:blue; width:100px; height:25px;"></p>
                <p style="background:blue; width:1px; height:25px;"></p>
                <p style="background:blue; width:200px; height:25px;"></p>
                <p style="background:blue; width:35px;"></p>
                <p>test</p>
                <p>test</p>
                <p>test</p>
                <p>test</p>
                <p>test</p>
                <p>test</p>
                <p>test</p>
                <p>test</p>
                <p>test</p>
            </div>
        </div>
    </div>
</div>