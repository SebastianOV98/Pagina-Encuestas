<meta charset="utf-8">
<?php
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=abc.xls");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);
?>

                                  <table class="table_inf" border='1'>
                                    <thead>
                                      <tr>
                                        <td>
                                          ID de la respuesta
                                        </td>
                                        <td>
                                          ID de la pregunta
                                        </td>
                                        <td>
                                           Pregunta
                                        </td>
                                        <td>
                                          Respuesta
                                        </td>
                                        <td>
                                         id_encuesta
                                        </td>
                                      </tr>
                                    </thead>
                                      <?php


                                        require('conexionBD.php');

                                        $resultado = $mysqli->query("Select * from respuestasencu");


                                        while ($fila = $resultado->fetch_assoc()) {
                                            echo "
                                            <tr>
                                              <td>
                                              $fila[id_respuestasencu]
                                              </td>
                                              <td>
                                              $fila[id_pregunta]
                                              </td>
                                              <td>
                                              $fila[pregunta]
                                              </td>
                                              <td>
                                              $fila[respuestaencu]
                                              </td>
                                              <td>
                                              $fila[id_encuesta]
                                              </td>
                                            
                                            
                                            
                                          
                                            </tr>

                                            ";
                                      } 
                                    ?>   
                                  </table>