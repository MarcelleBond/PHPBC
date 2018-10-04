#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        $argv[1] = preg_replace("/\"/", "",$argv[1]);
        if($ch = curl_init ($argv[1]))
        {
            $dir = preg_replace("/^(http|https):\/\//", "", $argv[1]);
            echo $dir."\n";
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
            $raw=curl_exec($ch);
            curl_close ($ch);
            if (file_exists("./".$dir."/") == false)
            {
                mkdir($dir, 0777);
            }

            $nb = preg_match("/(<\s*img\s*src=\")(.*?)\"/", $raw);
            echo $nb."\n";
            preg_match_all("/(<\s*img\s*src=\")(.*?)\"/", $raw, $matches, PREG_PATTERN_ORDER);

            $modified = preg_replace("/\//", "/\//", subject);
            foreach ($matches[2] as $key => $value)
            {
                $value = preg_replace("/^(http|https):\/\/$dir/", "", $value);
                echo $argv[1].$value."\n";
                $ch = curl_init($argv[1].$value);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
                $file = curl_exec($ch);
                curl_close ($ch);
                $fp = fopen($dir."/".basename($value),'w');
                fwrite($fp, $file);
                fclose($fp);
            }
        }
    }

?>
