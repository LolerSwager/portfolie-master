<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/scroll.css">
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
    <title>FN</title>
    <style>
        :root{
            --theme-color: #5cb9dd;
        }
    </style>
</head>
<body>
    <?php require'header.php'; ?>
    <main>
        <div>
            <form class="back-goal" action="goals.php">
                <button type="submit"><i class="fas fa-arrow-left"></i> Go back</button>
            </form>
        </div>
        <div class="wrapper">
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_6.1.png">
                <div>
                    <h4>SAFE AND AFFORDABLE DRINKING WATER</h4>
                    <p>By 2030, achieve universal and equitable access to safe and affordable drinking water for all.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_6.2.png">
                <div>
                    <h4>END OPEN DEFECATION AND PROVIDE ACCESS TO SANITATION AND HYGIENE</h4>
                    <p>By 2030, achieve access to adequate and equitable sanitation and hygiene for all and end open defecation, paying special attention to the needs of women and girls and those in vulnerable situations.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_6.3.png">
                <div>
                    <h4>IMPROVE WATER QUALITY, WASTEWATER TREATMENT AND SAFE REUSE</h4>
                    <p>By 2030, improve water quality by reducing pollution, eliminating dumping and minimizing release of hazardous chemicals and materials, halving the proportion of untreated wastewater and substantially increasing recycling and safe reuse globally.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_6.4.png">
                <div>
                    <h4>INCREASE WATER-USE EFFICIENCY AND ENSURE FRESHWATER SUPPLIES</h4>
                    <p>By 2030, substantially increase water-use efficiency across all sectors and ensure sustainable withdrawals and supply of freshwater to address water scarcity and substantially reduce the number of people suffering from water scarcity.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_6.5.png">
                <div>
                    <h4>IMPLEMENT INTEGRATED WATER RESOURCES MANAGEMENT</h4>
                    <p>By 2030, implement integrated water resources management at all levels, including through transboundary cooperation as appropriate.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_6.6.png">
                <div>
                    <h4>PROTECT AND RESTORE WATER-RELATED ECOSYSTEMS</h4>
                    <p>By 2020, protect and restore water-related ecosystems, including mountains, forests, wetlands, rivers, aquifers and lakes.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_6.A.png">
                <div>
                    <h4>EXPAND WATER AND SANITATION SUPPORT TO DEVELOPING COUNTRIES</h4>
                    <p>By 2030, expand international cooperation and capacity-building support to developing countries in water- and sanitation-related activities and programmes, including water harvesting, desalination, water efficiency, wastewater treatment, recycling and reuse technologies.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_6.B.png">
                <div>
                    <h4>SUPPORT LOCAL ENGAGEMENT IN WATER AND SANITATION MANAGEMENT</h4>
                    <p>Support and strengthen the participation of local communities in improving water and sanitation management.</p>
                </div>
            </div>
        </div>
        <div class="goal-button-wrapper">
            <form class="goal-button" action="goal-five.php">
                <button type="submit"><i class="fas fa-arrow-left"></i> Back</button>
            </form>
            <form class="goal-button" action="goal-seven.php">
                <button type="submit">Next <i class="fas fa-arrow-right"></i></button>
            </form>
        </div>
    </main>
    <section>
        <div class="faf-grid">
            <div class="faf-goal-heading">
                <h2>Goal 6: Clean water and sanitation</h2>
                <p>Water scarcity affects more than 40 percent of people, an alarming figure that is projected to rise as temperatures do. Although 2.1 billion people have improved water sanitation since 1990, dwindling drinking water supplies are affecting every continent.</p>
                <p>More and more countries are experiencing water stress, and increasing drought and desertification is already worsening these trends. By 2050, it is projected that at least one in four people will suffer recurring water shortages.</p>
                <p>Safe and affordable drinking water for all by 2030 requires we invest in adequate infrastructure, provide sanitation facilities, and encourage hygiene. Protecting and restoring water-related ecosystems is essential.</p>
                <p>Ensuring universal safe and affordable drinking water involves reaching over 800 million people who lack basic services and improving accessibility and safety of services for over two billion.</p>
                <p>In 2015, 4.5 billion people lacked safely managed sanitation services (with adequately disposed or treated excreta) and 2.3 billion lacked even basic sanitation.</p>
            </div>
            <h2 class="faf-card-heading">Facts and figures</h2>
            <div class="faf-card-1">
                <h3>5.2 billion</h3>
                <p>71 percent of the global population, 5.2 billion people, had safely-managed drinking water in 2015, but 844 million people still lacked even basic drinking water.</p>
            </div>
            <div class="faf-card-2">
                <h3>2.9 billion</h3>
                <p>39 percent of the global population, 2.9 billion people, had safe sanitation in 2015, but 2.3 billion people still lacked basic sanitation. 892 million people practiced open defecation.</p>
            </div>
            <div class="faf-card-3">
                <h3>80%</h3>
                <p>80 percent of wastewater goes into waterways without adequate treatment.</p>
            </div>
            <div class="faf-card-4">
                <h3>2 billion</h3>
                <p>Water stress affects more than 2 billion people, with this figure projected to increase.</p>
            </div>
            <div class="faf-card-5">
                <h3>80%</h3>
                <p>80 percent of countries have laid the foundations for integrated water resources management.</p>
            </div>
            <div class="faf-card-6">
                <h3>70%</h3>
                <p>The world has lost 70 percent of its natural wetlands over the last century.</p>
            </div>
        </div>
    </section>
    <?php require'footer.php'; ?>
</body>
</html>