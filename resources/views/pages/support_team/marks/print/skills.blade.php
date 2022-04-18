<div>
    {{--KEYS TO RATING--}}
    <div style="float: left;margin-top: -20px">
        <br>
        <strong style="text-decoration: underline;">GRADING KEY (MSCE)</strong> <br>
        <span style="font-size: 15px;float: center"><b>1,2 =></b> &nbsp;Distinction</span>&nbsp;<b style="text-shadow:;font-size: 14px">(80-100 & 70-79) </b>respectively <br>
        <span style="font-size: 15px;float: center"> <b>3 &nbsp; =></b>&nbsp;&nbsp;Credit</span>&nbsp;<b style="text-shadow:;font-size: 14px"> (65-69) </b> <br>
        <span style="font-size: 15px;float: center"> <b>4-8 =></b>&nbsp;Pass</span>&nbsp;<b style="text-shadow:;font-size: 14px"> (60-64,55-59,50-54,45-49 & 40-44)</b> respectively <br>
        <span style="font-size: 15px;float: center"> <b> 9   => </b>&nbsp;&nbsp;&nbsp;Fail</span>&nbsp;<b style="text-shadow:;font-size: 14px"> (0-39) </b> <br>
        <!--span>1 - Poor</span> <br-->
    </div>
       <table  style="width:25%; border-collapse:collapse;border: 1px solid #000;  margin-top: -8px;margin-left: 370px" border="1">
        <thead>
        <tr>
           <td>AFFECTIVE TRAITS</td> 

           <td>RATING</td> 
        
        </tr>

        </thead>
        </table>
    
        <div style="float:right;margin-top:-30px">
        <br>
        <strong style="text-decoration: underline;">GRADING KEY (JCE)</strong> <br>
        <span style="font-size: 15px;float: center"><b>A &nbsp;=></b>Excellent</span>&nbsp;<b style="text-shadow:;font-size: 14px">(80-100) </b> <br>
        <span style="font-size: 15px;float: center"> <b>B &nbsp;=></b>Very good</span> &nbsp;<b style="text-shadow:;font-size: 14px">(70-79) </b><br>
        <span style="font-size: 15px;float: center"> <b>C =></b>&nbsp;Good</span>&nbsp;<b style="text-shadow:;font-size: 14px">(65-69) </b> <br>
        <span style="font-size: 15px;float: center"> <b> D   => </b>&nbsp;Pass</span>&nbsp;<b style="text-shadow:;font-size: 14px">(50-59) </b> <br>
        <span style="font-size: 15px;float: center"> <b> F   => </b>&nbsp;Fail</b>&nbsp;</span>&nbsp;<b style="text-shadow:;font-size: 14px">(0-49) </b><br>
        <!--span>1 - Poor</span> <br-->
    </div>
    
    <table  style="width:30%; border-collapse:collapse;border: 1px solid #000;  margin-top: -10px;margin-right: -500px" border="1">
        <thead>
        <tr>
            
        </tr>
        </thead>
        <tbody>
        @foreach ($skills->where('skill_type', 'PS') as $ps)
            <tr>
                <td>{{ $ps->name }}</td>
                <td>{{ $exr->ps ? explode(',', $exr->ps)[$loop->index] : '' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
