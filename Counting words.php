<?php
function countWords($str) {
    $text = "UP letters!..";
    $split = preg_split("/[^\f]*([\s]+[^\w]*|$)/", $text, -1, PREG_SPLIT_NO_EMPTY);
    print_r($split);
}
<form action="<?php $SERVER['PHPSELF']; ?>" method="get">
<input type="text" name="name" placeholder="Name"></input><br/>
<input type="submit" name="submit" value="Submit"></input>
</form>
if( $_GET["name"])
{
echo "Hello: ". $_GET['name']. "<br />";
}
