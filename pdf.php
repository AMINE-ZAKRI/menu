<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $ecole = $_POST['select2Basic'];
    $date = $_POST['flatpickr-range'];

    try {
        ob_start();
        ?>
        <style type="text/css">
       
        th {
            text-align: center;
            font-size: 24px;
            color: #7f6156;
            font-family: arlonb;
            /* border: 1px solid #000; */
        }
        td {
            width: 280px;
            /* height:100px; */
            /* border: 1px solid green; */   
        }
       span{
            font-size: 24px;
            color: #7f6156;
            font-family: arlonb;
            /* border: 1px solid #000; */
            margin-left:80px;

       }
       p{
        font-size:15px;
       }
  
        </style>
                     <?php
                   // Check if the date is provided
                        if (!empty($date)) {
                            // Explode the date range string into start and end dates
                            $dates = explode(' to ', $date);

                            // Format the start and end dates
                            $startFormatted = date('Y-m-d', strtotime($dates[0]));
                            $endFormatted = date('Y-m-d', strtotime($dates[1]));

                            // Concatenate the formatted dates into the desired format
                            $formattedDateRange = "DU $startFormatted AU $endFormatted";
                        } else {
                            // Set a default value for formattedDateRange
                            $formattedDateRange = "Date non fournie";
                        }
                    ?>


        <page  orientation="L" backcolor="#a9a727" backimg="pro2.png"  style="font: arial;">
            <div>
                <div align="left" style="margin-left: 15px; font-size:20px">
                    <!-- <label for="select2Basic" style="font-family:madimione; ">École:</label> -->
                    <h2 style="font-family:madimione;">École:<?php echo $ecole; ?></h2>
                </div>
                <div align="right" style="margin-right: 25px;font-size:20px";>
                    <label for="flatpickr-range"  style="font-family:madimione;margin-top: -25px; "></label>
                    <span style="font-family:madimione;margin-top: -45px;"> <?php
                    if (!empty($date)) {
                        // Display the formatted date range
                        echo "<span style=\"font-family:madimione;color:black;\">$formattedDateRange</span>";
                    } else {
                        // Display a message indicating that the date is required
                        echo "<span style=\"font-family:madimione;color:red;\">Veuillez fournir une date.</span>";
                    }
                  ?></span>

                </div>
            </div>

            <?php
            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // var_dump($_POST);
                echo "<table style=' position: absolute;
                top:330px;
                left:70px;
                '>";
                echo"<span>lundi</span>";
                echo "<thead>";
                echo "<tr>";
                $rowCount = count($_POST['group-a']);
                $paddingTop = 270 - ($rowCount * 60);
                echo "<th style='padding-top: {$paddingTop}px;'></th>";
                echo "</tr>";
                echo "</thead>";
                
                $array = $_POST['group-a'];
            
                foreach ($array as $value) {
                    // Initialize $mondayData for each row
                    $mondayData = '';
                    // Check if Monday data is submitted
                    if (isset($value['lundiselect']) && isset($value['lunditagify'])) {
                        $mondaySelect = $value['lundiselect'];
                        $mondayTagify = json_decode($value['lunditagify'], true);
                        
                        // Generate Monday data
                        $mondayData .= "<td>";
                        if ($mondaySelect !== 'Choisir Categorie') {
                            $mondayData .= "<p style='color:#c40b43;font-size:15px;font-weight:bold;margin-left: 0px;'>$mondaySelect</p>";
                        }
                        // Check if there are any items selected
                        if (!empty($mondayTagify)) {
                            foreach ($mondayTagify as $item) {
                                $mondayData .= "<p style='display:inline-block;margin:3px;  margin-right: 17px;'>•" . $item['value'] . "</p><br/>";
                            }
                        } else {
                            $mondayData .= "<p style='font-size:23px;color:#c9ca8c;margin-top:90px;'>La cantine n'est pas ouverte aujourd'hui<br>À demain!</p><br>";
                        }
                        $mondayData .= "</td>";
                        // Print table row
                        echo "<tr>";
                        echo $mondayData;
                        echo "</tr>";
                
                                     
                     }
                }
                
            
                echo "</table>";
                echo "<table style='position: absolute;top:330px;left:370px;'>";
                echo"<span>Mardi</span>";

                 echo "<tr>";
                 $rowCount = count($_POST['group-b']);
                 $paddingTop = 270 - ($rowCount * 60);
                 echo "<th style='padding-top: {$paddingTop}px;'></th>";
                 echo "</tr>";
                 $arrayb = $_POST['group-b'];       
                    foreach ($arrayb as $value) {
                        $tuesdayData = '';
                    // Check if Tuesday form is submitted
                    if (isset($value['mardiselect']) && isset($value['marditagify'])) {
                        $tuesdaySelect = $value['mardiselect'];
                        $tuesdayTagify = json_decode($value['marditagify'], true);

                        // Generate Tuesday data
                        $tuesdayData .= "<td>";
                        if ($tuesdaySelect !== 'Choisir Categorie'){
                            $tuesdayData .= "<p style='color:#c40b43;font-size:15px;font-weight: bold;margin-left: 0px;' >  $tuesdaySelect</p>";
                        }
                        // Check if there are any items selected
                        if (!empty($tuesdayTagify)) {
                            foreach ($tuesdayTagify as $item) {
                                $tuesdayData .= "<p style='display: inline-block;margin:3px; margin-right: 17px;'>•" . $item['value'] . "</p><br/>";
                            }
                        }else {
                            $tuesdayData.= "<p style='font-size:23px;color:#c9ca8c;margin-top:90px;'>La cantine n'est pas<br/> ouverte aujourd'hui<br/> À demain!</p><br>";
    
                        }

                        $tuesdayData .= "</td>";

                    } 
                     // Print table row
                     echo "<tr>";
                     echo $tuesdayData ;
                     echo "</tr>";
                 }
                  echo "</table>";
                  echo "<table style='position: absolute;top:330px;left:670px;'>";              
                  echo"<span>Mercredi</span>";
  
                   echo "<tr>";
                   $rowCount = count($_POST['group-c']);
                   $paddingTop = 270 - ($rowCount * 60);
                   echo "<th style='padding-top: {$paddingTop}px;'></th>";
                   echo "</tr>";
                   $arrayb = $_POST['group-c'];       
                      foreach ($arrayb as $value) {
                          $wednesdayData = '';
                      // Check if Tuesday form is submitted
                      if (isset($value['mercrediselect']) && isset($value['mercreditagify'])) {
                          $wednesdaySelect = $value['mercrediselect'];
                          $wednesdayTagify = json_decode($value['mercreditagify'], true);
  
                          // Generate Tuesday data
                          $wednesdayData .= "<td>";
                          if ($wednesdaySelect !== 'Choisir Categorie'){
                              $wednesdayData .= "<p style='color:#c40b43;font-size:15px;font-weight: bold;margin-left: 0px;' >  $wednesdaySelect</p>";
                          }
                          // Check if there are any items selected
                          if (!empty($wednesdayTagify)) {
                              foreach ($wednesdayTagify as $item) {
                                  $wednesdayData .= "<p style='display: inline-block;margin:3px; margin-right: 17px;'>•" . $item['value'] . "</p><br/>";
                              }
                          }else {
                              $wednesdayData.= "<p style='font-size:23px;color:#c9ca8c;margin-top:90px;'>La cantine n'est pas ouverte aujourd'hui<br>À demain!</p><br>";
      
                          }
  
                          $wednesdayData .= "</td>";
  
                      } 
                       // Print table row
                       echo "<tr>";
                       echo $wednesdayData ;
                       echo "</tr>";
                   }
                    echo "</table>";

                    echo "<table style='position: absolute;top:330px;left:992px;'>";
                    echo"<span>Jeudi</span>";

                    echo "<tr>";
                    $rowCount = count($_POST['group-d']);
                    $paddingTop = 270 - ($rowCount * 60);
                    echo "<th style='padding-top: {$paddingTop}px;'></th>";
                    echo "</tr>";
                   
                        $arrayd = $_POST['group-d'];

                        foreach ($arrayd as $value) {
                            $thursdayData = '';



                        // Check if Thursday form is submitted
                        if (isset($value['jeudiselect']) && isset($value['jeuditagify'])) {
                            $thursdaySelect = $value['jeudiselect'];
                            $thursdayTagify = json_decode($value['jeuditagify'], true);

                            // Generate Thursday data
                            $thursdayData .= "<td>";
                            if ($thursdaySelect !== 'Choisir Categorie'){
                                $thursdayData .= "<p style='color:#c40b43;font-size:15px;font-weight: bold;margin-left: 0px;' > $thursdaySelect</p>";
                            }

                            // Check if there are any items selected
                            if (!empty($thursdayTagify)) {
                                foreach ($thursdayTagify as $item) {
                                    $thursdayData .= "<p style='display: inline-block;margin:3px; margin-right: 17px;''>•" . $item['value'] . "</p><br/>";
                                }
                            }else {
                                $thursdayData.= "<p style='font-size:23px;color:#c9ca8c;margin-top:90px;'>La cantine n'est pas ouverte aujourd'hui<br> À demain!</p><br>";

                            }

                            $thursdayData .= "</td>";

                        } 
                        // Print table row
                        echo "<tr>";
                        echo $thursdayData ;
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<table style='position: absolute;top:330px;left:1290px;'>";
                    echo"<span>Vendredi</span>";

                    echo "<tr>";
                    $rowCount = count($_POST['group-e']);
                    $paddingTop = 270 - ($rowCount * 60);
                    echo "<th style='padding-top: {$paddingTop}px;'></th>";
                    echo "</tr>";
                 $arraye = $_POST['group-e'];
   
                       foreach ($arraye as $value) {
                           $fridayData = '';
   
                       // Check if Friday form is submitted
                       if (isset($value['vendrediselect']) && isset($value['vendreditagify'])) {
                           $fridaySelect = $value['vendrediselect'];
                           $fridayTagify = json_decode($value['vendreditagify'], true);
   
                           // Generate Friday data
                           $fridayData .= "<td>";
                           if ($fridaySelect !== 'Choisir Categorie'){
                               $fridayData .= "<p style='color:#c40b43;font-size:15px;font-weight: bold;margin-left: 0px;' > $fridaySelect</p>";
                           }
   
                           // Check if there are any items selected
                           if (!empty($fridayTagify)) {
                               foreach ($fridayTagify as $item) {
                                   $fridayData .= "<p style='display: inline-block;margin:3px; margin-right: 14px;'>•" . $item['value'] . "</p><br/>";
                               }
                           } else {
                               $fridayData.= "<p style='font-size:23px;color:#c9ca8c;margin-top:90px;'>La cantine n'est pas ouverte aujourd'hui<br> À demain!</p><br>";
                           }
                           $fridayData .= "</td>";
   
                       } 
                           // Print table row
                           echo "<tr>";
                           echo $fridayData ;
                           echo "</tr>";
                       }
                   echo "</table>";
                  
              


            }
            ?>
        </page>

        <?php
        $content = ob_get_clean();
        // echo $content;
        $html2pdf = new Html2Pdf('P', 'A3', 'fr', true, 'UTF-8', 0);
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content);
		$name=mt_rand();
        //$html2pdf->output('ticket.pdf'); 
        $currentDate = date('Y-m-d'); 
		//$html2pdf->output($_SERVER['DOCUMENT_ROOT'].'menu/uploads/'.$name.'.pdf', 'F');
		// $html2pdf->output($_SERVER['DOCUMENT_ROOT'] . 'assets - Copie/uploads/' . $ecole . '_' . $formattedDateRange . '_' . $currentDate . '.pdf', 'F');
        $html2pdf->output('ticket.pdf');
	// sendSMSFile("Menu pour l'ecole " . $ecole . ' ' . $date, "https://proxirest.ma/menu/uploads/" . $name . ".pdf");

        // $html2pdf->setDefaultFont("madimione");
        // $html2pdf->addFont("madimione", "", "vendor/tecnickvom/tcpdf/fonts/Madimi_One/MadimiOne-Regular.ttf");

        } catch (Html2PdfException $e) {
        $html2pdf->clean();

        $formatter = new ExceptionFormatter($e);
        echo $formatter->getHtmlMessage();
    }
} else {
    // If the form is not submitted, you can render the HTML form here
    // This part will be executed when the page loads initially
    // You can render your form HTML here
}

function sendSMSFile($msg,$file)
    {    $phone="0653572741";
        $msg = "$msg";
        //$msg = urlencode($msg);

        $phone = str_replace(' ', '', $phone);
        $phone = substr($phone, -9);

        $phone = ("+212" . $phone);



        $phone = (trim($phone));

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://whatsappnotif.com/api/create-message',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
              'appkey' => 'f547d535-68fe-4d17-bf51-4085a57edb09',
              'authkey' => 'zfGhhRLepc1dmdjjojFDQ4f9spHN0dUjkefqdit3NthVqW4ROz',
            'to' => $phone,
            'message' => $msg,
            'file' => $file,
            'sandbox' => 'false'
            ),
            ));

$response = curl_exec($curl);

curl_close($curl);

    }
    sendSMSFile("Menu pour l'ecole " . $ecole . ' ' . $date, "https://proxirest.ma/menu/uploads/" . $name . ".pdf");

?>


       
        
        
                        
