
<?php


$client = new SoapClient("http://footballpool.dataaccess.eu/data/info.wso?wsdl");
$result = $client->TopGoalScorers(array('iTopN'=>5));





if ($_POST['topn'] > 0 && (int) $_POST['topn'] <= 20){
  $topn = (int) $_POST['topn'];
  $client = new SoapClient("http://footballpool.dataaccess.eu/data/info.wso?wsdl");
  $result = $client->TopGoalScorers(array('iTopN' => $topn));
  // Note that $array contains the result of the traversed object structure
  $array = $result->TopGoalScorersResult->tTopGoalScorer;

  print "
    <table border='2'>
      <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Goals</th>
      </tr>
  ";
  
  foreach($array as $k=>$v){
    print "
      <tr>
        <td align='right'>" . ($k+1) . "</td>
          <td>" . $v->sName . "</td>
          <td align='right'>" . $v->iGoals . "</td>
        </tr>";
  }
  
  print "</table>";
}
else {

?>

  <form id="topscorers" action="index.php" method="post">
    How long should your topscorers list be? (Choose a digit between 1 and 20).
    <input id="topn" name="topn" size="2" type="text" value="10" />
    <input id="submit" name="submit" type="submit" value="submit" />
  </form>

<?php

}

?>
