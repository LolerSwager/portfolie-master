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
            --theme-color: #f3c545;
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
                <img src="global-goals-media-cards/MC_target_7.1.png">
                <div>
                    <h4>UNIVERSAL ACCESS TO MODERN ENERGY</h4>
                    <p>By 2030, ensure universal access to affordable, reliable and modern energy services.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_7.2.png">
                <div>
                    <h4>INCREASE GLOBAL PERCENTAGE OF RENEWABLE ENERGY</h4>
                    <p>By 2030, increase substantially the share of renewable energy in the global energy mix.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_7.3.png">
                <div>
                    <h4>DOUBLE THE IMPROVEMENT IN ENERGY EFFICIENCY</h4>
                    <p>By 2030, double the global rate of improvement in energy efficiency.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_7.A.png">
                <div>
                    <h4>PROMOTE ACCESS TO RESEARCH, TECHNOLOGY AND INVESTMENTS IN CLEAN ENERGY</h4>
                    <p>By 2030, enhance international cooperation to facilitate access to clean energy research and technology, including renewable energy, energy efficiency and advanced and cleaner fossil-fuel technology, and promote investment in energy infrastructure and clean energy technology.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_7.B.png">
                <div>
                    <h4>EXPAND AND UPGRADE ENERGY SERVICES FOR DEVELOPING COUNTRIES</h4>
                    <p>By 2030, expand infrastructure and upgrade technology for supplying modern and sustainable energy services for all in developing countries, in particular least developed countries, small island developing States and landlocked developing countries, in accordance with their respective programmes of support.</p>
                </div>
            </div>
        </div>
        <div class="goal-button-wrapper">
            <form class="goal-button" action="goal-six.php">
                <button type="submit"><i class="fas fa-arrow-left"></i> Back</button>
            </form>
            <form class="goal-button" action="goal-eight.php">
                <button type="submit">Next <i class="fas fa-arrow-right"></i></button>
            </form>
        </div>
    </main>
    <section>
        <div class="faf-grid">
            <div class="faf-goal-heading">
                <h2>Goal 7: Affordable and clean energy</h2>
                <p>Between 2000 and 2016, the number of people with electricity increased from 78 to 87 percent, and the numbers without electricity dipped to just below one billion.</p>
                <p>Yet as the population continues to grow, so will the demand for cheap energy, and an economy reliant on fossil fuels is creating drastic changes to our climate./p>
                <p>Investing in solar, wind and thermal power, improving energy productivity, and ensuring energy for all is vital if we are to achieve SDG 7 by 2030.</p>
                <p>Expanding infrastructure and upgrading technology to provide clean and more efficient energy in all countries will encourage growth and help the environment.</p>
            </div>
            <h2 class="faf-card-heading">Facts and figures</h2>
            <div class="faf-card-1">
                <h3>1 in 7</h3>
                <p>1 in 7</p>
            </div>
            <div class="faf-card-2">
                <h3>60%</h3>
                <p>Energy is the main contributor to climate change, it produces around 60 percent of greenhouse gases.</p>
            </div>
            <div class="faf-card-3">
                <h3>14%</h3>
                <p>More efficient energy standards could reduce building and industry electricity consumption by 14 percent.</p>
            </div>
            <div class="faf-card-4">
                <h3>3 billion</h3>
                <p>More than 40 percent of the world’s population—3 billion—rely on polluting and unhealthy fuels for cooking.</p>
            </div>
            <div class="faf-card-5">
                <h3>20%</h3>
                <p>As of 2015, more than 20 percent of power was generated through renewable sources.</p>
            </div>
            <div class="faf-card-6">
                <h3>10.3 million</h3>
                <p>The renewable energy sector employed a record 10.3 million people in 2017.</p>
            </div>
        </div>
    </section>
    <?php require'footer.php'; ?>
</body>
</html>