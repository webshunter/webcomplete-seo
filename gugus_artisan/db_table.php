<?php

require_once 'fontawesome/fontFunc.php';
require_once 'table_opsi_set.php';


function crdb()
{

    // login sistem
    // --------------------------------------
        // coming soon

        // login sistem cant return data 
        /*
            [
                ......
                    "datalogin" => [
                        "id" => "value",
                        "username" => "value",
                        "position" => "",
                        "allconf can build from this" => "",
                    ]
                ......
            ]
        */

    // landing setting up
    // --------------------------------------

        // coming soon
    
    // -----------------------------------------------------------------------------------------------------------------------------------//

    // datatable setting up

    // #1. set all data on crude here 
    // create database name ------------------------- // 
    /*
        [
            ....
                "table" => "table name"
            ....
        ]
    */
    
    // #2. create table row
    /*
        [
            ....
                "data" => [
                    "row_name" => char(255)
                ]
            ....
        ]
        row setting data
        ai() -----> autoincrement row
        char(255) ------> VARCHAR 255 //number can custome 1 - 255
        textlong() ------> set for text long
        no(11) ------> integer data 
        timestamp() ------> set timestamp value for auto date
        timestampupdate() ------> timestamp auto update on update data
        relation(table, table_row, table_relation, table_relation_row) ----> relationship database setting
    */

    // dalam penggunaan metode ini user harus paham karakteristk dari array.
    // #4. form setting

        // comming soon

        /*
            -> no condition form tidak akan di tampilkan dalam kata lain form tidak akan dibuat untuk row table tersebut
            [
                ....
                    "form" => [
                        "id" => "no"
                    ],
                ....
            ]

            -> text condition digunakan untuk membuat text form format
            [
                ....
                    "form" => [
                        "username" => "text"
                    ],
                ....
            ]

            -> number condition digunakan untuk membuat number form format
            [
                ....
                    "form" => [
                        "total" => "number"
                    ],
                ....
            ]

            -> username condition digunakan untuk membuat username form format
            [
                ....
                    "form" => [
                        "total" => "username"
                    ],
                ....
            ]

            -> password condition digunakan untuk membuat password form format
            [
                ....
                    "form" => [
                        "total" => "password"
                    ],
                ....
            ]

            -> editor condition digunakan untuk membuat edito form format dalam hal ini summernote editor
            [
                ....
                    "form" => [
                        "total" => "number"
                    ],
                ....
            ] 

            -> select condition digunakan untuk membuat selection dalam hal ini selection membutuhkan database untuk menopangnya
            -> multiple condition yang digunakan untuk membuat multipple selection
            [
                ....
                    "category_id" => [ 
                        "type" => "select / multiple",  // type digunakan untuk menentukan tipe form
                        "data" => [                     // data merupakan setting dari selection 
                            "db" => "category",         // db disini anda akan memilih data dari table mana yang ingin anda ambil
                            "data" => "id",             // data merupakan setting untuk value yang akan digunakan pada option
                            "name" => "nama_kategori"   // name digunakan untuk tampilan dari option
                        ]
                    ],
                ....
            ] 

            -> login condition yang digunakan untuk membuat dengan nilai default id user yang aktif/ dan hidden form
            [
                ....
                    "user" => "login"
                ....
            ] 

        */ 


    // #4. array condition for join table for view
        // coming soon

    /*
        [
            ....
                "data" => [
                    "row_name" => char(255)
                ]
            ....
        ]
    */

    // #4. array condition for join table for view
        // coming soon


    // #5. set default nilai table
        
        // coming soon

    // #6 title page of admin crud sistem setting
    /*
        [
            ....
                "title" => [
                    "view" => "Customer", -> set for view page
                    "edit" => "Ubah Customer", -> set for edit page
                    "new" => "Tambahkan Customer" -> set for page create new data
                ],
            ....
        ]
    */
    
    // #6 commandAll digunakan untuk membuat command process for create all system
                // coming soon data setting like below
    /*
        [
            ....
               'command' => command("link_name", "table_name"),
               'commandAll' => true,
            ....
        ]
    */
    
    // #7 email setting confige page
        
        // coming soon
    
    

    // #8 table design automaticaly
        // coming soon


    // #9 selection icon with modal for font awesome

    // builder with database
    
$arr = [];

$arr[] = [
    'table' => 'type', 
    'data' => [ 
      'id' => ai(), 
      'name' => char(255), 
      'created_at' => timestamp(), 
      'updated_at' => timestampupdate(), 
    ], 
    'form' => [ 
      'id' => 'no', 
      'name' => 'text', 
      'created_at' => 'no', 
      'updated_at' => 'no', 
    ], 
    'name' => [ 
      'no', 
      'Nama Tipe', 
      'Dibuat Pada', 
      'Diupdate Pada', 
    ], 
    "title" => [
        "view" => "Type",
        "edit" => "Ubah Type",
        "new" => "Tambahkan Type"
    ],
    'command' => 'php gugus template type --crud type' 
];

$arr[] = [
    'table' => 'page', 
    'data' => [ 
        'id' => ai(), 
        'judul' => char(255), 
        'slug' => char(255), 
        'type' => char(255), 
        'position' => char(255), 
        'content' => textlong(), 
        'created_at' => timestamp(), 
        'updated_at' => timestampupdate(), 
        'tipe_doc' => char(255), 
    ], 
    'form' => [ 
        'id' => 'no', 
        'judul' => 'text', 
        'slug' => 'text',
        "type" => [ 
            "type" => "select",  // type digunakan untuk menentukan tipe form
            "data" => [                     // data merupakan setting dari selection 
                "db" => "type",         // db disini anda akan memilih data dari table mana yang ingin anda ambil
                "data" => "id",             // data merupakan setting untuk value yang akan digunakan pada option
                "name" => "name"   // name digunakan untuk tampilan dari option
            ]
        ],
        'position' => 'number', 
        'content' => 'no', 
        'created_at' => 'no', 
        'updated_at' => 'no', 
    ], 
    'name' => [ 
        'no', 
        'Judul', 
        'Slug', 
        'Type', 
        'Posisi', 
        'Content', 
        'Dibuat Pada', 
        'Diupdate Pada', 
    ], 
    "title" => [
        "view" => "Page",
        "edit" => "Ubah Page",
        "new" => "Tambahkan Page"
    ],
    "custome" => "[
            \"content\" => [
                \"key\" => ['id'],
                \"content\" => \"<a href='{{id}}' class='btn btn-primary'>Open Build</a>\"
            ]
    ]",
    'command' => 'php gugus template page --crud page' 
];

