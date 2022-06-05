<?php

/**
 * Nama Class: Form
 * Deskripsi: Class untuk membuat form inputan text sederhana
 */

class form
{
  private $fields = array();
  private $action;
  private $submit = "submit Form";
  private $jumfield = 0;

  public function __construct($action, $submit)
  {
    $this->action = $action;
    $this->submit = $submit;
  }

  public function displayForm()
  {
    echo "<form action='" . $this->action . "' method='POST'>";
    echo '<table width="100%" border="0">';
    for ($j = 0; $j < count($this->fields); $j++) 
    {
      echo "<tr><td 
        align='right'>" . $this->fields[$j]['label'] . "</td>";
      echo "<td><input type='text'
        name='".$this->fields[$j]['name']."'></td></tr>";
    }
    echo "<tr><td colspan='2'>";
    echo "<input type='submit' value='".$this->submit."'></td></tr>";
    echo "</table>";
  }

  public function addField($name, $label)
  {
    $this->fields [$this->jumfield]['name'] = $name;
    $this->fields [$this->jumfield]['label'] = $label;
    $this->jumfield ++;
  }
}
