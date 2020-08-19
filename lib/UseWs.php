<?php
include 'WebServices.php';

class UseWs
{
    //the first method that came from the C# web servive
    //the method brings the relevent data for the user to see
    //the data comes row and basic and the app fill the obj with 
    public function Logon($EmpCode)
    {

        $ws = new WebServices;

        $url = "http://ws-gan/wshr/ser1.asmx/Logon";

        $field = "EmpNum";

        $par = $EmpCode;

        $res = $ws->Post($url, $field, $par);

        $array = json_decode(json_encode(simplexml_load_string($res)), true);

        return $array;
    }

    public function GetManagerTutorials($EmpCode)
    {

        $ws = new WebServices;

        $url = "http://ws-gan/wshr/ser1.asmx/GetManagerTutorials";

        $field = "ManagerId";

        $par = $EmpCode;

        $res = $ws->Post($url, $field, $par);

        $array = json_decode(json_encode(simplexml_load_string($res)), true);

        return $array;
    }

    public function FollowUpTutorial($TutorialId)
    {

        $ws = new WebServices;

        $url = "http://ws-gan/wshr/ser1.asmx/GetTutorialDetails";

        $field = "TutorialId";

        $par = $TutorialId;

        $res = $ws->Post($url, $field, $par);

        $array = json_decode(json_encode(simplexml_load_string($res)), true);

        return $array;
    }
    //for gets all emps set the empNum to 0 else set an spcific empNumber
    public function getEmp($empNum)
    {

        $ws = new WebServices;

        $url = "http://ws-gan/wshr/ser1.asmx/GetEmpData";

        $field = "EmpNum";

        $par = $empNum;

        $res = $ws->Post($url, $field, $par);

        $array = json_decode(json_encode(simplexml_load_string($res)), true);

        return $array;
    }
    //requst from the ws empty row for fiil tutorial with
    //if tutorialId is empty gets empty rows alse gets exist tutorial for update
    public function createTutorial($data)
    {

        $ws = new WebServices;

        $url = "http://ws-gan/wshr/ser1.asmx/SetTutorial";

        $field = "json_Tutorial";

        $par = $data;

        $res = $ws->Post($url, $field, $par);

        $array = json_decode(json_encode(simplexml_load_string($res)), true);

        return $array;
    }

    public function getTutorial($tutorialId)
    {

        $ws = new WebServices;

        $url = "http://ws-gan/wshr/ser1.asmx/GetTutorial";

        $field = "TutorialId";

        $par = $tutorialId;

        $res = $ws->Post($url, $field, $par);

        $array = json_decode(json_encode(simplexml_load_string($res)), true);

        return $array;
    }

    public function DeptAllocation($data)
    {
        $ws = new WebServices;

        $url = "http://ws-gan/wshr/ser1.asmx/SetTutorial_Depts";

        $res = $ws->sandArray($url, $data);

        $array = json_decode(json_encode(simplexml_load_string($res)), true);

        return $array;
    }
}
