<?php

class AnalyzeCode 
{
    public function countLinesOfCode($post) 
    {
        $trimmedSnippet = trim($post);
        $trimmedSnippet = nl2br($trimmedSnippet);

        $numberOfLines = preg_split('/(<br \/>)/', $trimmedSnippet);
        $numberOfLines = count($numberOfLines);

        return $numberOfLines;
    } 
}