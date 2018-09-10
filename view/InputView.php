<?php

class InputView
{
    public function render()
    {
        $this->postData();

        return '
        <form method="POST">
        <fieldset>
        <input type="text" name="code">
        <input type="submit" value="submit"
        </fieldset>
        </form>
        ';
    }

    public function postData() {
        if (isset($_POST["code"])) {
            echo $_POST["code"];
        }
    }
}