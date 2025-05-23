<?php
$subpath = dirname(dirname($_SERVER['REQUEST_URI']));
$incpath = "../../assets/inc";
include($incpath . "/config.php");
// Define the subpage logo path and link before including the header
$subPageLogo = $HVMapsLogo; // Use centralized HV-Maps logo
$subPageLink = $HVMapsMainpageURL; // Link to the current page since this is the mainpage
include($headerInc);
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HV-Maps</title>
	<!-- Include style file -->
    <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
</head>

<body>
    <div class="sub-body">


<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->
        <p style="text-align: right;">
            <button class="btn btn-outline-danger" 
                    onclick="location.href='https://physi.uni-heidelberg.de/Forschung/he/mu3e/wiki/index.php/Main_Page';">Internal Pages <i class="fas fa-external-link-alt"></i>
            </button>
        </p>    
        <div style="text-align: center;">
            <img src="<?php echo $figures;?>/HV-Maps/hybrid_monolithic.png" alt='HV_Maps_header' style="width: 60%;" />
        </div>
        </br>
        <h1 class="western">HV-MAPS @ HD-PI</h1> 

        <h2 class="western">High Voltage – Monolithic Active Pixel Sensors (HV-MAPS)</h2> 
        </br>
        <p class="block-text">
            The High Energy of the Physics Institute is developing High Voltage – Monolithic Active Pixel Sensors (HV-MAPS) for future particle physics experiments. 
            Pixel sensors provide spatial information at micrometer precision for particles in the momentum range from a few MeV to hundreds of GeV/c. 
            HV-MAPS allow for particle tracking at highest rates and are easy to produce compared to standard hybrid pixel detectors. Monolithic sensors have the additional advantage that very thin tracking modules can be built, 
            with a radiation length of only 0.11% in case of the Mu3e experiment. 
        </p>
        
        </br>

        
        <h3 class="western">HV-MAPS Concept</h3>

        <div class="sub-block-content">
            <p class="sub-block-text">
                HV-MAPS have been invented by Prof. I.Peric in 2007 and will be used by the coming Mu3e experiment (MuPix) and is baseline for the upgrade of the LHCb outer tracker upgrade project (MightyPix). 
                The main feature is the implementation of the sensor, amplifier, comparator and readout in the same die. Hits can be measured with a spatial resolutions of O(10) micrometer and a time resolutions of better than 5ns. 
                HV-MAPS have been produced in a commercial 180nm HV-CMOS process by Austria Micro Systems and TSI Semiconductor. Recently a new R&D project was launched based on the 130nm SiGe BICMOS process from IHP Frankfurt/Oder. 
            </p>
            <img class="sub-block-image" src="<?php echo $figures;?>/HV-Maps/hvmaps-method.png" alt="hvmaps-concept">
        </div>
    
        </br>
        <h3 class="western">Pixel Tracking Detectors</h3>

        <div class="sub-block-content">
            <p class="sub-block-text">
                The largest sensor produced so far is MuPix10 which will be used by the Mu3e experiment for constructing a large pixel tracking detector with an instrumented area of more than 1 square meter. 
                </br>
                </br>
                <button class="btn btn-danger" 
                onclick="location.href='<?php echo dirname($subpath);?>/research/mu3e/mu3e_mainpage.php';">
                    To Mu3e Group <i class="fas fa-arrow-right"></i>
                </button>
            </p>
            <img class="sub-block-image" src="<?php echo $figures;?>/HV-Maps/Mupix10_pictures.png" alt="mupix+vertex">
        </div>

        </br>
        <h3 class="western">Test Beam Campaigns</h3>

        <div class="sub-block-content">
            <p class="sub-block-text">                    
                The Heidelberg group is performing characterisation studies in the lab and test beam campaigns at various centers (CERN, DESY, MAMI, Paul Scherrer Institut) to evaluate the performance of the developed sensors. 
            </p>
            <img class="sub-block-image" src="<?php echo $figures;?>/HV-Maps/Telescope.png" alt="telescope">
            <!-- TODO: replace this by something one can actually read -->
        </div>
    
        </br>
        <h3 class="western">Acknowledgements</h3>
        
        
        
            The R&D activities in Heidelberg are funded by the Deutsche Foschungsgesellschaft (DFG) in context of the Mu3e experiment and by the Bundesministerium für Bildung und Forschung (BMBF). 
            </br>
            </br>

        <img class="sub-block-image" src="<?php echo $figures;?>/HV-Maps/Acknowledgements.png" alt="mu3e-vertex">
            
           
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>