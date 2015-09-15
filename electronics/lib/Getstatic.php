<?php

class Getstatic
{

    function home_base_url()
    {
        $url="http://localhost/electronics/";
        return $url;
    }

    function filterstring($data)
    {
        $result = $data;
        if ($result != "")
        {
            $result=str_replace("'","&rsquo;",$data);
            $result=str_replace("script","",$result);
            $result=str_replace("--","",$result);
            $result=str_replace("[","",$result);
            $result=str_replace("]","",$result);
            $result=str_replace("fopen","",$result);
            $result=str_replace("fclose","",$result);
            $result=str_replace("exec","",$result);
            $result=str_replace("<?","",$result);
            $result=str_replace("<?php","",$result);
            $result=str_replace("?>","",$result);
            //$result=str_replace(";","",$result);
            //$result=str_replace("&"," and ",$result);
            return $result;
        }
        return $result;
    }
}