$arr[] = [
    'table' => 'meta', 
    'data' => [ 
      'id' => ai(), 
      'metaname' => char(255), 
      'created_at' => timestamp(), 
      'updated_at' => timestampupdate(), 
    ], 
    'form' => [ 
      'id' => 'no', 
      'metaname' => 'text', 
      'created_at' => 'no', 
      'updated_at' => 'no', 
    ], 
    'name' => [ 
      'no', 
      'nama meta', 
      'Dibuat Pada', 
      'Diupdate Pada', 
    ], 
    "title" => [
        "view" => "Meta",
        "edit" => "Ubah Meta",
        "new" => "Tambahkan Meta"
    ],
    'command' => 'php gugus template meta --crud meta' 
];

$arr[] = [
    'table' => 'artikels', 
    'data' => [ 
      'id' => ai(), 
      'judul' => char(255), 
      'created_at' => timestamp(), 
      'updated_at' => timestampupdate(), 
    ], 
    'form' => [ 
      'id' => 'no', 
      'judul' => 'text', 
      'created_at' => 'no', 
      'updated_at' => 'no', 
    ], 
    'name' => [ 
      'no', 
      'Judul', 
      'Dibuat Pada', 
      'Diupdate Pada', 
    ], 
    "title" => [
        "view" => "Artikel",
        "edit" => "Ubah Artikel",
        "new" => "Tambahkan Artikel"
    ],
    'command' => 'php gugus template artikel --crud artikels' 
];

$arr[] = [
    'table' => 'sosmed', 
    'data' => [ 
      'id' => ai(), 
      'judul' => char(255), 
      'link' => char(255), 
      'icon' => char(255), 
      'created_at' => timestamp(), 
      'updated_at' => timestampupdate(), 
    ], 
    'form' => [ 
      'id' => 'no', 
      'judul' => 'text', 
      'link' => 'text', 
      'icon' => 'text', 
      'created_at' => 'no', 
      'updated_at' => 'no', 
    ], 
    'name' => [ 
      'no', 
      'judul', 
      'link', 
      'icon', 
      'Dibuat Pada', 
      'Diupdate Pada', 
    ], 
    "title" => [
        "view" => "Sosmed",
        "edit" => "Ubah Sosmed",
        "new" => "Tambahkan Sosmed"
    ],
    'command' => 'php gugus template sosmed --crud sosmed' 
];


