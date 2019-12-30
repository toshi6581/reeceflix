<?php

class FormSanitizer
{
    
    public static function sanitizeFormString($inputText)
    {
        $inputText = strip_tags($inputText);
        $inputText = srt_replace(" ", "", $inputText);
        $inputText = strtolower($inputText);
        $inputText = ucfirst($inputText);
        return $inputText;
    }


}
