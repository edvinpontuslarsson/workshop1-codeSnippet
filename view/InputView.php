<?php

class InputView
{
    private static $codeSnippet = 'InputView::CodeSnippet';

    public function renderHTMLInputField()
    {
        return '
        <form action="output.php" method="POST">
        <fieldset>
        <textarea name="' . self::$codeSnippet . '"></textarea>
        <input type="submit" value="submit"
        </fieldset>
        </form>
        ';
    }
}