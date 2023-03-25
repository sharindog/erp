<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // https://github.com/bestboysmedialab/language-list/blob/master/data/ru_RU/language.csv
        $data = array(
            array('fullname' => 'English'),
            array('fullname' => 'Afar'),
            array('fullname' => 'Abkhazian'),
            array('fullname' => 'Afrikaans'),
            array('fullname' => 'Amharic'),
            array('fullname' => 'Arabic'),
            array('fullname' => 'Assamese'),
            array('fullname' => 'Aymara'),
            array('fullname' => 'Azerbaijani'),
            array('fullname' => 'Bashkir'),
            array('fullname' => 'Belarusian'),
            array('fullname' => 'Bulgarian'),
            array('fullname' => 'Bihari'),
            array('fullname' => 'Bislama'),
            array('fullname' => 'Bengali/Bangla'),
            array('fullname' => 'Tibetan'),
            array('fullname' => 'Breton'),
            array('fullname' => 'Catalan'),
            array('fullname' => 'Corsican'),
            array('fullname' => 'Czech'),
            array('fullname' => 'Welsh'),
            array('fullname' => 'Danish'),
            array('fullname' => 'German'),
            array('fullname' => 'Bhutani'),
            array('fullname' => 'Greek'),
            array('fullname' => 'Esperanto'),
            array('fullname' => 'Spanish'),
            array('fullname' => 'Estonian'),
            array('fullname' => 'Basque'),
            array('fullname' => 'Persian'),
            array('fullname' => 'Finnish'),
            array('fullname' => 'Fiji'),
            array('fullname' => 'Faeroese'),
            array('fullname' => 'French'),
            array('fullname' => 'Frisian'),
            array('fullname' => 'Irish'),
            array('fullname' => 'Scots/Gaelic'),
            array('fullname' => 'Galician'),
            array('fullname' => 'Guarani'),
            array('fullname' => 'Gujarati'),
            array('fullname' => 'Hausa'),
            array('fullname' => 'Hindi'),
            array('fullname' => 'Croatian'),
            array('fullname' => 'Hungarian'),
            array('fullname' => 'Armenian'),
            array('fullname' => 'Interlingua'),
            array('fullname' => 'Interlingue'),
            array('fullname' => 'Inupiak'),
            array('fullname' => 'Indonesian'),
            array('fullname' => 'Icelandic'),
            array('fullname' => 'Italian'),
            array('fullname' => 'Hebrew'),
            array('fullname' => 'Japanese'),
            array('fullname' => 'Yiddish'),
            array('fullname' => 'Javanese'),
            array('fullname' => 'Georgian'),
            array('fullname' => 'Kazakh'),
            array('fullname' => 'Greenlandic'),
            array('fullname' => 'Cambodian'),
            array('fullname' => 'Kannada'),
            array('fullname' => 'Korean'),
            array('fullname' => 'Kashmiri'),
            array('fullname' => 'Kurdish'),
            array('fullname' => 'Kirghiz'),
            array('fullname' => 'Latin'),
            array('fullname' => 'Lingala'),
            array('fullname' => 'Laothian'),
            array('fullname' => 'Lithuanian'),
            array('fullname' => 'Latvian/Lettish'),
            array('fullname' => 'Malagasy'),
            array('fullname' => 'Maori'),
            array('fullname' => 'Macedonian'),
            array('fullname' => 'Malayalam'),
            array('fullname' => 'Mongolian'),
            array('fullname' => 'Moldavian'),
            array('fullname' => 'Marathi'),
            array('fullname' => 'Malay'),
            array('fullname' => 'Maltese'),
            array('fullname' => 'Burmese'),
            array('fullname' => 'Nauru'),
            array('fullname' => 'Nepali'),
            array('fullname' => 'Dutch'),
            array('fullname' => 'Norwegian'),
            array('fullname' => 'Occitan'),
            array('fullname' => '(Afan)/Oromoor/Oriya'),
            array('fullname' => 'Punjabi'),
            array('fullname' => 'Polish'),
            array('fullname' => 'Pashto/Pushto'),
            array('fullname' => 'Portuguese'),
            array('fullname' => 'Quechua'),
            array('fullname' => 'Rhaeto-Romance'),
            array('fullname' => 'Kirundi'),
            array('fullname' => 'Romanian'),
            array('fullname' => 'Russian'),
            array('fullname' => 'Kinyarwanda'),
            array('fullname' => 'Sanskrit'),
            array('fullname' => 'Sindhi'),
            array('fullname' => 'Sangro'),
            array('fullname' => 'Serbo-Croatian'),
            array('fullname' => 'Singhalese'),
            array('fullname' => 'Slovak'),
            array('fullname' => 'Slovenian'),
            array('fullname' => 'Samoan'),
            array('fullname' => 'Shona'),
            array('fullname' => 'Somali'),
            array('fullname' => 'Albanian'),
            array('fullname' => 'Serbian'),
            array('fullname' => 'Siswati'),
            array('fullname' => 'Sesotho'),
            array('fullname' => 'Sundanese'),
            array('fullname' => 'Swedish'),
            array('fullname' => 'Swahili' ),
            array('fullname' => 'Tamil'),
            array('fullname' => 'Telugu'),
            array('fullname' => 'Tajik'),
            array('fullname' => 'Thai'),
            array('fullname' => 'Tigrinya'),
            array('fullname' => 'Turkmen'),
            array('fullname' => 'Tagalog'),
            array('fullname' => 'Setswana'),
            array('fullname' => 'Tonga'),
            array('fullname' => 'Turkish'),
            array('fullname' => 'Tsonga'),
            array('fullname' => 'Tatar'),
            array('fullname' => 'Twi'),
            array('fullname' => 'Ukrainian'),
            array('fullname' => 'Urdu'),
            array('fullname' => 'Uzbek'),
            array('fullname' => 'Vietnamese'),
            array('fullname' => 'Volapuk'),
            array('fullname' => 'Wolof'),
            array('fullname' => 'Xhosa'),
            array('fullname' => 'Yoruba'),
            array('fullname' => 'Chinese'),
            array('fullname' => 'Zulu'),

        );

        DB::table('languages')->insert($data);
    }
}
