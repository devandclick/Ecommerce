<?php

namespace Pages\PagesBundle\Services;

class CurlUrl {
    
    public function check($site)
    {
        $site = curl_init($site);
        curl_setopt($site, CURLOPT_FAILONERROR, true);
        curl_setopt($site, CURLOPT_NOBODY, true);
        
        if (curl_exec($site) === false) 
            $curl = false;
        else
            $curl = true;
        
        curl_close($site);
        
        return $curl;
    }
    
    public function findUrl($value)
    {
        $violation = false;
        $urls = preg_match_all('/<a href="(.*)">/', $value, $url);
        
        foreach(array_unique($url[1]) as $site)
        {
            if ($this->check($site) === false) {
                $violation = true;
            }
        }

        return $violation;
    }
}

?>