$arr[] = [
    'table' => 'slider', 
    'data' => [ 
      'id' => ai(), 
      'gambar' => char(255), 
      'created_at' => timestamp(), 
      'updated_at' => timestampupdate(), 
    ], 
    'form' => [ 
      'id' => 'no', 
      'gambar' => 'file', 
      'created_at' => 'no', 
      'updated_at' => 'no', 
    ], 
    'name' => [ 
      'no', 
      'gambar', 
      'Dibuat Pada', 
      'Diupdate Pada', 
    ], 
    "title" => [
        "view" => "slider",
        "edit" => "Ubah slider",
        "new" => "Tambahkan slider"
    ],
    'command' => 'php gugus template slider --crud slider' 
];

$arr[] = [
    'table' => 'slider', 
    'data' => [ 
      'id' => ai(), 
      'gambar' => char(255), 
      'created_at' => timestamp(), 
      'updated_at' => timestampupdate(), 
    ], 
    'form' => [ 
      'id' => 'no', 
      'gambar' => 'file', 
      'created_at' => 'no', 
      'updated_at' => 'no', 
    ], 
    'name' => [ 
      'no', 
      'gambar', 
      'Dibuat Pada', 
      'Diupdate Pada', 
    ], 
    "title" => [
        "view" => "slider",
        "edit" => "Ubah slider",
        "new" => "Tambahkan slider"
    ],
    'command' => 'php gugus template slider --crud slider' 
];
$arr[] = [
    'table' => 'peserta_uji', 
    'data' => [ 
      'id' => ai(), 
      'nama' => char(255), 
      'nik' => char(255),
      'skema' => char(), 
      'asesor' => char(), 
      'tanggal' => timestamp(),
      'status' => char()
    ], 
    'form' => [ 
        'id' => 'no',
        'nama' => 'name',
        'nik' => 'name',
        'skema' => [ 
                    "type" => "select / multiple",  // type digunakan untuk menentukan tipe form
                    "data" => [                     // data merupakan setting dari selection 
                    "db" => "skema",         // db disini anda akan memilih data dari table mana yang ingin anda ambil
                    "data" => "id",             // data merupakan setting untuk value yang akan digunakan pada option
                    "name" => "nama"   // name digunakan untuk tampilan dari option
                   ] 
                ],
        'asesor' => [ 
                        "type" => "select / multiple",  // type digunakan untuk menentukan tipe form
                        "data" => [                     // data merupakan setting dari selection 
                            "db" => "asesor",         // db disini anda akan memilih data dari table mana yang ingin anda ambil
                            "data" => "id",             // data merupakan setting untuk value yang akan digunakan pada option
                            "name" => "nama"   // name digunakan untuk tampilan dari option
                        ]
                   ],
        'tanggal' => timestamp(),

        'status' => "text",
    ],

    "name" =>[
        'id',
        'nama',
        'nik',
        'skema',
        'asesor',
        'tanggal',
        'status',
    ],
    "title" => [
        "view" => "peserta_uji",
        "edit" => "Ubah Data Peserta",
        "new" => "Tambahkan Peserta"
    ],
    'command' => 'php gugus template peserta_uji --crud peserta_uji' 
];
    $arr[] = [
        'table' => 'skema',
        'data' => [ 
                    'id' => ai(), 
                    'nama' => char(255), 
                    'jumlah' => no(),
                    'jenis' => char(),
                ],
        'form' => [
                    'id' => 'no',
                    'nama' => 'text',
                    'jumlah' => 'text',
                    'jenis' => 'text',
        ],

        'name' => [
            'id',
            'nama',
            'jumlah',
            'jenis'
        ],
        "title" => [
            "view" => "Skema",
            "edit" => "Ubah Data Skema",
            "new" => "Tambahkan Skema Baru"
        ],
        'command' => 'php gugus template skema --crud skema' 
    ];

    $arr[] = [
        'table' => 'tempat_uji',
        'data' => [
            'id' => ai(), 
            'nama' => char(255), 
            'alamat' => char(),
            'nohp' => no(),
        ],

        'form' => [
            'id' => 'no',
            'nama' => 'text',
            'alamat' => 'editor',
            'nohp' => 'text',
        ],
        'name' => [
            'id',
            'nama',
            'alamat',
            'nohp'
        ],
     "title" => [
            "view" => "Tempat Uji",
            "edit" => "Ubah Data Tempat Uji",
            "new" => "Tambahkan Tempat Baru"
        ],
        'command' => 'php gugus template tempat_uji --crud tempat_uji' 
    ];
    
