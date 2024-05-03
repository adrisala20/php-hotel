<?php 

$template="";
foreach($hotels as $hotel){
    $template .= "<tr> <td> {$hotel['name']}</td> <td>{$hotel['description']}</td> <td>{$hotel['parking']}</td> <td>{$hotel['vote']}</td><td>{$hotel['distance_to_center']} </td></tr>"; 
}
?>
<div>
<table class="table table-hover">
<thead>
    <tr>
      <th scope="col">Hotel</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza dal centro</th>
    </tr>
  </thead>
  <tbody>
  <?= $template ?>
  </tbody>
</table>
</div>