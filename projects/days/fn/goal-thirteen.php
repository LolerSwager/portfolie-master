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
            --theme-color: #3f7e44;
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
                <img src="global-goals-media-cards/MC_target_13.1.png">
                <div>
                    <h4>STRENGTHEN RESILIENCE AND ADAPTIVE CAPACITY TO CLIMATE RELATED DISASTERS</h4>
                    <p>Strengthen resilience and adaptive capacity to climate-related hazards and natural disasters in all countries.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_13.2.png">
                <div>
                    <h4>INTEGRATE CLIMATE CHANGE MEASURES INTO POLICIES AND PLANNING</h4>
                    <p>Integrate climate change measures into national policies, strategies and planning.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_13.3.png">
                <div>
                    <h4>BUILD KNOWLEDGE AND CAPACITY TO MEET CLIMATE CHANGE</h4>
                    <p>Improve education, awareness-raising and human and institutional capacity on climate change mitigation, adaptation, impact reduction and early warning./p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_13.A.png">
                <div>
                    <h4>IMPLEMENT THE UN FRAMEWORK CONVENTION ON CLIMATE CHANGE</h4>
                    <p>Implement the commitment undertaken by developed-country parties to the United Nations Framework Convention on Climate Change to a goal of mobilizing jointly $100 billion annually by 2020 from all sources to address the needs of developing countries in the context of meaningful mitigation actions and transparency on implementation and fully operationalize the Green Climate Fund through its capitalization as soon as possible.</p>
                </div>
            </div>
            <div class="frame">
                <img src="global-goals-media-cards/MC_target_13.B.png">
                <div>
                    <h4>PROMOTE MECHANISMS TO RAISE CAPACITY FOR PLANNING AND MANAGEMENT</h4>
                    <p>Promote mechanisms for raising capacity for effective climate change-related planning and management in least developed countries and small island developing States, including focusing on women, youth and local and marginalized communities.</p>
                </div>
            </div>
        </div>
        <div class="goal-button-wrapper">
            <form class="goal-button" action="goal-twelve.php">
                <button type="submit"><i class="fas fa-arrow-left"></i> Back</button>
            </form>
            <form class="goal-button" action="goal-fourteen.php">
                <button type="submit">Next <i class="fas fa-arrow-right"></i></button>
            </form>
        </div>
    </main>
    <section>
        <div class="faf-grid">
            <div class="faf-goal-heading">
                <h2>Goal 13: Climate action</h2>
                <p>There is no country that is not experiencing the drastic effects of climate change. Greenhouse gas emissions are more than 50 percent higher than in 1990. Global warming is causing long-lasting changes to our climate system, which threatens irreversible consequences if we do not act.</p>
                <p>The annual average economic losses from climate-related disasters are in the hundreds of billions of dollars. This is not to mention the human impact of geo-physical disasters, which are 91 percent climate-related, and which between 1998 and 2017 killed 1.3 million people, and left 4.4 billion injured. The goal aims to mobilize US$100 billion annually by 2020 to address the needs of developing countries to both adapt to climate change and invest in low-carbon development.</p>
                <p>Supporting vulnerable regions will directly contribute not only to Goal 13 but also to the other SDGs. These actions must also go hand in hand with efforts to integrate disaster risk measures, sustainable natural resource management, and human security into national development strategies. It is still possible, with strong political will, increased investment, and using existing technology, to limit the increase in global mean temperature to two degrees Celsius above pre-industrial levels, aiming at 1.5°C, but this requires urgent and ambitious collective action.</p>
            </div>
            <h2 class="faf-card-heading">Facts and figures</h2>
            <div class="faf-card-1">
                <h3>+1°C</h3>
                <p>As of 2017 humans are estimated to have caused approximately 1.0°C of global warming above pre-industrial levels.</p>
            </div>
            <div class="faf-card-2">
                <h3>+20cm</h3>
                <p>Sea levels have risen by about 20 cm (8 inches) since 1880 and are projected to rise another 30–122 cm (1 to 4 feet) by 2100.</p>
            </div>
            <div class="faf-card-3">
                <h3>2050</h3>
                <p>To limit warming to 1.5C, global net CO2 emissions must drop by 45% between 2010 and 2030, and reach net zero around 2050.</p>
            </div>
            <div class="faf-card-4">
                <h3>1/3</h3>
                <p>Climate pledges under The Paris Agreement cover only one third of the emissions reductions needed to keep the world below 2°C.</p>
            </div>
            <div class="faf-card-5">
                <h3>$26 trillion</h3>
                <p>Bold climate action could trigger at least US$26 trillion in economic benefits by 2030.</p>
            </div>
            <div class="faf-card-6">
                <h3>18 million</h3>
                <p>The energy sector alone will create around 18 million more jobs by 2030, focused specifically on sustainable energy.</p>
            </div>
        </div>
    </section>
    <?php require'footer.php'; ?>
</body>
</html>