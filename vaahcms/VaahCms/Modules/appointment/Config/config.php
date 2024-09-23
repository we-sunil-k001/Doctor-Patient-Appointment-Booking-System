<?php

return [
    "name"=> "appointment",
    "title"=> "appointment",
    "slug"=> "appointment",
    "thumbnail"=> "https://img.site/p/300/160",
    "is_dev" => env('MODULE_APPOINTMENT_ENV')?true:false,
    "excerpt"=> "Doctor-Patient-Appointment-Booking-System",
    "description"=> "Doctor-Patient-Appointment-Booking-System",
    "download_link"=> "",
    "author_name"=> "vaah",
    "author_website"=> "https://vaah.dev",
    "version"=> "0.0.1",
    "is_migratable"=> true,
    "is_sample_data_available"=> true,
    "db_table_prefix"=> "vh_appointment_",
    "providers"=> [
        "\\VaahCms\\Modules\\appointment\\Providers\\appointmentServiceProvider"
    ],
    "aside-menu-order"=> null
];
