<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Conversion</title>
    <link rel="stylesheet" href="act1.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
     <a href="index.php" class="return-button">←</a>

    <div class="container">
        <h1 class="page-title">Activity 1: Measure Conversion Chart</h1>

        <?php

        $value = 1;

        // metric

        $cm_to_mm   = $value * 10;
        $dm_to_cm   = $value * 10;
        $m_to_cm    = $value * 100;
        $km_to_m    = $value * 1000;

        // imperial
 
        $ft_to_in   = $value * 12;
        $yd_to_ft   = $value * 3;
        $ch_to_yd   = $value * 22;
        $fur_to_yd  = $value * 220;
        $fur_to_ch  = $value * 10;
        $mi_to_yd   = $value * 1760;
        $mi_to_fur  = $value * 8;

        // metric to imperial

        $mm_to_in   = $value * 0.03937;
        $cm_to_in   = $value * 0.39370;
        $m_to_in    = $value * 39.37008;
        $m_to_ft    = $value * 3.28084;
        $m_to_yd    = $value * 1.09361;
        $km_to_yd   = $value * 1093.6133;
        $km_to_mi   = $value * 0.62137;

        // imperial to metric 

        $in_to_cm   = $value * 2.54;
        $ft_to_cm   = $value * 30.48;
        $yd_to_cm   = $value * 91.44;
        $yd_to_m    = $value * 0.9144;
        $mi_to_m    = $value * 1609.344;
        $mi_to_km   = $value * 1.609344;
        ?>


        <div class="section">
            <div class="section-header metric">METRIC CONVERSIONS</div>
            <table>
                <tr>
                    <td><?php echo $value; ?> centimetre</td>
                    <td class="eq">=</td>
                    <td><?php echo $cm_to_mm; ?> millimetres</td>
                    <td class="abbr"><?php echo $value; ?> cm</td>
                    <td class="eq">=</td>
                    <td><?php echo $cm_to_mm; ?> mm</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> decimetre</td>
                    <td class="eq">=</td>
                    <td><?php echo $dm_to_cm; ?> centimetres</td>
                    <td class="abbr"><?php echo $value; ?> dm</td>
                    <td class="eq">=</td>
                    <td><?php echo $dm_to_cm; ?> cm</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> metre</td>
                    <td class="eq">=</td>
                    <td><?php echo $m_to_cm; ?> centimetres</td>
                    <td class="abbr"><?php echo $value; ?> m</td>
                    <td class="eq">=</td>
                    <td><?php echo $m_to_cm; ?> cm</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> kilometre</td>
                    <td class="eq">=</td>
                    <td><?php echo $km_to_m; ?> metres</td>
                    <td class="abbr"><?php echo $value; ?> km</td>
                    <td class="eq">=</td>
                    <td><?php echo $km_to_m; ?> m</td>
                </tr>
            </table>
        </div>

        <!-- IMPERIAL CONVERSIONS -->
        <div class="section">
            <div class="section-header imperial">IMPERIAL CONVERSIONS</div>
            <table>
                <tr>
                    <td><?php echo $value; ?> foot</td>
                    <td class="eq">=</td>
                    <td><?php echo $ft_to_in; ?> inches</td>
                    <td class="abbr"><?php echo $value; ?> ft</td>
                    <td class="eq">=</td>
                    <td><?php echo $ft_to_in; ?> in</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> yard</td>
                    <td class="eq">=</td>
                    <td><?php echo $yd_to_ft; ?> feet</td>
                    <td class="abbr"><?php echo $value; ?> yd</td>
                    <td class="eq">=</td>
                    <td><?php echo $yd_to_ft; ?> ft</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> chain</td>
                    <td class="eq">=</td>
                    <td><?php echo $ch_to_yd; ?> yards</td>
                    <td class="abbr"><?php echo $value; ?> ch</td>
                    <td class="eq">=</td>
                    <td><?php echo $ch_to_yd; ?> yd</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> furlong</td>
                    <td class="eq">=</td>
                    <td><?php echo $fur_to_yd; ?> yards (or <?php echo $fur_to_ch; ?> chains)</td>
                    <td class="abbr"><?php echo $value; ?> fur</td>
                    <td class="eq">=</td>
                    <td><?php echo $fur_to_yd; ?> yd (or <?php echo $fur_to_ch; ?> ch)</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> mile</td>
                    <td class="eq">=</td>
                    <td><?php echo $mi_to_yd; ?> yards (or <?php echo $mi_to_fur; ?> furlongs)</td>
                    <td class="abbr"><?php echo $value; ?> mi</td>
                    <td class="eq">=</td>
                    <td><?php echo $mi_to_yd; ?> yd (or <?php echo $mi_to_fur; ?> fur)</td>
                </tr>
            </table>
        </div>

        <!-- METRIC → IMPERIAL CONVERSIONS -->
        <div class="section">
            <div class="section-header metric-imperial">METRIC → IMPERIAL CONVERSIONS</div>
            <table>
                <tr>
                    <td><?php echo $value; ?> millimetre</td>
                    <td class="eq">=</td>
                    <td><?php echo $mm_to_in; ?> inches</td>
                    <td class="abbr"><?php echo $value; ?> mm</td>
                    <td class="eq">=</td>
                    <td><?php echo $mm_to_in; ?> in</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> centimetre</td>
                    <td class="eq">=</td>
                    <td><?php echo $cm_to_in; ?> inches</td>
                    <td class="abbr"><?php echo $value; ?> cm</td>
                    <td class="eq">=</td>
                    <td><?php echo $cm_to_in; ?> in</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> metre</td>
                    <td class="eq">=</td>
                    <td><?php echo $m_to_in; ?> inches</td>
                    <td class="abbr"><?php echo $value; ?> m</td>
                    <td class="eq">=</td>
                    <td><?php echo $m_to_in; ?> in</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> metre</td>
                    <td class="eq">=</td>
                    <td><?php echo $m_to_ft; ?> feet</td>
                    <td class="abbr"><?php echo $value; ?> m</td>
                    <td class="eq">=</td>
                    <td><?php echo $m_to_ft; ?> ft</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> metre</td>
                    <td class="eq">=</td>
                    <td><?php echo $m_to_yd; ?> yards</td>
                    <td class="abbr"><?php echo $value; ?> m</td>
                    <td class="eq">=</td>
                    <td><?php echo $m_to_yd; ?> yd</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> kilometre</td>
                    <td class="eq">=</td>
                    <td><?php echo $km_to_yd; ?> yards</td>
                    <td class="abbr"><?php echo $value; ?> km</td>
                    <td class="eq">=</td>
                    <td><?php echo $km_to_yd; ?> yd</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> kilometre</td>
                    <td class="eq">=</td>
                    <td><?php echo $km_to_mi; ?> miles</td>
                    <td class="abbr"><?php echo $value; ?> km</td>
                    <td class="eq">=</td>
                    <td><?php echo $km_to_mi; ?> mi</td>
                </tr>
            </table>
        </div>

        <!-- IMPERIAL → METRIC CONVERSIONS -->
        <div class="section">
            <div class="section-header imperial-metric">IMPERIAL → METRIC CONVERSIONS</div>
            <table>
                <tr>
                    <td><?php echo $value; ?> inch</td>
                    <td class="eq">=</td>
                    <td><?php echo $in_to_cm; ?> centimetres</td>
                    <td class="abbr"><?php echo $value; ?> in</td>
                    <td class="eq">=</td>
                    <td><?php echo $in_to_cm; ?> cm</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> foot</td>
                    <td class="eq">=</td>
                    <td><?php echo $ft_to_cm; ?> centimetres</td>
                    <td class="abbr"><?php echo $value; ?> ft</td>
                    <td class="eq">=</td>
                    <td><?php echo $ft_to_cm; ?> cm</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> yard</td>
                    <td class="eq">=</td>
                    <td><?php echo $yd_to_cm; ?> centimetres</td>
                    <td class="abbr"><?php echo $value; ?> yd</td>
                    <td class="eq">=</td>
                    <td><?php echo $yd_to_cm; ?> cm</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> yard</td>
                    <td class="eq">=</td>
                    <td><?php echo $yd_to_m; ?> metres</td>
                    <td class="abbr"><?php echo $value; ?> yd</td>
                    <td class="eq">=</td>
                    <td><?php echo $yd_to_m; ?> m</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> mile</td>
                    <td class="eq">=</td>
                    <td><?php echo $mi_to_m; ?> metres</td>
                    <td class="abbr"><?php echo $value; ?> mi</td>
                    <td class="eq">=</td>
                    <td><?php echo $mi_to_m; ?> m</td>
                </tr>
                <tr>
                    <td><?php echo $value; ?> mile</td>
                    <td class="eq">=</td>
                    <td><?php echo $mi_to_km; ?> kilometres</td>
                    <td class="abbr"><?php echo $value; ?> mi</td>
                    <td class="eq">=</td>
                    <td><?php echo $mi_to_km; ?> km</td>
                </tr>
            </table>
        </div>

    </div>

</body>

</html>
