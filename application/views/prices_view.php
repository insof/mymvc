<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <?php
                $myurl = "https://docs.google.com/spreadsheets/d/1dUJ9Gsf56UsJCR4BUHL00V9oHyz_wVeGYGJyTWE_0D8/export?format=csv&id=1dUJ9Gsf56UsJCR4BUHL00V9oHyz_wVeGYGJyTWE_0D8";
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $myurl);
                curl_setopt($curl, CURLOPT_POST, false);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($curl);
                curl_close($curl);
                $res = explode("\n", $response);
                echo '<table class="table table-striped table-hover">';
                foreach ($res as $row) {
                    $row = explode(",", $row);
                    echo '<tr>';
                    echo '<td width="5%" align="center">' . $row[0] . '</td>';
                    echo '<td width="80%" align="left">' . $row[1] . '</td>';
                    echo '<td width="10%" align="right">' . $row[2] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
                ?>
            </div>
        </div>
    </div>

</main>