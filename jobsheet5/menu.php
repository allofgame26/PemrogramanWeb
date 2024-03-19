<?php
    $menu = [
        [
            "Nama" => "Beranda"
        ],
        [
            "Nama" => "Berita",
            "submenu" => [
                [
                    "Nama" => "Wisata",
                    "submenu" => [
                        [
                            "Nama" => "Pantai"
                        ],
                        [
                            "Nama" => "Gunung"
                        ]
                    ]
                ],
                [
                    "Nama" => "Kuliner",
                ],
                [
                    "Nama" => "Liburan",
                ]
            ]
        ],
        [
            "Nama" => "Tentang"
        ],
        [
            "Nama" => "Kontak"
        ]
    ];

        function tampilmenu(array $menu){
            echo "<ul>";
    
            foreach ($menu as $item) {
                echo "<li>{$item['Nama']}</li>";
                if (isset($item["submenu"])) {
                    echo "<ul>";
                    tampilmenu($item["submenu"]);
                    echo "</ul>";
                }
            }

            echo "</ul>";
    }
        tampilmenu($menu);
?>