$arr[] = [
    'table' => 'assesor', 
    'data' => [ 
      'id' => ai(), 
      'nama_assesor' => char(255), 
      'no_registrasi' => char(255), 
      'tanggal_expired' => char(255), 
      'bidang_keahlian' => char(255), 
      'created_at' => timestamp(), 
      'updated_at' => timestampupdate(), 
    ], 
    'form' => [ 
        'id' => 'no', 
        'nama_assesor' => 'text', 
        'no_registrasi' => 'text', 
        'tanggal_expired' => 'text', 
        'bidang_keahlian' => 'text', 
        'created_at' => timestamp(), 
        'updated_at' => timestampupdate(),
    ], 
    'name' => [ 
      'No', 
      'Nama Assesor', 
      'No Registrasi', 
      'Tanggal Expired', 
      'Bidang Keahlian', 
      'Dibuat Pada', 
      'Diupdate Pada', 
    ], 
    "title" => [
        "view" => "Asesor",
        "edit" => "Ubah Asesor",
        "new" => "Tambahkan Asesor"
    ],
    'command' => 'php gugus template assesor --crud assesor' 
];


// $arr[] = [ 
//   'table' => 'absensi', 
//   'data' => [ 
//       'id' => ai(), 
//       'pelatihan' => char(255), 
//       'user' => char(255), 
//       'user_id' => char(255), 
//       'foto' => char(255), 
//       'jam' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'pelatihan' => 'text', 
//       'user' => 'text', 
//       'user_id' => 'text', 
//       'foto' => 'text', 
//       'jam' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'pelatihan', 
//       'user', 
//       'user_id', 
//       'foto', 
//       'jam', 
//   ], 
//   "title" => [
//         "view" => "absensi",
//         "edit" => "Ubah absensi",
//         "new" => "Tambahkan absensi"
//     ],
//   'command' => 'php gugus template absensi --crud absensi' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'batas_pengerjaan', 
//   'data' => [ 
//       'id' => ai(), 
//       'soal_id' => char(255), 
//       'user' => char(255), 
//       'mulai' => char(255), 
//       'berakhir' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'soal_id' => 'text', 
//       'user' => 'text', 
//       'mulai' => 'text', 
//       'berakhir' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'soal_id', 
//       'user', 
//       'mulai', 
//       'berakhir', 
//   ], 
//   "title" => [
//         "view" => "batas_pengerjaan",
//         "edit" => "Ubah batas_pengerjaan",
//         "new" => "Tambahkan batas_pengerjaan"
//     ],
//   'command' => 'php gugus template batas_pengerjaan --crud batas_pengerjaan' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'data_pilihan_pemateri', 
//   'data' => [ 
//       'id' => ai(), 
//       'pemateri' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'pemateri' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'pemateri', 
//   ], 
//   "title" => [
//         "view" => "data_pilihan_pemateri",
//         "edit" => "Ubah data_pilihan_pemateri",
//         "new" => "Tambahkan data_pilihan_pemateri"
//     ],
//   'command' => 'php gugus template data_pilihan_pemateri --crud data_pilihan_pemateri' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'data_pilihan_soal', 
//   'data' => [ 
//       'id' => ai(), 
//       'pilihan_soal' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'pilihan_soal' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'pilihan_soal', 
//   ], 
//   "title" => [
//         "view" => "data_pilihan_soal",
//         "edit" => "Ubah data_pilihan_soal",
//         "new" => "Tambahkan data_pilihan_soal"
//     ],
//   'command' => 'php gugus template data_pilihan_soal --crud data_pilihan_soal' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'deskripsi', 
//   'data' => [ 
//       'id' => ai(), 
//       'judul' => char(255), 
//       'deskripsi' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'judul' => 'text', 
//       'deskripsi' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'judul', 
//       'deskripsi', 
//   ], 
//   "title" => [
//         "view" => "deskripsi",
//         "edit" => "Ubah deskripsi",
//         "new" => "Tambahkan deskripsi"
//     ],
//   'command' => 'php gugus template deskripsi --crud deskripsi' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'isi_soal', 
//   'data' => [ 
//       'id' => ai(), 
//       'no' => char(255), 
//       'soal_id' => char(255), 
//       'soal' => char(255), 
//       'a' => char(255), 
//       'b' => char(255), 
//       'c' => char(255), 
//       'd' => char(255), 
//       'jawaban' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'no' => 'text', 
//       'soal_id' => 'text', 
//       'soal' => 'text', 
//       'a' => 'text', 
//       'b' => 'text', 
//       'c' => 'text', 
//       'd' => 'text', 
//       'jawaban' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'no', 
//       'soal_id', 
//       'soal', 
//       'a', 
//       'b', 
//       'c', 
//       'd', 
//       'jawaban', 
//   ], 
//   "title" => [
//         "view" => "isi_soal",
//         "edit" => "Ubah isi_soal",
//         "new" => "Tambahkan isi_soal"
//     ],
//   'command' => 'php gugus template isi_soal --crud isi_soal' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'jawaban_soal', 
//   'data' => [ 
//       'id' => ai(), 
//       'user_id' => char(255), 
//       'user' => char(255), 
//       'soal_id' => char(255), 
//       'data_soal_id' => char(255), 
//       'soal' => char(255), 
//       'jawaban' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'user_id' => 'text', 
//       'user' => 'text', 
//       'soal_id' => 'text', 
//       'data_soal_id' => 'text', 
//       'soal' => 'text', 
//       'jawaban' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'user_id', 
//       'user', 
//       'soal_id', 
//       'data_soal_id', 
//       'soal', 
//       'jawaban', 
//   ], 
//   "title" => [
//         "view" => "jawaban_soal",
//         "edit" => "Ubah jawaban_soal",
//         "new" => "Tambahkan jawaban_soal"
//     ],
//   'command' => 'php gugus template jawaban_soal --crud jawaban_soal' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'kuisioner', 
//   'data' => [ 
//       'id' => ai(), 
//       'user_id' => char(255), 
//       'user' => char(255), 
//       'pemateri' => char(255), 
//       'poin1' => char(255), 
//       'poin2' => char(255), 
//       'poin3' => char(255), 
//       'poin4' => char(255), 
//       'poin5' => char(255), 
//       'poin6' => char(255), 
//       'poin7' => char(255), 
//       'poin8' => char(255), 
//       'poin9' => char(255), 
//       'poin10' => char(255), 
//       'poin11' => char(255), 
//       'poin12' => char(255), 
//       'poin13' => char(255), 
//       'poin14' => char(255), 
//       'poin15' => char(255), 
//       'poin16' => char(255), 
//       'poin17' => char(255), 
//       'saran' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'user_id' => 'text', 
//       'user' => 'text', 
//       'pemateri' => 'text', 
//       'poin1' => 'text', 
//       'poin2' => 'text', 
//       'poin3' => 'text', 
//       'poin4' => 'text', 
//       'poin5' => 'text', 
//       'poin6' => 'text', 
//       'poin7' => 'text', 
//       'poin8' => 'text', 
//       'poin9' => 'text', 
//       'poin10' => 'text', 
//       'poin11' => 'text', 
//       'poin12' => 'text', 
//       'poin13' => 'text', 
//       'poin14' => 'text', 
//       'poin15' => 'text', 
//       'poin16' => 'text', 
//       'poin17' => 'text', 
//       'saran' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'user_id', 
//       'user', 
//       'pemateri', 
//       'poin1', 
//       'poin2', 
//       'poin3', 
//       'poin4', 
//       'poin5', 
//       'poin6', 
//       'poin7', 
//       'poin8', 
//       'poin9', 
//       'poin10', 
//       'poin11', 
//       'poin12', 
//       'poin13', 
//       'poin14', 
//       'poin15', 
//       'poin16', 
//       'poin17', 
//       'saran', 
//   ], 
//   "title" => [
//         "view" => "kuisioner",
//         "edit" => "Ubah kuisioner",
//         "new" => "Tambahkan kuisioner"
//     ],
//   'command' => 'php gugus template kuisioner --crud kuisioner' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'login', 
//   'data' => [ 
//       'id' => ai(), 
//       'username' => char(255), 
//       'password' => char(255), 
//       'training' => char(255), 
//       'nama_lengkap' => char(255), 
//       'jenis_kelamin' => char(255), 
//       'status_hubungan' => char(255), 
//       'tempat_lahir' => char(255), 
//       'tanggal' => char(255), 
//       'bulan' => char(255), 
//       'tahun' => char(255), 
//       'no_ktp' => char(255), 
//       'alamat' => char(255), 
//       'nama_perusahaan' => char(255), 
//       'alamat_perusahaan' => char(255), 
//       'propinsi' => char(255), 
//       'sektor_industri' => char(255), 
//       'jabatan' => char(255), 
//       'no_telepon' => char(255), 
//       'no_fax' => char(255), 
//       'no_hp' => char(255), 
//       'email' => char(255), 
//       'sma' => char(255), 
//       'nama_sekolah_sma' => char(255), 
//       'jurusan_sma' => char(255), 
//       'tahun_lulus_sma' => char(255), 
//       'keterangan_sma' => char(255), 
//       'd3' => char(255), 
//       'nama_sekolah_d3' => char(255), 
//       'jurusan_d3' => char(255), 
//       'tahun_lulus_d3' => char(255), 
//       'keterangan_d3' => char(255), 
//       's1' => char(255), 
//       'nama_sekolah_s1' => char(255), 
//       'jurusan_s1' => char(255), 
//       'tahun_lulus_s1' => char(255), 
//       'keterangan_s1' => char(255), 
//       's2' => char(255), 
//       'nama_sekolah_s2' => char(255), 
//       'jurusan_s2' => char(255), 
//       'tahun_lulus_s2' => char(255), 
//       'keterangan_s2' => char(255), 
//       's3' => char(255), 
//       'nama_sekolah_s3' => char(255), 
//       'jurusan_s3' => char(255), 
//       'tahun_lulus_s3' => char(255), 
//       'keterangan_s3' => char(255), 
//       'pas_foto' => char(255), 
//       'foto_copy_ktp' => char(255), 
//       'foto_copy_ijazah' => char(255), 
//       'foto_copy_surat_ijin_perusahaan' => char(255), 
//       'surat_keterangan' => char(255), 
//       'sebagai' => char(255), 
//       'pjknk' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'username' => 'text', 
//       'password' => 'text', 
//       'training' => 'text', 
//       'nama_lengkap' => 'text', 
//       'jenis_kelamin' => 'text', 
//       'status_hubungan' => 'text', 
//       'tempat_lahir' => 'text', 
//       'tanggal' => 'text', 
//       'bulan' => 'text', 
//       'tahun' => 'text', 
//       'no_ktp' => 'text', 
//       'alamat' => 'text', 
//       'nama_perusahaan' => 'text', 
//       'alamat_perusahaan' => 'text', 
//       'propinsi' => 'text', 
//       'sektor_industri' => 'text', 
//       'jabatan' => 'text', 
//       'no_telepon' => 'text', 
//       'no_fax' => 'text', 
//       'no_hp' => 'text', 
//       'email' => 'text', 
//       'sma' => 'text', 
//       'nama_sekolah_sma' => 'text', 
//       'jurusan_sma' => 'text', 
//       'tahun_lulus_sma' => 'text', 
//       'keterangan_sma' => 'text', 
//       'd3' => 'text', 
//       'nama_sekolah_d3' => 'text', 
//       'jurusan_d3' => 'text', 
//       'tahun_lulus_d3' => 'text', 
//       'keterangan_d3' => 'text', 
//       's1' => 'text', 
//       'nama_sekolah_s1' => 'text', 
//       'jurusan_s1' => 'text', 
//       'tahun_lulus_s1' => 'text', 
//       'keterangan_s1' => 'text', 
//       's2' => 'text', 
//       'nama_sekolah_s2' => 'text', 
//       'jurusan_s2' => 'text', 
//       'tahun_lulus_s2' => 'text', 
//       'keterangan_s2' => 'text', 
//       's3' => 'text', 
//       'nama_sekolah_s3' => 'text', 
//       'jurusan_s3' => 'text', 
//       'tahun_lulus_s3' => 'text', 
//       'keterangan_s3' => 'text', 
//       'pas_foto' => 'text', 
//       'foto_copy_ktp' => 'text', 
//       'foto_copy_ijazah' => 'text', 
//       'foto_copy_surat_ijin_perusahaan' => 'text', 
//       'surat_keterangan' => 'text', 
//       'sebagai' => 'text', 
//       'pjknk' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'username', 
//       'password', 
//       'training', 
//       'nama_lengkap', 
//       'jenis_kelamin', 
//       'status_hubungan', 
//       'tempat_lahir', 
//       'tanggal', 
//       'bulan', 
//       'tahun', 
//       'no_ktp', 
//       'alamat', 
//       'nama_perusahaan', 
//       'alamat_perusahaan', 
//       'propinsi', 
//       'sektor_industri', 
//       'jabatan', 
//       'no_telepon', 
//       'no_fax', 
//       'no_hp', 
//       'email', 
//       'sma', 
//       'nama_sekolah_sma', 
//       'jurusan_sma', 
//       'tahun_lulus_sma', 
//       'keterangan_sma', 
//       'd3', 
//       'nama_sekolah_d3', 
//       'jurusan_d3', 
//       'tahun_lulus_d3', 
//       'keterangan_d3', 
//       's1', 
//       'nama_sekolah_s1', 
//       'jurusan_s1', 
//       'tahun_lulus_s1', 
//       'keterangan_s1', 
//       's2', 
//       'nama_sekolah_s2', 
//       'jurusan_s2', 
//       'tahun_lulus_s2', 
//       'keterangan_s2', 
//       's3', 
//       'nama_sekolah_s3', 
//       'jurusan_s3', 
//       'tahun_lulus_s3', 
//       'keterangan_s3', 
//       'pas_foto', 
//       'foto_copy_ktp', 
//       'foto_copy_ijazah', 
//       'foto_copy_surat_ijin_perusahaan', 
//       'surat_keterangan', 
//       'sebagai', 
//       'pjknk', 
//   ], 
//   "title" => [
//         "view" => "login",
//         "edit" => "Ubah login",
//         "new" => "Tambahkan login"
//     ],
//   'command' => 'php gugus template login --crud login' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'materi', 
//   'data' => [ 
//       'id' => ai(), 
//       'judul' => char(255), 
//       'materi' => char(255), 
//       'file' => char(255), 
//       'kondisi' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'judul' => 'text', 
//       'materi' => 'text', 
//       'file' => 'text', 
//       'kondisi' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'judul', 
//       'materi', 
//       'file', 
//       'kondisi', 
//   ], 
//   "title" => [
//         "view" => "materi",
//         "edit" => "Ubah materi",
//         "new" => "Tambahkan materi"
//     ],
//   'command' => 'php gugus template materi --crud materi' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'pertanyaan', 
//   'data' => [ 
//       'id' => ai(), 
//       'user' => char(255), 
//       'user_id' => char(255), 
//       'pertanyaan' => char(255), 
//       'jawaban' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'user' => 'text', 
//       'user_id' => 'text', 
//       'pertanyaan' => 'text', 
//       'jawaban' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'user', 
//       'user_id', 
//       'pertanyaan', 
//       'jawaban', 
//   ], 
//   "title" => [
//         "view" => "pertanyaan",
//         "edit" => "Ubah pertanyaan",
//         "new" => "Tambahkan pertanyaan"
//     ],
//   'command' => 'php gugus template pertanyaan --crud pertanyaan' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'pilihan_bulan', 
//   'data' => [ 
//       'id' => ai(), 
//       'bulan' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'bulan' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'bulan', 
//   ], 
//   "title" => [
//         "view" => "pilihan_bulan",
//         "edit" => "Ubah pilihan_bulan",
//         "new" => "Tambahkan pilihan_bulan"
//     ],
//   'command' => 'php gugus template pilihan_bulan --crud pilihan_bulan' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'pilihan_hari', 
//   'data' => [ 
//       'id' => ai(), 
//       'hari' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'hari' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'hari', 
//   ], 
//   "title" => [
//         "view" => "pilihan_hari",
//         "edit" => "Ubah pilihan_hari",
//         "new" => "Tambahkan pilihan_hari"
//     ],
//   'command' => 'php gugus template pilihan_hari --crud pilihan_hari' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'pilihan_jenis_kelamin', 
//   'data' => [ 
//       'id' => ai(), 
//       'jenis_kelamin' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'jenis_kelamin' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'jenis_kelamin', 
//   ], 
//   "title" => [
//         "view" => "pilihan_jenis_kelamin",
//         "edit" => "Ubah pilihan_jenis_kelamin",
//         "new" => "Tambahkan pilihan_jenis_kelamin"
//     ],
//   'command' => 'php gugus template pilihan_jenis_kelamin --crud pilihan_jenis_kelamin' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'pilihan_pjknk', 
//   'data' => [ 
//       'id' => ai(), 
//       'pjknk' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'pjknk' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'pjknk', 
//   ], 
//   "title" => [
//         "view" => "pilihan_pjknk",
//         "edit" => "Ubah pilihan_pjknk",
//         "new" => "Tambahkan pilihan_pjknk"
//     ],
//   'command' => 'php gugus template pilihan_pjknk --crud pilihan_pjknk' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'pilihan_sektor_industri', 
//   'data' => [ 
//       'id' => ai(), 
//       'sektor_industri' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'sektor_industri' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'sektor_industri', 
//   ], 
//   "title" => [
//         "view" => "pilihan_sektor_industri",
//         "edit" => "Ubah pilihan_sektor_industri",
//         "new" => "Tambahkan pilihan_sektor_industri"
//     ],
//   'command' => 'php gugus template pilihan_sektor_industri --crud pilihan_sektor_industri' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'pilihan_status_hubungan', 
//   'data' => [ 
//       'id' => ai(), 
//       'status_hubungan' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'status_hubungan' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'status_hubungan', 
//   ], 
//   "title" => [
//         "view" => "pilihan_status_hubungan",
//         "edit" => "Ubah pilihan_status_hubungan",
//         "new" => "Tambahkan pilihan_status_hubungan"
//     ],
//   'command' => 'php gugus template pilihan_status_hubungan --crud pilihan_status_hubungan' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'pilihan_training', 
//   'data' => [ 
//       'id' => ai(), 
//       'training' => char(255), 
//       'pjknk' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'training' => 'text', 
//       'pjknk' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'training', 
//       'pjknk', 
//   ], 
//   "title" => [
//         "view" => "pilihan_training",
//         "edit" => "Ubah pilihan_training",
//         "new" => "Tambahkan pilihan_training"
//     ],
//   'command' => 'php gugus template pilihan_training --crud pilihan_training' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'propinsi', 
//   'data' => [ 
//       'id' => ai(), 
//       'propinsi' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'propinsi' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'propinsi', 
//   ], 
//   "title" => [
//         "view" => "propinsi",
//         "edit" => "Ubah propinsi",
//         "new" => "Tambahkan propinsi"
//     ],
//   'command' => 'php gugus template propinsi --crud propinsi' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'soal', 
//   'data' => [ 
//       'id' => ai(), 
//       'nama_soal' => char(255), 
//       'jenis_soal' => char(255), 
//       'durasi' => char(255), 
//       'durasi_halaman' => char(255), 
//       'kondisi' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'nama_soal' => 'text', 
//       'jenis_soal' => 'text', 
//       'durasi' => 'text', 
//       'durasi_halaman' => 'text', 
//       'kondisi' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'nama_soal', 
//       'jenis_soal', 
//       'durasi', 
//       'durasi_halaman', 
//       'kondisi', 
//   ], 
//   "title" => [
//         "view" => "soal",
//         "edit" => "Ubah soal",
//         "new" => "Tambahkan soal"
//     ],
//   'command' => 'php gugus template soal --crud soal' 
// ]; 
 
