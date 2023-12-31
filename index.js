
google.charts.load('current', {
  'packages':['geochart'],
});
  google.charts.setOnLoadCallback(drawRegionsMap);

function drawRegionsMap() {
    var data = google.visualization.arrayToDataTable([
      ['Country', 'Evasão  ', 'Acolhimento:   '],
      
      ['Germany',                                  0,                             21000],
      ['Brazil',                                   2594,                          65000],
      ['Pakistan',                                 0,                             17000],
      ['Iran',                                     3400,                          350],
      ['Türkiye',                                  0,                             36000],
      ['Afghanistan',                              5700,                          541],
      ['SouthAfrica',                              0,                             9500],
      ['Albania',                                  0,                             0],
      ['Andorra',                                  0,                             0],
      ['Angola',                                   0,                             1069],
      ['AntiguaandBarbuda',                        0,                             0],
      ['SaudiArabia',                              0,                             0],
      ['Algeria',                                  0,                             0],
      ['Argentina',                                15,                            130],
      ['Armenia',                                  0,                             0],
      ['Australia',                                0,                             0],
      ['Austria',                                  0,                             0],
      ['Azerbaijan',                               0,                             0],
      ['Bahamas',                                  0,                             0],
      ['Bahrain',                                  0,                             0],
      ['Bangladesh',                               231,                           5],
      ['Barbados',                                 0,                             0],
      ['Belarus',                                  0,                             0],
      ['Belgium',                                  0,                             0],
      ['Belize',                                   0,                             0],
      ['Benin',                                    0,                             0],
      ['Bolivia',                                  0,                             0],
      ['Bosnia and Herzegovina',                   0,                             0],
      ['Botswana',                                 0,                             0],
      ['Brunei',                                   0,                             0],
      ['Bulgaria',                                 0,                             0],
      ['Burkina Faso',                             0,                             0],
      ['Burundi',                                  0,                             0],
      ['Bhutan',                                   0,                             0],
      ['Cape Verde',                               0,                             0],
      ['Cameroon',                                 5,                             194],
      ['Cambodia',                                 0,                             0],
      ['Canada',                                   0,                             0],
      ['Qatar',                                    0,                             0],
      ['Kazakhstan',                               67,                            0],
      ['Chad',                                     0,                             0],
      ['Chile',                                    81,                            885],
      ['China',                                    15589,                         227],
      ['Cyprus',                                   0,                             0],
      ['Colombia',                                 89,                            2490],
      ['Comoros',                                  0,                             0],
      ['Congo',                                    3270,                          10],
      ['North Korea',                              0,                             0],
      ['South Korea',                              0,                             0],
      ['Ivory Coast',                              0,                             0],
      ['Costa Rica',                               10,                            105],
      ['Croatia',                                  0,                             0],
      ['Cuba',                                     18095,                         972],
      ['Denmark',                                  0,                             0],
      ['Djibouti',                                 0,                             0],
      ['Dominica',                                 10,                            1423],
      ['Egypt',                                    0,                             0],
      ['El Salvador',                              7806,                          2909],
      ['United Arab Emirates',                     0,                             0],
      ['Ecuador',                                  45,                            1241],
      ['Eritrea',                                  0,                             0],
      ['Slovakia',                                 0,                             0],
      ['Slovenia',                                 0,                             0],
      ['Spain',                                    0,                             0],
      ['United States',                            12,                            6320],
      ['Estonia',                                  0,                             0],
      ['Eswatini',                                 0,                             0],
      ['Ethiopia',                                 0,                             0],
      ['Fiji',                                     0,                             0],
      ['Philippines',                              0,                             0],
      ['Finland',                                  0,                             0],
      ['France',                                   0,                             0],
      ['Gabon',                                    0,                             0],
      ['Gambia',                                   0,                             0],
      ['Ghana',                                    10,                            306],
      ['Georgia',                                  0,                             0],
      ['Grenada',                                  0,                             0],
      ['Greece',                                   0,                             0],
      ['Guatemala',                                1062,                          5269],
      ['Guyana',                                   0,                             0],
      ['Guinea',                                   0,                             0],
      ['Equatorial Guinea',                        0,                             0],
      ['Guinea-Bissau',                            0,                             0],
      ['Haiti',                                    1067,                          17153],
      ['Netherlands',                              0,                             0],
      ['Honduras',                                 11116,                         31092],
      ['Hungary',                                  0,                             0],
      ['Yemen',                                    0,                             0],
      ['Marshall Islands',                         0,                             0],
      ['Solomon Islands',                          0,                             0],
      ['India',                                    0,                             0],
      ['Indonesia',                                0,                             0],
      ['Iraq',                                     0,                             0],
      ['Ireland',                                  0,                             0],
      ['Iceland',                                  0,                             0],
      ['Israel',                                   0,                             0],
      ['Italy',                                    0,                             0],
      ['Jamaica',                                  0,                             0],
      ['Japan',                                    0,                             0],
      ['Jordan',                                   0,                             0],
      ['Kiribati',                                 0,                             0],
      ['Kosovo',                                   0,                             0],
      ['Kuwait',                                   0,                             0],
      ['Laos',                                     0,                             0],
      ['Lesotho',                                  0,                             0],
      ['Latvia',                                   0,                             0],
      ['Lebanon',                                  0,                             0],
      ['Liberia',                                  0,                             0],
      ['Libya',                                    0,                             0],
      ['Liechtenstein',                            0,                             0],
      ['Lithuania',                                0,                             0],
      ['Luxembourg',                               0,                             0],
      ['North Macedonia',                          0,                             0],
      ['Madagascar',                               0,                             0],
      ['Malaysia',                                 0,                             0],
      ['Malawi',                                   0,                             0],
      ['Maldives',                                 0,                             0],
      ['Mali',                                     0,                             0],
      ['Malta',                                    0,                             0],
      ['Morocco',                                  0,                             0],
      ['Mauritius',                                0,                             0],
      ['Mauritania',                               0,                             0],
      ['Mexico',                                   0,                             0],
      ['Micronesia',                               0,                             0],
      ['Mozambique',                               0,                             0],
      ['Moldova',                                  0,                             0],
      ['Monaco',                                   0,                             0],
      ['Mongolia',                                 0,                             0],
      ['Montenegro',                               0,                             0],
      ['Myanmar',                                  0,                             0],
      ['Namibia',                                  0,                             0],
      ['Nauru',                                    0,                             0],
      ['Nepal',                                    0,                             0],
      ['Nicaragua',                                463,                           8984],
      ['Niger',                                    0,                             0],
      ['Nigeria',                                  11,                            152],
      ['Norway',                                   0,                             0],
      ['New Zealand',                              0,                             0],
      ['Oman',                                     0,                             0],
      ['Palau',                                    0,                             0],
      ['Palestine',                                0,                             0],
      ['Panama',                                   12,                            167],
      ['Papua New Guinea',                         0,                             0],
      ['Pakistan',                                 0,                             0],
      ['Paraguay',                                 0,                             0],
      ['Peru',                                     13,                            338],
      ['Poland',                                   0,                             0],
      ['Portugal',                                 0,                             0],
      ['Kenya',                                    0,                             0],
      ['Kyrgyzstan',                               0,                             0],
      ['United Kingdom',                           0,                             0],
      ['Central African Republic',                 0,                             0],
      ['Democratic Republic of the Congo',         0,                             0],
      ['Dominican Republic',                       0,                             0],
      ['Czech Republic',                           0,                             0],
      ['Romania',                                  0,                             0],
      ['Rwanda',                                   0,                             0],
      ['Russia',                                   275,                           5],
      ['Samoa',                                    0,                             0],
      ['San Marino',                               0,                             0],
      ['Saint Lucia',                              0,                             0],
      ['Saint Kitts and Nevis',                    0,                             0],
      ['São Tomé and Príncipe',                    0,                             0],
      ['Saint Vincent and the Grenadines',         0,                             0],
      ['Seychelles',                               0,                             0],
      ['Senegal',                                  5,                             1095],
      ['Sierra Leone',                             0,                             0],
      ['Serbia',                                   0,                             0],
      ['Singapore',                                0,                             0],
      ['Syria',                                    6500,                          0],
      ['Somalia',                                  5,                             70],
      ['Sri Lanka',                                0,                             0],
      ['Sudan',                                    0,                             0],
      ['South Sudan',                              0,                             0],
      ['Sweden',                                   0,                             0],
      ['Switzerland',                              0,                             0],
      ['Suriname',                                 0,                             0],
      ['Thailand',                                 0,                             0],
      ['Taiwan',                                   0,                             0],
      ['Tajikistan',                               0,                             0],
      ['Tanzania',                                 0,                             0],
      ['East Timor',                               0,                             0],
      ['Togo',                                     0,                             0],
      ['Tonga',                                    0,                             0],
      ['Trinidad and Tobago',                      0,                             0],
      ['Tunisia',                                  0,                             0],
      ['Turkmenistan',                             0,                             0],
      ['Tuvalu',                                   0,                             0],
      ['Ukraine',                                  5700,                          11],
      ['Uganda',                                   0,                             0],
      ['Uruguay',                                  0,                             0],
      ['Uzbekistan',                               0,                             0],
      ['Vanuatu',                                  0,                             0],
      ['Vatican City',                             0,                             0],
      ['Venezuela',                                14915,                         355],
      ['Vietnam',                                  0,                             0],
      ['Zambia',                                   0,                             0],
      ['Zimbabwe',                                 0,                             0]
    ]);

    
      
    var options = {
      //region: '002', // Africa Cor 0: 20B2AA //Cordo meio:87CEEB // Cor do fim:0000CD 
      colorAxis: {colors: ['#87CEEB', '#20B2AA', '#0000CD']},
      backgroundColor: '#13003f',
      datalessRegionColor: '#5F9EA0',
      defaultColor: '#000080',
    };
      
              var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
      
              chart.draw(data, options);
            }
          