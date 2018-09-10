<?php

require_once('model/AnalyzeCode.php');

class OutputView
{
    private static $codeSnippet = 'InputView::CodeSnippet';

    public function response() {
        $post = $this->retrieveIncomingPost();
        $htmlOutput = $this->getHtmlOutput($post);
        return $htmlOutput;
    }

    public function retrieveIncomingPost() {
        if (isset($_POST[self::$codeSnippet])) {
            $post = $_POST[self::$codeSnippet];

            return $post;
        }
    }

    public function getHtmlOutput ($post) {
        $analyzeCode = new AnalyzeCode();
        $numberOfLines = $analyzeCode->countLinesOfCode($post);
        return "<p>$numberOfLines lines of code.</p>";       
    }   
}