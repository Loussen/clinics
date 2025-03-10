<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new'         => 'Yadda saxla və yeni element əlavə et',
    'save_action_save_and_edit'        => 'Yadda saxla və bu elementi düzəlt',
    'save_action_save_and_back'        => 'Yadda saxla və geri dön',
    'save_action_save_and_preview'     => 'Yadda saxla və önbaxış et',
    'save_action_changed_notification' => 'Yaddaşdan çıxdıqdan sonra standart davranış dəyişdirildi.',

    // Create form
    'add'                 => 'Əlavə et',
    'back_to_all'         => 'Ümumi listə qayıt ',
    'cancel'              => 'Ləğv et',
    'add_a_new'           => 'Yeni əlavə et ',

    // Edit form
    'edit'                 => 'Düzəlt',
    'save'                 => 'Yadda saxla',

    // Translatable models
    'edit_translations' => 'Tərcümə',
    'language'          => 'Dil',

    // CRUD table view
    'all'                       => 'Hamısı ',
    'in_the_database'           => 'məlumat bazasında',
    'list'                      => 'Siyahı',
    'reset'                     => 'Sıfırla',
    'actions'                   => 'Əməliyyatlar',
    'preview'                   => 'Önbaxış',
    'delete'                    => 'Sil',
    'admin'                     => 'İdarəçi',
    'details_row'               => 'Bu ətraflı sətirdir. Arzunuza uyğun dəyişdirin.',
    'details_row_loading_error' => 'Ətraflı məlumat yüklənməsində səhv oldu. Zəhmət olmasa, yenidən cəhd edin.',
    'clone'                     => 'Klonla',
    'clone_success'             => '<strong>Element klonlandı</strong><br>Yeni bir element əlavə olundu, bu elementdəki məlumatlarla eyni məlumatlarla.',
    'clone_failure'             => '<strong>Klonlama uğursuz oldu</strong><br>Yeni element yaradıla bilmədi. Zəhmət olmasa, yenidən cəhd edin.',

    // Confirmation messages and bubbles
    'delete_confirm'                              => 'Bu elementi silmək istədiyinizdən əminsiniz?',
    'delete_confirmation_title'                   => 'Element Silindi',
    'delete_confirmation_message'                 => 'Element uğurla silindi.',
    'delete_confirmation_not_title'               => 'Silinmədi',
    'delete_confirmation_not_message'             => 'Səhv baş verdi. Element silinməmiş ola bilər.',
    'delete_confirmation_not_deleted_title'       => 'Silinmədi',
    'delete_confirmation_not_deleted_message'     => 'Heç bir şey olmadı. Elementiniz təhlükəsizdir.',

    // Bulk actions
    'bulk_no_entries_selected_title'   => 'Heç bir element seçilmədi',
    'bulk_no_entries_selected_message' => 'Zəhmət olmasa, bir və ya daha çox elementi cəməriyyət əməliyyatı üçün seçin.',

    // Bulk delete
    'bulk_delete_are_you_sure'   => 'Bu :number elementi silmək istədiyinizdən əminsiniz?',
    'bulk_delete_sucess_title'   => 'Elementlər silindi',
    'bulk_delete_sucess_message' => ' element silindi',
    'bulk_delete_error_title'    => 'Silinmə uğursuz oldu',
    'bulk_delete_error_message'  => 'Bir və ya daha çox element silinə bilmədi',

    // Bulk clone
    'bulk_clone_are_you_sure'   => 'Bu :number elementi klonlaq istədiyinizdən əminsiniz?',
    'bulk_clone_sucess_title'   => 'Elementlər klonlandı',
    'bulk_clone_sucess_message' => ' element klonlandı.',
    'bulk_clone_error_title'    => 'Klonlama uğursuz oldu',
    'bulk_clone_error_message'  => 'Bir və ya daha çox element yaradıla bilmədi. Zəhmət olmasa, yenidən cəhd edin.',

    // Ajax errors
    'ajax_error_title' => 'Səhv',
    'ajax_error_text'  => 'Səhifə yüklənməsində səhv baş verdi. Zəhmət olmasa, səhifəni yeniləyin.',

    // DataTables translation
    'emptyTable'     => 'Cədvəldə məlumat yoxdur',
    'info'           => '_TOTAL_ elementdən _START_ ilə _END_ arasında göstərilir',
    'infoEmpty'      => 'Məlumat yoxdur',
    'infoFiltered'   => '(_MAX_ elementdən filtrelənmiş)',
    'infoPostFix'    => '.',
    'thousands'      => ',',
    'lengthMenu'     => 'Səhifə başına _MENU_ element',
    'loadingRecords' => 'Yüklənir...',
    'processing'     => 'İşlənir...',
    'search'         => 'Axtar',
    'zeroRecords'    => 'Uyğun element tapılmadı',
    'paginate'       => [
        'first'    => 'İlk',
        'last'     => 'Son',
        'next'     => 'Növbəti',
        'previous' => 'Əvvəlki',
    ],
    'aria' => [
        'sortAscending'  => ': sütunu artan sıralamaq üçün tıklayın',
        'sortDescending' => ': sütunu azalan sıralamaq üçün tıklayın',
    ],
   'export' => [
        'export'            => 'Export et',
        'copy'              => 'Kopyala',
        'excel'             => 'Excel',
        'csv'               => 'CSV',
        'pdf'               => 'PDF',
        'print'             => 'Pritn elə',
        'column_visibility' => 'Sütun görünürlüyü',
    ],

    // global crud - errors
    'unauthorized_access' => 'Yetkisiz giriş - bu səhifəni görmək üçün lazımi icazələrə malik deyilsiniz.',
    'please_fix'          => 'Zəhmət olmasa, aşağıdakı səhvləri düzəltin:',

    // global crud - success / error notification bubbles
    'insert_success' => 'Element uğurla əlavə edildi.',
    'update_success' => 'Element uğurla dəyişdirildi.',

    // CRUD reorder view
    'reorder'                      => 'Sırala',
    'reorder_text'                 => 'Sıralamaq üçün sürüşdürüb buraxın.',
    'reorder_success_title'        => 'Tamamlandı',
    'reorder_success_message'      => 'Sifarişiniz yadda saxlanıldı.',
    'reorder_error_title'          => 'Səhv',
    'reorder_error_message'        => 'Sifarişiniz yadda saxlanılmadı.',

    // CRUD yes/no
    'yes' => 'Bəli',
    'no'  => 'Xeyr',

    // CRUD filters navbar view
    'filters'        => 'Filtirlər',
    'toggle_filters' => 'Filtirləri aç / bağla',
    'remove_filters' => 'Filtirləri sil',
    'apply' => 'Tətbiq et',

    //filters language strings
    'today' => 'Bu gün',
    'yesterday' => 'Dünən',
    'last_7_days' => 'Son 7 gün',
    'last_30_days' => 'Son 30 gün',
    'this_month' => 'Bu ay',
    'last_month' => 'Keçən ay',
    'custom_range' => 'İstifadəçi təyinatı',
    'weekLabel' => 'H',

    // Fields
    'browse_uploads'            => 'Yükləmələrə göz at',
    'select_all'                => 'Hamısını seç',
    'select_files'              => 'Faylları seç',
    'select_file'               => 'Faylı seç',
    'clear'                     => 'Təmizlə',
    'page_link'                 => 'Səhifə keçidi',
    'page_link_placeholder'     => 'http://example.com/arzu-ettiyiniz-səhifə',
    'internal_link'             => 'Daxili keçid',
    'internal_link_placeholder' => 'Daxili keçid. Misal üçün \'admin/page\' (düzbağlar olmadan) \':url\' üçün',
    'external_link'             => 'Kənar keçid',
    'choose_file'               => 'Faylı seçin',
    'new_item'                  => 'Yeni Element',
    'select_entry'              => 'Bir element seçin',
    'select_entries'            => 'Elementləri seçin',
    'upload_multiple_files_selected' => 'Fayllar seçildi. Yaddaşa yazdırdıqdan sonra onlar yuxarıda göstəriləcəkdir.',

    //Table field
    'table_cant_add'    => 'Yeni :entity əlavə edilə bilmir',
    'table_max_reached' => 'Maksimum :max nömrəli',

    // google_map
    'google_map_locate' => 'Mənim yerimi tap',

    // File manager
    'file_manager' => 'Fayl İdarəçisi',

    // InlineCreateOperation
    'related_entry_created_success' => 'Əlaqəli element yaradıldı və seçildi.',
    'related_entry_created_error' => 'Əlaqəli element yaradıla bilmədi.',
    'inline_saving' => 'Yadda saxlanılır...',

    // returned when no translations found in select inputs
    'empty_translations' => '(boş)',

    // The pivot selector required validation message
    'pivot_selector_required_validation_message' => 'Pivot sahəsi tələb olunur.',
];

