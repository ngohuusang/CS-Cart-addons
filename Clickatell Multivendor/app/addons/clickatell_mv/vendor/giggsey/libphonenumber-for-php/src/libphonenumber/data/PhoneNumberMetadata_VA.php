<?php
/**
 * This file is automatically @generated by {@link BuildMetadataPHPFromXml}.
 * Please don't modify it directly.
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '
          (?:
           0(?:
             878\\d{5}|
             6698\\d{5}
           )|
           [1589]\\d{5,10}|
           3(?:
             [12457-9]\\d{8}|
             [36]\\d{7,9}
           )
          )
        ',
    'PossibleNumberPattern' => '\\d{6,11}',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '06698\\d{5}',
    'PossibleNumberPattern' => '\\d{10}',
    'ExampleNumber' => '0669812345',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '
          3(?:
            [12457-9]\\d{8}|
            6\\d{7,8}|
            3\\d{7,9}
          )
        ',
    'PossibleNumberPattern' => '\\d{9,11}',
    'ExampleNumber' => '3123456789',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '
          80(?:
            0\\d{6}|
            3\\d{3}
          )
        ',
    'PossibleNumberPattern' => '\\d{6,9}',
    'ExampleNumber' => '800123456',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '
          0878\\d{5}|
          1(?:
            44|
            6[346]
          )\\d{6}|
          89(?:
            2\\d{3}|
            4(?:
              [0-4]\\d{2}|
              [5-9]\\d{4}
            )|
            5(?:
              [0-4]\\d{2}|
              [5-9]\\d{6}
            )|
            9\\d{6}
          )
        ',
    'PossibleNumberPattern' => '\\d{6,10}',
    'ExampleNumber' => '899123456',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => '
          84(?:
            [08]\\d{6}|
            [17]\\d{3}
          )
        ',
    'PossibleNumberPattern' => '\\d{6,9}',
    'ExampleNumber' => '848123456',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            78\\d|
            99
          )\\d{6}
        ',
    'PossibleNumberPattern' => '\\d{9,10}',
    'ExampleNumber' => '1781234567',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => '55\\d{8}',
    'PossibleNumberPattern' => '\\d{10}',
    'ExampleNumber' => '5512345678',
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
    'NationalNumberPattern' => '848\\d{6}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '848123456',
  ),
  'id' => 'VA',
  'countryCode' => 39,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => true,
  'mobileNumberPortableRegion' => true,
);