// $arr[] = [ 
//   'table' => 'tanya_jawab', 
//   'data' => [ 
//       'id' => ai(), 
//       'tanggal' => char(255), 
//       'pertanyaan' => char(255), 
//       'jawaban' => char(255), 
//       'user_id' => char(255), 
//       'user' => char(255), 
//   ], 
//   'form' => [ 
//       'id' => 'no', 
//       'tanggal' => 'text', 
//       'pertanyaan' => 'text', 
//       'jawaban' => 'text', 
//       'user_id' => 'text', 
//       'user' => 'text', 
//   ], 
//   'name' => [ 
//       'no', 
//       'tanggal', 
//       'pertanyaan', 
//       'jawaban', 
//       'user_id', 
//       'user', 
//   ], 
//   "title" => [
//         "view" => "tanya_jawab",
//         "edit" => "Ubah tanya_jawab",
//         "new" => "Tambahkan tanya_jawab"
//     ],
//   'command' => 'php gugus template tanya_jawab --crud tanya_jawab' 
// ]; 

// $arr[] = [
//     'table' => 'halaman',
//     'data' => [
//                'id' => ai(),
//                'judul' => char(),
//                'deskripsi' => char(),    
//               ],
//     'form' => [
//                 'id' => 'no',
//                 'judul' => 'text',
//                 'deskripsi' => 'no'
//              ],
//    'name' => [
//                  'id',
//                  'judul',
//                  'deskripsi',
//              ],
//     'title' => [
//         'view' => 'Resource Halaman',
//         'edit' => 'Ubah Halaman',
//         'new' => 'create Halaman',
//     ],
//     "custome" => "[
//                     \"deskripsi\" => [
//                         'key' => ['id', 'judul'],
//                         'content' => \"<a href='http://localhost/lsp/{{judul}}'> {{judul}} </a>\"
//                     ],
//     ]",
//      "command" => 'php gugus template halaman --crud halaman',
     
// ];
 

    return $arr;
}
