// billede array 
var img_name = [
"alone-autumn-mood-forest-cold-countryside-397096",
"clouds-conifer-daylight-environment-629162",
"conifers-dirty-environment-fir-trees-428400",
"dawn-environment-fall-fog-345522",
"dawn-evening-fog-forest-629166",
"forest-trees-fog-foggy-5049",
"forest-trees-fog-foggy-5106",
"forest-under-clouds-1287075",
"pathway-between-green-pine-trees-6921",
"trees-with-fog-158672",
"adventure-conifer-dark-dawn-116833",
"conifer-conifers-fir-trees-fog-614974"
];

// fil type som fx jpg, png, gif men her bruger jeg bare jpg
var img_type = ".jpg";

// loop der viser dem 
for (i = 0; i < img_name.length; i++) {
    var img_alternative = img_name[i].replace(/[0-9]/g, '');
    var img_description = img_alternative.replace(/-/g,' ');

    document.write(
        '<div class="frame">' + 
        '<img src="img/small/' + img_name[i] + img_type + '" alt="' + img_alternative + '">' +
        '<p>' + img_description + '</p>' + 
        '</div>');
}