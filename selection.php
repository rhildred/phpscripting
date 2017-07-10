<h1>Grade calculator</h1>
<p>This makes a comment on a numerical grade between 1 and 100</p>
<form>
<input name="grade" placeholder="input grade here"/><input type="submit" />
</form>

<?php

//print_r($_SERVER);
echo json_encode($_SERVER);
echo "<br />";
if(array_key_exists('HTTP_REFERER', $_SERVER))
{
    $sReferer = $_SERVER['HTTP_REFERER'];

    echo "The referer was " . $sReferer . "<br />";

}
if(array_key_exists("grade", $_GET))
{
    // value from form
    $grade = $_GET["grade"];

    if($grade == 100)
    {
        echo "perfecto!";
    }
    elseif($grade > 55)
    {
        echo "you didn't get perfect, but you passed";
    }
    else
    {
        echo "you failed";
    }
}
