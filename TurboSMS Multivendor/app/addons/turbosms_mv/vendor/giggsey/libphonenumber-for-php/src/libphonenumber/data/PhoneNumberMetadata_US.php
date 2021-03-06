<?php
/**
 * This file is automatically @generated by {@link BuildMetadataPHPFromXml}.
 * Please don't modify it directly.
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[2-9]\\d{9}',
    'PossibleNumberPattern' => '\\d{7}(?:\\d{3})?',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '
          (?:
            2(?:
              0[1-35-9]|
              1[02-9]|
              2[04589]|
              3[149]|
              4[08]|
              5[1-46]|
              6[0279]|
              7[026]|
              8[13]
            )|
            3(?:
              0[1-57-9]|
              1[02-9]|
              2[0135]|
              3[014679]|
              4[67]|
              5[12]|
              6[014]|
              8[56]
            )|
            4(?:
              0[124-9]|
              1[02-579]|
              2[3-5]|
              3[0245]|
              4[0235]|
              58|
              69|
              7[0589]|
              8[04]
            )|
            5(?:
              0[1-57-9]|
              1[0235-8]|
              20|
              3[0149]|
              4[01]|
              5[19]|
              6[1-37]|
              7[013-5]|
              8[056]
            )|
            6(?:
              0[1-35-9]|
              1[024-9]|
              2[03689]|
              3[016]|
              4[16]|
              5[017]|
              6[0-279]|
              78|
              8[12]
            )|
            7(?:
              0[1-46-8]|
              1[02-9]|
              2[0457]|
              3[1247]|
              4[07]|
              5[47]|
              6[02359]|
              7[02-59]|
              8[156]
            )|
            8(?:
              0[1-68]|
              1[02-8]|
              28|
              3[0-25]|
              4[3578]|
              5[046-9]|
              6[02-5]|
              7[028]
            )|
            9(?:
              0[1346-9]|
              1[02-9]|
              2[0589]|
              3[01678]|
              4[0179]|
              5[12469]|
              7[0-3589]|
              8[0459]
            )
          )[2-9]\\d{6}
        ',
    'PossibleNumberPattern' => '\\d{7}(?:\\d{3})?',
    'ExampleNumber' => '2015555555',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '
          (?:
            2(?:
              0[1-35-9]|
              1[02-9]|
              2[04589]|
              3[149]|
              4[08]|
              5[1-46]|
              6[0279]|
              7[026]|
              8[13]
            )|
            3(?:
              0[1-57-9]|
              1[02-9]|
              2[0135]|
              3[014679]|
              4[67]|
              5[12]|
              6[014]|
              8[56]
            )|
            4(?:
              0[124-9]|
              1[02-579]|
              2[3-5]|
              3[0245]|
              4[0235]|
              58|
              69|
              7[0589]|
              8[04]
            )|
            5(?:
              0[1-57-9]|
              1[0235-8]|
              20|
              3[0149]|
              4[01]|
              5[19]|
              6[1-37]|
              7[013-5]|
              8[056]
            )|
            6(?:
              0[1-35-9]|
              1[024-9]|
              2[03689]|
              3[016]|
              4[16]|
              5[017]|
              6[0-279]|
              78|
              8[12]
            )|
            7(?:
              0[1-46-8]|
              1[02-9]|
              2[0457]|
              3[1247]|
              4[07]|
              5[47]|
              6[02359]|
              7[02-59]|
              8[156]
            )|
            8(?:
              0[1-68]|
              1[02-8]|
              28|
              3[0-25]|
              4[3578]|
              5[046-9]|
              6[02-5]|
              7[028]
            )|
            9(?:
              0[1346-9]|
              1[02-9]|
              2[0589]|
              3[01678]|
              4[0179]|
              5[12469]|
              7[0-3589]|
              8[0459]
            )
          )[2-9]\\d{6}
        ',
    'PossibleNumberPattern' => '\\d{7}(?:\\d{3})?',
    'ExampleNumber' => '2015555555',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '
          8(?:
            00|
            44|
            55|
            66|
            77|
            88
          )[2-9]\\d{6}
        ',
    'PossibleNumberPattern' => '\\d{10}',
    'ExampleNumber' => '8002345678',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '900[2-9]\\d{6}',
    'PossibleNumberPattern' => '\\d{10}',
    'ExampleNumber' => '9002345678',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => '
          5(?:
            00|
            33|
            44|
            66|
            77
          )[2-9]\\d{6}
        ',
    'PossibleNumberPattern' => '\\d{10}',
    'ExampleNumber' => '5002345678',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'carrierSpecific' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
  ),
  'id' => 'US',
  'countryCode' => 1,
  'internationalPrefix' => '011',
  'nationalPrefix' => '1',
  'nationalPrefixForParsing' => '1',
  'sameMobileAndFixedLinePattern' => true,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '(\\d{3})(\\d{4})',
      'format' => '$1-$2',
      'leadingDigitsPatterns' => 
      array (
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    1 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '($1) $2-$3',
      'leadingDigitsPatterns' => 
      array (
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1-$2-$3',
      'leadingDigitsPatterns' => 
      array (
      ),
    ),
  ),
  'mainCountryForCode' => true,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => true,
);
