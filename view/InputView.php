<?php

class InputView
{
    private static $codeSnippet = 'InputView::CodeSnippet';

    public function render()
    {
        $this->postData();

        return '
        <form method="POST">
        <fieldset>
        <textarea name="' . self::$codeSnippet . '"></textarea>
        <input type="submit" value="submit"
        </fieldset>
        </form>
        ';
    }

    public function postData() {
        if (isset($_POST[self::$codeSnippet])) {
            self::$codeSnippet = $_POST[self::$codeSnippet];

            $this->countLines();
        }
    }

    public function countLines() {
        $trimmedSnippet = trim(self::$codeSnippet);
        $trimmedSnippet = nl2br($trimmedSnippet);

        $numberOfLines = preg_split('/(<br \/>)/', $trimmedSnippet);
        $numberOfLines = count($numberOfLines);

        echo $numberOfLines;
    }
}