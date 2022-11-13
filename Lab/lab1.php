<div>
<hr/>
</div>

<div>
<h1>Sort using JS </h1>
<div>
    <h2>Find max and minimum number of given array: 5,	25,	13,	8,	45,	6,	11</h2>
        <p id="max">Show max</p>
        <button type="button" onclick="document.getElementById('max').innerHTML = max">Show max</button>
        <button type="button" onclick="document.getElementById('max').innerHTML = min">Show min</button>
</div>

<div>
    <h2>Sort the given array: 5,	25,	13,	8,	45,	6,	11</h2>
        <p id="sort"></p>
        <button type="button" onclick="document.getElementById('sort').innerHTML = a1">Sort ascending</button>
        <button type="button" onclick="document.getElementById('sort').innerHTML = a2">Sort descending</button>
</div>
</div>

<div>
<hr/>
</div>

<h1>Sort using PHP</h1>

<?php
$cars = array(5,	25,	13,	8,	45,	6,	11);
$a1 = $cars;
$a2 = $cars;

$clength1 = count($a1);
$clength2 = count($a2);

for($x = 1; $x < $clength1; $x++) {
  for($y = 0; $y < $x; $y++) {
    if($a1[$x] < $a1[$y]){
      $x1 = $a1[$x];
      $a1[$x] = $a1[$y];
      $a1[$y] = $x1;
    }
  }
}

for($x = 1; $x < $clength2; $x++) {
  for($y = 0; $y < $x; $y++) {
    if($a2[$x] > $a2[$y]){
      $x1 = $a2[$x];
      $a2[$x] = $a2[$y];
      $a2[$y] = $x1;
    }
  }
}

for($x = 0; $x < $clength1; $x++) {
  echo $a1[$x];
    if($x < $clength1 - 1)
      echo ";";
}

echo "<br>";

for($x = 0; $x < $clength2; $x++) {
  echo $a2[$x];
    if($x < $clength2 - 1)
      echo ";";
}

?>