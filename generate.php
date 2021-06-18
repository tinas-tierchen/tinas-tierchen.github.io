<?php

$pages = [
    [
        'file' => 'index.html',
        'template' => 'index',
    ],
    [
        'file' => 'tierchen.html',
        'template' => 'category',
        'title' => 'Amigurumi Tierchen',
        'description' => 'Vor einigen Jahren bin ich durch Zufall auf die Anleitung eines süßen kleinen Tierchens gestoßen. Seitdem haben mich diese Tierchen nicht mehr losgelassen, denn wer könnte so kleinen süßen Knopfaugen widerstehen. Im Laufe der Jahre habe ich so einige Tierchen gehäkelt und die Freude daran möchte ich gerne mit euch teilen.',
        'items' => [
            [
                'src' => 'img/tiger.jpeg',
                'name' => 'Roary der Tiger',
                'description' => 'Jedes Tier im Dschungel kennt den kleinen, frechen Tiger Roary. Verschmitzt und gewitzt, wie er ist, hat er häufig nur Dummheiten im Kopf. Aber lange kann ihm keiner böse sein. Denn in diesem Tigerchen steckt natürlich auch ein bisschen Miezekatze.',
            ],
            [
                'src' => 'img/elch.jpeg',
                'name' => 'Morton der Elch',
                'description' => 'Der Elch Morton erregt mit seinem prächtigen Geweih überall Aufmerksamkeit. Und das genießt er sichtlich. Morton kommt aus dem hohen Norden und ist Kälte und Schnee gewöhnt. Aber ganz ehrlich … nichts geht ihm über ein Nickerchen vor dem offenen Kamin.',
            ],
            [
                'src' => 'img/hase.jpeg',
                'name' => 'Wasabi das Häschen',
                'description' => 'Verspielt, eigensinnig und fröhlich, so ist das Häschen Wasabi. Es findet nichts lustiger, als mit seinen Freunden um die Wette zu rennen, denn im Hakenschlagen und Über-Hindernisse-Springens ist es unschlagbar. Und wer so schnell laufen kann, der ist auch gut im Streiche spielen…',
            ],
            [
                'src' => 'img/tukan.jpeg',
                'name' => 'Zico der Tukan',
                'description' => 'Sieht der Tukan Zico mit seinem glänzend schwarzen Federkleid und dem leuchtend gelben Schnabel nicht richtig majestätisch aus? Als König der Paradiesvögel spreizt er jeden Tag seine Flügel und macht einen ausgedehnten Spazierflug durch den Regenwald.',
            ],
            [
                'src' => 'img/welpe6.jpeg',
                'name' => 'Dakota der Welpe',
                'description' => 'Dakota ist lieb, knuffig und passt genau auf die Handfläche, so dass er dich überall hin begleiten kann. Dakota ist ein verspielter Welpe, neugierig und voller Energie. Seine langen Ohren flattern im Wind, wenn er auf seinen winzigen Pfötchen angelaufen kommt.',
            ],
        ],
    ],
    [
        'file' => 'boardgame.html',
        'template' => 'category',
        'title' => 'Boardgame Zubehör',
        'description' => '…',
        'items' => [
            [
                'src' => 'img/maus_und_mystik.jpeg',
                'name' => 'Maus & Mystik Täschchen',
                'description' => '…',
            ],
            [
                'src' => 'img/wuerfelbeutel.jpeg',
                'name' => 'Würfeluntersetzer',
                'description' => '…',
            ],
            [
                'src' => 'img/stoffies.jpeg',
                'name' => 'Stoffies',
                'description' => '…',
            ],
        ],
    ],
    [
        'file' => 'nerds.html',
        'template' => 'category',
        'title' => 'Kleine Nerd Ecke',
        'description' => '…',
        'items' => [
            [
                'src' => 'img/yoshi.jpeg',
                'name' => 'Yoshi mit Ei',
                'description' => '…',
            ],
            [
                'src' => 'img/pilze.jpeg',
                'name' => 'PowerUp und LevelUp Pilze',
                'description' => '…',
            ],
            [
                'src' => 'img/stern.jpeg',
                'name' => 'Stern',
                'description' => '…',
            ],
            [
                'src' => 'img/tentakel.jpeg',
                'name' => 'Purpur & Grün Tentakel',
                'description' => '…',
            ],
        ],
    ],
    [
        'file' => 'pflanzen.html',
        'template' => 'category',
        'title' => 'Pflanzen',
        'description' => '…',
        'items' => [
            [
                'src' => 'img/kakteen.jpeg',
                'name' => 'Kakteen',
                'description' => '…',
            ],
            [
                'src' => 'img/blume.jpeg',
                'name' => 'Blume',
                'description' => '…',
            ],
        ],
    ],
    [
        'file' => 'klamotten.html',
        'template' => 'category',
        'title' => 'Klamotten',
        'description' => '…',
        'items' => [
            [
                'src' => 'img/haarbaender.jpeg',
                'name' => 'Haarbänder',
                'description' => '…',
            ],
            [
                'src' => 'img/haarband_hellblau.jpeg',
                'name' => 'Hellblaues Haarband',
                'description' => '…',
            ],
        ],
    ],
];

foreach ($pages as $page) {
    echo 'Generating ' . $page['file'] . "\n";

    $title = $page['title'] ?? '';
    $description = $page['description'] ?? '';
    $items = $page['items'] ?? [];

    ob_start();
    require 'templates/' . $page['template'] . '.php';
    $content = ob_get_clean();

    unset($title);
    unset($description);
    unset($items);


    ob_start();
    require 'templates/skeleton.php';
    file_put_contents($page['file'], ob_get_clean());
}
