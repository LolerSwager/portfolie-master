<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/scroll.css">
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
    <title>goal one</title>
    <style>
        :root{
            --theme-color: #d13a43;
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
                <img src="global-goals-media-cards/MC_target_1.1.png">
                <div>
                    <h4>ERADICATE EXTREME POVERTY</h4>
                    <p>By 2030, eradicate extreme poverty for all people everywhere, currently measured as people living on less than $1.25 a day.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_1.2.png">
                <div>
                    <h4>EDUCE POVERTY BY AT LEAST 50%</h4>
                    <p>By 2030, reduce at least by half the proportion of men, women and children of all ages living in poverty in all its dimensions according to national definitions.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_1.3.png">
                <div>
                    <h4>IMPLEMENT SOCIAL PROTECTION SYSTEMS</h4>
                    <p>Implement nationally appropriate social protection systems and measures for all, including floors, and by 2030 achieve substantial coverage of the poor and the vulnerable.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_1.4.png">
                <div>
                    <h4>EQUAL RIGHTS TO OWNERSHIP, BASIC SERVICES, TECHNOLOGY AND ECONOMIC RESOURCES</h4>
                    <p>By 2030, ensure that all men and women, in particular the poor and the vulnerable, have equal rights to economic resources, as well as access to basic services, ownership and control over land and other forms of property, inheritance, natural resources, appropriate new technology and financial services, including microfinance.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_1.5.png">
                <div>
                    <h4>BUILD RESILIENCE TO ENVIRONMENTAL, ECONOMIC AND SOCIAL DISASTERS</h4>
                    <p>By 2030, build the resilience of the poor and those in vulnerable situations and reduce their exposure and vulnerability to climate-related extreme events and other economic, social and environmental shocks and disasters.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_1.A.png">
                <div>
                    <h4>MOBILIZE RESOURCES TO IMPLEMENT POLICIES TO END POVERTY</h4>
                    <p>Ensure significant mobilization of resources from a variety of sources, including through enhanced development cooperation, in order to provide adequate and predictable means for developing countries, in particular least developed countries, to implement programmes and policies to end poverty in all its dimensions.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_1.B.png">
                <div>
                    <h4>CREATE PRO-POOR AND GENDER-SENSITIVE POLICY FRAMEWORKS</h4>
                    <p>reate sound policy frameworks at the national, regional and international levels, based on pro-poor and gender-sensitive development strategies, to support accelerated investment in poverty eradication actions.</p>
                </div>
            </div>
        </div>
        <div class="goal-button-wrapper">
            <form class="goal-button" action="index.php">
                <button type="submit"><i class="fas fa-home"></i> Home</button>
            </form>
            <form class="goal-button" action="goal-two.php">
                <button type="submit">Next <i class="fas fa-arrow-right"></i></button>
            </form>
        </div>
    </main>
    <section>
        <div class="faf-grid">
            <div class="faf-goal-heading">
                <h2>Goal 1: No poverty</h2>
                <p>Eradicating poverty in all its forms remains one of the greatest challenges facing humanity. While the number of people living in extreme poverty dropped by more than half between 1990 and 2015, too many are still struggling for the most basic human needs.</p>
                <p>As of 2015, about 736 million people still lived on less than US$1.90 a day; many lack food, clean drinking water and sanitation. Rapid growth in countries such as China and India has lifted millions out of poverty, but progress has been uneven. Women are more likely to be poor than men because they have less paid work, education, and own less property.</p>
                <p>Progress has also been limited in other regions, such as South Asia and sub-Saharan Africa, which account for 80 percent of those living in extreme poverty. New threats brought on by climate change, conflict and food insecurity, mean even more work is needed to bring people out of poverty.</p>
                <p>The SDGs are a bold commitment to finish what we started, and end poverty in all forms and dimensions by 2030. This involves targeting the most vulnerable, increasing basic resources and services, and supporting communities affected by conflict and climate-related disasters.</p>
            </div>
            <h2 class="faf-card-heading">Facts and figures</h2>
            <div class="faf-card-1">
                <h3>736 million</h3>
                <p>736 million people still live in extreme poverty.</p>
            </div>
            <div class="faf-card-2">
                <h3>10%</h3>
                <p>10 percent of the world’s population live in extreme poverty, down from 36 percent in 1990.</p>
            </div>
            <div class="faf-card-3">
                <h3>1.3 billion</h3>
                <p>Some 1.3 billion people live in multidimensional poverty.</p>
            </div>
            <div class="faf-card-4">
                <h3>50%</h3>
                <p>Half of all people living in poverty are under 18.</p>
            </div>
            <div class="faf-card-5">
                <h3>1 in 10</h3>
                <p>One person in every 10 is extremely poor.</p>
            </div>
            <div class="faf-card-6">
                <h3>80%</h3>
                <p>80 percent of people living on less than $1.90 are in South Asia and sub-Saharan Africa.</p>
            </div>
        </div>
    </section>
    <?php require'footer.php'; ?>
</body>
</html>